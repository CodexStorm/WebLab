<?php
$con=new mysqli('127.0.0.1','root','','namedb');
if(!$con){
	echo "Connection err";
	goto a;
}
if(isset($_POST['sub']))
{
	$name=$_POST['name'];
    $que="insert into name values ('$name');";
	$rec=mysqli_query($con,$que);
header("location: ex1.php","1");
}
a:
?>
<html>
<head>
<title>AJAX</title>
</head>
<body>
<form action="" method="post">
<label for="name" >Enter Name </label>
<input type="text" name="name">
<button type="submit" name="sub">Submit</button>
</form>
</body>
</html>