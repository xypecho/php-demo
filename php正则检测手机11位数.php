<?php 
	$str="199999919999";
	if (preg_match("/^\d{11}$/",$str)) {
		echo "手机位数正确";
	}else{
		echo "手机格式不正确";
	}
 ?>