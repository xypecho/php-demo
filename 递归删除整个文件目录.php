<?php 
	$dir="www";
	function Deletefile($dir){
		$files=scandir($dir);        //遍历“www”目录下的文件
		foreach ($files as $key => $value) {
			if ($key>1) {  //为了去除。  和。。
				$file=$dir."/".$value;
				if (is_dir($file)) {
					Deletefile($file);       //不是文件后再次执行deletefile方法
				}else{
					unlink($file);
				}
			}
		}
		rmdir($dir);        //删除空目录
	}
	Deletefile($dir);   //删除整个目录
 ?>