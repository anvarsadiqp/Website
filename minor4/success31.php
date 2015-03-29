<br />
<br />
<br />
<br />
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">


<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Nature's Charm by Free CSS Templates</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="default1.css" rel="stylesheet" type="text/css" media="screen" />

<link href="content.css" rel="stylesheet" type="text/css" media="screen" />
<link href="search-form.css" rel="stylesheet" type="text/css" media="screen" />
<script type="text/javascript" src="content.js"></script>
<script type="text/javascript" src="CEeditor.js"></script>


</head>
<body >

<?php
mysql_connect("localhost","root","")
or
die("server not found");
mysql_select_db("minor1");

$h=$_POST['username'];
$i=$_POST['password'];
$z=$_POST['email'];
$j="select * from login where username='$h' and password='$i' and email='$z';";
$r=mysql_query($j);
$count =mysql_num_rows($r);
if($count>0)
{
//echo "already exist";
}
else
if(isset($_POST['submit']))
{
$use=$_POST['username'];
if(preg_match('/[\'^$%&*()}{@#~?><>,|=_+-]/',$use))
{
echo "one or more special characters found in the username input";
}
else{

$email=$_POST['email'];
$pass=$_POST['password'];


$x="insert into login (username,password,email) values('$use','$pass','$email');";

mysql_query($x);
}
}
?>

<?php

mysql_connect("localhost","root","");
//or
//die("server not found");
mysql_select_db("minor1");
if(isset($_POST['submit'])){
$h=$_POST['username'];
$i=$_POST['password'];
$j="select * from login where username='$h' and password='$i';";
$r=mysql_query($j);
$count =mysql_num_rows($r);
if($count>0)
{
//header('location:success3.php');
}
else
{
header('location:index5.php');
}}
?>
 


<!-- start header -->
<div id="header">

 
	<div id="logo">
	
 
		<h1 id="editor"><a href="#">
		<?php
$con=mysql_connect("localhost","root","");
if(mysqli_connect_errno($con)){
echo "Failed to connect to data server".mysqli_connect_error();
}

mysql_select_db("minor1");
$sql="select content from thead where id=1; ";
$result=mysql_query($sql);
echo mysql_result($result,0);

?> </a></h1>
		
	</div>
	
	
	<div id="menu">
		<ul>
			<li contenteditable data-name="title" id="id21" class="active"><a href="#" accesskey="1" title="">
			<?php
$con=mysql_connect("localhost","root","");
if(mysqli_connect_errno($con)){
echo "Failed to connect to data server".mysqli_connect_error();
}

mysql_select_db("minor1");
$sql="select content from tmenu where id=1; ";
$result=mysql_query($sql);
echo mysql_result($result,0);

?>
			</a></li>
			<li contenteditable data-name="title" id="id22"><a href="#" accesskey="2" title="">
			
			<?php
$con=mysql_connect("localhost","root","");
if(mysqli_connect_errno($con)){
echo "Failed to connect to data server".mysqli_connect_error();
}

mysql_select_db("minor1");
$sql="select content from tmenu where id=2; ";
$result=mysql_query($sql);
echo mysql_result($result,0);

?>
</a></li>
			<li contenteditable data-name="title" id="id23"><a href="#" accesskey="3" title="">
			<?php
$con=mysql_connect("localhost","root","");
if(mysqli_connect_errno($con)){
echo "Failed to connect to data server".mysqli_connect_error();
}

mysql_select_db("minor1");
$sql="select content from tmenu where id=3; ";
$result=mysql_query($sql);
echo mysql_result($result,0);

?>
			</a></li>
			<li contenteditable data-name="title" id="id24"><a href="#" accesskey="4" title="">
			<?php
$con=mysql_connect("localhost","root","");
if(mysqli_connect_errno($con)){
echo "Failed to connect to data server".mysqli_connect_error();
}

mysql_select_db("minor1");
$sql="select content from tmenu where id=4; ";
$result=mysql_query($sql);
echo mysql_result($result,0);

?>
			</a></li>
			<li contenteditable data-name="title" id="id25"><a href="#" accesskey="5" title="">
			<?php
$con=mysql_connect("localhost","root","");
if(mysqli_connect_errno($con)){
echo "Failed to connect to data server".mysqli_connect_error();
}

mysql_select_db("minor1");
$sql="select content from tmenu where id=5; ";
$result=mysql_query($sql);
echo mysql_result($result,0);

?>
			</a></li>
		</ul>
	</div>
