<?php 
	$str="2016-13-fd=13+113";//需求：将字符串分割成数字
	$ab=preg_split("/-|=|\+/",$str);
	echo "<pre>";
	print_r($ab);
	echo "</pre>";
 ?>