<?php


	// 根据输入的日期返回星期几
	// 20170929
	function week($date) {
	
		if ($date) {
			return date('N', strtotime($date));
		}
	}
	
	//$week = week('20171006');
	
	//echo $week;
	
	function month_date() {
		
		$total = date('t');
		
		return range(1, $total);
	}
	
	$month_dates = month_date();
	
	//print_r($month_dates);
	
	// 封装一个函数，获取任意某个月份的日期
	echo "<hr/>";
	
	function month($year, $month) {
		
		$format = "$year-$month";
		$days = date('t', strtotime($format));
		
		return $days;
	}
	
	//echo month(2017, 2);
	
	// 定义一个有默认值的参数
	function month2($year, $month = 1) {
		
		$format = "$year-$month";
		$days = date('t', strtotime($format));
		
		return $days;
	}
	//echo month(2017);
	
	//echo date();
	
	
	
	
	
	
	
	
	
	
	
	
	