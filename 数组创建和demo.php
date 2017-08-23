<?php 
	$arr[0]='a';
	$arr[1]='123';
	$arr[]='qw1';
	$arr[10]="23123";
	$arr[]='13das';     //该数组下标为11


	
	$arr=array(
		"name"=>"jack",
		"age"=>"18"
		)	//数组的第二种定义方式
	echo "<pre>";
	print_r($arr);
	echo "</pre>";         //创建数组，可以不提前定义，不写下标也可以。会自动补全下标
 ?>