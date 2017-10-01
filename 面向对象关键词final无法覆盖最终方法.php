<?php
	class Person{
		public $name="jack";
		final function say(){
			echo "my name is {$this -> name}";
		}
	}

	class It extends Person{
		function say(){
					echo "hello world";
		}
/*		function say(){
			echo "hello world";
		}*/ //子类有同名方法时会覆盖父类的方法
	}
	$obj=new It();
	$obj -> say();
 ?>