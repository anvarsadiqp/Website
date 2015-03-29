

<?php
$con=mysql_connect("localhost","root","")
					or 
					die("server not found");
					//if(mysql_connect_errno($con)){
					//echo "Failed to connect to data server".mysql_connect_error();

					mysql_select_db("minor1");
include_once("simple_html_dom.php");
$html = new simple_html_dom();
$html->load_file("http://www.bing.com/images/search?q=blog+website+builder+templates");
foreach($html->find(".dg_u")as $dgu)
foreach($dgu->find('a')as $anchr)
foreach($anchr->find('img')as $imgs)
{
echo $imgs;
$imgdata=base64_encode($imgs);
mysql_query("insert into crwlimg(url,img) values('".mysql_real_escape_string( $imgs->src )."','$imgdata');");
mysql_query("select url from crwlimg where id=1;");
}

?>