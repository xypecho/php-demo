<?php 
	include "config.php";
	$username=$_POST["username"];
	$score=$_POST["score"];
	$sql="insert into people(username,score) values('{$username}','{$score}')";
	$smt=$pdo->prepare($sql);
	if ($smt->execute()) {
		echo "<script>location.href='index.php'</script>";
	}
 ?>