<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<script type="text/javascript" src="jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="bootstrap.js"></script>
	<style type="text/css">
		*{
			font-family: "微软雅黑";
		}
		.page-header{
			text-align: center;
		}
	</style>
</head>
<body>
	<div class="container">
		<h1 class="page-header">用户管理系统</h1>
		<form action="update.php" method="post">
			<div class="form-group">
			    <label for="">用户名：</label>
			    <input type="text" class="form-control" id="" name="username">
			</div>
			<div class="form-group">
			    <label for="">密码：</label>
			    <input type="text" class="form-control" id="" name="password">
			</div>

			<button class="btn btn-success" type="submit">确定注册</button>
		</form>	
	</div>
</body>
</html>