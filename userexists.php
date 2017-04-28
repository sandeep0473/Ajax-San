<?php
mysql_connect("localhost","nov01","nov01");
mysql_select_db("nov01");
$name = $_REQUEST['name'];
$del="select * from users where name='".$name."'";
$res = mysql_query($del);
if(mysql_num_rows($res)==0){
	echo "User Name Availble";
}else{
	echo "Sorry <b>".$name."</b> already exists";
}