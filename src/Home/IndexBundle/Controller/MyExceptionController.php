<?php

namespace Home\IndexBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Bundle\TwigBundle\Controller\ExceptionController;


/**
 * 自定义错误处理控制器
 */
class MyExceptionController extends ExceptionController
{
	public function showException(){
		echo "kkkkkk";
		exit;
	}

	public function findTemplate(){
		return $this->render('HomeIndexBundle:Index:shareform.html.twig');
	}
}