<?php 
	// define("HOST","localhost");
	// define("USER","root");
	// define("PASS","123");        //常量的定义

	// echo "my name is".HOST."!!!";     //常量的输出方式
	// var_dump(defined("HOST"));  //判断一个常量是否存在,需要加引号
	




	//预定义常量
	echo __LINE__;      //两个下划线，输出光标此刻的行数
	echo __File__."->".__LINE__;  //file指 文件所在的绝对路径，常量要用 . 连接
	echo "<br>";
	echo M_PI;     //圆周率
	echo "<br>";


	
	function show(){
		echo "my function is".__FUNCTION__."!!!";
	}
	show();
 ?>