<?php 
	class person{
		public $name="user1";
		public $age="18";
		public $sex="man";

	public function say(){
		echo "my name is {$this->name}";
	}
	}

	$jin=new person();
	$jin->say();
	echo "{$jin->age}";

 ?>