</div>
<!-- end header -->
<div id="gallery">
	<div id="top-photo" >
		<p contenteditable data-name="title" id="imgid"><a href="#">
		 <?php
					$con=mysql_connect("localhost","root","")
					or 
					die("server not found");
					//if(mysql_connect_errno($con)){
					//echo "Failed to connect to data server".mysql_connect_error();

					mysql_select_db("minor1");
					$extract=mysql_query("select img from timg where id=1");
					$row=mysql_fetch_array($extract,MYSQL_ASSOC);
					$values=$row['img'];

					echo "<img src=' ".$values." '/>";
					?>
		</a></p>
	</div>
</div>

<!-- start page -->
<div id="page">
	<!-- start content -->
	<div id="content">
		<div class="post">
			<h1 class="title" contenteditable data-name="title" id="id31">
			<?php
$con=mysql_connect("localhost","root","");
if(mysqli_connect_errno($con)){
echo "Failed to connect to data server".mysqli_connect_error();
}

mysql_select_db("minor1");
$sql="select content from tcontent where id=1; ";
$result=mysql_query($sql);
echo mysql_result($result,0);

?>
			
			</h1>
			<p contenteditable data-name="title" id="id32" class="byline"><small>
			<?php
$con=mysql_connect("localhost","root","");
if(mysqli_connect_errno($con)){
echo "Failed to connect to data server".mysqli_connect_error();
}

mysql_select_db("minor1");
$sql="select content from tcontent where id=2; ";
$result=mysql_query($sql);
echo mysql_result($result,0);

?> <a href="#"><?php
$con=mysql_connect("localhost","root","");
if(mysqli_connect_errno($con)){
echo "Failed to connect to data server".mysqli_connect_error();
}

mysql_select_db("minor1");
$sql="select content from tcontent where id=3; ";
$result=mysql_query($sql);
echo mysql_result($result,0);

?></a> | <a href="#"><?php
$con=mysql_connect("localhost","root","");
if(mysqli_connect_errno($con)){
echo "Failed to connect to data server".mysqli_connect_error();
}

mysql_select_db("minor1");
$sql="select content from tcontent where id=4; ";
$result=mysql_query($sql);
echo mysql_result($result,0);

?></a></small></p>
			<div contenteditable data-name="title" id="id33" class="entry">
				<p  ><strong><?php
$con=mysql_connect("localhost","root","");
if(mysqli_connect_errno($con)){
echo "Failed to connect to data server".mysqli_connect_error();
}

mysql_select_db("minor1");
$sql="select content from tcontent where id=5; ";
$result=mysql_query($sql);
echo mysql_result($result,0);

?></strong><?php
$con=mysql_connect("localhost","root","");
if(mysqli_connect_errno($con)){
echo "Failed to connect to data server".mysqli_connect_error();
}

mysql_select_db("minor1");
$sql="select content from tcontent where id=6; ";
$result=mysql_query($sql);
echo mysql_result($result,0);

?> <a href="http://freecsstemplates.org/"><?php
$con=mysql_connect("localhost","root","");
if(mysqli_connect_errno($con)){
echo "Failed to connect to data server".mysqli_connect_error();
}

mysql_select_db("minor1");
$sql="select content from tcontent where id=7; ";
$result=mysql_query($sql);
echo mysql_result($result,0);

?></a><?php
$con=mysql_connect("localhost","root","");
if(mysqli_connect_errno($con)){
echo "Failed to connect to data server".mysqli_connect_error();
}

mysql_select_db("minor1");
$sql="select content from tcontent where id=8; ";
$result=mysql_query($sql);
echo mysql_result($result,0);

?><a href="http://creativecommons.org/licenses/by/2.5/"><?php
$con=mysql_connect("localhost","root","");
if(mysqli_connect_errno($con)){
echo "Failed to connect to data server".mysqli_connect_error();
}

mysql_select_db("minor1");
$sql="select content from tcontent where id=9; ";
$result=mysql_query($sql);
echo mysql_result($result,0);

?></a>. <?php
$con=mysql_connect("localhost","root","");
if(mysqli_connect_errno($con)){
echo "Failed to connect to data server".mysqli_connect_error();
}

mysql_select_db("minor1");
$sql="select content from tcontent where id=10; ";
$result=mysql_query($sql);
echo mysql_result($result,0);

?> <a href="http://www.pdphoto.org/"> <?php
$con=mysql_connect("localhost","root","");
if(mysqli_connect_errno($con)){
echo "Failed to connect to data server".mysqli_connect_error();
}

