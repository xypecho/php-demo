<?php 
	abstract class Person{
		 abstract function show();//后面没接｛｝花括号的方法就是抽象方法，有抽象方法的类就是抽象类
	}

	class usb extends Person{
		//必须先把function show();里面写上方法才能执行
	}
 ?>