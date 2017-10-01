<?php 
	$pdo=new PDO("mysql:host=localhost;dbname=test","root","123456");
	$sql="select count(*) from people"; 
	$smt=$pdo -> prepare($sql);  //把增加的sql语句预处理
	$smt -> execute();
	$rows=$smt -> fetchAll(PDO::FETCH_NUM);
	echo $rows[0][0];
 ?>