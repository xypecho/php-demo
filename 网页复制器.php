<?php 
	$url="http://www.jd.com";

	$str=file_get_contents($url);
	file_put_contents("baidu.html",$str);
	echo($str);
 ?>