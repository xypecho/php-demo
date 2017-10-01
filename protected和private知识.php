<?php 
	class Person{
		// protected $name="daidai";  //被保护的对象，只有子类能访问到对象，外部无法访问到对象，可以访问到方法
		private $name="daidai"; //私有对象，无法被外部和子类访问，只有自己这个类可以访问
		function say(){
			echo "<h1>{$this -> name}</h1>";    
		} 

	}

	class It extends Person{
		public $program;
		function develop(){
			echo "{$this -> name}正在开发项目";
		}
	}

	$obj=new It();
	$obj -> develop();



	/*$obj=new Person();
	$obj -> name;*/  //报错Cannot access protected property Person::$name

 ?>