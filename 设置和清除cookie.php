<?php 
	setcookie("username","薛友平",time()+10,""); //之前不能都输出不然报错，设置cookie，10的单位是秒
	setcookie("username","薛友平",time()-1,""); //删除cookie
	setcookie("username","薛友平",0,""); //会话后过期
	echo "<pre>";
	print_r($_COOKIE);
	echo "</pre>";
 ?>