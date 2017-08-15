
<?php 
php定义变量:
//双引号里面可以定义变量，单引号不可以
$name="user1";
echo "my name is $name<br>";
echo "my name is".$name."e !<br>";      // .$name.  两个点为连接符
echo "my name is {$name}e!<br>";	//{$name}这样写也可以
echo 'my name is'.$name.'e!';	//单引号输出的方法
 ?>
