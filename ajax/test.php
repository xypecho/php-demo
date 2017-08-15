<?php 
	if (isset($_POST['name'])) {
		echo "hello:".$_POST['name'];
	}else{
		echo "error";
	}
 ?>