<?php 
	// $arr = array(45,1,5,14,6,324,67,8,43,2,24,5,5,5,42);

	// sort($arr);  //将数组从小到大排序
	//rsort($arr);  //从大到小排序 
	


	$arr=array(
		1=>"user11",
		4=>"user2",
		6=>"user34",
		7=>"user115",
		2=>"user5",
		56=>"USER11111"
		);
	// ksort($arr); //按键来升序
	// krsort($arr); //按键来降序
	// natsort($arr);  //把值按自然树来排序，不过字母不一样时则会无效
	natcasesort($arr);   //按自然数，忽略大小写的升序
	echo "<pre>";
	print_r($arr);
	echo "</pre>";
	


	// $arr=array(
	// 	"use2"=>2,
	// 	"use1"=>4,
	// 	"use4"=>1,
	// 	"us5"=>6,
	// 	"us6"=>12,
	// 	);
	// // arsort($arr); //按值降序
	// // asort($arr); //按值生序
	
	// echo "<pre>";
	// print_r($arr);
	// echo "</pre>";
 ?>