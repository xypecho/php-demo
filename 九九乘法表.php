<?php 
	// for ($i=1; $i < 10 ; $i++) { 
	// 	for ($j=1; $j <= $i; $j++) { 
	// 		echo $j."*".$i."=".$j*$i;
	// 	}
	// 	echo "<br>";
	// }
	

	$i=1;
	while ( $i<9) {
		$j=1;
		while ($j<$i) {
			echo $j."*".$i."=".$j*$i;
			echo "&nbsp;&nbsp;&nbsp;";
			$j++;
		}
		echo "<br>";
		$i++;
	}
 ?>