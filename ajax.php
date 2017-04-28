<html>
	<head>
		<script language='javascript'>
				function test1(){	
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
							document.getElementById("x").innerHTML = "Ajax Not Excuted";
						}
					}
					ajax.open('POST','show.php',true);
					ajax.send();
				}
		</script>
	</head>
	<body> 
		<input type='button' value='AJAX' onclick='test1()'/>
		<div id='x'></div>
	</body>
</html>

