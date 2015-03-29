<h1>
	<?php
$con=mysql_connect("localhost","root","");
if(mysqli_connect_errno($con)){
echo "Failed to connect to data server".mysqli_connect_error();
}

mysql_select_db("minor1");
$sql="select content from page1 where id=1; ";
$result=mysql_query($sql);
echo mysql_result($result,0);

?>
</h1>
<br><br />
<p>
<?php
$con=mysql_connect("localhost","root","");
if(mysqli_connect_errno($con)){
echo "Failed to connect to data server".mysqli_connect_error();
}

mysql_select_db("minor1");
$sql="select content from page1 where id=2; ";
$result=mysql_query($sql);
echo mysql_result($result,0);

?><br /><br /><br />
<img src="images/priyanka.jpg" height="100" width="100" alt="Priyanka">
<img src="images/kshama.jpg" height="100" width="100" alt="Kshama">
<img src="images/varsha.jpg" height="100" width="100" alt="Varsha">
