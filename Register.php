//register.php
<?php 
$host="localhost"; 
$username="root";  
$password="";  
$db_name="examreg";  
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");
if (!empty($_POST['Username'])) 
{
$pass = $_POST['Password'];
$usr_name = mysql_real_escape_string($_POST['Username']);//Some clean up :)
$check_for_username = mysql_query("SELECT Username FROM login_det WHERE username='$usr_name'");
//Query to check if username is available or not
if(mysql_num_rows($check_for_username))
{
echo "username already exists";//If there is a  record match in the Database - Not Available
}
else
{
mysql_query("INSERT INTO login_det (Username, Password) VALUES ('$usr_name', '$pass')");
echo "REGISTERED";//No Record Found - Username is available
header('Location: logs.php');
}
}
?>
<!doctype html>
<html>
<head>
<title>REGISTER</title>
<script>
function validateform(){  
var name=document.registerform.Username.value;  
var password=document.registerform.Password.value;    
	var secondpassword=document.registerform.Password2.value;  
if (name==null || name==""){  
  alert("Name can't be blank");  
  return false;  
}else if(password.length<8 || password.length>8){  
  alert("Password must be 8 characters long.");  
  return false;  
  } 
if(password==secondpassword){  
	return true;  
	}  
	else{  
	alert("password must be same!");  
	return false;  
	}   
}  
</script>
</head>

<body background="exam.jpg">
<p><h3>To become a new user please register</h3></p>
<P><u>choose your own username and password</u></p>
<form name="registerform" onsubmit="return validateform()" action="register.php" method="post">
<fieldset>
<label>Username:</label> <input type="text" name="Username"><br><br>
 <label>Password:</label> <input type="password" name="Password"><br><br>
<label>Re-enter Password:</label> <input type="password" name="Password2"><br><br>
  <button type="submit">SUBMIT</button><br>
</fieldset>
</form>
</body>
</html>
