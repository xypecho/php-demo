<?php 
	$str="avc";
	// echo str_pad($str,10); //将字符串的长度增至10位数
	// echo str_pad($str,10,"-"); //后面可以加符号
	// echo str_pad($str,10,"-",STR_PAD_LEFT); //从左边开始补齐
	// echo str_pad($str,10,"-",STR_PAD_RIGHT); //从右边边开始补齐
	echo str_pad($str,10,"-",STR_PAD_BOTH); //从中间始补齐
 ?>