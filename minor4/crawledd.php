<?php
$con=mysqli_connect("localhost","root","","minor1");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result = mysqli_query($con,"SELECT * FROM crwlimg");

while($row = mysqli_fetch_array($result))
  {
  echo $row['img'] ;
  echo "<br>";
  }

mysqli_close($con);
?>