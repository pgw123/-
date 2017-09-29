<?php

	$string = "<p>sadfs<b style='color: red;'>a</b>f<br/>aasdfs<br/>afsadfas</p>";
	
	
	echo $string;
	
	echo "<hr/>";
	
	echo strip_tags($string);
	echo "<hr/>";
	// 去出单标签，不能带有关闭符号 /
	echo strip_tags($string, '<br>');
	echo strip_tags($string, '<br>');