<!DOCTYPE html>

<!DOCTYPE HTML> 
<html>
<head>
<meta charset="utf-8">
<title>JavaScript Form Validation using a sample registration form</title>
<meta name="keywords" content="example, JavaScript Form Validation, Sample registration form" />
<meta name="description" content="This document is an example of JavaScript Form Validation using a sample registration form. " />

<link type="text/css" rel="stylesheet" href="logincss.css">
<link rel='stylesheet' href='js-form-validation.css' type='text/css' />
<script src="sample-registration-form-validation.js"></script>

</head>
<body onLoad="document.registration.userid.focus();"> 
<div id="logo" style="background:#ffffff; height:100px;width:1348px;margin-top:-40px;position:relative;">
<img src="demo.jpg" / >
<p align="right" style="margin-top:-55px;margin-right:20px;"><font color="black" style="lucida fax" size="5px">GO FROM FAT TO FIT!</font></p>


</div>
<center>
<U><B><h1><font color="purple">REGISTRATION FORM</font></H1></B></U>
<table border="2" bgcolor="#6495ed">
<th>
<form name='registration'  action="insert.php" method="POST" onSubmit="return formValidation();">
<ul>
<li><label for="userid">User id:</label></li>
<li><input type="text" name="userid"  size="12" required="required" /></li>
<li><label for="passid">Password:</label></li>
<li><input type="password" name="passid"   size="12" required="required" /></li>
<li><label for="username">Name:</label></li>
<li><input type="text" name="username"    size="50" required="required" /></li>
<li><label for="email">Email:</label></li>
<li><input type="text" name="email" size="50" /></li>
<li><label id="gender">Sex:</label></li>
<li><input type="radio" name="sex"  value="Male" required="required" /><span>Male</span></li>
<li><input type="radio" name="sex"    value="Female" required="required" /><span>Female</span></li>


<li><input type="submit" name="submit"  value="Submit" required="required" /></li>
</ul>
</form></th></table></center>
</body>
</html>

