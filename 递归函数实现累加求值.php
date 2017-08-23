<?php 
	$a=100;
	$b=0;
	function sum($a){
		global $b;  //升级为全局变量
		$b+=$a;

		if ($a>1) {
			sum($a-1);
		}
	}
	sum($a);
	echo $b;
 ?>