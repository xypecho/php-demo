<?php 
	$file=$_FILES['files']['tmp_name']; //截取数组里面的tmp_name这个键值队
	$upfile="image";
	$file_size=$_FILES['files']['size'];

	$year=date('Y');
	$month=date('m');
	$day=date('d');
	$datedir=$upfile."/".$year."-".$month."-".$day;
	if (!file_exists($datedir)) {
		mkdir($datedir);
	}

	$file_name=explode(".",$_FILES['files']['name']);
	$file_true_name=array_pop($file_name);//截取文件后缀

	$frand=time().mt_rand();//加工文件名

	$uolpadfilename=$datedir."/".$frand.".".$file_true_name;

	//验证文件类型和大小
	$allowsize=1*1024*1024;
	$allowtype=array("jpg","png","gif");


	if (in_array($file_true_name,$allowtype)) {
		if ($file_size<=$allowsize) {
			move_uploaded_file($file,$uolpadfilename);
		}else{
			echo "文件大小不对";
		}
	}else{
			echo "文件类型错误";
	}	
 ?>