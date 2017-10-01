<?php 
 //类的定义
 //文件名必须和类名一样 即为Person
 //驼峰式写法，首字母大写
	class Person{
		public $name="jack";
		public $sex="man";//属性

		function say(){
			echo "hello world,my name is{$this -> name}";       //$this 的作用
		} //方法
	}

	$user=new Person();//实例化对象
	$user -> say(); //调用成员方法
	// echo  $user -> name; //调用成员属性
 ?>