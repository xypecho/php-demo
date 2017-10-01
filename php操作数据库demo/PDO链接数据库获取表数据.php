<?php 
	$pdo=new PDO("mysql:host=localhost;dbname=test","root","123456");
	$sql="select * from wxzj_com_log";
	$smt=$pdo -> query($sql);
	$rows=$smt -> fetchAll(PDO::FETCH_ASSOC);//返回关联数组
	$rows=$smt -> fetchAll(PDO::FETCH_NUM);//返回索引数组
	$rows=$smt -> fetchAll(PDO::FETCH_BOTH);//返回混合数组
	$rows=$smt -> fetchAll(PDO::FETCH_OBJ);//返回对象


	echo "<pre>";
	print_r($rows);
	echo "</pre>";
 ?>