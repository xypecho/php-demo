<?php 
	$arr=array(
		"name"=>"username",
		"age"=>"24",
		"sex"=>"man"
		);
	foreach ($arr as $key => $value) {
		$arr2[]=$key;
	};
	echo "<pre>";
	print_r($arr2);
	echo "</pre>";
 ?>