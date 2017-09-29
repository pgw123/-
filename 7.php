<?php


	$string = "  abcdef";
	
	echo substr($string, 0);
	
	echo "<hr/>";
	
	echo substr($string, -3); //
	echo "<hr/>";
	var_dump(substr($string, 8)); // 
	var_dump(substr($string, -8)); //

	