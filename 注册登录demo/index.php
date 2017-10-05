<?php 
	session_start();
	echo "<pre>";
	print_r($_SESSION);
	echo "</pre>";

	if (!$_SESSION['username']) {
		echo "<script>location.href='login.php'</script>";
		exit();
	}
 ?>
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
		<div class="container">
			<div class="page-header">欢迎回来 <?php echo $_SESSION['username']; ?></div>
			<a href="out.php" class="btn btn-primary">退出系统</a>
		</div>
</body>
</html>