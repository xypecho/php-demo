<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<?php
		for ($i=1; $i <10; $i++) { 
			if ($i%2==0) {
				echo "<h3 style='color:red'>$i</h3>";
			}else{
				echo "<h3 >$i</h3>";
			}
		}
		
	 ?>
</body>
</html>