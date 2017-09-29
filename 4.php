<?php


	$a = 123;

	
	$b = $a;
	
	$b = 1234;
	
	echo $a;//123
	
	echo "<hr/>";
	
	
	$b = &$a;
	
	$b =7899000;
	
	echo $a;//
	
	