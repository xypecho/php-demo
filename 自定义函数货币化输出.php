<?php 
	// $str="129898908034";
	// echo number_format($str); //货币化输出，即每3个数字加一个逗号
	// echo number_format($str,"0",".","-");  //用点代替默认的逗号
	

	// $str="1298989080134";
	// $str=strrev($str);
	// $arr=str_split($str,3); //每3个截断一次
	// // echo "<pre>";
	// // print_r($arr);
	// // echo "</pre>";
	// $arr2=join(",",$arr);
	// echo strrev($arr2);      //函数实现 货币化输出
	


	//自定义货币化输出函数
		$str="1298989080134";
	function hb($str,$var){
	$str=strrev($str);
	$arr=str_split($str,3); //每3个截断一次
	$arr2=join($var,$arr);
	return  strrev($arr2);      //函数实现 货币化输出
	}
	echo hb($str,"--");
 ?>  