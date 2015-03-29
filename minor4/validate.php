<?php
session_start();
mysql_connect("localhost","root","");
$db_found=mysql_select_db("project");


//if(isset($_POST['submit']))
	{   
		$user=$_POST['username'];
		$pass=$_POST['password'];
				if($user && $pass)
					{ 
						$query=mysql_query("select * from users where username='$user'");
						$row=mysql_fetch_assoc($query);


						if($row['password']==$pass)
										{
												$_SESSION['login_user']=$row['username'];
												echo "Password correct";
												//header("location:index.php");

										}

						else if($row['username']==null)
										{

											header("location:last.php");

										} 

						else
										{
												echo "Password incorrect";
												//header("location:final.html");

										}
					}
				else 
						{ echo "as";
							//echo "<body bgcolor='black'><font face='Jokerman' color='white'>Enter the username and password</font></body>";
							//echo "<p><a href='http://localhost/sr/login.php'><font style='italic' color='white'>Try Again...</font></a><p>";
							
						}
			}
			
?>
