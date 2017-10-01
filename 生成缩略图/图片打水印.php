<?php 
	$dst_im =imagecreatefromjpeg("dd.jpg");//原图
	$src_im=imagecreatefrompng("water.png");//水印的图片
	$dst_x =0;
	$dst_y=0;
	$src_x=0;
	$src_y=0;
	$src_w =860;
	$src_h=1024;

	imagecopy ($dst_im,$src_im ,$dst_x ,$dst_y ,$src_x ,$src_y , $src_w ,$src_h );
	header("content-type:image/jpeg");
	imagejpeg($dst_im);
 ?>