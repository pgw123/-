<?php


	$week = date('N');
	
	switch($week) {
	
		case 1:
		case 2:
			echo "吃火锅";
			break;

		case 3:
		case 4:
		case 5:
			echo "吃土";
			break;
	
		default :
			echo "喝粥";
	}