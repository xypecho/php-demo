<?php 
	$a=3;
	$b=4;
	if ($a=5 && $b=6) {          // 由于运算符的优先级，所以优先执行的是   5&& $b=6   ,而这个的执行结果是true，索引输出1
		$a+=1;
		$b+=1;
	}
	

	// if (($a=0) && ($b=6)) {
	// 	$a+=1;
	// 	$b+=1;
	// }
	echo $a."<br>".$b;
 ?>