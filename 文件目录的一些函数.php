<?php 
	// $dir="dnf";
	// mkdir($dir);  创建文件夹
	// 
	

	// $dir="asd";
	// rmdir($dir);  //删除文件夹，只能删除空文件夹
	

	// $file="666.png";  需要复制的文件
	// $ffile="asd/".$file;  路径
	// copy($file,$ffile);  复制文件到指定文件夹
	

	// $file="666.png";  
	// $ffile="asd/".$file;  
	// copy($file,$ffile);  
	// unlink($file);       复制过去再删除实现剪切功能
	


	// $file="static";
	// $arr=scandir($file);
	// echo "<pre>";
	// print_r($arr);
	// echo "</pre>";  扫描文件放到数组里面
	


	$file="static";
	$arr=scandir($file);
	foreach ($arr as $key => $value) {
		echo $value."<br>";
	}
 ?>