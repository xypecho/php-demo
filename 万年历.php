<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="static/css/amazeui.min.css">
	<script type="text/javascript" src="static/js/jquery-1.8.2.min.js"></script>
	<script type="text/javascript" src="static/js/amazeui.min.js"></script>
	<style type="text/css">
		h1,table,h2{
			text-align: center;
		}
		.am-table{
			width: 800px;
			margin: 0 auto;
		}
		div{
			margin-top: 40px;
			text-align: center;
		}
		.am-input-group{
			width: 200px;
			margin: 0 auto;
			margin-top: 20px;
		}
	</style>
</head>
<body>
<?php 
	$year=$_GET["y"]?$_GET["y"]:date("Y");//当年年份
	$month=$_GET["m"]?$_GET["m"]:date("m");//当年月份
	
	$firstday=strtotime("{$year}-${month}-1");//获取当月第一天时间戳
	$days=date('t',$firstday);//这个月的天数
	echo $days;
	$week=date("w",$firstday); //获取当月第一天是星期几
	//下一年下一月
	$nextyear=$year;
	$nextmonth=$month+1;
	if ($nextmonth>12) {
		$nextmonth=1;
		$nextyear=$year+1;
	}
	//上一年上一月
	$prevyear=$year;
	$prevmonth=$month-1;
	if ($prevmonth<1) {
		$prevmonth=12;
		$prevyear=$year-1;
	}
 ?>
	<h2>今天是<?php echo $year; ?>年<?php echo $month; ?>月</h2>
	<table class="am-table am-table-bordered am-table-radius am-table-striped">
		<tr>
			<td>星期日</td>
			<td>星期一</td>
			<td>星期二</td>
			<td>星期三</td>
			<td>星期四</td>
			<td>星期五</td>
			<td>星期六</td>
		</tr>
		<?php 
		for ($i=(1-$week); $i <=$days;) { 
			echo "<tr>";
			for ($j=0;$j<7;$j++,$i++) { 
				if ($i>$days || $i<0) {
					echo "<td></td>";
				}else{
					echo "<td>{$i}</td>";
				}
			}
			echo "</tr>";
		}
	 ?>
	</table>

	<div>
		<a class="am-btn am-btn-primary" href="test.php?y=<?php echo $prevyear; ?>&m=<?php echo $prevmonth; ?>">上个月</a>
		<a class="am-btn am-btn-primary" href="test.php?y=<?php echo $nextyear; ?>&m=<?php echo $nextmonth; ?>">下个月</a>
	</div>
</body>
	
</html>