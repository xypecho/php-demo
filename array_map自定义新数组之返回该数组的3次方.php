<?php 
	$arr3=array(1,2,4,612,45,6,2,6,7,2,1,5,7,5,2,57,8,89,7,5,4,32,21,11,3,6);
	$arr2=array_map("cf", $arr3);
	function cf($val){
		return $val*$val*$val;
	}
	echo 	"<pre>";
	print_r($arr2);          
	echo 	"</pre>";
 ?>