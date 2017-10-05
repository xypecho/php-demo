<?php 
	include 'config.php';
	$id=$_GET["id"];
	$sql="select * from people where id=$id";
	$smt=$pdo->prepare($sql);
	$smt->execute();
	$rows=$smt->fetch();
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
		form{
			margin-top: 20px;
		}
	</style>
</head>
<body>
	<div class="container">
		<h1 class="page-header">用户后台管理----编辑用户</h1>
		<!-- <a href="add.php" class="btn btn-success">新增用户</a> -->
		<a href="index.php" class="btn btn-info">查看用户</a>
		<form action="update.php?id" method="post">
			<div class="form-group">
			    <label for="">用户名</label>
			    <input type="text" class="form-control" name="username" value='<?php echo $rows['username']; ?>' >

			</div>
			<div class="form-group">
			    <label for="">成绩</label>
			    <input type="text" class="form-control" name="score" value='<?php echo $rows['score']; ?>'>
			</div>
			<input type="hidden" name="id" value="<?php echo $id; ?>">
			<div class="form-group">
			    <button type="submit" class="btn btn-primary">提交</button>
			    <button type="reset" class="btn btn-danger">重置</button>
			</div>
		</form>
	</div>
</body>
</html>