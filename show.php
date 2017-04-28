<?php
mysql_connect("localhost","nov01","nov01");
mysql_select_db("nov01");
$del="select * from lamp";
$res = mysql_query($del);
if(!$res){
	die("Error : ".mysql_error());
}
$msg = "<b style='color:green'> Users Information </b>";
$ack_val=0;
if(isset($_GET['ack'])){
	$ack_val=1;
	if($_GET['ack']=='in'){
		$msg = "<b style='color:red'> New User registered Successfully! </b>";
	}else if($_GET['ack']=='up'){
		$msg = "<b style='color:red'> New User Updated Successfully! </b>";
	}else if($_GET['ack']=='del'){
		$msg = "<b style='color:red'> New User Deleted Successfully! </b>";
	}	
}
?>
<script>
function deleterow(id){
	if(confirm("Do You really want to delete Row?")){
		location.href="delete.php?id="+id;
	}	
}
function refreshpage(){
	location.href="show.php";
}
function loadpage(){
	if(document.getElementById("msg").value == '1'){
		var a=window.setTimeout("refreshpage()",20000);
	}
}

</script>
<body onload="loadpage()">
<a href='postinsert.php'> Add a New User </a>
<table border='1' width='600px' align='center'>
<caption>  <?php echo $msg; ?> </caption>
<tr>
	<th> S.No </th>
	<th> Name </th>
	<th> Email </th>
	<th> Edit </th>
	<th> Delete </th>
</tr>
<?php
if(mysql_num_rows($res)==0){
	echo "<tr><td colspan='5' align='center'> No Users Found </td></tr>";
}else{
		$sno=1;
		while($result=mysql_fetch_assoc($res)){
				echo "<tr>";
					echo "<td>".$sno."</td>";
					echo "<td>".$result['name']."</td>";
					echo "<td>".$result['email']."</td>";
					echo "<td><a href='update.php?id=".$result['id']."'>Edit</a></td>";
					echo "<td><a href='javascript:deleterow(".$result['id'].")'>Delete</a></td>";
				echo "</tr>";
				$sno++;
		}	
}
?>
</table>
<input type='hidden' id='msg' value="<?php echo $ack_val;?>"/>
</body>