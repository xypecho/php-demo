<?php 
	$arr = array(1,3,4,1,3,5,1,6,3,7,3,7,3,1,5,7);
	foreach ($arr as $val) {
		$arr2[$val]++;
	}
	echo "<pre>";
	print_r($arr2);
	echo "</pre>";
 ?>