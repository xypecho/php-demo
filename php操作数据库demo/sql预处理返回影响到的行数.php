<?php 
	$pdo=new PDO("mysql:host=localhost;dbname=test","root","123456");
	$sql="update people set score=999 where id>3"; 
	$smt=$pdo -> prepare($sql);  //把增加的sql语句预处理
	if ($smt->execute()) {
		$tot=$smt -> rowCount();//获取影响到的行数
		echo "数据操作成功,成功增加{$tot}行";
	}else{
		echo "数据操作失败";
	}
	
 ?>