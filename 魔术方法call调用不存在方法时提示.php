<?php 
	class Person{
		function start(){
			echo "hello world";
		}
		function __call($i,$j){
			echo "您调用的".$i."方法不存在";
		}
	}

	$obj=new Person();
	$obj -> stop();
 ?>