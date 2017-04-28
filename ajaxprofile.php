<?php
mysql_connect("localhost","nov01","nov01");
mysql_select_db("nov01");
$del="select id,name from users order by name";
$res = mysql_query($del);

?>
<html>
	<head>
		<script language='javascript'>
				function test1(val){
					if(val == ""){
						document.getElementById("x").innerHTML ="";
						alert("Please select a user");
						return false;						
					}
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
					ajax.open('POST','profile.php?id='+val,true);
					ajax.send();
				}
		</script>
	</head>
	<body> 
		<select style='width:200px;' onchange='test1(this.value)'>
		<option value=''> None </option>
		<?php
			if(mysql_num_rows($res)>0){
					while($result=mysql_fetch_assoc($res)){
						echo "<option value=".$result['id'].">".$result['name']."</option>";
					}
			}		
		?>
		</select>
		<div id='x'></div>
	</body>
</html>

