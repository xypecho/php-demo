<?php
	session_start();
	$pdo=new PDO("mysql:host=localhost;dbname=test","root","123456");
	$username=$_POST['username'];
	$password=$_POST['password'];
	$sql="select username,password from user where username='{$username}' and password='{$password}' ";
	$smt=$pdo->prepare($sql);
	$smt->execute();
	$row=$smt->fetch();
	echo "<pre>";
	print_r($row);
	echo "</pre>";
	if ($row) {
		$_SESSION['username']=$username;
		$_SESSION['password']=$password;
		$_SESSION['user_id']=$row['id'];
		echo "<script>location.href='index.php'</script>";
	}else{
		echo "<script>alert('验证失败,请重新登录');location.href='login.php'</script>";
	}
 ?>