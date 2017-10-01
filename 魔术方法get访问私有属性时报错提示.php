<?php 
	class Person{
		private $name="username";
		function start(){
			echo "hello world";
		}
		function __get($i){
			echo "您没有权限访问".$i."对象";
		}
	}

	$obj=new Person();
	$obj -> name;
 ?>