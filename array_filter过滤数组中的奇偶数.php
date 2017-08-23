<?php 
	// $arr = array(1,2,3,4,5,6,7,8,9,10,11,12);
	// $arr2=array_filter($arr,"even");
	// function even($val){
	// 	return $val%2==0;
	// }
	// echo "<pre>";
	// print_r($arr2);
	// echo "</pre>";  //过滤数组中的奇数数值
	


	$arr = array(1,2,3,4,5,6,7,8,9,10,11,12);
	$arr2=array_filter($arr,"odd");
	function odd($val){
		return $val%2==1;
	}
	echo "<pre>";
	print_r($arr2);
	echo "</pre>";     //过滤数组中的偶数数值
 ?>