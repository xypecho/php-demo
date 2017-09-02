<?php 
	$arr = array(1,3,5);
	// echo  array_pop($arr);   //输出数组的最后一个字符，会改变原来的数组
	// echo array_push($arr,51); //想数组的最后插入一个值，会改变原来的数组
	// echo array_shift($arr); //从数组最前面删除一个值，会改变原来的数组
	echo array_unshift($arr,666); //从数组最前面插入一个值，会改变原来的数组

	echo "<pre>";
	print_r($arr);
	echo "</pre>";




 ?>