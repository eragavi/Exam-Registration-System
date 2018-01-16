<!DOCTYPE HTML>
<html>
<head>
<title>BILL</title>
</head>
<body background="exam.jpg">
<?php
$host="localhost"; 
$username="root";  
$password="";  
$db_name="examreg"; 
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");
if (!empty($_POST))
{
$name = $_POST['name'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$qual= $_POST['qualification'];
$phno = $_POST['phno'];
$email = $_POST['email'];
$zip = $_POST['zip'];
mysql_query("INSERT INTO candidate_det (name,gender,age,qualification,phno,email,zip) VALUES ('$name', '$gender', '$age', '$qual','$phno', '$email', '$zip' )");
}
$query = "select * from candidate_det";
$result = mysql_query($query);
?>
<form method="post" action="candidate.php">
<h1><center><b>HALL TICKET</b></center></h1>
<?php
while ($line = mysql_fetch_array($result, MYSQL_BOTH)) {
if($line[0]==$name){?>
<fieldset>
<center>HALLTICKET NUMBER :  <input type="text" align="center"name="phno" value="<?php echo 'AF'.$line[4];?>"readonly></center>
<center>NAME	:        <input type="text" align="center" name="name" value="<?php echo $line[0];?>" readonly></center>
<center>GENDER:	        <input type="text" align="center"name="gender" value="<?php echo $line[1];?>" readonly></center>
<center>AGE:		<input type="text" align="center"name="age" value="<?php echo $line[2];?>" readonly></center>
<center>QUALIFICATION:  <input type="text" align="center"name="qualification" value="<?php echo $line[3];?>"  readonly></center>
<center>EXAM VENUE	:	CHENNAI</center>
<center>EXAM TIMINGS	:	10:00 - 1:00</center>
</fieldset>
<marquee><h2>ALL THE BEST</h2></marquee>
<?php }}
 ?>
</form>
</body>
</html>
