<?php 
	// $str="13398765677";
	// if (preg_match("/^136\d{8}$/",$str)) {       //以136开头的11位手机号
	// 	echo "手机位数正确";
	// }else{
	// 	echo "手机格式不正确";
	// }
	

	// $str="xypec11ho@qq.com";
	// if (preg_match("/^\w+@\w+\.\w+$/",$str)) {      //验证邮箱， \w+表示匹配多个字符
	// 	echo "邮箱格式正确";
	// }else{
	// 	echo "邮箱格式不正确";
	// }
	

	// $str="2017-8-30";
	// echo preg_replace("/\-/","/",$str);  //输出为2017/8/30   ，将“-”替换为“/”
	

	$str="2017-06+08";
	echo preg_replace("/^(\d+)\-(\d+)\+(\d+)$/","$1/$2=$3",$str);   //将字符串的-和+分别替换为/和=
 ?>