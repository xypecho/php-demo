<?php 
	$arr=array("user1","user2","user3","user4","user5");
	shuffle($arr);  //随机打乱数组

	$arr3=array_slice($arr,0,3);

	echo "<pre>";
	print_r($arr3);     //随机出现值
	echo "</pre>";
 ?>