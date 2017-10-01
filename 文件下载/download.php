<?php 
	$file=$_GET["file"];
	$file_name="image/".$file;
	header("content-type:application/octet-stream");
	header("content-disposition:attachment;filename=$file_name");

	readfile($file_name);
 ?>