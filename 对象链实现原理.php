<?php 
	class Person{
		public $name;


		function __construct($n){ 
			$this -> name=$n;
		}

		function say(){
			echo "say<br>";  
			return $this;//返回对象     
		} 

		function eat(){
			echo "eat<br>";
			return $this;//返回对象     
		}

		function sleep(){
			echo "sleep";
		}
	}

	$user=new Person("xiaoming");
	$user -> say() -> eat() -> sleep();
 ?>