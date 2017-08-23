<?php 
	$arr=array(
		"name"=>"username",
		"age"=>"24",
		"sex"=>"man",
		"hobbies"=>"football"
		);
	
	function getrand($arr){
		foreach ($arr as $key => $value) {
			$arr2[]=$value;
			$t++;
		}
		$index=mt_rand(0,$t-1);
		return $arr2[$index];
	}
	echo getrand($arr);
 ?>