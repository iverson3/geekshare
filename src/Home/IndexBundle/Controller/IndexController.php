<?php

namespace Home\IndexBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Doctrine\ORM\Tools\Pagination\Paginator;
use Doctrine\Common\Cache\RedisCache;
use Home\IndexBundle\Entity\Lang;
use Home\IndexBundle\Entity\Share;
use Home\IndexBundle\Form\Type\ShareType;
use Doctrine\Common\Util\Debug;

class IndexController extends BaseController
{
	private $pagesize = 2;

    private $data = array();

    public function __construct(){
        parent::__construct();
        $this->data['isLogin'] = $this->isLogin;
    }

	// 首页
    public function indexAction()
    {
        $this->getShareList('java', 1);
        return $this->render('HomeIndexBundle:Index:index.html.twig', $this->data);
    }

    // 极客分享列表
    public function sharelistAction($lang, $page)
    {
        $this->getShareList($lang, $page);
	    return $this->render('HomeIndexBundle:Index:index.html.twig', $this->data);
    }

    /**
     * 给模板分配需要的数据
     * @param  string  $lang 当前语言lang
     * @param  integer $page 当前页数
     * @return void      
     */
    private function getShareList($lang, $page){
        $em = $this->getDoctrine()->getManager();
        $langs = $this->getLangList();
        // 获取分享列表
        $dql = "SELECT s, u.username, u.id, u.isopen 
                FROM HomeIndexBundle:Share s 
                JOIN s.lang l 
                JOIN s.user u 
                WHERE l.code = :code 
                AND s.isown  = :isown 
                AND s.status = :status 
                ORDER BY s.sharetime DESC";
        // 计算查询结果的总数
        $countquery = $em->createQuery($dql)
                         ->setParameter('code', $lang)
                         ->setParameter('isown', 0)
                         ->setParameter('status', 1);
        $paginator = new Paginator($countquery, $fetchJoinCollection = true);
        $count = $this->getCount($paginator);
        // 查询当前页的部分数据
        $query = $em->createQuery($dql)
                    ->setParameter('code', $lang)
                    ->setParameter('isown', 0)
                    ->setParameter('status', 1)
                    ->setFirstResult(($page - 1) * $this->pagesize)
                    ->setMaxResults($this->pagesize);
        $sharelist = $query->getArrayResult();
        // 封装模板所需数据
        $this->data['langs']     = $langs;
        $this->data['sharelist'] = $sharelist;
        $this->data['count']     = $count;
        $this->data['nowlang']   = $lang;
        $this->data['nowpage']   = $page;
    }

    /**
     * 计算总页数
     * @param  object $paginator Paginator对象
     * @return integer           总页数
     */
    private function getCount($paginator){
        $count = count($paginator);
        if ( ($count % $this->pagesize) === 0 ) {
            $count = ($count / $this->pagesize);
        } else {
            $count = (int)($count / $this->pagesize) + 1;
        }
        return $count;
    }

    /**
     * 获取语言列表数据
     * @return resource 数据结果集
     */
    private function getLangList(){
        // $cacheDriver = $this->getCacheObj();
        // // 判断缓存中是否有langlist数据
        // if ($cacheDriver->contains('langlist')) {
        //     $langs = $cacheDriver->fetch('langlist');
        // } else {
        //     $langs = $this->getDoctrine()
        //                   ->getRepository('HomeIndexBundle:Lang')
        //                   ->findAll();
        //     $cacheDriver->save('langlist', $langs);
        // }

        $langs = $this->getDoctrine()
                      ->getRepository('HomeIndexBundle:Lang')
                      ->findAll();
        return $langs;
    }

    /**
     * 获取缓存驱动对象
     * @return object 缓存驱动对象
     */
    private function getCacheObj(){
        // 报错: 找不到Redis类
        $redis = new Redis();
        $redis->connect('127.0.0.1', 6379);
        $cacheDriver = new RedisCache();
        $cacheDriver->setRedis($redis);
        return $cacheDriver;
    }

    // 分享内容详情页
    public function sharedetailAction($shareid){
        $em = $this->getDoctrine()->getManager();
        $this->addHit($shareid);
        $res = $this->isNeedGetPoint($shareid);
        if ($res == "no") {
            $this->errortip();
        }
        $dql = "SELECT s, u.username, u.id, u.isopen 
                FROM HomeIndexBundle:Share s 
                JOIN s.user u 
                WHERE s.id = :shareid";
        $query = $em->createQuery($dql)
                    ->setParameter('shareid', $shareid);
        $share = $query->getArrayResult();
        $this->data['share'] = $share[0];
        return $this->render('HomeIndexBundle:Index:sharedetail.html.twig', $this->data);
    }

    /**
     * 对指定的分享增加hit次数
     * @param integer $shareid 分享ID
     */
    private function addHit($shareid){
        $qb = $this->getDoctrine()->getManager()->createQueryBuilder();
        $query = $qb->update('HomeIndexBundle:Share', 's')
                    ->set('s.hit', 's.hit + ?1')
                    ->where('s.id = ?2')
                    ->setParameter(1, 1)
                    ->setParameter(2, $shareid)
                    ->getQuery();
        $query->execute();
    }

