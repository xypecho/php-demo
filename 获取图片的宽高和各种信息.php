<?php 
	// $img=imagecreatefromjpeg("dd.jpg");
	// echo imagesx($img); //获取图片的宽
	// echo imagesy($img); //获取图片的高
	

	$str="dd.jpg";
	$arr=getimagesize($str);
	echo "<pre>";
	print_r($arr);
	echo "</pre>";     //获取图片的宽高和类型
 ?>