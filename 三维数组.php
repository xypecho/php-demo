<?php 
	$arr=array(1,2,array(1,2,array("a","b")));
	echo "<pre>";
	print_r($arr);
	echo "</pre>";
	echo $arr[0][2][0];
 ?>