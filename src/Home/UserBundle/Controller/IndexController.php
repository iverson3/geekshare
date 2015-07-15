<?php

namespace Home\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Home\IndexBundle\Controller\BaseController;
use Doctrine\Common\Util\Debug;

class IndexController extends BaseController
{
    public function indexAction()
    {
    	$langs = $this->getDoctrine()
    	              ->getRepository('HomeIndexBundle:Lang')
    	              ->findAll();
    	$arr = array('langlist' => $langs);
        return $this->render('HomeUserBundle:Index:index.html.twig', $arr);
    }

    /**
     * 用户中心
     */
    public function usersAction($userid){
    	$em = $this->getDoctrine()->getManager();
    	$dql = "SELECT ui.pic, ui.motto, u.username, u.points, u.logintime, r.name
    	        FROM HomeUserBundle:Userinfo ui 
    	        JOIN ui.user u 
    	        JOIN u.role r 
    	        WHERE u.status = :status
    	        AND u.id = :userid
    	        ORDER BY u.points DESC";
    	$query = $em->createQuery($dql)
    	            ->setParameter('status', 1)
    	            ->setParameter('userid', $userid);
    	$user = $query->getArrayResult();
    	echo "<pre>";
    	Debug::dump($user[0]);
    	echo "</pre>";
    	exit;
    }

    /**
     * 编辑用户资料信息
     */
    public function edituserAction($userid){
    	$em = $this->getDoctrine()->getManager();
    	$dql = "SELECT ui, u.username, u.isopen
    	        FROM HomeUserBundle:Userinfo ui 
    	        JOIN ui.user u 
    	        JOIN u.role r 
    	        WHERE u.status = :status
    	        AND u.id = :userid
    	        ORDER BY u.points DESC";
    	$query = $em->createQuery($dql)
    	            ->setParameter('status', 1)
    	            ->setParameter('userid', $userid);
    	$user = $query->getArrayResult();
    	echo "<pre>";
    	Debug::dump($user[0]); 
    	echo "</pre>";
    	exit;
    }

    /**
     * 保存用户编辑的内容
     */
    public function doedituserAction(){
    	// 验证数据 然后插入数据库
    	var_dump($_POST);
    	exit;
    }
}
