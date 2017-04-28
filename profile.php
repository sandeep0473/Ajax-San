<?php
is it working
mysql_connect("localhost","nov01","nov01");
mysql_select_db("nov01");
$msg = "<b style='color:green'> Profile Information </b>";
if(isset($_GET['ok'])){
	$msg = "<b style='color:red'> Your Profile Updated successfully! </b>";
}
$sql = "select * from users where id=".$_REQUEST['id'];
$res = mysql_query($sql) or die(mysql_error());
$result = mysql_fetch_assoc($res);
?>
<table border='1' width='450px' align='center'>
<caption> <?php echo $msg;?> </caption>
<tr>
	<th> Name </th>
	<td> <?php echo $result['name'];?></td>
</tr>
<tr>
	<th> Username </th>
	<td> <?php echo $result['username'];?></td>
</tr>
<tr>
	<th> Email </th>
	<td> <?php echo $result['email'];?></td>
</tr>
<tr>
	<th> Mobile </th>
	<td> <?php echo $result['mobile'];?></td>
</tr>
<tr>
	<th> Gender </th>
	<td> <?php echo $result['gender'];?>  </td>
</tr>
<tr>
	<th> Courses </th>
	<td> <?php echo $result['courses'];?> </td>
</tr>
<tr>
	<th> Registered On </th>
	<td> <?php echo $result['creon'];?> </td>
</tr>
<tr>
	<th> Last Update On </th>
	<td> <?php echo $result['updon'];?> </td>
</tr>
<tr>
	<th> Status </th>
	<td> <?php ($result['status']==0)? print 'Inactive ': print 'Active';?> </td>
</tr>
</table>
