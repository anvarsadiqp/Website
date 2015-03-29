<?php
$con=mysql_connect("localhost","root","")
					or 
					die("server not found");
					//if(mysql_connect_errno($con)){
					//echo "Failed to connect to data server".mysql_connect_error();

					mysql_select_db("minor1");

include_once('simple_html_dom.php');
$html = new simple_html_dom();
$html->load_file("http://www.google.com/search?q=website+templates&tbm=isch");
$data = $html->find('img');
echo $data[0];
foreach($html->find('img') as $link){
$link = $link->src;
mysql_query("insert into crwlimg(img) values('$link');");
}

		
	
					/*$extract=mysql_query("select img from crwlimg");
					
					while($row=mysql_fetch_array($extract)){
					$imgdata=$row['img'];
					echo "<img src='$imgdata' />";
					}*/
					
					
					
					?>


