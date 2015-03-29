<!DOCTYPE HTML> 
<html>
<head>
<link type="text/css" rel="stylesheet" href="logincss.css">
</head>
<body> 

<?php
// define variables and set to empty values
$nameErr = $emailErr  = $passwordErr = "";
$name = $email = $password = "";
$submitemail= $submitpassword="";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    
      $submitemail = $_POST['email'];
      $submitpassword = $_POST['password'];
	   $submitusername = $_POST['username'];
	  //$submitname = $_POST['name'];
	  if(strlen($_POST["password"])>8)
	  {
	  //header('Location:http://localhost//programs/error.php');
	  //echo "Password must be less than 8 characters! Please try again!";
      echo "<script>
      alert('Password must be less than 8 characters! Please try again!');
      window.location='http://localhost/minor4/index5.php';
      </script>";
	  }
      else
	  {
	  $submitpasswordencr=md5($submitpassword) or die(mysql_error());  
      if($submitemail && $submitpasswordencr)
     {
      $connect = mysql_connect("localhost","root","") or die("Couldn't connect!");
      mysql_select_db("minor1") or die("Couldn't find db");
	  $query= mysql_query("SELECT * From login WHERE email='$submitemail'") or die(mysql_error());
      $numrows = mysql_num_rows($query);
//echo $numrows;

	if ($numrows!=0)
	{

	 while ($row = mysql_fetch_assoc($query))
	 	{
			$dbemail = $row['email'];
			//$dbpassword = $row['password'];
		}
		if($submitemail==$dbemail)
		{
		//header('Location:http://localhost//programs/error3.php');
		//echo "Are You a new User? You seems to be already registered! Please try again!";
      echo "<script>
      alert('Are You a new User? You seems to be already registered! Please try again!');
      window.location='http://localhost/minor4/index5.php';
      </script>";
		}
		}
			else	
	{
	  $write=mysql_query("INSERT INTO login VALUES('','$submitemail','$submitpasswordencr')") or die("connection failed");
	 // header('Location:http://localhost//programs/successful.php');
	  //echo "Successfully Logged In Enjoy!";
      echo "<script>
      alert('Congrats!! You are registered.GO BACK TO HOME');
      window.location='http://localhost/minor4/success3.html';
      </script>";

	}
      }
	  }
       }
	
	 
	 

function test_input($data)
{
     $data = trim($data);
     $data = stripslashes($data);
     $data = htmlspecialchars($data);
     return $data;
}
?>

<div class="container">
	<section id="content">
		<form  action="success3.html.php" method="POST"> 
			<h1>Sign Up</h1>
			<div>
				<input type="email" placeholder="Email id" required="" id="email" name="email" /> <span class="error">* <?php echo $emailErr;?></span><br>  
			</div>
			<div>
				<input type="password" placeholder="Password" required="" name="password" id="password" /><span class="error">*</span><br> 
			</div>
			<div>
				<input type="submit" value="Sign Up" />
				
			</div>
		</form><!-- form -->
		
	</section><!-- content -->
</div><!-- container -->

   

</body>
</html>