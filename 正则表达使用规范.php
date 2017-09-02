<?php 
	$str="php pap 333a\n 666 pcp";
	// preg_match_all("/php/", $str, $sbr);     //加all为验证所有的，$sbr为返回值
	// preg_match_all("/(php)|(is)/", $str, $sbr);     //竖线表示或者， 正则的意思是 匹配 php或者is字符串
	// preg_match_all("/\D/", $str, $sbr);    //查找所有非数字 ,能查找到空格
		// preg_match_all("/\w/", $str, $sbr);    //查找所有字符，包括字母数字下划线
		// preg_match_all("/[^0-9]/", $str, $sbr);   //取反相当于\D



	// preg_match_all("/\d*/",$str,$sbr); //*号代表匹配任意多个前面的字符， 包括0个
	// preg_match_all("/\d+/",$str,$sbr); //+号代表匹配任意多个前面的字符， 不包括0个
	// preg_match_all("/\d?/",$str,$sbr);  //？号代表匹配前面字符，可以有也可以没有
	// preg_match_all("/\d{3}/",$str,$sbr);  //{3}表示3个前面的字符
	// preg_match_all("/\d{3,7}/",$str,$sbr);  //{3,7}表示3到7个前面的字符
	// preg_match_all("/\d{3,}/",$str,$sbr);  //{3,}表示3个以上前面的字符
	// preg_match_all("/\b\d\b/",$str,$sbr);  //查找边界
	preg_match_all("/\w{3}/",$str,$sbr);  //m	执行多行匹配。
	echo "<pre>";
	print_r($sbr);
	echo "</pre>";
 ?>