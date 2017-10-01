
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<style type="text/css">
		img{
			cursor: pointer;
		}
	</style>
</head>
<body>
	<form action="check.php" method="post">
		<p>用户名：</p>
		<input type="text" name="username">
		<p>密码：</p>
		<input type="password" name="password">
		<p>验证码</p>
		<img src="test.php" onclick="this.src='test.php?rand='+Math.random()">
		<input type="text" name="vercode">
		<p></p>
		<button type="submit">提交</button>
	</form>
</body>
</html>
