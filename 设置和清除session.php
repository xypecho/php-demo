<?php 
	session_start(); //开启session
	$_SESSION['username']="呆呆";
	$_SESSION['id']=666; //设置session

	$_SESSION=array();//清空session数组

	setcookie('PHPSESSID','',time()-1,'');//删除客户端的cookie文件
	
	session_destroy();//删除服务器上面的phpsessid对应的session文件	

	echo "<pre>";
	print_r($_SESSION);
	echo "</pre>";
 ?>