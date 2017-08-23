<?php 
	$i=10;
	function show(&$i){
		$i++;
	}
	show($i);
	echo $i;
 ?>