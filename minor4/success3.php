
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />

<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="default1.css" rel="stylesheet" type="text/css" media="screen" />

<link href="content.css" rel="stylesheet" type="text/css" media="screen" />
<script type="text/javascript" src="content.js"></script>
<script type="text/javascript" src="CEeditor.js"></script>


<!--*******************************************************************************-->
<style type="text/css"> 
/* results positioning */
#search-results	{
 position:absolute;
 z-index:90; top:40px; left:10px; visibility:hidden;
 }
/* triangle! */
#search-results-pointer {
 width:0px; height:0px; border-left:20px solid transparent;
 border-right:20px solid transparent;
 border-bottom:20px solid #eee; 
 margin-left:10%; }
/* content DIV which holds search results! */
#search-results-content { position:relative; padding:20px; background:#fff; border:3px solid #eee; width:380px; min-height:200px; -webkit-box-shadow: 5px 5px 5px rgba(0, 0, 0, 0.5) }
</style>
<!--*********************************************************************************-->

</head>
<body >



<?php

mysql_connect("localhost","root","")
or
die("server not found");
mysql_select_db("minor1");
if(isset($_POST['submitt']))
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



 


<!-- start header -->
<div id="header">

 <!--**************************************************************************************************-->

<div id="content">
<div class="center"> 	

	<div id="content-left"> 

	<!-- SEARCH FORM -->
	<form action="http://www.google.com/search" method="get">
		<!-- HTML5 SEARCH BOX!  -->
		<input type="search" id="search-box" name="q" results="5" placeholder="Search..." autocomplete="off" />
		<!-- SEARCH byman.it ONLY! -->
		<input type="hidden" name="sitesearch" value="byman.it" />
		<!-- SEARCH BUTTON -->
		<input id="search-submit" type="submit" value="Search" />	
	</form>
	<div id="search-area" style="position:relative;">	
	</div> 
	
	</div>
	<!-- end Left right -->

	<!-- right -->
	<div id="content-right"> 	
	</div> 

</div>
</div> 
<!-- Fine Center-Content -->

<!-- ASYNCHRONOUSLY LOAD THE AJAX SEARCH API;  MOOTOOLS TOO! -->
<script type="text/javascript" src="http://www.google.com/jsapi?key=ABQIAAAAvvbgB1Zts4DoSq69a0elsBT2RN6ma1qPgh7hA7S-soq3zlPoeRRCIML6nHhGrYWNoVBPhVa6Aj1lZA"></script> 


<script type="text/javascript">
	google.load('mootools','1.2.4');
	google.load('search','1');
</script>
	
    
    
<script type="text/javascript">	

window.addEvent('domready',function(){

	/* search */
	var searchBox = $('search-box'), searchLoaded=false, searchFn = function() {
		/*
			We're lazyloading all of the search stuff.
			After all, why create elements, add listeners, etc. if the user never gets there?
		*/
		if(!searchLoaded) {
			searchLoaded = true; //set searchLoaded to "true"; no more loading!			
			//build elements!
			var container = new Element('div',{ id: 'search-results' }).inject($('search-area'),'after');
			var wrapper = new Element('div',{
				styles: {
					position: 'relative'
				}
			}).inject(container);
			new Element('div',{ id: 'search-results-pointer' }).inject(wrapper);
			var contentContainer = new Element('div',{ id: 'search-results-content' }).inject(wrapper);
			var closer = new Element('a', {
				href: 'javascript:;',
				text: 'Close',
				styles: {
					position: 'absolute', //position the "Close" link
					bottom: 35,
					right: 20
				},
				events: {
					click: function() {
						container.fade(0);
					}
				}
			}).inject(wrapper);

			//google interaction
			var search = new google.search.WebSearch(),
				control = new google.search.SearchControl(),
				options = new google.search.DrawOptions();

			//set google options
			options.setDrawMode(google.search.SearchControl.DRAW_MODE_TABBED);
			options.setInput(searchBox);
			
			//set search options
			search.setUserDefinedClassSuffix('siteSearch');
			search.setSiteRestriction('google.com');
			search.setLinkTarget(google.search.Search.LINK_TARGET_SELF);
			
			//set search controls
			control.addSearcher(search);
			control.draw(contentContainer,options);
			control.setNoResultsString('No results were found.');

			//add listeners to search box
			searchBox.addEvents({
				keyup: function(e) {
					if(searchBox.value && searchBox.value != searchBox.get('placeholder')) {
						container.fade(0.9);
						control.execute(searchBox.value);
					}
					else {
						container.fade(0);
					}
				}
			});
			searchBox.removeEvent('focus',searchFn);
		}
	};
	
	searchBox.addEvent('focus',searchFn);
	
});

</script>

 <!--*****************************************************************************************************--->
	<div id="logo">
	
 
		<h1 id="editor"><a href="#">
         

</a></h1>
		
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
