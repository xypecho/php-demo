<?php 
	class Person{
		private $name="username";
		function start(){
			echo "hello world";
		}
		function __set($i,$j){
			echo "您没有权限设置".$i."对象的值为".$j;
		}
	}

	$obj=new Person();
	$obj -> name=22;
 ?>