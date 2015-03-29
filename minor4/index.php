<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
	
 <head>
	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

		<title>LITTLE BOXES</title>

		<link rel="stylesheet" href="css/style.css" type="text/css" />

		<!--[if IE 6]>

			<link rel="stylesheet" href="css/ie6.css" type="text/css" />

		<![endif]-->
		
                <!--[if IE 7]>
	
		<link rel="stylesheet" href="css/ie7.css" type="text/css" />
		<![endif]-->

</head>
	




<body>
	 
	<div class="header">
	
		<div><?php
					include('loaded.php');
					session_start();
							$query = mysql_query("SELECT * FROM homepage");
							$row=mysql_fetch_assoc($query);
							
				echo'<a href="index.php" id="logo"><img src="'.$row['m1'].'" alt="logo"/></a>

				<div class="navigation">
		
			<ul class="first">
		
			<li class="first"></li>

			<li></li>
				
         		<li></li>
			</ul>
					
                    
                        <ul>
	
			<li><a href="?view=aboutus" id="demo1">About us</a></li>';
	
	
						
			echo '<li><a href="?view=welcome" id="demo2">WELCOME '.$_SESSION['login_user'].' </a></li>
							<li><a href="final.html">LOGOUT</a></li>
						</ul>
			
        		</div>
				

	
	
		</div>
			

		<div id="navigation">
				
		<ul>
	<li class="selected"><a href="index.php">'.$row['t1'].'</a></li>
	
				<li><a href="?view=apparel" id="demo3">'.$row['t2'].'</a></li>
				<li><a href="?view=bags" id="demo4">'.$row['t3'].'</a></li>
				<li><a href="?view=watches" id="demo5">'.$row['t4'].'</a></li>
					
		
				<li><a href="?view=cards" id="demo6">'.$row['t5'].'</a></li>
		
				<li><a href="?view=mugs" id="demo7">'.$row['t6'].'</a></li>
				<li><a href="?view=photoframes" id="demo8">'.$row['t7'].'</a></li>
				
				</ul>
		
		</div>
		

</div> 
		

<div id="menu_items">';
	 include "menu_items.php"; 
echo'	</div>

<div class="body" id="header2">
			
				<div class="featured" id="header4">
							<a href="#"><img src="'.$row['m2'].'" alt=""/></a>
								<div class="gallery" id="header5">
			
										<a href="#"><img src="'.$row['m3'].'" alt=""/></a>
	
										<ul class="first">
											<li><a href="#"><img src="'.$row['m4'].'" alt=""/></a></li>
											<li><a href="#"><img src="'.$row['m5'].'" alt=""/></a></li>
											<li><a href="#"><img src="'.$row['m6'].'" alt=""/></a></li>
										</ul>



										<ul>
										<li><a href="#"><img src="'.$row['m7'].'" alt=""/></a></li>
										<li><a href="#"><img src="'.$row['m8'].'" alt=""/></a></li>
										<li><a href="#"><img src="'.$row['m9'].'" alt=""/></a></li>
										</ul>
								</div>
					
					
										<div class="article" id="header3">
				
											<h3>Make This Card Yourself</h3>
												<p>';

													include_once('simple_html_dom.php');
													$link=file_get_html("http://www.splitcoaststampers.com/resources/tutorials/modifiedtri-shuttercard/");
													$e=$link->find('img');
																		//foreach($e as $f)
																		//  echo $f->src. '<br>';

																		/*$html = new simple_html_dom();

																		$a=$html->find('img');
																		foreach ($a as $b) {
																		echo $b->getAttribute('src');
																		}*/
													for($i=0;$i<=6;$i++)
														{
															$imgData = $e[$i];
															//$size = getimagesize("http://www.google.co.in/search?q=sachin&es_sm=93&source=lnms&tbm=isch&sa=X&ei=NRFEUs7NGsOLrQfShoDgCw&ved=0CAkQ_AUoAQ&biw=1364&bih=707&dpr=1#facrc=_&imgdii=_&imgrc=m_zJd6iAeHuDcM%3A%3Bhg9G8h85QbuffM%3Bhttp%253A%252F%252F3.bp.blogspot.com%252F-Kdp51htvoE8%252FUNgEUCR5_UI%252FAAAAAAAACog%252Fw-EqxRsk2pI%252Fs1600%252FSRT%252B-%252B5.jpg%3Bhttp%253A%252F%252Fwww.thewicketpost.com%252F2012%252F12%252Fbest-of-sachin-tendulkar-in-odis.html%3B420%3B488");
															mysql_connect("localhost", "root", "");
															mysql_select_db ("project");
															$sql = sprintf("INSERT INTO testblob
															(image,image_name)
															VALUES
															('%s','%s')",
																//mysql_real_escape_string($size['mime']),
															mysql_real_escape_string($imgData),
																//$size[3],
															mysql_real_escape_string("gm$i")
																			);
															mysql_query($sql);

															$link = mysql_connect("localhost", "root", "");
															mysql_select_db("project");
															$sql = "SELECT image FROM testblob WHERE image_name='gm$i'";
															$result = mysql_query($sql);
															$row = mysql_fetch_array($result);
															$image = $row['image'];
																	//$image_type= $row['image_type'];
																	//header("Content-type: $image_type");
																	//$img_get= mysql_result($result, 0);
																	//echo "<br><br>";
																	//echo $img_get;
															echo $image;
															echo "&nbsp&nbsp";
														}

													$sql="delete from testblob";
												mysql_query($sql);
											echo'	</p>
				
				
										</div>
					
					</div>
