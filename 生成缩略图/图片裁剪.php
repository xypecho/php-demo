<?php 
	$src_image=imagecreatefromjpeg("dd.jpg");//源图象连接资源。
	$dst_image=imagecreatetruecolor(300, 200);//创建画布放目标资源
	$dst_x=0;//目标x坐标
	$dst_y=0;//目标y坐标
	$src_x=0;
	$src_y=0;
	$dst_w=300;
	$dst_h =200;
	$src_w=1220;       //图片裁剪其实就是减少原图的宽高
	$src_h =351;


	imagecopyresampled ($dst_image,$src_image ,$dst_x ,$dst_y ,$src_x , $src_y , $dst_w , $dst_h ,$src_w ,$src_h );

	header("content-type:image/jpeg");
	// imagejpeg($dst_image,"sb.jpeg");  //自动保存缩略图在同路径下
	imagejpeg($dst_image); 


 ?>