<?php 
	//1、创建画布资源
	$img=imagecreatetruecolor(400, 400);
	//2、准备颜色
	$black=imagecolorallocate($img,0,0,0);
	$white=imagecolorallocate($img,255,255,255);
	$red=imagecolorallocate($img,255,0,0);
	$green=imagecolorallocate($img,0,255,0);
	$blue=imagecolorallocate($img,0,0,255);
	//3、填充画布
	imagefill($img, 0, 0, $red);
	//4、在画布上画画或写文字
	//5、输出图片或者保存图片
	header("content-type:image/jpeg");
	// imagejpeg($img);//这是直接浏览器显示
	imagejpeg($img,"daid.jpeg");//直接在当前路径下输出文件
	//6、释放画布资源
	imagedestroy($img);
 ?>