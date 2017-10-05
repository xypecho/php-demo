<?php 
	$pdo=new PDO("mysql:host=localhost;dbname=test","root","123456");
	$username=$_POST['username'];
	$password=$_POST['password'];

	$sql="insert into user(username,password) values('{$username}','{$password}') ";
	$smt=$pdo->prepare($sql);
	if ($smt->execute()) {
		echo "<script>location.href='login.php'</script>";
	}
 ?>