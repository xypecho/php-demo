<?php 
	$str="     abc";
	echo strlen($str)."---".$str;
	echo "<br>";
	$str2=ltrim($str);    //去除左边的空格
	$str2=rtrim($str);    //去除右侧的空格
	$str2=trim($str);    //去除全部空格
	echo strlen($str2)."---".$str2;
 ?>