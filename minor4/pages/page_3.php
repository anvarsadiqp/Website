








<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
        "http://www.w3.org/TR/html4/strict.dtd">
<!--html lang="en">

<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
    
	<title>sound squirt pricing table</title>
    
<style type="text/css">

.cssguycomments {background:#eee;border:#ddd;padding:8px;margin-bottom:40px;}
.cssguycomments p {font:normal 12px/18px verdana;}

a img {border:0;vertical-align:text-bottom;}
table {border-collapse:collapse;}
th.side {
	background: transparent url(price_table/crazyegg/i/bg_th_side.gif) no-repeat bottom left;
}
td.side {
	text-align:right;
	background: transparent url(price_table/crazyegg/i/bg_td_side.gif) no-repeat bottom left;
	width:180px;
	font:bold 12px/15px verdana;
	color:#6e6f37;
	padding-right:8px;
}

th {
	height:64px;
	border-right:1px solid #fff;
	vertical-align:bottom;
	color:#fff;
	font:normal 21px/27px arial;
	letter-spacing:2px;
	background:transparent url(price_table/crazyegg/i/bg_th.gif) no-repeat bottom left;
	}
td {
	text-align:center;
	background:transparent url(price_table/crazyegg/i/bg_td.gif) no-repeat bottom left;
	border-right:1px solid #fff;
	color:#fff;
	width:108px;
	height:40px;
	font:bold 12px/18px verdana;
}
td.on {background:transparent url(price_table/crazyegg/i/bg_td_on.gif) no-repeat bottom left;}
th.on {
	background:transparent url(price_table/crazyegg/i/bg_th_on.gif) no-repeat bottom left;
	padding-bottom:9px;
	width:148px;
}

tfoot td {
	background:transparent url(price_table/crazyegg/i/bg_foot_td.gif) no-repeat top left;
	height:64px;
	vertical-align:top;
	padding-top:8px;
}
tfoot td.on {
	background:transparent url(price_table/crazyegg/i/bg_foot_td_on.gif) no-repeat top left;
	padding-top:16px;
}
tfoot td.side {background: transparent url(price_table/crazyegg/i/bg_foot_td_side.gif) no-repeat top left;}

#formcontainer {
	width:443px;
	height:239px;
	background:transparent url(price_table/crazyegg/i/bg_form.gif) no-repeat top left;
	position:absolute;
	top:24px;
	left:341px;
}
#formcontainer form {
	padding:8px 10px;
	margin:0;
}
#formcontainer h2 {
	margin:0;
	padding:0 0 14px 0;
	font:bold 21px/27px arial;
	color:#fff;
}
#formcontainer fieldset {
	border:none;
	padding:0;
}
#formcontainer label {
	display:block;
	float:left;
	font:bold 12px/18px verdana;
	color:#fff;
	padding-bottom:12px;
}
#formcontainer label.email {
	width:350px;
}
#formcontainer label.email input {
	width:340px;
}
#formcontainer label.password {
	clear:left;
	padding-right:40px;
}
#formcontainer label.password input,
#formcontainer label.retype input {
	width:150px;
}
#formcontainer fieldset.buttons {
	padding-top:0px;
	clear:left;
}
#prices {
	position:relative;
}

</style>

<!-- because ie is a little different with its positioning... -->
<!--[if lte IE 8]>
<style type="text/css">
#formcontainer {
	top:34px;
}
</style>
<![endif]>

<script type="text/javascript">
/*
	For functions getElementsByClassName, addClassName, and removeClassName
	Copyright Robert Nyman, http://www.robertnyman.com
	Free to use if this text is included
*/
function getElementsByClassName(className, tag, elm){
	var testClass = new RegExp("(^|\\s)" + className + "(\\s|$)");
	var tag = tag || "*";
	var elm = elm || document;
	var elements = (tag == "*" && elm.all)? elm.all : elm.getElementsByTagName(tag);
	var returnElements = [];
	var current;
	var length = elements.length;
	for(var i=0; i<length; i++){
		current = elements[i];
		if(testClass.test(current.className)){
			returnElements.push(current);
		}
	}
	return returnElements;
}

