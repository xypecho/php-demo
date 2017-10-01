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
	imagefill($img, 0, 0, $black);
	//4、在画布上画画或写文字
	// imagefilledellipse($img, 200, 200, 300, 300, $blue);  //输出圆形，前两个数字是坐标，后两个数字分别是宽和高
	// imageline($img, 0, 0, 400, 400, $white);//画一条对角线
	// imagerectangle($img, 10, 10, 200, 200, $green);//画矩形
	//imagesetpixel($img, mt_rand(0,400),mt_rand(0,400), $white);  //画一个像素
	// $arr=array(
	// 			20,10,
	// 			100,150,
	// 			250,250
	// 	);
	// imagepolygon($img,$arr,3,$white);  //画多边形之三角形
	// imagearc($img,0, 0, 100,100, 0, 90, $red); //画弧线
	//imagefilledarc($img,0, 0, 200,200, 0, 90, $red,IMG_ARC_PIE);  //画扇形
		// imagestring($img,5,0,0,"hello world",$white);//在图上写字符串
	imagettftext($img,20,0,0,80,$white,"msyh.ttf","呆呆");//输出文字，第一个数字代表fontsize，
	//5、输出图片或者保存图片
	header("content-type:image/jpeg");
	imagejpeg($img);//这是直接浏览器显示
	// imagejpeg($img,"daid.jpeg");//直接在当前路径下输出文件
	//6、释放画布资源
	imagedestroy($img);
 ?>