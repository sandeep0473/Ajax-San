<?php
mysql_connect("localhost","nov01","nov01");
mysql_select_db("nov01");
$pname = $_REQUEST['pname'];
$del="select * from products where pname='".$pname."'";
$res = mysql_query($del);
if(mysql_num_rows($res)==0){
	echo "Product Name Availble";
}else{
	echo "Sorry <b>".$pname."</b> already exists";
}