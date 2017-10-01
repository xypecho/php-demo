<?php 
	$img="image";
	$dir=scandir($img);
	echo "<table border='1' width='800px'>";
	foreach ($dir as $key => $value) {
		if ($key>1) {
			$file=$img."/".$value;
			echo "<tr>";
			echo "<td><img src={$file} width='200px'></td>";
			echo "<td><a href='download.php?file={$value}'>下载</a></td>";
			echo "</tr>";
		}
	}
	echo "</table>";
 ?>