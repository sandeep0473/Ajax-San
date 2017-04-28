<?php
mysql_connect("localhost","nov01","nov01");
mysql_select_db("nov01");
$msg = "<b style='color:green'> Product Information </b>";
$sql = "select *,(select catname from categories where cid=products.catid) as catname from products where pid=".$_REQUEST['pid'];
$res = mysql_query($sql) or die(mysql_error());
$result = mysql_fetch_assoc($res);
?>
<a href='javascript:history.back()' style='float:left'> Go Back </a> <a href='productbuy.php?pid=<?php echo $_GET['pid'];?>' style='float:right'> Buy Now </a>
<table border='1' width='500px' align='center'>
<caption> <?php echo $msg;?> </caption>
<tr>
	<th> Product Name </th>
	<td> <?php echo $result['pname'];?></td>
</tr>
<tr>
	<th> Price (Rs) </th>
	<td> <?php echo number_format($result['price']).'.00';?></td>
</tr>
<tr>
	<th> Items </th>
	<td> <?php echo $result['items'];?></td>
</tr>
<tr>
	<th> categorie </th>
	<td> <?php echo $result['catname'];?></td>
</tr>
<tr>
	<th> Description </th>
	<td> <div style='width:320px;height:120px;overflow:auto;word-wrap:break-word;'><?php echo $result['msg'];?></div>  </td>
</tr>
<tr>
	<th> Image </th>
	<td> <img src='../project/Admin/<?php echo $result['image'];?>' height='60px' width='100px'/> </td>
</tr>
<tr>
	<th> Created On </th>
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