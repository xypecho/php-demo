<?php 
	function copyfile($dir1,$dir2){
		mkdir($dir2);
		$files=scandir($dir1);
		foreach ($files as $key => $value) {
			if ($key>1) {
				$file1=$dir1."/".$value;
				$file2=$dir2."/".$value;
				if (is_dir($file1)) {
					copyfile($file1,$file2);
				}else{
					copy($file1,$file2);
				}
			}
		}
	}
	copyfile("demo","demo2");
 ?>