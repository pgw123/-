<?php


	// 递归调用
	
	function sprint($num) {
	
		echo $num-- . "<br/>";
		//$num--;
		if ($num) {
			
			sprint($num);
		}
		
		echo $num . "<br/>";
	}
	
	sprint(5);