<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<script type="text/javascript">
		 a=10;
		function show(){
				a++;
		}
		show();
		alert(a);
	</script>
	<?php 
		$b=10;
		function showa(){
			global $b;	//加上这句即输出11，加上后为全局变量，不加则是局部变量
			$b++;
		}
		showa();
		echo "$b";
	 ?>
</body>
</html>