<?php 
	// $arr = array(1,3,5);
	// $arr1=array(2,4,6);
	// // $arr2=array_slice($arr,0,2);      //从第0个开始截取，截2个
	// // $arr2=array_slice($arr,2);      //去除最前面的两个
	// // $arr2=array_slice($arr,0,2);      //从第0个开始截取，截2个，会改变原来的数组
	// // $arr2=array_combine($arr, $arr1);   //将两个数组合并，第一个数组变成键，第二个变成值
	// // $arr2=array_merge($arr,$arr1);     //将值直接合并
	// // echo "<pre>";
	// // print_r($arr2);
	// // echo "</pre>";
	

	// $arr2=implode($arr,"--");      //用 --  链接数组里面的值
	// echo $arr2;
 
	
	$ar="2016-8-25";
	$arr=explode("-",$ar);      //将字符串拆成数组
	echo "<pre>";
	print_r($arr);
	echo "</pre>";




 ?>