<?php 
	$url="http://news.baidu.com/";

	$str=file_get_contents($url);

	preg_match("/<title>(.+)<\/title>/i",$str,$ms); //采集网站标题
	// echo "<pre>";
	// print_r($ms);
	// echo "</pre>";
	echo "{$ms[1]}";

 ?>