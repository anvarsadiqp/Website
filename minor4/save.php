<?php
	mysql_connect("localhost", "root", "") or die(mysql_error());
	mysql_select_db("minor1") or die(mysql_error());
	$pcontent = $_POST['content']; //get posted data
	$divid=$_POST['divid'];
	$pcontent = mysql_real_escape_string($pcontent);	//escape string	
	
	$sql = "UPDATE pcontent SET text = '$pcontent' WHERE  id = '$divid' ";
	
	if (mysql_query($sql))
	{
		echo 1;
	}
?>