<?php 
	$pdo=new PDO("mysql:host=localhost;dbname=test","root","123456");
	$pdo=exec("set names uft8");//设置客户端字符集编码
	//$sql="insert into people(username,score) values('sbb',99)"; //增
	//$sql="delete from people where id>10";//删
	$sql="update people set score=100 where id=8";//改
	echo $pdo -> exec($sql); //修改的数据条数
 ?>