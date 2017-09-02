<?php 
	echo $start=microtime()."<hr>"; //程序开始的时间
	for ($i=0; $i < 1000000; $i++) { 
		echo "$i";
	}
	echo "<hr>";
	echo $end=microtime(); //程序结束的时间
	echo "<hr>";
	echo $end-$start;
 ?>