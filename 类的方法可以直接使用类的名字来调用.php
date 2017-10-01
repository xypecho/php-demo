<?php 
	class Person{
		public $name;


		function __construct($n){ 
			$this -> name=$n;
		}

		function say($n){
			echo "<h1>".$n."</h1>";    
		} 

	}

/*	$user=new Person("xiaoming");
	$user -> say("h1llo");*/


	Person::say("hello");//类的方法可以直接使用类的名字来调用
 ?>