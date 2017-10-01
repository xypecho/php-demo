<?php 
	class Person{
		private $name="username";
		function start(){
			echo "hello world";
		}
		function __isset($i){
			echo "您没有权限查看".$i."对象";
		}
	}

	$obj=new Person();
	isset($obj -> name);
 ?>