mysql_select_db("minor1");
$sql="select content from tcontent where id=11; ";
$result=mysql_query($sql);
echo mysql_result($result,0);

?></a>. <?php
$con=mysql_connect("localhost","root","");
if(mysqli_connect_errno($con)){
echo "Failed to connect to data server".mysqli_connect_error();
}

mysql_select_db("minor1");
$sql="select content from tcontent where id=12; ";
$result=mysql_query($sql);
echo mysql_result($result,0);

?> <a href="http://freecsstemplates.org/"> <?php
$con=mysql_connect("localhost","root","");
if(mysqli_connect_errno($con)){
echo "Failed to connect to data server".mysqli_connect_error();
}

mysql_select_db("minor1");
$sql="select content from tcontent where id=13; ";
$result=mysql_query($sql);
echo mysql_result($result,0);

?></a>  <?php
$con=mysql_connect("localhost","root","");
if(mysqli_connect_errno($con)){
echo "Failed to connect to data server".mysqli_connect_error();
}

mysql_select_db("minor1");
$sql="select content from tcontent where id=14; ";
$result=mysql_query($sql);
echo mysql_result($result,0);

?></p>
			</div>
			<p contenteditable data-name="title" id="id34" class="meta"><a href="#" class="more"> <?php
$con=mysql_connect("localhost","root","");
if(mysqli_connect_errno($con)){
echo "Failed to connect to data server".mysqli_connect_error();
}

mysql_select_db("minor1");
$sql="select content from tcontent where id=15; ";
$result=mysql_query($sql);
echo mysql_result($result,0);

?></a> &nbsp;&nbsp;&nbsp; <a href="#" class="comments"> <?php
$con=mysql_connect("localhost","root","");
if(mysqli_connect_errno($con)){
echo "Failed to connect to data server".mysqli_connect_error();
}

mysql_select_db("minor1");
$sql="select content from tcontent where id=16; ";
$result=mysql_query($sql);
echo mysql_result($result,0);

?></a></p>
		</div>
		<div class="post">
			<h2 contenteditable data-name="title" id="id41" class="title" ><?php
$con=mysql_connect("localhost","root","");
if(mysqli_connect_errno($con)){
echo "Failed to connect to data server".mysqli_connect_error();
}

mysql_select_db("minor1");
$sql="select content from tcontent where id=17; ";
$result=mysql_query($sql);
echo mysql_result($result,0);

?></h2>
			<p contenteditable data-name="title" id="id42" class="byline"><small><?php
$con=mysql_connect("localhost","root","");
if(mysqli_connect_errno($con)){
echo "Failed to connect to data server".mysqli_connect_error();
}

mysql_select_db("minor1");
$sql="select content from tcontent where id=18; ";
$result=mysql_query($sql);
echo mysql_result($result,0);

?> <a href="#"><?php
$con=mysql_connect("localhost","root","");
if(mysqli_connect_errno($con)){
echo "Failed to connect to data server".mysqli_connect_error();
}

mysql_select_db("minor1");
$sql="select content from tcontent where id=19; ";
$result=mysql_query($sql);
echo mysql_result($result,0);

?> </a> | <a href="#"><?php
$con=mysql_connect("localhost","root","");
if(mysqli_connect_errno($con)){
echo "Failed to connect to data server".mysqli_connect_error();
}

mysql_select_db("minor1");
$sql="select content from tcontent where id=21; ";
$result=mysql_query($sql);
echo mysql_result($result,0);

?></a></small></p>
			<div contenteditable data-name="title" id="id43" class="entry">
				<blockquote>
					<p>&#8220;<?php
$con=mysql_connect("localhost","root","");
if(mysqli_connect_errno($con)){
echo "Failed to connect to data server".mysqli_connect_error();
}

mysql_select_db("minor1");
$sql="select content from tcontent where id=20; ";
$result=mysql_query($sql);
echo mysql_result($result,0);

?> &#8221;</p>
				</blockquote>
				<p><?php
$con=mysql_connect("localhost","root","");
if(mysqli_connect_errno($con)){
echo "Failed to connect to data server".mysqli_connect_error();
}

mysql_select_db("minor1");
$sql="select content from tcontent where id=22; ";
$result=mysql_query($sql);
echo mysql_result($result,0);

?></p>
			</div>
			<p contenteditable data-name="title" id="id44" class="meta"><a href="#" class="more"><?php
