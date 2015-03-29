
<meta name="keywords" content="" />
<meta name="description" content="" />

<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800" rel="stylesheet" />
<link href="footerstyle.css" rel="stylesheet" type="text/css" media="all" />
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />
<link type="text/css" rel="stylesheet" href="css/login.css">
<link rel='stylesheet' href='js-form-validation.css' type='text/css' />
<link href="css/manu.css" rel="stylesheet" type="text/css" media="all" />
<link href="price.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/styles.css">
<link rel="stylesheet" href="css/styles_signup.css">
<script src="sample-registration-form-validation.js"></script>
<script type="text/javascript" src="jquery-1.7.1.min.js"> </script>
<script type="text/javascript" src="jquery.slidertron-1.3.js"></script>
<script type="text/javascript" src="script.js"></script>
<script type="text/javascript" src="price.js"></script>
<script type="text/javascript">
	function showMenu(cv)
{ 
	$("#content").html("loading...").show();
var url="page6.php";
$.post(url,{contentVar:cv},function(data)
{$("#content").html(data).show();
})
}
	
</script>	
	
  <style type="text/css">
  #popupbox{
  margin: 0; 
  margin-left: 40%; 
  margin-right: 40%;
  margin-top: 50px; 
  padding-top: 10px; 
  width: 20%; 
  height: 150px; 
  position: absolute; 
  
  z-index: 9; 
  font-family: arial; 
  visibility: hidden; 
  }
  
   #popupbox2{
  margin: 0; 
  margin-left: 40%; 
  margin-right: 40%;
  margin-top: 50px; 
  padding-top: 10px; 
  width: 20%; 
  height: 150px; 
  position: absolute; 
  
  z-index: 9; 
  font-family: arial; 
  visibility: hidden; 
  }
  </style>
  <script type="text/javascript">

  $(document).ready(function() {
  
  $('#username').on('blur', checkdb);
  
function checkdb(){ 

    var q = $(this).val();
    $.ajaxSetup({
        url: "getcheck.php",
        type: "POST",
    });

    $.ajax({
        data: 'q='+q,       
        success: function (msg) {
            var use=msg;
              
                     if(use==1)
					 {
document.getElementById("pas2").innerHTML= "user name exists";
					 $(#submitt).css("disabled:true");
                         }
					 else
					 {
					 

document.getElementById("pas2").innerHTML= " ";
	
					 

document.getElementById('submitt').disabled=false;
					 }
			  },
            error: function (XMLHttpRequest, textStatus, errorThrown){   
            alert('Error submitting request.'); 
        }   
    });     
}           
});
</script>   
 <script type="text/javascript">

  $(document).ready(function() {
  
  $('#email').on('blur', checkdb);
  
function checkdb(){ 

    var q = $(this).val();
    $.ajaxSetup({
        url: "getcheck1.php",
        type: "POST",
    });

    $.ajax({
        data: 'q='+q,       
        success: function (msg) {
            var shi=msg;
              
                     if(shi==1)
					 {
					 
document.getElementById("pas1").innerHTML= "email alerady exist exists";
					 

document.getElementById('submitt').disabled=true;
                         }
					 else
					 {
					 

document.getElementById("pas1").innerHTML= " ";
	
					 

document.getElementById('submitt').disabled=false;
					 }
			  },
            error: function (XMLHttpRequest, textStatus, 

errorThrown){   
            alert('Error submitting request.'); 
        }   
    });     
}           
});
</script>
 <script type="text/javascript">

  $(document).ready(function() {
  
  $('#username').on('blur', checkdb);
  
function checkdb(){ 

    var q = $(this).val();
    $.ajaxSetup({
        url: "getcheck2.php",
        type: "POST",
    });

    $.ajax({
        data: 'q='+q,       
        success: function (msg) {
            var use=msg;
              
                     if(use==1)
					 {
document.getElementById("use").innerHTML= "";
					 

document.getElementById('submit1').disabled=false;
                         }
					 else
					 {
					 

document.getElementById("use").innerHTML= "username doesnot  exists ";
	
					 

document.getElementById('submit1').disabled=true;
					 }
			  },
            error: function (XMLHttpRequest, textStatus, errorThrown){   
            alert('Error submitting request.'); 
        }   
    });     
}           
});
</script>
<script type="text/javascript">

  $(document).ready(function() {
  
  $('#username').on('blur', checkdb);
  
function checkdb(){ 

    var q = $(this).val();
    $.ajaxSetup({
        url: "getcheck3.php",
        type: "POST",
    });

    $.ajax({
        data: 'q='+q,       
        success: function (msg) {
            var use=msg;
              
                     if(use==1)
					 {
document.getElementById("pass").innerHTML= "";
					 

document.getElementById('submit1').disabled=false;
                         }
					 else
					 {
					 

document.getElementById("pass").innerHTML= "PASSWORD doesnot  exists ";
	
					 

document.getElementById('submit1').disabled=true;
					 }
			  },
            error: function (XMLHttpRequest, textStatus, errorThrown){   
            alert('Error submitting request.'); 
        }   
    });     
}           
});
</script>
.


<script language="JavaScript" type="text/javascript">

  function login(showhide){
    if(showhide == "show"){
        document.getElementById('popupbox').style.visibility="visible";
    }else if(showhide == "hide"){
        document.getElementById('popupbox').style.visibility="hidden"; 
    }
  }
  </script>
    <script language="JavaScript" type="text/javascript">
  function premium(showhide){
    if(showhide == "show"){
        document.getElementById('popupbox1').style.visibility="visible";
    }else if(showhide == "hide"){
        document.getElementById('popupbox1').style.visibility="hidden"; 
    }
  }
  </script>
   </script>
    <script language="JavaScript" type="text/javascript">
  function signup(showhide){
    if(showhide == "show"){
        document.getElementById('popupbox2').style.visibility="visible";
    }else if(showhide == "hide"){
        document.getElementById('popupbox2').style.visibility="hidden"; 
    }
  }
  

function checkform()
{
var uname=document.getElementById("username1").value;
var pname=document.getElementById("password1").value;
if(uname.length==0)
return false;
if(pname.length==0) return false;
return true;

</script>
 <!--********************************Email validation *********************--> 
 
  <script language="javascript">

function checkEmail() {

    var Email = document.getElementById('Email');
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

    if (!filter.test(Email.value)) {
    alert('Please provide a valid Email address');
    Email.focus;
    return false;
 }
}</script>





<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->

</head>
<body>
<div id="header-wrapper">
	<div id="header" class="container">
		<div id="logo">
			
		</div>
		<div id="menu">
			<ul>
				<li class="icon icon-ok"><a href="javascript:signup('show');" accesskey="1" title="">
				<?php
$con=mysql_connect("localhost","root","");
if(mysqli_connect_errno($con)){
echo "Failed to connect to data server".mysqli_connect_error();
}

mysql_select_db("minor1");
$sql="select name from menu where id=6; ";
$result=mysql_query($sql);
echo mysql_result($result,0);

?>
				 </a></li>
				
				
				<li class="icon icon-ok"><a href="javascript:login('show');" accesskey="2" title="">
				<?php
$con=mysql_connect("localhost","root","");
if(mysqli_connect_errno($con)){
echo "Failed to connect to data server".mysqli_connect_error();
}

mysql_select_db("minor1");
$sql="select name from menu where id=2; ";
$result=mysql_query($sql);
echo mysql_result($result,0);

?>
				</a></li>
				
			</ul>
		</div>
	</div>
</div>
<?php

mysql_connect("localhost","root","");
//or
//die("server not found");
mysql_select_db("minor1");
if(isset($_POST['username1'])&&isset($_POST['password1'])){

$username = $_POST['username1'];
$password = $_POST['password1'];


//echo $username;
//echo $password;

if(!empty($username1)&&!empty($password1)){
    
    $sql="SELECT id FROM login WHERE `username`='$username1' and `password`='$password1'";
    $result=mysql_query($sql);
    
    $count=mysql_num_rows($result);
    
    if($count==1){
        $user_id = mysql_result($result,0,'id');
        $_SESSION['user_id']=$user_id;
        header('Location:http://localhost/minor4/success3.php');
	}
    else {
            echo "Wrong Username or Password";
    } 
}

else
    echo "You must supply username and password";

}

?>




<div id="popupbox"> 
	<div id="container">
	
		
		<form action="indx51.php" method="post" onsubmit="return checkform()">
		
		<label for="name">username:</label>
		
		<input type="name" name="username1" id="username1">
		<div id="use"></div>
		
		<label for="username">Password:</label>
		
		<p><a href="#">Forgot your password?</a>
		
		<input type="password" name="password1" id="password1">
		<div id="pass"></div>
		
		<div id="lower">
		
		<input type="checkbox"><label class="check" for="checkbox">Keep me logged in</label>
		
		<input type="submit" value="Login" name="submit1" id="submitl">
		<center><a href="javascript:login('hide');">close</a></center> 
		</div>
		
		</form>
		
	</div>
<br />


</div> 





<!-- ****************************************************************************************************************** -->

			<div id="slider">
				<a href="#" class="button previous-button"><span class="icon icon-double-angle-left"></span></a>
				<a href="#" class="button next-button"><span class="icon icon-double-angle-right"></span></a>
				<div class="viewer">
					<div class="reel">
						<div class="slide">
						 <?php
					$con=mysql_connect("localhost","root","")
					or 
					die("server not found");
					//if(mysql_connect_errno($con)){
					//echo "Failed to connect to data server".mysql_connect_error();

					mysql_select_db("minor1");
					$extract=mysql_query("select img from slider where id=1");
					$row=mysql_fetch_array($extract,MYSQL_ASSOC);
					$values=$row['img'];

					echo "<img src=' ".$values."'/>";
					?>
							
							
						</div>
						<div class="slide">
						 <?php
					$con=mysql_connect("localhost","root","")
					or 
					die("server not found");
					//if(mysql_connect_errno($con)){
					//echo "Failed to connect to data server".mysql_connect_error();

					mysql_select_db("minor1");
					$extract=mysql_query("select img from slider where id=2");
					$row=mysql_fetch_array($extract,MYSQL_ASSOC);
					$values=$row['img'];

					echo "<img src=' ".$values."'/>";
					?>
							
						</div>
						
                        <div class="slide">
							 <?php
					$con=mysql_connect("localhost","root","")
					or 
					die("server not found");
					//if(mysql_connect_errno($con)){
					//echo "Failed to connect to data server".mysql_connect_error();

					mysql_select_db("minor1");
					$extract=mysql_query("select img from slider where id=3");
					$row=mysql_fetch_array($extract,MYSQL_ASSOC);
					$values=$row['img'];

					echo "<img src=' ".$values."'/>";
					?>
						</div>
						 <div class="slide">
							 <?php
					$con=mysql_connect("localhost","root","")
					or 
					die("server not found");
					//if(mysql_connect_errno($con)){
					//echo "Failed to connect to data server".mysql_connect_error();

					mysql_select_db("minor1");
					$extract=mysql_query("select img from slider where id=4");
					$row=mysql_fetch_array($extract,MYSQL_ASSOC);
					$values=$row['img'];

					echo "<img src=' ".$values."'/>";
					?>
						</div>
						<div class="slide">
							 <?php
					$con=mysql_connect("localhost","root","")
					or 
					die("server not found");
					//if(mysql_connect_errno($con)){
					//echo "Failed to connect to data server".mysql_connect_error();

					mysql_select_db("minor1");
					$extract=mysql_query("select img from slider where id=5");
					$row=mysql_fetch_array($extract,MYSQL_ASSOC);
					$values=$row['img'];

					echo "<img src=' ".$values."'/>";
					?>
						</div>
						<div class="slide">
							 <?php
					$con=mysql_connect("localhost","root","")
					or 
					die("server not found");
					//if(mysql_connect_errno($con)){
					//echo "Failed to connect to data server".mysql_connect_error();

					mysql_select_db("minor1");
					$extract=mysql_query("select img from slider where id=6");
					$row=mysql_fetch_array($extract,MYSQL_ASSOC);
					$values=$row['img'];

					echo "<img src=' ".$values."'/>";
					?>
						</div>
						<div class="slide">
							 <?php
					$con=mysql_connect("localhost","root","")
					or 
					die("server not found");
					//if(mysql_connect_errno($con)){
					//echo "Failed to connect to data server".mysql_connect_error();

					mysql_select_db("minor1");
					$extract=mysql_query("select img from slider where id=7");
					$row=mysql_fetch_array($extract,MYSQL_ASSOC);
					$values=$row['img'];

					echo "<img src=' ".$values."'/>";
					?>
						</div>
						<div class="slide">
							 <?php
					$con=mysql_connect("localhost","root","")
					or 
					die("server not found");
					//if(mysql_connect_errno($con)){
					//echo "Failed to connect to data server".mysql_connect_error();

					mysql_select_db("minor1");
					$extract=mysql_query("select img from slider where id=8");
					$row=mysql_fetch_array($extract,MYSQL_ASSOC);
					$values=$row['img'];

					echo "<img src=' ".$values."'/>";
					?>
						</div>
						
					</div>
				</div>
				
				     <!--************************************************************************************-->

<div id="menu1" align="right" style="margin-left:300px">
			<ul>
				<li class="icon icon-ok current_page_item"><a href="#" accesskey="1" title="">
				<?php
$con=mysql_connect("localhost","root","");
if(mysqli_connect_errno($con)){
echo "Failed to connect to data server".mysqli_connect_error();
}

mysql_select_db("minor1");
$sql="select name from menu where id=1; ";
$result=mysql_query($sql);
echo mysql_result($result,0);

?></a></li>
				<li class="icon icon-ok"><a href="#page1" accesskey="3" title="">
				<?php
$con=mysql_connect("localhost","root","");
if(mysqli_connect_errno($con)){
echo "Failed to connect to data server".mysqli_connect_error();
}

mysql_select_db("minor1");
$sql="select name from menu where id=3; ";
$result=mysql_query($sql);
echo mysql_result($result,0);

?>
				</a></li>
				<li class="icon icon-ok"><a href="#page2" accesskey="4" title="">
				<?php
$con=mysql_connect("localhost","root","");
if(mysqli_connect_errno($con)){
echo "Failed to connect to data server".mysqli_connect_error();
}

mysql_select_db("minor1");
$sql="select name from menu where id=4; ";
$result=mysql_query($sql);
echo mysql_result($result,0);

?>
				</a></li>
				<li class="icon icon-ok"><a href="#page4" accesskey="5" title="">
				<?php
$con=mysql_connect("localhost","root","");
if(mysqli_connect_errno($con)){
echo "Failed to connect to data server".mysqli_connect_error();
}

mysql_select_db("minor1");
$sql="select name from menu where id=5; ";
$result=mysql_query($sql);
echo mysql_result($result,0);

?>
				</a></li>
			</ul>
		</div>
<!---************************************************************************************-->
				
			</div>
			
			<script type="text/javascript">
				$('#slider').slidertron({
					viewerSelector: '.viewer',
					reelSelector: '.viewer .reel',
					slidesSelector: '.viewer .reel .slide',
					advanceDelay: 3000,
					speed: 'slow',
					navPreviousSelector: '.previous-button',
					navNextSelector: '.next-button',
					slideLinkSelector: '.link'
				});
			</script>

		<!-- ****************************************************************************************************************** -->


<div id="wrapper">
	<div id="page" class="container">
		<div id="content">
			<div class="title">
				<h2>
				<?php
$con=mysql_connect("localhost","root","");
if(mysqli_connect_errno($con)){
echo "Failed to connect to data server".mysqli_connect_error();
}

mysql_select_db("minor1");
$sql="select content from content where id=1; ";
$result=mysql_query($sql);
echo mysql_result($result,0);

?></h2>
</br>
				<span class="byline">
				<?php
$con=mysql_connect("localhost","root","");
if(mysqli_connect_errno($con)){
echo "Failed to connect to data server".mysqli_connect_error();
}

mysql_select_db("minor1");
$sql="select content from content where id=2; ";
$result=mysql_query($sql);
echo mysql_result($result,0);

?>
<br />
				
				
				
				</span> </div>
				<div id="page_holder" >
				    <div id="pageContent" >
			<p style="font-size:18px">
			<?php
$con=mysql_connect("localhost","root","");
if(mysqli_connect_errno($con)){
echo "Failed to connect to data server".mysqli_connect_error();
}

mysql_select_db("minor1");
$sql="select content from content where id=3; ";
$result=mysql_query($sql);
echo mysql_result($result,0);

?></p><br /><br /><br />
			<a href="javascript:signup('show');" class="button">
			
			<?php
$con=mysql_connect("localhost","root","");
if(mysqli_connect_errno($con)){
echo "Failed to connect to data server".mysqli_connect_error();
}

mysql_select_db("minor1");
$sql="select content from content where id=4; ";
$result=mysql_query($sql);
echo mysql_result($result,0);

?>
			</a> 
		 <div id="popupbox2">    
            <div id="container1">
			
	
		
		<form name= "forms" action="indx51.php" method="post" onSubmit="return formValidation();">
		
		<label for="username">Username:</label>
		
		<input type="name" id="username" name="username" required="required" >
		<div id="pas2"></div>
        
        <label for="Email">Email :</label>
        
        <input type="Email" id="email" name="email" required="required" >
		<div id="pas1"></div>
		
		<label for="password">Password:</label>
		
	      <input type="password" name="password" required="required">
          
		
		<div id="lower">
		
		<input type="checkbox"><label class="check" for="checkbox">I Accept All Terms & Conditions</label>
		
		<input type="submit" id="submitt" value="submit" name="submitt">
		<center><a href="javascript:signup('hide');">close</a></center>
				</div>
				 
		
		</form>
		
		
	</div>
	

	
<br />


</div> 

</div>


		

</div>
				</div>



			
		<div id="sidebar">
			<div id="stwo-col">
				<div class="sbox1">
					<h2>
					<?php
$con=mysql_connect("localhost","root","");
if(mysqli_connect_errno($con)){
echo "Failed to connect to data server".mysqli_connect_error();
}

mysql_select_db("minor1");
$sql="select content from content where id=5; ";
$result=mysql_query($sql);
echo mysql_result($result,0);

?>
					
					</h2>
					<ul class="style2">
						<li class="icon icon-ok"><a>
						<?php
$con=mysql_connect("localhost","root","");
if(mysqli_connect_errno($con)){
echo "Failed to connect to data server".mysqli_connect_error();
}

mysql_select_db("minor1");
$sql="select content from content where id=6; ";
$result=mysql_query($sql);
echo mysql_result($result,0);

?>
						</a></li>
						<li class="icon icon-ok"><a>
						<?php
$con=mysql_connect("localhost","root","");
if(mysqli_connect_errno($con)){
echo "Failed to connect to data server".mysqli_connect_error();
}

mysql_select_db("minor1");
$sql="select content from content where id=7; ";
$result=mysql_query($sql);
echo mysql_result($result,0);

?></a></li>
						<li class="icon icon-ok"><a><?php
$con=mysql_connect("localhost","root","");
if(mysqli_connect_errno($con)){
echo "Failed to connect to data server".mysqli_connect_error();
}

mysql_select_db("minor1");
$sql="select content from content where id=8; ";
$result=mysql_query($sql);
echo mysql_result($result,0);

?></a></li>
						<li class="icon icon-ok"><a>
						<?php
$con=mysql_connect("localhost","root","");
if(mysqli_connect_errno($con)){
echo "Failed to connect to data server".mysqli_connect_error();
}

mysql_select_db("minor1");
$sql="select content from content where id=9; ";
$result=mysql_query($sql);
echo mysql_result($result,0);

?></a></li>
						<li class="icon icon-ok"><a>
						<?php
$con=mysql_connect("localhost","root","");
if(mysqli_connect_errno($con)){
echo "Failed to connect to data server".mysqli_connect_error();
}

mysql_select_db("minor1");
$sql="select content from content where id=10; ";
$result=mysql_query($sql);
echo mysql_result($result,0);

?>
						</a></li>
					</ul>
		
				</div>
				<div class="sbox2">
					<h2>
					<?php
$con=mysql_connect("localhost","root","");
if(mysqli_connect_errno($con)){
echo "Failed to connect to data server".mysqli_connect_error();
}

mysql_select_db("minor1");
$sql="select content from content where id=11; ";
$result=mysql_query($sql);
echo mysql_result($result,0);

?></h2>
					<ul class="style2">
						<li class="icon icon-ok"><a href="#"><?php
$con=mysql_connect("localhost","root","");
if(mysqli_connect_errno($con)){
echo "Failed to connect to data server".mysqli_connect_error();
}

mysql_select_db("minor1");
$sql="select content from content where id=12; ";
$result=mysql_query($sql);
echo mysql_result($result,0);

?></a></li>
						<li class="icon icon-ok" ><a href="#page5"><?php
$con=mysql_connect("localhost","root","");
if(mysqli_connect_errno($con)){
echo "Failed to connect to data server".mysqli_connect_error();
}

mysql_select_db("minor1");
$sql="select content from content where id=13; ";
$result=mysql_query($sql);
echo mysql_result($result,0);

?>
</a></li>
						<li class="icon icon-ok"><a href="#"><?php
$con=mysql_connect("localhost","root","");
if(mysqli_connect_errno($con)){
echo "Failed to connect to data server".mysqli_connect_error();
}

mysql_select_db("minor1");
$sql="select content from content where id=14; ";
$result=mysql_query($sql);
echo mysql_result($result,0);

?></a></li>
						<li class="icon icon-ok"><a href="#"><?php
$con=mysql_connect("localhost","root","");
if(mysqli_connect_errno($con)){
echo "Failed to connect to data server".mysqli_connect_error();
}

mysql_select_db("minor1");
$sql="select content from content where id=15; ";
$result=mysql_query($sql);
echo mysql_result($result,0);

?></a></li>
						<li class="icon icon-ok"><a href="#">
						<?php
$con=mysql_connect("localhost","root","");
if(mysqli_connect_errno($con)){
echo "Failed to connect to data server".mysqli_connect_error();
}

mysql_select_db("minor1");
$sql="select content from content where id=16; ";
$result=mysql_query($sql);
echo mysql_result($result,0);

?></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div id="banner-wrapper">
		<div id="banner" class="container">
			<div class="box-left">
				<h2>
				<?php
$con=mysql_connect("localhost","root","");
if(mysqli_connect_errno($con)){
echo "Failed to connect to data server".mysqli_connect_error();
}

mysql_select_db("minor1");
$sql="select content from content where id=17; ";
$result=mysql_query($sql);
echo mysql_result($result,0);

?>
</h2>
				<span><?php
$con=mysql_connect("localhost","root","");
if(mysqli_connect_errno($con)){
echo "Failed to connect to data server".mysqli_connect_error();
}

mysql_select_db("minor1");
$sql="select content from content where id=18; ";
$result=mysql_query($sql);
echo mysql_result($result,0);

?></span> </div>
			<div class="box-right"> <a href="#page3" class="button button-big">
			<?php
$con=mysql_connect("localhost","root","");
if(mysqli_connect_errno($con)){
echo "Failed to connect to data server".mysqli_connect_error();
}

mysql_select_db("minor1");
$sql="select content from content where id=19; ";
$result=mysql_query($sql);
echo mysql_result($result,0);

?>
</a></div>
		</div>
	</div>
	<div id="featured-wrapper">
		<div id="featured" class="container">
			<div class="column1"> <span class="icon icon-gift"></span>
				<div class="title">
					<h2>
					<?php
$con=mysql_connect("localhost","root","");
if(mysqli_connect_errno($con)){
echo "Failed to connect to data server".mysqli_connect_error();
}

mysql_select_db("minor1");
$sql="select content from content where id=20; ";
$result=mysql_query($sql);
echo mysql_result($result,0);

?>
					</h2>
				</div>
				<p>
				<?php
$con=mysql_connect("localhost","root","");
if(mysqli_connect_errno($con)){
echo "Failed to connect to data server".mysqli_connect_error();
}

mysql_select_db("minor1");
$sql="select content from content where id=21; ";
$result=mysql_query($sql);
echo mysql_result($result,0);

?></p>
			</div>
			<div class="column2"> <span class="icon icon-glass"></span>
				<div class="title">
					<h2>
					<?php
$con=mysql_connect("localhost","root","");
if(mysqli_connect_errno($con)){
echo "Failed to connect to data server".mysqli_connect_error();
}

mysql_select_db("minor1");
$sql="select content from content where id=22; ";
$result=mysql_query($sql);
echo mysql_result($result,0);

?>
					 </h2>
				</div>
				<p>
				<?php
$con=mysql_connect("localhost","root","");
if(mysqli_connect_errno($con)){
echo "Failed to connect to data server".mysqli_connect_error();
}

mysql_select_db("minor1");
$sql="select content from content where id=23; ";
$result=mysql_query($sql);
echo mysql_result($result,0);

?>
				</p>
			</div>
			<div class="column3"> <span class="icon icon-music"></span>
				<div class="title">
					<h2>
					<?php
$con=mysql_connect("localhost","root","");
if(mysqli_connect_errno($con)){
echo "Failed to connect to data server".mysqli_connect_error();
}

mysql_select_db("minor1");
$sql="select content from content where id=24; ";
$result=mysql_query($sql);
echo mysql_result($result,0);

?>
					</h2>
				</div>
				<p>
				<?php
$con=mysql_connect("localhost","root","");
if(mysqli_connect_errno($con)){
echo "Failed to connect to data server".mysqli_connect_error();
}

mysql_select_db("minor1");
$sql="select content from content where id=25; ";
$result=mysql_query($sql);
echo mysql_result($result,0);

?>
				</p>
			</div>
			<div class="column4"> <span class="icon icon-group"></span>
				<div class="title">
					<h2>
					<?php
$con=mysql_connect("localhost","root","");
if(mysqli_connect_errno($con)){
echo "Failed to connect to data server".mysqli_connect_error();
}

mysql_select_db("minor1");
$sql="select content from content where id=26; ";
$result=mysql_query($sql);
echo mysql_result($result,0);

?>
</h2>
				</div>
				<p>
				<?php
$con=mysql_connect("localhost","root","");
if(mysqli_connect_errno($con)){
echo "Failed to connect to data server".mysqli_connect_error();
}

mysql_select_db("minor1");
$sql="select content from content where id=27; ";
$result=mysql_query($sql);
echo mysql_result($result,0);

?></p>
			</div>
		</div>
	</div>
</div>
<div id="copyright" class="container">
	<div id="footer">
	<center>
<div class="copyright"  style="color:white">
<?php
$con=mysql_connect("localhost","root","");
if(mysqli_connect_errno($con)){
echo "Failed to connect to data server".mysqli_connect_error();
}

mysql_select_db("minor1");
$sql="select content from content where id=28; ";
$result=mysql_query($sql);
echo mysql_result($result,0);

?>

<br /><br />

</div>
<div class="social">
 
        <a href="http://www.facebook.com/" target="_blank" title="Facebook">
		<?php
					$con=mysql_connect("localhost","root","")
					or 
					die("server not found");
					//if(mysql_connect_errno($con)){
					//echo "Failed to connect to data server".mysql_connect_error();

					mysql_select_db("minor1");
					$extract=mysql_query("select icon from icon where id=1");
					$row=mysql_fetch_array($extract,MYSQL_ASSOC);
					$values=$row['icon'];

					echo "<img src=' ".$values."'/>";
					?></a>
        <a href="http://www.plus.google.com" target="_blank" title="Twitter">
		<?php
					$con=mysql_connect("localhost","root","")
					or 
					die("server not found");
					//if(mysql_connect_errno($con)){
					//echo "Failed to connect to data server".mysql_connect_error();

					mysql_select_db("minor1");
					$extract=mysql_query("select icon from icon where id=2");
					$row=mysql_fetch_array($extract,MYSQL_ASSOC);
					$values=$row['icon'];

					echo "<img src=' ".$values."'/>";
					?></a>
        <a href="http://www.linkedin.com/" target="_blank" title="LinkedIn">
		<?php
					$con=mysql_connect("localhost","root","")
					or 
					die("server not found");
					//if(mysql_connect_errno($con)){
					//echo "Failed to connect to data server".mysql_connect_error();

					mysql_select_db("minor1");
					$extract=mysql_query("select icon from icon where id=3");
					$row=mysql_fetch_array($extract,MYSQL_ASSOC);
					$values=$row['icon'];

					echo "<img src=' ".$values."'/>";
					?></a>
    
</div>
</center>
</div>
</div>
</body>
</html>
