<?php 
	$str="0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
	$str1=str_shuffle($str);
	echo substr($str1,0,4);
 ?>