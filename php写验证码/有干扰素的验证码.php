<?php
	//1、创建画布资源
	$img=imagecreatetruecolor(400,400);
	//2、准备颜色
	$black=imagecolorallocate($img,0,0,0);
	$white=imagecolorallocate($img,255,255,255);
	$red=imagecolorallocate($img,255,0,0);
	$green=imagecolorallocate($img,0,255,0);
	$blue=imagecolorallocate($img,0,0,255);
	//3、填充画布
	imagefill($img,0,0,$black);
	//4、在画布上画画或写文字
	$b=array_merge(range(0,9),range("a","z"),range("A","Z"));
	shuffle($b);
	$str=join('',array_slice($b,0,4));
	imagettftext($img,20,0,0,50,$white,"msyhbd.ttf",$str);//输出文字，第一个数字代表fontsize，
for($i=0;$i<60;$i++){
	imagearc($img,mt_rand(0,150),mt_rand(0,50),mt_rand(0,150),mt_rand(0,50),mt_rand(0,360),mt_rand(0,360),$white);
}
	//5、输出图片或者保存图片
	header("content-type:image/png");
	
	imagepng($img);//这是直接浏览器显示
	// imagejpeg($img,"daid.jpeg");//直接在当前路径下输出文件
	//6、释放画布资源
	imagedestroy($img);
 ?>