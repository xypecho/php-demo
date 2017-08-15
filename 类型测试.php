<?php 
	$a="10";
	//var_dump(is_array($a));     //判断是否是数组
	//var_dump(is_double($a));
	

	//整形转字符串
	 $b=$a."hello";         //  $a 后面加 . 既可以自动转为字符串
	var_dump(is_string($b));


	//字符串转整形
	$c=$a+0;
	var_dump(is_int($c));  //直接加数字就可以变成整形，包括0

	$d="10.3asb";
	$e=$d+10;
	var_dump(is_float($e));     //自动变成浮点类型


	//面试题目
	$a1="1+2";
	$b1=$a1+10;
	echo "$b1";     //结果是11，$a1相当于是字符串

	
 ?>