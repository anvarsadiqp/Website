<!doctype html>
<head>
<meta charset="utf-8">
<title>text save to data base </title>


  <link href="save_bt_in_all_div.css" rel="stylesheet" type="text/css" media="screen" />
  
  <script src="jquery.js" type="text/javascript"></script>
 <script src="jquery2.js" type="text/javascript"></script>
  <script src="jqueryD&D.js" type="text/javascript"></script>
</head>
<body>
	<div id="wrap">
	
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
		
		<button id="save" onClick="alert('Hello');">Save</button>
		</div>
		</div>
        
        
        
</body>
</html>