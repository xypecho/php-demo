<?php 
	// $i=0;
	// function show(){
	// 	global $i;
	// 	return ++$i;
	// }
	// $i=100;
	// echo show();
	// echo "<br>";
	// echo show();
	

	function show(){
		static $i; //静态变量，不受外部影响
		return ++$i;
	}
	$i=100;
	echo show();
	echo "<br>";
	echo show();
 ?>