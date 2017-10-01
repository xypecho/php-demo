<?php 
	class Person{
		public $name;


		function __construct($n,$a,$s){ 
			$this -> name=$n;
			$this -> age=$a;
			$this -> sex=$s;
		}

		function say(){
			echo "<h1>{$this -> name}</h1>";    
		} 

	}

	class It extends Person{
		public $program;

	function __construct($n,$a,$s,$p){ 
			parent::__construct($n,$a,$s);
			$this -> program=$p;
		}

		function develop(){
			echo "{$this -> name}正在开发{$this -> program}项目";
		}
	}


	$obj=new It("daidai",20,"man","java");
	$obj -> develop();

 ?>