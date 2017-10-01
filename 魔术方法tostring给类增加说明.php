<?php 
	class Person{
		function start(){
			echo "<h3>start</h3>";
		}
		function __tostring(){
			return "使用说明书";
		}
	}
	$obj=new Person();
	echo $obj;
 ?>