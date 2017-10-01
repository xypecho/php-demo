<?php 
	// $file="sbs.txt";
	// echo  filetype($file); //判断文件类型
	//var_dump(file_exists($file));  //判断文件是否存在，只能找得同级路径
	//echo filesize($file); //获取文件大小
	//unlink($file);  //删除文件



	// $file="ms.ttf";			//被复制的文件
	// $copy_file="imguploads/ms.ttf";      //需要复制的文件路径及名字
	// copy($file,$copy_file);      //文件复制
	

	// $file="test.php";   被重命名的文件
	// $sfile="imguploads/test222.php"; 需要重命名的文件及路径
	// rename($file,$sfile);  文件重命名



	// header("Content-type:text/html;charset=gb2312"); 
	// $file="sbs.txt";
	// $sf=fopen($file,"a+");  //只读文件，
	// //'r' 只读方式打开，将文件指针指向文件头。  
	// // 'r+' 读写方式打开，将文件指针指向文件头。  
	// // 'w' 写入方式打开，将文件指针指向文件头并将文件大小截为零。如果文件不存在则尝试创建之。  
	// // 'w+' 读写方式打开，将文件指针指向文件头并将文件大小截为零。如果文件不存在则尝试创建之。  
	// // 'a' 写入方式打开，将文件指针指向文件末尾。如果文件不存在则尝试创建之。  
	// // 'a+' 读写方式打开，将文件指针指向文件末尾。如果文件不存在则尝试创建之。  
	// // echo fread($sf,filesize($file));       //前面参数是文件名字，后面是读取长度
	// fwrite($sf,"爱死比"); //编辑文件
	

	
	$file="sbs.txt";
	// readfile($file); //读取文件名字并输出
	// echo file_get_contents($file);
	file_put_contents($file,"你们都是爱死比",FILE_APPEND); //追加输出，不在第三个参数则默认覆盖输出
 ?>