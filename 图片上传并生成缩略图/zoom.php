<?php 
	function imgzoom($src_file,$dst_w,$dst_h){
		$arr=getimagesize($src_file)[2];
		if ($arr==1) {
			$src_image=imagecreatefromgif($src_file);
		}elseif ($arr==2) {
			$src_image=imagecreatefromjpeg($src_file);//源图象连接资源。
		}elseif($arr==3){
			$src_image=imagecreatefrompng($src_file);
		}
		
		
		
		$dst_x=0;//目标x坐标
		$dst_y=0;//目标y坐标
		$src_x=0;
		$src_y=0;
		// $dst_w=300;
		// $dst_h =200;
		$src_w=imagesx($src_image);//原图片宽高
		$src_h =imagesy($src_image);

		$scal=($src_w/$dst_w)>($src_h/$dst_h)?($src_w/$dst_w):($src_h/$dst_h);//算出图片比例
		$dst_w=$src_w/$scal;
		$dst_h=$src_h/$scal;

		$dst_image=imagecreatetruecolor($dst_w, $dst_h);//创建画布放目标资源
		imagecopyresampled ($dst_image,$src_image ,$dst_x ,$dst_y ,$src_x , $src_y , $dst_w , $dst_h ,$src_w ,$src_h );
		$t_name="zoom_".basename($src_file);//获得文件名字，没有路径的那种
		$save_path=dirname($src_file);//获取文件路径，不包含文件名字
		$save_name=$save_path."/".$t_name;
		header("content-type:image/jpeg");
		if ($arr==1) {
			imagegif($dst_image,$save_name);  //自动保存缩略图在同路径下	
		}elseif ($arr==2) {
			imagejpeg($dst_image,$save_name);  //自动保存缩略图在同路径下	
		}elseif($arr==3){
			imagepng($dst_image,$save_name);  //自动保存缩略图在同路径下	
		}
		
	}
	
	

 ?>