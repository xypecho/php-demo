<?php 
	$arr = array(
		"aaaa",
		"bbbbbbbbbbbbb",
		"c",
		"vvvvvvv",
		"ddddddddddddddddd"
	);

	foreach ($arr as $key => $val) {
		$arr2[strlen($val)]=$val;
	}

	ksort($arr2);
	$arr=$arr2;

	echo "<pre>";
	print_r($arr);
	echo "</pre>";
 ?>