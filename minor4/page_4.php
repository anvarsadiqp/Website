<?php
include_once("simple_html_dom.php");


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


<!--center><h1><strong>FREQUENTLY ASKED QUESTIONS<strong></h1></center><br>


<div id="left">

<p><b>Can I use my existing domain name with a Siteinnovo site?</b></p><br>
<p>Yes. You can map an existing domain to your SiteInnovo site, 
or you can purchase a domain from us. </p><br>

<p><b>What is a subdomain?</b> </p><br>
<p>Your url will include '.siteinnovo.com'.</p><br>

<p><b>Can I create an email with a domain I own? </b></p><br>
<p>No, you can only set up Siteinnovo email accounts with a domain purchased from Siteinnovo. If you already have your own domain,
you can easily use it for your new Siteinnovo site, and create an email account with another provider.</p><br>

<p><b></b></p>
</div>

<div id="right"  >


<p><b>Can I create different email accounts with the same domain? </b></p><br>
<p>Yes, you can create as many as you need, and it is very easy to </p><p>
set this up. </p><br>

<p><b>Do Siteinnovo sites have good Search Engine Optimisation (SEO)</b></p><p><b> performance? </b></p><br>

<p>Siteinnovo websites are built in HTML and CSS, rather than Flash,</p><p>
which means they are naturally search engine friendly. </p><br>

<p><b>Can I mail my query?</b></p><br>
<p>You can mail us at Email:siteinnovio@gmail.com</p>

</div>




 
</div-->