    /**
     * 极客排名列表
     */
    public function geeklistAction(){
        $em = $this->getDoctrine()->getManager();
        $dql = "SELECT ui.pic, ui.motto, u.username, u.points, u.isopen, u.logintime, r.name
                FROM HomeUserBundle:Userinfo ui 
                JOIN ui.user u 
                JOIN u.role r 
                WHERE u.status = :status
                ORDER BY u.points DESC";
        $query = $em->createQuery($dql)
                    ->setParameter('status', 1);
        $geeklist = $query->getArrayResult();
        $this->data['geeklist'] = $geeklist;
        return $this->render('HomeIndexBundle:Index:geeklist.html.twig', $this->data);
    }

    /**
     * 判断是否需要对指定分享的分享者加积分 (获取额外的奖励积分)
     * 达到积分获取线则加相应数量的积分
     * 获取线: 分享的点击数
     */
    private function isNeedGetPoint($shareid){
        // 获取线: hit -> 100 500 1000 10000
        $em = $this->getDoctrine()->getEntityManager();
        $share = $em->getRepository('HomeIndexBundle:Share')
                    ->findOneBy(array('id' => $shareid));
        if (!$share) {
            return "no";
        }
        $userid = $share->getUser()->getId();
        $hit = $share->getHit();
        if ($hit == 10000) {
            $this->addPoints($userid, 100);
        } else if ($hit == 1000) {
            $this->addPoints($userid, 50);
        } else if ($hit == 500) {
            $this->addPoints($userid, 20);
        } else if ($hit == 100) {
            $this->addPoints($userid, 10);
        } else {} // < 100
    }

    /**
     * 为指定极客增加指定数量的积分
     * @param integer $userid 极客ID
     * @param integer $points 积分数量
     */
    private function addPoints($userid, $points){
        $qb = $this->getDoctrine()->getManager()->createQueryBuilder();
        $query = $qb->update('HomeUserBundle:User', 'u')
                    ->set('u.points', 'u.points + ?1')
                    ->where('u.id = ?2')
                    ->setParameter(1, $points)
                    ->setParameter(2, $userid)
                    ->getQuery();
        $query->execute();
    }

    // 极客资料
    public function geekinfoAction($userid){
        // 检验当前用户的 isopen字段
        // 防止通过手动修改url对极客信息进行访问
        $em = $this->getDoctrine()->getEntityManager();
        $user = $em->getRepository('HomeUserBundle:User')
                    ->findOneBy(array('id' => $userid));
        if (!$user) {
            $this->errortip();
        }
        $isopen = $user->getIsopen();
        if ($isopen !== 1) {
            $this->errortip();
        }

        $em = $this->getDoctrine()->getEntityManager();
        $dql = "SELECT ui, u.username, u.points 
                FROM HomeUserBundle:Userinfo ui 
                JOIN ui.user u 
                WHERE u.id = :userid";
        $query = $em->createQuery($dql)
                    ->setParameter('userid', $userid);
        $geek = $query->getArrayResult();
        $this->data['geek'] = $geek[0];
        return $this->render('HomeIndexBundle:Index:geekinfo.html.twig', $this->data);
    }

    /**
     * 非法操作提示
     */
    private function errortip(){
        echo "<script>alert('please dont do like this !!!'); window.history.go(-1);</script>";
        exit;
    } 

    /**
     * 进行分享的页面
     */
    public function shareAction(){
        $share = new Share();
        $form = $this->createForm(new ShareType(), $share);

        $form->handleRequest($this->getRequest());  // error
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $user = $em->getRepository('HomeUserBundle:User')->findOneBy(array('id' => isset($_SESSION['userid'])? $_SESSION['userid'] : 1));
            $lang = $em->getRepository('HomeIndexBundle:Lang')->findOneBy(array('id' => $_POST['share']['lang']));
            $share->setUser($user);
            $share->setLang($lang);
            $this->setStatus(1);
            $this->setHit(0);
            $this->setSharetime(time());

            $em->persist($share);
            $em->flush();
            return $this->render('HomeIndexBundle:Index:index.html.twig', $this->data);
        }
        $this->data['shareform'] = $form->createView();
        return $this->render('HomeIndexBundle:Index:share.html.twig', $this->data);
    }

    /**
     * 处理分享
     */
    public function doshareAction(){
        // 验证数据 然后插入数据库
        $em = $this->getDoctrine()->getManager();
        // 添加一条用户记录 (暂时还没插入数据库)
        $share = new Share();
        // $share->setTitle($_POST['title']);
        // $share->setUrl($_POST['url']);
        // $share->setReason($_POST['reason']);
        // 将新添加的数据持久化到数据库中
        $em->persist($share);
        $em->flush();

        var_dump($_POST);
        exit;
    }

}
