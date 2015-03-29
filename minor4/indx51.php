
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />

<title>Education templates</title>

<meta name="keywords" content="" />
<meta name="description" content="" />

<link href="content.css" rel="stylesheet" type="text/css" media="screen" />
<link href="default1.css" rel="stylesheet" type="text/css" media="screen" />
<link href="js & css/content.css" rel="stylesheet" type="text/css" media="screen" />
<link href="js & css/default_education.css" rel="stylesheet" type="text/css" media="screen" />
<link href="js & css/google.css" rel="stylesheet" type="text/css" media="screen" />
<link href='http://fonts.googleapis.com/css?family=Droid+Serif' rel='stylesheet' type='text/css'>
<link href="js & css/save_bt_in_all_div.css" rel="stylesheet" type="text/css" media="screen" />

<script type="text/javascript" src="CEeditor.js"></script>
<script type="text/javascript" src="content.js"></script>
<script src="js & css/google.js" type="text/javascript"></script>
<script src="js & css/google_to.js" type="text/javascript"></script>
<script type="text/javascript" src="js & css/jquery.js"></script>
<script type="text/javascript" src="js & css/jquery2.js"></script>
<script type="text/javascript" src="js & css/mootools-1.2.4.js"></script>
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




<script>

function callme(id){
	var pcontent = $("#"+id).html();
	alert(pcontent);
			$.ajax({
				url: 'save.php',
				type: 'POST',
				data: {
                content: pcontent,
				divid: id
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



 
<body style="background-color:#996633" >





<!-- start header -->
<div id="header">

 


	<div id="logo">
	
  <!--**************************************************************************************************-->

<div id="content">
<div class="center"> 	

	<div id="content-left"> 

	<!-- SEARCH FORM -->
	<form action="https://www.google.co.in/imghp?q=en&sitesearch=ii" method="get">

	<input type="search" id="search-box" name="q" results="5" placeholder="Search..." autocomplete="on" />

	<input type="hidden" name="sitesearch"  value="" />
	<!-- SEARCH BUTTON -->
	<input id="search-submit" type="submit" value="Search"  />
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
 
 
 
		<h1 id="editor"><div id="status"></div>
		
		<div id="pcontent">
		
		<div id="editable12" contentEditable="true">
        
		<?php
			//get data from database.
			mysql_connect("localhost", "root", "") or die(mysql_error());
	         mysql_select_db("minor1") or die(mysql_error());			
			$sql = mysql_query("select text from pcontent where id='editable12'");
			$row = mysql_fetch_array($sql);			
			echo $row['text'];
		?>		
		</div>	
		
		<button id="save12" onClick="callme($(this).prev('div').attr('id'));">Save</button>
		</div>
		</h1>
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
		<p contenteditable data-name="title" id="imgid"><a href="#"><img label="img1" editable src="images/th.jpg" alt="" width="830" height="300" /></a></p>
	</div>
</div>

<!-- start page -->
<div id="page">
	<!-- start content -->
	<div id="content">
		<div class="post">
			<h1 class="title" contenteditable data-name="title" id="id31">Welcome to My Website</h1>
            
			
			
	
		
	
		<div id="status"></div>
		
		<div id="pcontent">
		
		<div id="editable" contentEditable="true">
        
		<?php
			//get data from database.
			mysql_connect("localhost", "root", "") or die(mysql_error());
	         mysql_select_db("minor1") or die(mysql_error());			
			$sql = mysql_query("select text from pcontent where id='1'");
			$row = mysql_fetch_array($sql);			
			echo $row['text'];
		?>		
		</div>	
		
		<a href="#" id="save" onClick="callme($(this).prev('div').attr('id'));">Save</a>
		</div>
		
        
			
			
		</div>
		<div class="post">
        
			<h2 contenteditable data-name="title" id="id41" class="title" >you can contact us </h2>
            
			
            
           
			<div id="status"></div>
		
		<div id="pcontent">
		
		<div id="editable1" contentEditable="true">
        
		<?php
			//get data from database.
			mysql_connect("localhost", "root", "") or die(mysql_error());
	         mysql_select_db("minor1") or die(mysql_error());			
			$sql = mysql_query("select text from pcontent where id='editable1'");
			$row = mysql_fetch_array($sql);			
			echo $row['text'];
		?>		
		</div>	
		
		<a href="#" id="save1" onClick="callme($(this).prev('div').attr('id'));">Save</a>
		</div>
        
        
			
			<div id="status"></div>
		
		<div id="pcontent">
		
		<div id="editable13" contentEditable="true">
        
		<?php
			//get data from database.
			mysql_connect("localhost", "root", "") or die(mysql_error());
	         mysql_select_db("minor1") or die(mysql_error());			
			$sql = mysql_query("select text from pcontent where id='editable13'");
			$row = mysql_fetch_array($sql);			
			echo $row['text'];
		?>		
		</div>	
		
		<a href="#" id="save13" onClick="callme($(this).prev('div').attr('id'));">Save</a>
		</div>
		
		</div>
	</div>
	<!-- end content -->
	<!-- start sidebar -->
	<div id="sidebar" style="background-color:#FFFFCC">
		<ul>
			<li contenteditable data-name="title" id="id5">
				<h2>Categories</h2>
				<ul>
					<li contenteditable data-name="title" id="id51">	
                    
                    
                    <div id="status"></div>
	                <div id="pcontent">
	                <div id="editable2" contentEditable="true">
        <?php
			//get data from database.
			mysql_connect("localhost", "root", "") or die(mysql_error());
	         mysql_select_db("minor1") or die(mysql_error());			
			$sql = mysql_query("select text from pcontent where id='editable2'");
			$row = mysql_fetch_array($sql);			
			echo $row['text'];
		?>		
		</div>	
		<a href="#" id="save3" onClick="callme($(this).prev('div').attr('id'));">Save</a>
		</div>
        
        </a></li>
        
        
					
                    <div id="status"></div>
	                <div id="pcontent">
	                <div id="editable3" contentEditable="true">
        <?php
			//get data from database.
			mysql_connect("localhost", "root", "") or die(mysql_error());
	         mysql_select_db("minor1") or die(mysql_error());			
			$sql = mysql_query("select text from pcontent where id='editable3'");
			$row = mysql_fetch_array($sql);			
			echo $row['text'];
		?>		
		</div>	
		<a href="#" id="save3" onClick="callme($(this).prev('div').attr('id'));">Save</a>
		</div>
        
        </a></li>
				    <div id="status"></div>
	                <div id="pcontent">
	                <div id="editable4" contentEditable="true">
        <?php
			//get data from database.
			mysql_connect("localhost", "root", "") or die(mysql_error());
	         mysql_select_db("minor1") or die(mysql_error());			
			$sql = mysql_query("select text from pcontent where id='editable4'");
			$row = mysql_fetch_array($sql);			
			echo $row['text'];
		?>		
		</div>	
		<a href="#" id="save4" onClick="callme($(this).prev('div').attr('id'));">Save</a>
		</div>
        
        </li>
        <li>
					      <div id="status"></div>
	                <div id="pcontent">
	                <div id="editable5" contentEditable="true">
        <?php
			//get data from database.
			mysql_connect("localhost", "root", "") or die(mysql_error());
	         mysql_select_db("minor1") or die(mysql_error());			
			$sql = mysql_query("select text from pcontent where id='editable5'");
			$row = mysql_fetch_array($sql);			
			echo $row['text'];
		?>		
		</div>	
		<a href="#" id="save5" onClick="callme($(this).prev('div').attr('id'));">Save</a>
		</div>
        </li>
					<li > 
                     <div id="status"></div>
	                <div id="pcontent">
	                <div id="editable6" contentEditable="true">
        <?php
			//get data from database.
			mysql_connect("localhost", "root", "") or die(mysql_error());
	         mysql_select_db("minor1") or die(mysql_error());			
			$sql = mysql_query("select text from pcontent where id='editable6'");
			$row = mysql_fetch_array($sql);			
			echo $row['text'];
		?>		
		</div>	
		<a href="#" id="save6" onClick="callme($(this).prev('div').attr('id'));">Save</a>
		</div>
        
        </li>
					<li> <div id="status"></div>
	                <div id="pcontent">
	                <div id="editable7" contentEditable="true">
        <?php
			//get data from database.
			mysql_connect("localhost", "root", "") or die(mysql_error());
	         mysql_select_db("minor1") or die(mysql_error());			
			$sql = mysql_query("select text from pcontent where id='editable7'");
			$row = mysql_fetch_array($sql);			
			echo $row['text'];
		?>		
		</div>	
        
		<a href="#" id="save7" onClick="callme($(this).prev('div').attr('id'));">Save</a>
		</div>
        </li>
				</ul>
			</li>
			<li>
				<div id="status"></div>
	                <div id="pcontent">
	                <div id="editable8" contentEditable="true">
        <?php
			//get data from database.
			mysql_connect("localhost", "root", "") or die(mysql_error());
	         mysql_select_db("minor1") or die(mysql_error());			
			$sql = mysql_query("select text from pcontent where id='editable8'");
			$row = mysql_fetch_array($sql);			
			echo $row['text'];
		?>		
		</div>	
        
		<a href="#" id="save8" onClick="callme($(this).prev('div').attr('id'));">Save</a>
		</div>
				<ul>
					<li ><div id="status"></div>
	                <div id="pcontent">
	                <div id="editable9" contentEditable="true">
        <?php
			//get data from database.
			mysql_connect("localhost", "root", "") or die(mysql_error());
	         mysql_select_db("minor1") or die(mysql_error());			
			$sql = mysql_query("select text from pcontent where id='editable9'");
			$row = mysql_fetch_array($sql);			
			echo $row['text'];
		?>		
		</div>	
        
		<a href="#" id="save9" onClick="callme($(this).prev('div').attr('id'));">Save</a>
		</div></li>
					<li ><div id="status"></div>
	                <div id="pcontent">
	                <div id="editable10" contentEditable="true">
        <?php
			//get data from database.
			mysql_connect("localhost", "root", "") or die(mysql_error());
	         mysql_select_db("minor1") or die(mysql_error());			
			$sql = mysql_query("select text from pcontent where id='editable10'");
			$row = mysql_fetch_array($sql);			
			echo $row['text'];
		?>		
		</div>	
        
		<a href="#" id="save10" onClick="callme($(this).prev('div').attr('id'));">Save</a>
		</div></li>
					<li ><div id="status"></div>
	                <div id="pcontent">
	                <div id="editable11" contentEditable="true">
        <?php
			//get data from database.
			mysql_connect("localhost", "root", "") or die(mysql_error());
	         mysql_select_db("minor1") or die(mysql_error());			
			$sql = mysql_query("select text from pcontent where id='editable11'");
			$row = mysql_fetch_array($sql);			
			echo $row['text'];
		?>		
		</div>	
        
		<a href="#" id="save" onClick="callme($(this).prev('div').attr('id'));">Save</a>
		</div></li>
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
