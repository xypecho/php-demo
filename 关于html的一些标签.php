<?php 
	// $str="aaaaaaaaa\nbbbbbbbbbbbb\ncccccccccccc\n";
	// echo nl2br($str);      //在字符串中的每个新行（\n）之前插入 HTML 换行符

	// $str="<h1>hello world</h1>";
	// echo   $str;
	// echo strip_tags($str);   //直接去除html里面的标签
	
	$str="<h1>hello world</h1>";
	echo $str;
	echo htmlspecialchars($str);  //可以直接将html标签输出