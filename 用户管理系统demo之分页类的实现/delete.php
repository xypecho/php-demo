<?php 
	include 'config.php';
	$id=$_GET["id"];
	$sql="delete from people where id={$id}";
	$smt=$pdo->prepare($sql);
	
	$rows=$smt->fetchAll();

	/*echo "数据删除成功";*/
	if ($smt->execute()) {
		echo "<script>location.href='index.php'</script>";
	}
 ?>