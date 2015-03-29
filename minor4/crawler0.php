<?php 
	mysql_connect("localhost","root","");
	mysql_select_db("minor");
	include('simple_html_dom.php');
	main();
	function scraping_URL($url) 
	{
		$html = file_get_html($url);
		$delete="DELETE FROM `cr1`";
		mysql_query($delete);
		echo '<html><body><b><h1><center>Crawling.....</center></h1></b></body></html>';
		for($i=104;$i<=110;$i++)
		{
			$name[$i] = $html->find('a',$i)->href;
			//$name[$i] = $html->find('a',$i)->href;
			$insert="INSERT INTO `cr1` (`name`) VALUES ('$name[$i]')";
			mysql_query($insert);
			
		}
		$html->clear();
		unset($html);
		return $ret;
	}
	
	function main()
	{
		set_time_limit(0); 
		error_reporting(0);
		$ph1= 'http://www.fitho.in/guide/gyms-india/';
		scraping_URL($ph1);
		//fclose($ph);
	}
?>