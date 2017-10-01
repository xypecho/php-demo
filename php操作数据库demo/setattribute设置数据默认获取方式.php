<?php 
	$pdo=new PDO("mysql:host=localhost;dbname=test","root","123456");
	$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
	$sql="select * from people"; 
	$smt=$pdo -> prepare($sql);  //把增加的sql语句预处理
	$smt -> execute();
	$rows=$smt->fetch();
	echo "<pre>";
	print_r($rows);
	echo "</pre>";
 ?>