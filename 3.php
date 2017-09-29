<?php

	$name = "John";

	function sprint() {
		
		global $name;
		//$name = "jame";
		//echo $name;
	}
	
	
	sprint();
	//echo $name;
	
	$name = "ssprint";
	
	// 传引用 &
	function ssprint(&$name) {
		
		
		$name = "898989";
		//echo $name;
		
		return array($name, $ages);
	}
	
	ssprint($name);
	
	echo $name;
	
	