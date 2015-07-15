<?php

namespace Home\IndexBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * 自定义基础控制器
 * 其他控制器都继承该控制器
 *
 * 作用: 实现一些公用的方法或进行一些统一的处理
 */
class BaseController extends Controller
{
	// 用户是否处于登录状态
	protected $isLogin = 2;

	protected $em;

	public function __construct(){
		$this->checkUser();
		// $this->getDoctrineManager();
	}

	// 初始化操作
	private function init(){
		
	}

	// 用户权限校验
	private function checkUser(){
		if (isset($_SESSION['userid'])) {
			$this->isLogin = 1;
		}
	}

	protected function getDoctrineManager(){
		$this->em = $this->getDoctrine()->getManager();
	}

}