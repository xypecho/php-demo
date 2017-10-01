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
	for ($i=0; $i < 100 ; $i++) { 
		imageline($img, mt_rand(0,400), mt_rand(0,400), 400, 400, $white);
	}
	//5、输出图片或者保存图片
	header("content-type:image/jpeg");
	imagejpeg($img);//这是直接浏览器显示
	// imagejpeg($img,"daid.jpeg");//直接在当前路径下输出文件
	//6、释放画布资源
	imagedestroy($img);
 ?>