<?php 
	session_start(); //开启session


	$_SESSION=array();//清空session数组

	setcookie('PHPSESSID','',time()-1,'');//删除客户端的cookie文件
	
	session_destroy();//删除服务器上面的phpsessid对应的session文件	

	echo "<script>location.href='login.php'</script>";
 ?>