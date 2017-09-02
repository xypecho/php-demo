<?php 
	// $arr=range(a,z);  //自动生成a-z的26个字母的数组
	$arr=range(1,100);
	shuffle($arr);  //随机打乱数组

	$arr3=array_slice($arr,0,3);

	echo "<pre>";
	print_r($arr3);    
	echo "</pre>";
 ?>