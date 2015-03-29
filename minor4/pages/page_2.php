<?php
$con=mysql_connect("localhost","root","");
if(mysqli_connect_errno($con)){
echo "Failed to connect to data server".mysqli_connect_error();
}

mysql_select_db("minor1");
$sql="select logo from page2 where id=1; ";
$result=mysql_query($sql);
echo mysql_result($result,0);

?>