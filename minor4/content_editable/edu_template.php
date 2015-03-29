`<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">


<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />

<title>Education templates</title>

<meta name="keywords" content="" />

<meta name="description" content="" />

<link href="css/default_education.css" rel="stylesheet" type="text/css" media="screen" />

<link href="content.css" rel="stylesheet" type="text/css" media="screen" />

<script type="text/javascript" src="content.js"></script>
<script type="text/javascript" src="CEeditor.js"></script>
<script type="text/javascript" src="jquery/jqueryD&D.js"></script>
<script src="jquery/jquery.js" type="text/javascript"></script>
 <script src="jquery/jquery2.js" type="text/javascript"></script>
 <script src="jquery/jqueryD&D.js" type="text/javascript"></script>
 <link href='http://fonts.googleapis.com/css?family=Droid+Serif' rel='stylesheet' type='text/css'>
  <link href="css/save_bt_in_all_div.css" rel="stylesheet" type="text/css" media="screen" />



<script>

function callme(id){
	var content = $('#editable').html();
			$.ajax({
				url: 'save.php',
				type: 'POST',
				data: {
                content: content
				},				
				success:function (data) {
							
					if (data == '1')
					{
						$("#status")
						.addClass("success")
						.html("Data saved successfully")
						.fadeIn('fast')
						.delay(3000)
						.fadeOut('slow');	
					}
					else
					{
						$("#status")
						.addClass("error")
						.html("An error occured, the data could not be saved")
						.fadeIn('fast')
						.delay(3000)
						.fadeOut('slow');	
					}
				}
			});   
}

</script>
</head>
<body >

<!-- start header -->
<div id="header">

	<div id="logo">
	
 
		<h1 id="editor"><a href="#">Home</a></h1>
		
	</div>
    <!--*******************************menu div****************************************-->
	<div id="menu">
		<ul>
			<li contenteditable data-name="title" id="id21" class="active"><a href="#" accesskey="1" title="">Home</a></li>
			<li contenteditable data-name="title" id="id22"><a href="#" accesskey="2" title="">Course</a></li>
			<li contenteditable data-name="title" id="id23"><a href="#" accesskey="3" title="">Notics</a></li>
			<li contenteditable data-name="title" id="id24"><a href="#" accesskey="4" title="">About</a></li>
			<li contenteditable data-name="title" id="id25"><a href="#" accesskey="5" title="">Contact</a></li>
		</ul>
	</div>
</div>
<!-- end header -->
<div id="gallery">
	<div id="top-photo" >
		<p contenteditable data-name="title" id="imgid"><a href="#"><img label="img1" editable src="images/importance_of_education_1.jpg" alt="" width="830" height="300" /></a></p>
	</div>
</div>

<!-- start page -->
<div id="page">
	<!-- start content -->
	<div id="content">
		<div class="post">
			<h1 class="title" contenteditable data-name="title" id="id31">Welcome to My Website</h1>
            
			<p contenteditable data-name="title" id="id32" class="byline"><small>Posted on August 25th, 2007 by <a href="#">admin</a> | <a href="#">Edit</a></small></p>
			
	
		
	
		<div id="status"></div>
		
		<div id="content">
		
		<div id="editable" contentEditable="true">
        
		<?php
			//get data from database.
			mysql_connect("localhost", "root", "") or die(mysql_error());
	         mysql_select_db("test1") or die(mysql_error());			
			$sql = mysql_query("select text from content where element_id='2'");
			$row = mysql_fetch_array($sql);			
			echo $row['text'];
		?>		
		</div>	
		
		<button id="save" onClick="callme($(this).prev('div').attr('id'));">Save</button>
		</div>
		
        
			
			<p contenteditable data-name="title" id="id34" class="meta"><a href="#" class="more">Read More</a> &nbsp;&nbsp;&nbsp; <a href="#" class="comments">Comments (33)</a></p>
		</div>
		<div class="post">
			<h2 contenteditable data-name="title" id="id41" class="title" >Risus Pellentesque Pharetra</h2>
			<p contenteditable data-name="title" id="id42" class="byline"><small>Posted on August 25th, 2007 by <a href="#">admin</a> | <a href="#">Edit</a></small></p>
			<div contenteditable data-name="title" id="id43" class="entry">
				<blockquote>
					<p>&#8220;Praesent augue mauris, accumsan eget, ornare quis, consequat malesuada, leo.&#8221;</p>
				</blockquote>
				<p>Maecenas pede nisl, elementum eu, ornare ac, malesuada at, erat. Proin gravida orci porttitor enim accumsan lacinia. Donec condimentum, urna non molestie semper, ligula enim ornare nibh, quis laoreet eros quam eget ante.</p>
			</div>
			<p contenteditable data-name="title" id="id44" class="meta"><a href="#" class="more">Read More</a> &nbsp;&nbsp;&nbsp; <a href="#" class="comments">Comments (33)</a></p>
		</div>
	</div>
	<!-- end content -->
	<!-- start sidebar -->
	<div id="sidebar">
		<ul>
			<li contenteditable data-name="title" id="id5">
				<h2>Categories</h2>
				<ul>
					<li contenteditable data-name="title" id="id51"><a href="#">Computer science</a></li>
					<li contenteditable data-name="title" id="id52"><a href="#">History</a></li>
					<li contenteditable data-name="title" id="id53"><a href="#">medical</a></li>
					<li contenteditable data-name="title" id="id54"><a href="#">B.B.A</a></li>
					<li contenteditable data-name="title" id="id55"><a href="#">Law</a></li>
					<li contenteditable data-name="title" id="id56"><a href="#">Arts</a></li>
				</ul>
			</li>
			<li>
				<h2 contenteditable data-name="title" id="id6">Archives</h2>
				<ul>
					<li ><a contenteditable data-name="title" id="id61" href="#">September</a> (23)</li>
					<li ><a contenteditable data-name="title" id="id62" href="#">August</a> (31)</li>
					<li ><a contenteditable data-name="title" id="id631"href="#">July</a> (31)</li>
					<li ><a  contenteditable data-name="title" id="id64"href="#">June</a> (30)</li>
					<li ><a contenteditable data-name="title" id="id65" href="#">May</a> (31)</li>
					<li ><a contenteditable data-name="title" id="id66" href="#">April</a> (30)</li>
					<li ><a contenteditable data-name="title" id="id67" href="#">March</a> (31)</li>
					<li ><a contenteditable data-name="title" id="id68" href="#">February</a> (28)</li>
					<li ><a contenteditable data-name="title" id="id68" href="#">January</a> (31)</li>
				</ul>
			</li>
		</ul>
	</div>
	<!-- end sidebar -->
</div>
<div style="clear: both; height: 30px">&nbsp;</div>
<!-- end page -->
<div contenteditable data-name="title" id="id7" id="footer">
	<p>&copy;2007 All Rights Reserved. &nbsp;&bull;&nbsp; </p>
</div>
<div  align=center >This template is provided by <a href='index5k.html'>siteInnovio.com</a></div>

</body>
</html>
