<?php  
$reg="register";
$log="logs";
if (!empty($_POST))
{
$option = $_POST['option'];

if($option==$reg)		
header('Location: register.php');
if($option==$log)
header('Location: logs.php');
}
 ?>
<!DOCTYPE HTML>
<html>
<head>
<title>EXAM REGISTRATION SYSTEM</title>
<style>
body
{
text-align:center;
text-indent: 50px:
}
</style>
<script>  
	window.onload=function(){getTime();}  
	function getTime(){  
	var today=new Date();  
	var h=today.getHours();  
	var m=today.getMinutes();  
	var s=today.getSeconds();  
	// add a zero in front of numbers<10  
	m=checkTime(m);  
	s=checkTime(s);  
	document.getElementById('txt').innerHTML=h+":"+m+":"+s;  
	setTimeout(function(){getTime()},1000);  
	}  
	//setInterval("getTime()",1000);//another way  
	function checkTime(i){  
	if (i<10){  
	  i="0" + i;  
	 }  
	return i;  
	}  
</script>  
</head>
<body background="a.jpg">
<br><br>
<body bgcolor=#D0C1EE>
<br><br><br>
<p><h1><u style="color:black">EXAM REGISTRATION  SYSTEM</u></h1></p>
<br>
<p><h3>WELCOME!!!!</h3></p>
<form action="main.php" method="post">
<fieldset>
<P>CLICK REGISTER IF YOU ARE A NEW CANDIDATE</P>
<input type="radio" name="option" value="register">REGISTER FOR THE GENERATION OF HALL TICKET<br>
<P>TO VIEW THE CANDIDATE'S HALL TICKET</P>
<input type="radio" name="option" value="logs">LOGIN<br>
<input type="submit">
</fieldset><br><br><br>
Current Time:   <span id="txt"></span>
</form>
</body>
</html>


