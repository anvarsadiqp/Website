<?php
include_once("simple_html_dom.php");

	`
$html = new simple_html_dom();

	$query_URL = "file:///C:/xampp/htdocs/minor4/pages/page_4.html";
	$html->load_file($query_URL);
	//echo $html;
	
	
	
$database="minor1";
$username="root";
$password="";
$server="localhost";
$debug=true;

$con=mysqli_connect($server,$username,$password,$database);
	// Check connection
	if (mysqli_connect_errno())
	  {
	  	if($debug) echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  }
	  
	  $web_data=$html; 
			
			$web_data= base64_encode($web_data);  
			 $value = "INSERT INTO page4(content) Values ('$web_data');";
	
			  if(mysqli_query($con,$value)){
					if($debug) echo "Successfully inserted data. URLS<br>";
				}
				else {
					if($debug) echo "Problemn in inserting data. URLS<br>";	
				}


	$result = mysqli_query($con,"SELECT * FROM page4;");
	 
	 $result = mysqli_fetch_array($result);
	 $data=$result['content'];
	 $data = base64_decode($data);
	 
	 echo $data;
	 
	



?>