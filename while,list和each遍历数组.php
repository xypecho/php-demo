<?php 
	$arr=array(133,233);
	$arr1=each($arr);
	print_r($arr1);
	echo "<br>";
	$arr2=each($arr);
	print_r($arr2);
 ?>

<hr>
 <?php 
	$arr=array(133,233);
	list($a,$b)=$arr;
	echo $a;
	echo "<br>";
	echo $b;
 ?>
<hr>
 <?php 
 $arr=array(133,233,1,3,4214,43,13,313);
 while (list($k,$v)=each($arr)) {
 	echo "<h3>{$k}:{$v}</h3>";
 }
  ?>