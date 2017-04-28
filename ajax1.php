<html>
<head>
<script>
 function get(){
	 var ajax;
	 if(window.XMLHttpRequest)
	 {
		 ajax = new XMLHttpRequest();
	 }
	 else {
		 ajax = new ActiveXObject("Microsoft.XMLHTTP");
	 }
	 ajax.onreadystatechange = function (){
		 if(ajax.readyState == '4'&& ajax.status == '200'){
			 document.getElementById('x').innerHTML = ajax.responseText;
		 }
		 else {
			 document.getElementById('x').innerHTML = "not found";
		 }
	 }
	 ajax.open('POST','show.php',true);
	 ajax.send();
 }
</script>
</head>
<body>
<input type="button" value="ajax" onclick="get()">
<div id="x"></div>
</body>
</html>