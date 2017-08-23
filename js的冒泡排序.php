<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<!-- <script type="text/javascript">
	var arr=new Array(100,4,1,5,6,1123,6,12312,6,123,6,23,532,2,1,3);
		for (var i = 0; i
	< arr.length; i++) {
			for (var j = 0; j <arr.length-i-1; j++) {
				var exam=arr[i];
				 arr[i]=arr[j];
				 arr[j]=exam;
			}
		}
			document.writeln(arr[j]);
	</script>
		-->
		<script type="text/javascript">
		var examplearr=[8,94,15,88,55,76,21,39];
function sortarr(arr){
    for(i=0;i<arr.length-1;i++){
        for(j=0;j<arr.length-1-i;j++){
            if(arr[j]>arr[j+1]){
                var temp=arr[j];
                arr[j]=arr[j+1];
                arr[j+1]=temp;
            }
        }
    }
    return arr;
}
sortarr(examplearr);
document.writeln(examplearr);
	</script>
</body>
	</html>