<?php 
	$dir="imguploads";
	$od=opendir($dir);

	while ($sc=readdir($od)) {
		if ($sc!="." && $sc!="..") {
			echo $sc."<br>";
		}
	}
 ?>