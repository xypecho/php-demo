<?php 
	function show(){
		/*$i=10;
		$i=$i+10;
		echo $i."<br>";*/ //不加static静态属性则一直输出20

		static $i=10;
		$i=$i+10;
		echo $i."<br>";
	}
	show();
	show();
	show();
 ?>