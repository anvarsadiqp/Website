<?php
	mysql_connect("localhost", "root", "") or die(mysql_error());
	mysql_select_db("test1") or die(mysql_error());
	$content = $_POST['content']; //get posted data
	$content = mysql_real_escape_string($content);	//escape string	
	
	$sql = "UPDATE content SET text = '$content' WHERE element_id = '2' ";
	
	if (mysql_query($sql))
	{
		echo 1;
	}
?>