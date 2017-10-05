<?php 
	include 'config.php';
	$id=$_POST['id'];
	$username=$_POST['username'];
	$score=$_POST['score'];
	$sql="update people set username='{$username}',score='{$score}' where id='{$id}'";
	$smt=$pdo->prepare($sql);
	echo $id;
	if ($smt->execute()) {
		echo "<script>location.href='index.php'</script>";
	}else{
		echo "编辑失败";

	}
 ?>