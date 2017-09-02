<?php 
	$str=array(
		"java is very much",
		"php is very much",
		"javascript is very much",
		"c is very much"
		);
	$ab=preg_grep("/java|php|javascript|c/",$str);
	echo "<pre>";
	print_r($ab);
	echo "</pre>";
 ?>