$con=mysql_connect("localhost","root","");
if(mysqli_connect_errno($con)){
echo "Failed to connect to data server".mysqli_connect_error();
}

mysql_select_db("minor1");
$sql="select content from tcontent where id=23; ";
$result=mysql_query($sql);
echo mysql_result($result,0);

?></a> &nbsp;&nbsp;&nbsp; <a href="#" class="comments"><?php
$con=mysql_connect("localhost","root","");
if(mysqli_connect_errno($con)){
echo "Failed to connect to data server".mysqli_connect_error();
}

mysql_select_db("minor1");
$sql="select content from tcontent where id=24; ";
$result=mysql_query($sql);
echo mysql_result($result,0);

?></a></p>
		</div>
	</div>
	<!-- end content -->
	<!-- start sidebar -->
	<div id="sidebar">
		<ul>
			<li contenteditable data-name="title" id="id5">
				<h2><?php
$con=mysql_connect("localhost","root","");
if(mysqli_connect_errno($con)){
echo "Failed to connect to data server".mysqli_connect_error();
}

mysql_select_db("minor1");
$sql="select content from tcontent where id=25; ";
$result=mysql_query($sql);
echo mysql_result($result,0);

?></h2>
				<ul>
					<li contenteditable data-name="title" id="id51"><a href="#"><?php
$con=mysql_connect("localhost","root","");
if(mysqli_connect_errno($con)){
echo "Failed to connect to data server".mysqli_connect_error();
}

mysql_select_db("minor1");
$sql="select content from tcontent where id=26; ";
$result=mysql_query($sql);
echo mysql_result($result,0);

?></a></li>
					<li contenteditable data-name="title" id="id52"><a href="#"><?php
$con=mysql_connect("localhost","root","");
if(mysqli_connect_errno($con)){
echo "Failed to connect to data server".mysqli_connect_error();
}

mysql_select_db("minor1");
$sql="select content from tcontent where id=27; ";
$result=mysql_query($sql);
echo mysql_result($result,0);

?></a></li>
					<li contenteditable data-name="title" id="id53"><a href="#"><?php
$con=mysql_connect("localhost","root","");
if(mysqli_connect_errno($con)){
echo "Failed to connect to data server".mysqli_connect_error();
}

mysql_select_db("minor1");
$sql="select content from tcontent where id=28; ";
$result=mysql_query($sql);
echo mysql_result($result,0);

?></a></li>
					<li contenteditable data-name="title" id="id54"><a href="#"><?php
$con=mysql_connect("localhost","root","");
if(mysqli_connect_errno($con)){
echo "Failed to connect to data server".mysqli_connect_error();
}

mysql_select_db("minor1");
$sql="select content from tcontent where id=29; ";
$result=mysql_query($sql);
echo mysql_result($result,0);

?></a></li>
					<li contenteditable data-name="title" id="id55"><a href="#"><?php
$con=mysql_connect("localhost","root","");
if(mysqli_connect_errno($con)){
echo "Failed to connect to data server".mysqli_connect_error();
}

mysql_select_db("minor1");
$sql="select content from tcontent where id=30; ";
$result=mysql_query($sql);
echo mysql_result($result,0);

?></a></li>
					<li contenteditable data-name="title" id="id56"><a href="#"><?php
$con=mysql_connect("localhost","root","");
if(mysqli_connect_errno($con)){
echo "Failed to connect to data server".mysqli_connect_error();
}

mysql_select_db("minor1");
$sql="select content from tcontent where id=31; ";
$result=mysql_query($sql);
echo mysql_result($result,0);

?></a></li>
				</ul>
			</li>
			<li>
				<h2 contenteditable data-name="title" id="id6"><?php
$con=mysql_connect("localhost","root","");
if(mysqli_connect_errno($con)){
echo "Failed to connect to data server".mysqli_connect_error();
}

mysql_select_db("minor1");
$sql="select content from tcontent where id=32; ";
$result=mysql_query($sql);
echo mysql_result($result,0);

?></h2>
				<ul>
					<li ><a contenteditable data-name="title" id="id61" href="#"><?php
$con=mysql_connect("localhost","root","");
if(mysqli_connect_errno($con)){
echo "Failed to connect to data server".mysqli_connect_error();
}

mysql_select_db("minor1");
$sql="select content from tcontent where id=33; ";
$result=mysql_query($sql);
echo mysql_result($result,0);

?></a> (23)</li>
					<li ><a contenteditable data-name="title" id="id62" href="#"><?php
