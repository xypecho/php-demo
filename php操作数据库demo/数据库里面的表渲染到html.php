<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<script type="text/javascript" src="jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="bootstrap.js"></script>
</head>
<body>
	<table class="table table-hover table-bordered">
	 	<tr>
	 		<td>ID</td>
	 		<td>姓名</td>
	 		<td>成绩</td>
	 	</tr>
	 	<?php 
	 		$pdo=new PDO("mysql:host=localhost;dbname=test","root","123456");
	 		$sql="select * from people";
	 		$smt=$pdo -> query($sql);
	 		$rows=$smt -> fetchAll(PDO::FETCH_ASSOC);//返回关联数组
	 		foreach ($rows as $row) {
	 			echo "<tr>";
	 			echo "<td>{$row['id']}</td>";
	 			echo "<td>{$row['username']}</td>";
	 			echo "<td>{$row['score']}</td>";
	 			echo "</tr>";
	 		}

	 	 ?>
	</table>
</body>
</html>