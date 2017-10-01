<?php 
	class Person{
		public $name;


		function __construct($n){ 
			$this -> name=$n;
		}

		function say(){
			echo "<h1>{$this -> name}</h1>";    
		} 

	}

	class It extends Person{
		public $program;

		function develop(){
			echo "{$this -> name}正在开发php项目";
		}
	}


	$obj=new It("daidai");
	$obj -> develop();

 ?>