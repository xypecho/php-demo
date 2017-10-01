<?php 
	class Person{
		public $name;
		public $age;
		public $sex;//属性

		function __construct($n,$a,$s){ //如果一个方法名字和类名即Person相同，则该方法为构造方法，建议使用__construct
			$this -> name=$n;
			$this -> age=$a;
			$this -> sex=$s;
		}

		function say(){
			echo "hello world,my name is {$this -> name},my age is {$this -> age},my type is {$this -> sex}<br>";       //$this 的作用
		} //方法

		function __destruct(){       //析构方法
			echo "my name is{$this -> name},我还会回来的<br>";
		}
	}

	$user=new Person("xiaoming",20,"woman");//实例化对象
	$user -> say(); //调用成员方法

	$user1=new Person("ddai",30,"gay");//实例化对象
	$user1 -> say(); //调用成员方法

	$user2=new Person("sbb",50,"les");//实例化对象
	$user2 -> say(); //调用成员方法
 ?>