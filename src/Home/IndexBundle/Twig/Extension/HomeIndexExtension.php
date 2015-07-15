<?php

namespace Home\IndexBundle\Twig\Extension;

/**
 * HomeIndexExtension 自定义Twig模板过滤器
 * 定义一个类继承自 Twig_Extension 。要创建自定义过滤器，只需要覆盖 getFilters() 方法即可。
 * 如果要创建自定义方法，则覆盖 getFunctions() 方法
 */
class HomeIndexExtension extends \Twig_Extension
{
	/**
	 * @return array
	 */
	public function getFilters()
	{
		return array(
			'created_ago' => new \Twig_Filter_Method($this, 'createdAgo'),
		);
	}

	/**
	 * @param string $data
	 * @return string
	 */
	public function createdAgo($data)
	{
		// 模板中使用方式:
		// {{ share[0].sharetime|date('Y-m-d H:i:s')|created_ago }}
		// 解释: 先将int型的时间戳变量sharetime借助于系统模板过滤器date转为标准时间格式 再使用自定义的模板过滤器created_ago进行二次转换 得到最终期待的时间显示样式
		
		$dateTime = new \DateTime($data);
		$delta = time() - $dateTime->getTimestamp();
		if ($delta < 0) {
			throw new \InvalidArgumentException("createdAgo is unable to handle dates in the future");
		}
		$duration = "";
		if ($delta < 60) {
			// Seconds
			$time = $delta;
			$duration = $time . " 秒" . "前";
		} else if ($delta <= 3600) {
			// Mins
			$time = floor($delta / 60);
			$duration = $time . " 分钟" . "前";
		} else if ($delta <= 86400) {
			// Hours
			$time = floor($delta / 3600);
			$duration = $time . " 小时" . "前";
		} else if ($delta <= 2592000) {
			// Days
			$time = floor($delta / 86400);
			$duration = $time . " 天" . "前";
		} else if ($delta <= 31104000) {
			// Monthes
			$time = floor($delta / 2592000);
			$duration = $time . " 月" . "前";
		} else {
			// Years
			$time = floor($delta / 31104000);
			$duration = $time . " 年" . "前";
		}
		return $duration;
	}

	/**
	 * @return string
	 */
	public function getName()
	{
		return 'home_index_extension';
	}

}