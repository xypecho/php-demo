<?php 
	class Person{
		private $name="username";
		function start(){
			echo "hello world";
		}
		function __unset($i){
			echo "您没有权限删除".$i."对象";
		}
	}

	$obj=new Person();
	unset($obj -> name);
 ?>