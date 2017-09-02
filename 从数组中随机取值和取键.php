<?php 
	$arr=array("user1","user2","user3","user4","user5");
	$index=array_rand($arr);       //随机出现数组的键
	// echo $index;
	echo "<pre>";
	print_r($arr[$index]);     //随机出现值
	echo "</pre>";
 ?>