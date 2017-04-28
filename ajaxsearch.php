<html>
	<head>
		<script language='javascript'>
				function test1(val){
					var ajax;
					if(window.XMLHttpRequest){
						ajax=new XMLHttpRequest();
					}else{
						ajax=new ActiveXObject("Microsoft.XMLHTTP");
					}
					ajax.onreadystatechange = function (){
						if(ajax.readyState == '4' && ajax.status=='200'){
							document.getElementById("x").innerHTML = ajax.responseText;
						}else{
							//document.getElementById("x").innerHTML = "Ajax Not Excuted";
						}
					}
					ajax.open('POST','search.php?search='+val,true);
					ajax.send();
				}
		</script>
	</head>
	<body> 
		<input type='text' onkeyup='test1(this.value)'/>
		<div id='x'></div>
	</body>
</html>

