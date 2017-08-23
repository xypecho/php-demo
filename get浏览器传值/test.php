<?php 
	echo "<pre>";
	print_r($_GET);       //传参方式为http://localhost/test.php?id=1&name=jack，专门用来接受地址栏参数
	echo "</pre>";			 //$_POST无法接受到浏览器传值
 ?>