$con=mysql_connect("localhost","root","");
if(mysqli_connect_errno($con)){
echo "Failed to connect to data server".mysqli_connect_error();
}

mysql_select_db("minor1");
$sql="select content from tcontent where id=34; ";
$result=mysql_query($sql);
echo mysql_result($result,0);

?></a> (31)</li>
					<li ><a contenteditable data-name="title" id="id631"href="#"><?php
$con=mysql_connect("localhost","root","");
if(mysqli_connect_errno($con)){
echo "Failed to connect to data server".mysqli_connect_error();
}

mysql_select_db("minor1");
$sql="select content from tcontent where id=35; ";
$result=mysql_query($sql);
echo mysql_result($result,0);

?></a> (31)</li>
					<li ><a  contenteditable data-name="title" id="id64"href="#"><?php
$con=mysql_connect("localhost","root","");
if(mysqli_connect_errno($con)){
echo "Failed to connect to data server".mysqli_connect_error();
}

mysql_select_db("minor1");
$sql="select content from tcontent where id=36; ";
$result=mysql_query($sql);
echo mysql_result($result,0);

?></a> (30)</li>
					<li ><a contenteditable data-name="title" id="id65" href="#"><?php
$con=mysql_connect("localhost","root","");
if(mysqli_connect_errno($con)){
echo "Failed to connect to data server".mysqli_connect_error();
}

mysql_select_db("minor1");
$sql="select content from tcontent where id=37; ";
$result=mysql_query($sql);
echo mysql_result($result,0);

?></a> (31)</li>
					<li ><a contenteditable data-name="title" id="id66" href="#"><?php
$con=mysql_connect("localhost","root","");
if(mysqli_connect_errno($con)){
echo "Failed to connect to data server".mysqli_connect_error();
}

mysql_select_db("minor1");
$sql="select content from tcontent where id=38; ";
$result=mysql_query($sql);
echo mysql_result($result,0);

?></a> (30)</li>
					<li ><a contenteditable data-name="title" id="id67" href="#"><?php
$con=mysql_connect("localhost","root","");
if(mysqli_connect_errno($con)){
echo "Failed to connect to data server".mysqli_connect_error();
}

mysql_select_db("minor1");
$sql="select content from tcontent where id=39; ";
$result=mysql_query($sql);
echo mysql_result($result,0);

?></a> (31)</li>
					<li ><a contenteditable data-name="title" id="id68" href="#"><?php
$con=mysql_connect("localhost","root","");
if(mysqli_connect_errno($con)){
echo "Failed to connect to data server".mysqli_connect_error();
}

mysql_select_db("minor1");
$sql="select content from tcontent where id=40; ";
$result=mysql_query($sql);
echo mysql_result($result,0);

?></a> (28)</li>
					<li ><a contenteditable data-name="title" id="id68" href="#"><?php
$con=mysql_connect("localhost","root","");
if(mysqli_connect_errno($con)){
echo "Failed to connect to data server".mysqli_connect_error();
}

mysql_select_db("minor1");
$sql="select content from tcontent where id=41; ";
$result=mysql_query($sql);
echo mysql_result($result,0);

?></a> (31)</li>
				</ul>
			</li>
		</ul>
	</div>
	<!-- end sidebar -->
</div>
<div style="clear: both; height: 30px">&nbsp;</div>
<!-- end page -->
<div contenteditable data-name="title" id="id7" id="footer">
	<p>&copy;<?php
$con=mysql_connect("localhost","root","");
if(mysqli_connect_errno($con)){
echo "Failed to connect to data server".mysqli_connect_error();
}

mysql_select_db("minor1");
$sql="select content from tcontent where id=42; ";
$result=mysql_query($sql);
echo mysql_result($result,0);

?> &nbsp;&bull;&nbsp; </p>
</div>
<div  align=center ><?php
$con=mysql_connect("localhost","root","");
if(mysqli_connect_errno($con)){
echo "Failed to connect to data server".mysqli_connect_error();
}

mysql_select_db("minor1");
$sql="select content from tcontent where id=43; ";
$result=mysql_query($sql);
echo mysql_result($result,0);

?> <a href='/index5.html'><?php
$con=mysql_connect("localhost","root","");
if(mysqli_connect_errno($con)){
echo "Failed to connect to data server".mysqli_connect_error();
}

mysql_select_db("minor1");
$sql="select content from tcontent where id=44; ";
$result=mysql_query($sql);
echo mysql_result($result,0);

?></a></div>

</body>
</html>
