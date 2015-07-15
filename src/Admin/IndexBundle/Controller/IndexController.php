<?php

namespace Admin\IndexBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Home\IndexBundle\Entity\Lang;
use Home\IndexBundle\Entity\Share;

class IndexController extends Controller
{
	/**
	 * @Route("/admin")
	 */
    public function indexAction()
    {
    	$langs = $this->getDoctrine()
    	              ->getRepository('HomeIndexBundle:Lang')
    	              ->findAll();
    	$arr = array('langlist' => $langs);
        return $this->render('AdminIndexBundle:Index:index.html.twig', $arr);
    }




    /**
     * 分页列表 (使用第三方Bundle实现)
     * 
     * @Route("/sharelist/{lang}")
     */
    public function sharelistAction(Request $request, $lang){
        $em  = $this->getDoctrine()->getManager();
        $dql = "SELECT s.id, s.title, s.url, s.reason, s.sharetime, u.username, u.id uid, u.isopen 
                        FROM HomeIndexBundle:Share s 
                        JOIN s.lang l 
                        JOIN s.user u 
                        WHERE l.code = :code 
                        AND s.isown  = :isown 
                        AND s.status = :status 
                        ORDER BY s.sharetime DESC";
        $query = $em->createQuery($dql)
                    ->setParameter('code', $lang)
                    ->setParameter('isown', 0)
                    ->setParameter('status', 1);
        // 调用分页Bundle服务(knp_paginator)
        $paginator  = $this->get('knp_paginator');
        // 设置分页所需的参数
        $pagination = $paginator->paginate(
                            $query,                               // query语句
                            $request->query->getInt('page', 1),   // 获取请求url中的page参数的值(页数) [缺省值为 1]
                            $this->container->getParameter('rows_per_page')  // 每页显示的数量
                        );
        return $this->render('AdminIndexBundle:Index:sharelist.html.twig', array('pagination' => $pagination));
    }




    /**
     * 添加分享的表单
     * 
     * @Route("/shareform", name="admin_index_shareform")
     */
    public function shareformAction(){
        $langs = $this->getLangList();
        return $this->render('AdminIndexBundle:Index:shareform.html.twig', array('langs' => $langs));
    }

    /**
     * @Route("/do_shareform", name="admin_index_doshareform")
     */
    public function do_shareformAction(){
        // 验证数据 然后插入数据库
        $em = $this->getDoctrine()->getManager();
        $lang = $em->getRepository('HomeIndexBundle:Lang')
                    ->findOneBy(array('id' => $_POST['langid']));

        // 判断是极客分享/匿名分享
        if (isset($_SESSION['userid'])) {
            $user = $em->getRepository('HomeUserBundle:User')
                        ->findOneBy(array('id' => $_SESSION['userid']));
        } else {
            $user = $em->getRepository('HomeUserBundle:User')
                        ->findOneBy(array('id' => 1));
        }
        // 新增分享
        $share = new Share();
        $share->setTitle($_POST['title']);
        $share->setUrl($_POST['url']);
        $share->setReason($_POST['reason']);
        $share->setLabels($_POST['labels']);
        $share->setIsown($_POST['isown']);
        $share->setHit(0);
        $share->setStatus(1);
        $share->setSharetime(time());
        $share->setUser($user);
        $share->setLang($lang);
        // 将新添加的数据持久化到数据库中
        $em->persist($share);
        $em->flush();

        // 不知道下面两行代码 干嘛的
        // $this->get('session')->getFlashBag()->add('success', 'alert.share.add.success');
        // $this->get('session')->getFlashBag()->add('error', 'alert.share.add.error');

        return $this->redirect($this->generateUrl('home_index_index'));
    }

    /**
     * 获取语言列表数据
     * @return resource 数据结果集
     */
    private function getLangList(){
        $langs = $this->getDoctrine()
                      ->getRepository('HomeIndexBundle:Lang')
                      ->findAll();
        return $langs;
    }




    /**
     * 异步检查是否重复
     *
     * @Route("/ajaxcheck", name="admin_index_ajaxcheck")
     * @method("POST")
     */
    public function ajaxcheckrepeatAction(){
        $shareurl = $_POST['shareurl'];
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('HomeIndexBundle:Share')
                    ->findOneBy(array('url' => $shareurl));
        $has = 0;
        if ($user) {
            $has = 1;
        } 
        $res = array('res' => $has, 'data' => 'xxx');
        // 返回json格式数据 (用于ajax请求的响应)
        return new JsonResponse($res);
    }

}
