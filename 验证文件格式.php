<?php 
	$file="doc";
	$allow=array("jpg","png","gif");
	if(in_array($file,$allow)) {
		echo "上传成功";
	}else{
		echo "文件格式错误";
	}
 ?>