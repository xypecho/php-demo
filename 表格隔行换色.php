<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<table align="center"  width="1000px" border="1px">
		<tr>
			<th>周日</th>
			<th>周一</th>
			<th>周二</th>
			<th>周三</th>
			<th>周四</th>
			<th>周五</th>
			<th>周六</th>
		</tr>
		<?php 
			$days=31;
			for ($i=1; $i < $days;) { 
				if ($i%2==0) {
					echo "<tr style='background:red'>";
				} else {
					echo "<tr>";
				}
				
				for ($j=1; $j <= 7 ; $j++){ 
					if ($i>$days) {
						echo "<td>&nbsp;</td>";
					} else {
						echo "<td>{$i}</td>";
						$i++;
					}
					
				}
				echo "</tr>";
			}
		 ?>
	</table>
</body>
</html>