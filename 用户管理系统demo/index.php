<?php 
	include 'config.php';
	$length=3;
	$p=$_GET['p']?$_GET['p']:1;
	$page=($p-1)*$length;
	$next=$p+1;
	$prev=$p-1;
	$totsql="select count(*) from people";
	$smtdot=$pdo->prepare($totsql);
	$smtdot->execute();
	$tot=$smtdot->fetchColumn(); //获取数据总行数
	$pages=ceil($tot/$length);//获取页数
	
	if ($next>$pages) {
		$next=$pages;
	}
	if ($prev<1) {
		$prev=1;
	}


	$sql="select * from people limit {$page},{$length}";
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
		<a href="index.php?p=<?php echo $prev; ?>" class="btn btn-primary">上一页</a>
		<a href="index.php?p=<?php echo $next; ?>" class="btn btn-info">下一页</a>
	</div>
</body>
</html>