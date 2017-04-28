<?php
mysql_connect("localhost","nov01","nov01");
mysql_select_db("nov01");
$msg = "<b style='color:green'> Update your Password </b>";
	$search 		= 	$_REQUEST['search'];
	if($search == ""){
		echo "Please enter a search keywords";
	}else{
		$sql = "select * from search where name like '%$search%'";
		$res = mysql_query($sql);
		if(mysql_num_rows($res) == 0){
			echo "No Records Found with <b>$search</b> Keyword";
		}else{
			$sno = 0;
			while($result=mysql_fetch_assoc($res)){
				echo $result['id'].' ---- '.$result['name'].' ---- '.$result['email']."<br>";
				$sno++;
			}
			echo $sno." Values Found";
		}
	}
?>
