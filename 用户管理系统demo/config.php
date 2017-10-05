<?php 
	$pdo=new PDO("mysql:host=localhost;dbname=test","root","123456");
	$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
 ?>