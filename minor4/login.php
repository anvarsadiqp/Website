<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" type="text/css" href="logincss.css" />
</head>
<body>
<?php
$passErr=$emailErr="";
$password =$email="";
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
$submitemail = $_POST['email'];
$submitpassword = $_POST['pass'];
if (empty($_POST["email"])){  				
    //     header('Location:http://localhost//programs/error.php');
   echo "<script>
   alert('Please Enter Email and Password.This is Required to log in!');
   window.location='http://localhost//programs/minor.php';
   </script>";
 }
 if (empty($_POST["pass"])){
// header('Location:http://localhost//programs/error.php');		
    echo "<script>
    alert('Please Enter Email and Password.This is Required to log in!');
    window.location='http://localhost//programs/minor.php';
    </script>";
}
//$submitemailencr=md5($submitemail);
    $submitpasswordencr=md5($submitpassword) or die(mysql_error());
if($submitemail && $submitpasswordencr)
{

$connect = mysql_connect("localhost","root","") or die("Couldn't connect!");
mysql_select_db("userinfo") or die("Couldn't find db");

$query= mysql_query("SELECT * From userdata WHERE email='$submitemail'") or die(mysql_error());
$numrows = mysql_num_rows($query);
//echo $numrows;

	if ($numrows!=0)
	{
	//code to login
	 while ($row = mysql_fetch_assoc($query))
	 	{
			$dbemail = $row['email'];
			$dbpassword = $row['password'];
		}
		if($submitemail==$dbemail&&$submitpasswordencr==$dbpassword)
		{
		//	header('Location:http://localhost//programs/successful.php');
			//echo "Successfully Logged In ,Enjoy!";
            echo "<script>
            alert('Successfully Logged In ,Enjoy! GO BACK TO HOME');
            window.location='http://localhost//programs/minor.php';
            </script>";


		}
		else{
		//header('Location:http://localhost//programs/error1.php');
		//echo "Your password is not correct try different password !";
        echo "<script>
        alert('Your password is not correct try different password !');
        window.location='http://localhost//programs/minor.php';
        </script>";
		
		 //echo "Incorrect password!";
		}
	}
	else{
	//echo "That user does't exist!";
//header('Location:http://localhost//programs/error2.php');
      //echo "Are you registered whith us? First register with us and try loging in again";
      echo "<script>
      alert('Are you registered with us? First register and then try again!');
      window.location='http://localhost//programs/minor.php';
      </script>";

		}
}


if (empty($_POST["email"]))
     {$emailErr = "Email is required";}
   else
     {
     $email = test_input($_POST["email"]);
     // check if e-mail address syntax is valid
     if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email))
       {
       $emailErr = "Invalid email format"; 
       }
     }   if (empty($_POST["pass"]))
     {
	 $passErr = "password is required";
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
		<form action="login.php" method="POST">
			<h1>Login</h1>
			<div>
				<input type="email" placeholder="Email id" required="" id="email" name="email" /> <span class="error">* <?php echo $emailErr;?></span><br>  
			</div>
			<div>
				<input type="password" placeholder="Password" required="" name="pass" id="password" /><span class="error">* <?php echo $passErr;?></span><br> 
			</div>
			<div>
				<input type="submit" value="Log in" />
				
			</div>
		</form><!-- form -->
		
	</section><!-- content -->
</div><!-- container -->
</body>
</html>