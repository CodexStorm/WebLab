<?php
session_start();
$con=new mysqli('127.0.0.1','root','','sample');
if(!$con)
{
	echo "<script>window.alert('Connection Error');</script>";
	goto a;
}
if(isset($_POST['sub']))
{
	$name=$_POST['name'];
	$pass=$_POST['pass'];
	if($name=="")
	{
		echo "<script>window.alert('Please fill the name field');</script>";
		goto a;
	}
	if($pass=="")
	{
		echo "<script>window.alert('Please fill the Password field');</script>";
		goto a;
	}
	$que="select * from login where username like '$name' and password like '$pass'";
	$rec=mysqli_query($con,$que);
	if(!$rec)
	{
		echo "<script>window.alert('Query error');</script>";
		goto a;
	}
	if(mysqli_num_rows($rec)>0)
	{
		echo "<script>window.alert('Successfully Signed In');</script>";
		$_SESSION['uname']=$name;
		header('location: ex11.php','2');
	}
	else
	{
		echo "<script>window.alert('Invalid Username or Password');</script>";
		goto a;
	}
	}
a:
?>


<!DOCTYPE html>
<html>
<head>
<title> Form Validation </title>
</head>
<style>
fieldset{
	
	margin-right: 40%;
	margin-top: 15%;
	margin-left: 35%;
}
#name{
	margin-left: 30px;
}
#pass{
	
	margin-left: 8px;
}
</style>
<body>

<fieldset>
<legend> Enter Details</legend>
<form action="ex1.php" method="post">
<label for="name">Enter Name</label>
<input name="name" id="name" type="text" placeholder="Enter Your Name...."></input><br><br><br>
<label for="pass">Enter Password</label>
<input name="pass" id="pass" type="password" placeholder="Enter Your Password...."></input><br><br>
<center><button name="sub" type="submit"> Submit </button></center>
</form>
</fieldset>
</body>
</html>