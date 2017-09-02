<?php 
	$str="F:/wamp/www/public/demo.php";
	$pos=strrpos($str,"/");
	echo substr($str,$pos+1);
 ?>