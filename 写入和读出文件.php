<?php 
	header("Content-type:text/html;charset=gb2312"); 
	$file="sa.txt";
	$sf=fopen($file,"a");
	fwrite($sf,"你们都是爱死比");
	fclose($sf);


	$sf=fopen($file,"r");
	echo fread($sf,filesize($file));
	fclose($sf);
 ?>