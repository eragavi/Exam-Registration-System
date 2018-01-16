<?php 
$host="localhost"; 
$username="root";  
$password="";  
$db_name="examreg";  
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");
if (!empty($_POST)) 
{
	$pass = $_POST['Password'];
	$usr_name = $_POST['Username'];
	session_start();
$_SESSION['myValue']=$pass;
$sql= "SELECT * FROM login_det WHERE Username='$usr_name' and Password='$pass'";
	$sqlresult=mysql_query($sql);
	$row=mysql_fetch_array($sqlresult);
		
		
$pwd = $row['Password'];
	if(strcmp($password,$pwd))				
header('Location: candidate.php');
else
{			

echo "invalid password";
echo "try again with your correct password";
}			

}		

?>

<!DOCTYPE HTML>
<html>
<head>
<title>LOGIN</title>
</head>
<body background="exam.jpg">
<p><h3>PLEASE LOGIN TO CONTINUE</h3></p>
<form action="logs.php" method="post">
<fieldset>
<label>user name:</label>
<input type="text" name="Username" required>
<br><br>
<label>password:</label>
<input type="password" name="Password" required>
<br><br>
<input type="submit">
</fieldset>
</form>
</body>
</html>

