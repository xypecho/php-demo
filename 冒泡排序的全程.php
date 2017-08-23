<?php 
	$arr = array(100000,4,1,5,6,1123,6,12312,6,123,6,23,532,2,1,3);
	for ($i=0; $i <count($arr)-1; $i++) { 
		if ($arr[$i]>$arr[$i+1]) {
			$x=$arr[$i];
			$arr[$i]=$arr[$i+1];
			$arr[$i+1]=$x;
		}
	echo "<pre>";
	print_r($arr);
	echo "</pre>";
	}
 ?>