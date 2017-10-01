 <?php 
	session_start();

	$session_code=$_SESSION["vercode"];
	$form_code=$_POST["vercode"];
	
	$s=strtolower(str_replace(" ","",$session_code));
	$f=strtolower(str_replace(" ","",$form_code));
	echo $s;
	echo "<br>";
	echo $f;
 ?>