function addClassName(elm, className){
    var currentClass = elm.className;
    if(!new RegExp(("(^|\\s)" + className + "(\\s|$)"), "i").test(currentClass)){
        elm.className = currentClass + ((currentClass.length > 0)? " " : "") + className;
    }
    return elm.className;
}

function removeClassName(elm, className){
    var classToRemove = new RegExp(("(^|\\s)" + className + "(\\s|$)"), "i");
    elm.className = elm.className.replace(classToRemove, "").replace(/^\s+|\s+$/g, "");
    return elm.className;
}

function hasClass(el, c) {
  if (!el || !el.className.length) return;
  var bits = el.className.split(' '), has = false;
  for (var j = 0; j < bits.length; j++) if (bits[j] === c) has = true;
  return has;
}

function activateThisColumn(column) {
  var table = document.getElementById('pricetable');
  var form = document.getElementById('formcontainer');

  // first, remove the 'on' class from all other th's
  var ths = table.getElementsByTagName('th');
  for (var g=0; g<ths.length; g++) {
    removeClassName(ths[g], 'on');
    if (!hasClass(ths[g],'side')) {
      ths[g].style.display = 'none';
    }
  }
  // then, remove the 'on' class from all other td's
  var tds = table.getElementsByTagName('td');
  for (var m=0; m<tds.length; m++) {
    removeClassName(tds[m], 'on');
    if (!hasClass(tds[m],'side')) {
      tds[m].style.display = 'none';
    }
  }

  // now, add the class 'on' to the selected th
  var newths = getElementsByClassName(column, 'th', table);
  for (var h=0; h<newths.length; h++) {
    addClassName(newths[h], 'on');
    newths[h].style.display = '';
    // not all browsers like display = 'block' for cells
  }
    // and finally, add the class 'on' to the selected td
  var newtds = getElementsByClassName(column, 'td', table);
  for (var i=0; i<newtds.length; i++) {
    addClassName(newtds[i], 'on');
    newtds[i].style.display = '';
    // not all browsers like display = 'block' for cells
  }
  // show the form!
  form.style.display = 'block';
}

function hideTheForm() {
	// get the form
	var form = document.getElementById('formcontainer');
	// hide the form
	form.style.display = 'none';
	
	// now get the hidden table cells and show them again
	var table = document.getElementById('pricetable');
	var tds = table.getElementsByTagName('td');
	for (var i=0; i<tds.length; i++) {
		tds[i].style.display = '';
	}
	var ths = table.getElementsByTagName('th');
	for (var k=0; k<ths.length; k++) {
		ths[k].style.display = '';
	}
}



</script>

</head>
<body>
<?php
include_once("simple_html_dom.php");


$html = new simple_html_dom();

	$query_URL = "file:///C:/xampp/htdocs/minor4/pages/page_3.html";
	$html->load_file($query_URL);
	//echo $html;
	
	
	
$database="minor1";
$username="root";
$password="";
$server="localhost";
$debug=true;

$con=mysqli_connect($server,$username,$password,$database);
	// Check connection
	if (mysqli_connect_errno())
	  {
	  	if($debug) echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  }
	  
	  $web_data=$html; 
			
			$web_data= base64_encode($web_data);  
			 $value = "INSERT INTO page3(content) Values ('$web_data');";
	
			  if(mysqli_query($con,$value)){
					if($debug) echo "Successfully inserted data. URLS<br>";
				}
				else {
					if($debug) echo "Problemn in inserting data. URLS<br>";	
				}


	$result = mysqli_query($con,"SELECT * FROM page3;");
	 
	 $result = mysqli_fetch_array($result);
	 $data=$result['content'];
	 $data = base64_decode($data);
	 
	 echo $data;
	 
	



?>

<div id="heading">
<p><h1 align="center"><b>PREMIUM PLANS</b></h1></p>
<p><h2 align="center">Siteinnovo gives 100s of templates, unlimited pages & top grade hosting FREE<br>
                  Upgrade to Premium and get even more</h2></p>
