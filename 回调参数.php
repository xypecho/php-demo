<?php 
	function show($i,$j,$s){
		return $s($i,$j);
	}
	function sum($a,$b){
		return $a+$b;
	}
	echo show(1,2,'sum');
 ?>