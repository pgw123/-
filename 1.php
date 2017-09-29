<?php

	$arr = array(1, 2, 3, 4, 5);
	
	
	for($i = 0; $i < 5; $i++) {
		
		echo $arr[$i];
	}
	
	
	echo "<hr/>";
	
	$arr = array(8, 9, 6, 5, 4);
	
	$sum = 0;
	for($i=0; $i < 5; $i++) {
		
		$sum +=$arr[$i];
	}
	
	echo "和为：" . $sum . "<br/>";
	
	echo "<hr/>";
	
	echo array_sum($arr);
	
	echo "<hr/>";
	
	$arr = range(65, 90);
	
	for($i = 0; $i <= 25; $i++) {
		
		echo chr($arr[$i]) . "<br/>";
	}
	
	echo "<hr/>";

	$arr = array('a', 'b', 'c');
	
	
	for($i = 0; $i < 3; $i++) {
		
		echo ord($arr[$i]) . "<br/>";
	}
	
	/*
		65-A
		69-E
		73-I
		79-O
		85-U
		97-a
		101-e
		105-i
		111 - o
		117-u
	*/
	
	// 
	$yunyin = array(65, 69, 73, 79, 85, 97, 101, 105, 111, 117);
	
	$str = 'abdasdfsafwetyjrcsxdarfwergwertgwetr';
	$length = strlen($str);
	//for($i=0; )
	
	
	
	