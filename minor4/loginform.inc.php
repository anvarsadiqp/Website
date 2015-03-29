<?php

require 'connect.inc.php';
require 'core.inc.php';
//require 'register.php';

if(isset($_POST['email'])&&isset($_POST['password'])){

$username = $_POST['email'];
$password = $_POST['password'];


//echo $username;
//echo $password;

if(!empty($username)&&!empty($password)){
    
    $sql="SELECT id FROM registerform WHERE `email`='$username' and `password`='$password'";
    $result=mysql_query($sql);
    
    $count=mysql_num_rows($result);
    
    if($count==1){
        $user_id = mysql_result($result,0,'id');
        $_SESSION['user_id']=$user_id;
        header('Location:http://localhost/php/about-us.php');
        
    }
    else {
            echo "Wrong Username or Password";
    } 
}

else
    echo "You must supply username and password";

}

?>