</div>

<div id="prices">
<div id="formcontainer" style="display:none;">
	<form action="#">
		<h2>Get an account!</h2>
		<fieldset>
			<label for="email" class="email">
				Email<br />
				<input id="email" type="text" />
			</label>
			<label for="crazypassword" class="password">
				Password<br />
				<input id="crazypassword" type="password" />
			</label>
			<label for="retype" class="retype">
				Retype Password<br />
				<input id="retype" type="password" />
			</label>
            
            <!--**********************************-->
            <!--label for="period" class="period">
				Time<br />
				<input id="period" type="text" />
			</label>
            <!--*************************************-->
		<!--/fieldset>
		<fieldset class="buttons">
			<input
				type="image"
				alt="Cancel"
				src="price_table/crazyegg/i/button_cancel.gif"
				onclick="hideTheForm();return false;" />
			<input
				type="image"
				alt="Submit"
				src="price_table/crazyegg/i/button_submit.gif"
				onclick="return false;" />
		</fieldset>
	</form>
</div>

<table id="pricetable">
	<thead>
		<tr>
			<th class="side">&nbsp;</th>
			<th class="choiceA">Business</th>
			<th class="choiceB">Cafe</th>
			<th class="choiceC on">Education</th>
			<th class="choiceD">Medical</th>
			<th class="choiceE">Free</th>
		</tr>
	</thead>
	<tfoot>
		<tr>
			<td class="side">&nbsp;</td>
			<td class="choiceA"><a href="price_table/crazyegg/signUpChoiceA.html" onclick="activateThisColumn('choiceA');return false;"><img src="price_table/crazyegg/i/choose.gif" alt="Choose" /></a></td>
			<td class="choiceB"><a href="price_table/crazyegg/signUpChoiceB.html" onclick="activateThisColumn('choiceB');return false;"><img src="price_table/crazyegg/i/choose.gif" alt="Choose" /></a></td>
			<td class="choiceC on"><a href="price_table/crazyegg/signUpChoiceC.html" onclick="activateThisColumn('choiceC');return false;"><img src="price_table/crazyegg/i/choose.gif" alt="Choose" /></a></td>
			<td class="choiceD"><a href="price_table/crazyegg/signUpChoiceD.html" onclick="activateThisColumn('choiceD');return false;"><img src="price_table/crazyegg/i/choose.gif" alt="Choose" /></a></td>
			<td class="choiceE"><a href="price_table/crazyegg/signUpChoiceE.html" onclick="activateThisColumn('choiceE');return false;"><img src="price_table/crazyegg/i/choose.gif" alt="Choose" /></a></td>
		</tr>
	</tfoot>
	<tbody>
		<tr>
			<td class="side">Weekly Price</td>
			<td class="choiceA">$4</td>
			<td class="choiceB">$4</td>
			<td class="choiceC on">$5</td>
			<td class="choiceD">$4</td>
			<td class="choiceE">Free of Cost</td>
		</tr>
		<tr>
			<td class="side">Monthly Price</td>
			<td class="choiceA">$12</td>
			<td class="choiceB">$12</td>
			<td class="choiceC on">$15</td>
			<td class="choiceD">$12</td>
			<td class="choiceE">&nbsp;</td>
		</tr>
		<tr>
			<td class="side">Yearly Price</td>
			<td class="choiceA">$100</td>
			<td class="choiceB">$100</td>
			<td class="choiceC on">$140</td>
			<td class="choiceD">$100</td>
			<td class="choiceE">&nbsp;</td>
		</tr>
		<tr>
			<td class="side">5 years price</td>
			<td class="choiceA">$490</td>
			<td class="choiceB">$490</td>
			<td class="choiceC on">$500</td>
			<td class="choiceD">$490</td>
			<td class="choiceE">&nbsp;</td>
		</tr>
	</tbody>
</table>
</div>

</body>
</html-->
