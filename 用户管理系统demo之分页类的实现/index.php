<?php 
	include 'config.php';
	include 'page.class.php';

	$sqlTot="select count(*) from people";
	$smtTot=$pdo->prepare($sqlTot);
	$smtTot->execute();
	$tot=$smtTot->fetchColumn(); //获取数据总行数

	$page=new Page($tot,3);

	$sql="select * from people limit {$page->offset},{$page->length}";
	$smt=$pdo->prepare($sql);
	$smt->execute();
	$rows=$smt->fetchAll();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<script type="text/javascript" src="jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="bootstrap.js"></script>
	<style type="text/css">
		table{
			text-align: center;
			margin-top: 20px;
		}
	</style>
</head>
<body>
	<div class="container">
		<h1 class="page-header">用户后台管理</h1>
		<a href="add.php" class="btn btn-success">新增用户</a>
		<a href="javascript:" class="btn btn-info" onclick="location.reload()">查看用户</a>
		<table class="table table-hover table-bordered">
			<tr>
				<td>ID</td>
				<td>用户名</td>
				<td>成绩</td>
				<td>编辑</td>
				<td>删除</td>
			</tr>
			<?php 
				foreach ($rows as $row) {
					echo "<tr>";
					echo "<td>{$row['id']}</td>";
					echo "<td>{$row['username']}</td>";
					echo "<td>{$row['score']}</td>";
					echo "<td><a href='edit.php?id={$row['id']}' class='btn btn-primary'>编辑</a></td>";
					echo "<td><a href='delete.php?id={$row['id']}' class='btn btn-danger'>删除</a></td>";
					echo "</tr>";
				}
			 ?>
		</table>
		<div>
			<?php 
				$page->show();
			 ?>
		</div>
	</div>
</body>
</html>