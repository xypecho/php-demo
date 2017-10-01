<?php 
	function Deletefile($dir){
		$files1=scandir($dir);        //遍历“www”目录下的文件
		foreach ($files1 as $key => $value) {
			if ($key>1) {  //为了去除。  和。。
				$file1=$dir."/".$value;
				if (is_dir($file1)) {
					Deletefile($file1);       //不是文件后再次执行deletefile方法
				}else{
					unlink($file1);
				}
			}
		}
		rmdir($dir);        //删除空目录
	}
	


	function copyfile($dir1,$dir2){
		mkdir($dir2);
		$files=scandir($dir1);
		foreach ($files as $key => $value) {
			if ($key>1) {
				$file1=$dir1."/".$value;
				$file2=$dir2."/".$value;
				if (is_dir($file1)) {
					copyfile($file1,$file2);
				}else{
					copy($file1,$file2);
				}
			}
		}
	}
	copyfile("demo2","demo3");
	Deletefile("demo2");
 ?>