<?php 
	function show(){
		$arr=func_get_args();
		echo "<pre>";
		print_r($arr);
		echo "</pre>";

		$num=func_num_args();
		echo $num;
	}
	show(1,2,3,4);
 ?>