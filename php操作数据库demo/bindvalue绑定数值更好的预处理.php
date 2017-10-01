<?php 
	$pdo=new PDO("mysql:host=localhost;dbname=test","root","123456");
	$sql="select * from people where id>? and id<?"; 
	$smt=$pdo -> prepare($sql);  //把增加的sql语句预处理
	$smt -> bindvalue(1,2);
	$smt -> bindvalue(2,5);
	$smt -> execute();
	$rows=$smt -> fetchAll(PDO::FETCH_ASSOC);
	echo "<pre>";
	print_r($rows);
	echo "</pre>";
 ?>