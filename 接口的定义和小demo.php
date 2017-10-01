<?php 
	//只含有抽象方法的类叫接口
	interface Usb{
		function start();
		function run();
		function stop();
	}
	class Upan implements Usb{       //接口不允许继承 直接用implements
		function start(){
			echo "start";
		}
		function run(){
			echo "run";
		}
		function stop(){
			echo "stop";
		}
		function diy(){
			echo "diy";
		}
	}

	$obj=new Upan();
	$obj -> start();
	$obj -> run();
	$obj -> stop();
	$obj -> diy();
 ?>