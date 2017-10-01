<?php 
	$pdo=new PDO("mysql:host=localhost;dbname=test","root","123456");
	$sql="insert into people(username,score) values('daidao',123)"; 
	$smt=$pdo -> prepare($sql);  //把增加的sql语句预处理
	if ($smt -> execute()) {
		$lastid=$pdo -> lastInsertId();
		echo "刚刚插入的数据id是{$lastid}";
	}

 ?>