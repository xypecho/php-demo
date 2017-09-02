<?php 
	// $info=addslashes($_POST["info"]); //自动给‘’ 单引号前面加转义符，防止插入数据库失败
	$info=addslashes(htmlspecialchars(($_POST["info"]))); // 安全的数据库插入，防止写html标签
	$pdo=new PDO("mysql:host=localhost;dbname=test","root","123456");
	$pdo->exec("set names utf8");

	$sql="insert into mess(info) values('{$info}')";
	echo $sql;
	if ($pdo->exec($sql)) {
		echo "留言成功";
	}else {
		echo "留言失败";
	}
 ?>