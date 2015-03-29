

<?php
$con=mysql_connect("localhost","root","")
					or 
					die("server not found");
					//if(mysql_connect_errno($con)){
					//echo "Failed to connect to data server".mysql_connect_error();

					mysql_select_db("minor1");
include_once("simple_html_dom.php");
$html = new simple_html_dom();
$html->load_file("http://www.bing.com/images/search?q=apple");
foreach($html->find(".dg_u")as $dgu)
foreach($dgu->find('a')as $anchr)
foreach($anchr->find('img')as $imgs)
{
//echo $imgs;
//echo $imgs->src.'<br>';
mysql_query("insert into crwlimg(url,img) values('".mysql_real_escape_string( $imgs->src )."','$imgs');");
mysql_query("select url from crwlimg where id=1;");
}
/*
$results = $html->find(".dg_u");
$results = $results[0]->find('a');
$results = $results[0]->find('img');
echo $results[0];
echo $results[1];
*/
?>