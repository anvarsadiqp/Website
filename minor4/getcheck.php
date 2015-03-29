<?php

$q=$_POST['q'];



$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  $db_name="minor1";
mysql_select_db("$db_name") or die ("No database");

$query = mysql_query("SELECT * From login WHERE username='$q'") or die(mysql_error());
$numrows = mysql_num_rows($query);
if ($numrows!=0)
{
echo" 1 ";

}
  
  ?>
