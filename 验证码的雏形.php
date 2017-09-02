<?php 
	$arr1=range(0,9);
	$arr2=range(a,z);
	$arr3=range(A,Z);
	$arr4=array_merge($arr1,$arr2,$arr3); //把上面3个数组联合起来
	shuffle($arr4);  //打乱他们
	$arr5=array_slice($arr4,0,4);//随机截取4个字符

	// echo "<pre>";
	// print_r($arr5);
	// echo "</pre>";
	
	$str=implode($arr5," "); //用空格链接他们
	echo $str;
 ?>