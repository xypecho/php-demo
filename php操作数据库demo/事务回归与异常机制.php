<?php 
	$pdo=new PDO("mysql:host=localhost;dbname=test","root","123456");
	$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$pdo->beginTransaction();//开启事务
	try {
		$sql="delete from people where id=3";
		$smt=$pdo->prepare($sql);
		$smt->execute();

		$sql="delete from people wher1e id=4";
		$smt=$pdo->prepare($sql);
		$smt->execute();

		$pdo->commit();//事务提交
	} catch (PDOException $e) {
		echo $e->getMessage(); //获取报错信息
		echo "<br>";
		echo $e->getLine();//获取出错的位置
		echo "<br>";
		echo $e->getFile();//获取出错的文件
		$pdo->rollBack();//事务回滚,事务回滚即有一条sql语句报错则所有的sql语句都不执行

	}
	
 ?>