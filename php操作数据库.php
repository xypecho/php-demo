<?php 
$pdo=new PDO('mysql:host=localhost;dbname=test','root','123456');
$pdo->exec('set names utf8');

$sql="select * from user";
$smt=$pdo->query($sql);
$rows=$smt->fetchAll(PDO::FETCH_ASSOC);
 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="static/css/amazeui.min.css">
	<script type="text/javascript" src="static/js/jquery-1.8.2.min.js"></script>
	<script type="text/javascript" src="static/js/amazeui.min.js"></script>
</head>
<body>
	<table class="am-table">
		<thead>
			<tr>
				<th>id</th>
				<th>username</th>

			</tr>
		</thead>
		<tbody>

			<?php 
       	foreach ($rows as $row) {
       		echo "<tr>";
       		echo "<td>{$row['id']}</td>";
       		echo "<td>{$row['username']}</td>";
       		echo "</tr>";
       	}
        ?>
	</tbody>
</table>
</body>
</html>