</div>';
			
?>


	<script type="text/javascript">
addLoadListener(getURL);

function getURL() {

	if (location.hash) {
		ajaxInitiate(location.hash.replace("#","")+".php");
	}

	var myLinksCollection = document.getElementsByTagName("a");

	for (i=0;i<myLinksCollection.length;i++) {
		myLinksCollection[i].onclick = function() {
			if (this.href.indexOf("view=") !== -1) {
				var clickedHREF = this.href;
				var clickedView = clickedHREF.split("view=");
				ajaxInitiate(clickedView[1]+'.php');
				location.hash = clickedView[1];
				return false;
			}
		}
	}

}

function ajaxInitiate(currentFile) {
var ajaxCapable = getXhrObject();
if (ajaxCapable) {
	ajaxCapable.onreadystatechange = function() {
		serverResponse(ajaxCapable);
	};
	ajaxCapable.open("POST", currentFile, true);
	ajaxCapable.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	ajaxCapable.send(null);
	}
	else {
		document.getElementById("menu_items").innerHTML += "Your Browser Does not Support Ajax. To view this page, please disable JavaScript.";
	}
}

function serverResponse(ajaxCapable) {
	if (ajaxCapable.readyState == 4) {
		if (ajaxCapable.status == 200 || ajaxCapable.status == 404) {
			document.getElementById("menu_items").innerHTML = ajaxCapable.responseText;
		}
	}
}

function getXhrObject() {  
	var xhrObject = false;
	// Most browsers (including IE7-IE8) use the 3 lines below
	if (window.XMLHttpRequest) {
		xhrObject = new XMLHttpRequest();
	}
	// Internet Explorer 5/6 will use one of the following
	else if (window.ActiveXObject) {
		try {   
		xhrObject = new ActiveXObject("Msxml2.XMLHTTP");
			} catch(err) {
				try {
				xhrObject = new ActiveXObject("Microsoft.XMLHTTP");
				} catch(err) {
				xhrObject = false;
				}
		}
	}
	return xhrObject;
}

// The code below is the load listener that helps run multiple events on the same page. All JS libraries have this built in.

</script>


<script>
$(document).ready(function(){
$("#demo1").click(function(){
$("#header2").hide();
$("#header3").hide();
$("#header4").hide();
$("#header5").hide();

});
});
 </script>
 
<script>
$(document).ready(function(){
$("#demo2").click(function(){
$("#header2").hide();
$("#header3").hide();
$("#header4").hide();
$("#header5").hide();
  });
  });
  </script>
   <script>
$(document).ready(function(){
$("#demo3").click(function(){
$("#header2").hide();
$("#header3").hide(); 
$("#header4").hide();
$("#header5").hide();
  });
  });
  </script> 
  
  <script>
$(document).ready(function(){
$("#demo4").click(function(){
$("#header2").hide();
$("#header3").hide();
$("#header4").hide();
$("#header5").hide();
  });
  });
  </script>

  <script>
$(document).ready(function(){
$("#demo5").click(function(){
$("#header2").hide();
$("#header3").hide();
$("#header4").hide();
$("#header5").hide();
  });
  });
  </script> 
  
  <script>
$(document).ready(function(){
$("#demo6").click(function(){
$("#header2").hide();
$("#header3").hide();
$("#header4").hide();
$("#header5").hide();
  });
  });
  </script> 
  
  <script>
$(document).ready(function(){
$("#demo7").click(function(){
$("#header2").hide();
$("#header3").hide(); 
$("#header4").hide();
$("#header5").hide();
  });
  });
  </script> 
  
  <script>
$(document).ready(function(){
$("#demo8").click(function(){
$("#header2").hide();
$("#header3").hide(); 
$("#header4").hide();
$("#header5").hide();
  });
  });
  </script>
</body>

</html>