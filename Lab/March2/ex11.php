<?php
session_start();
echo "<b>Hi ".$_SESSION['uname']."</b>";
$con=new mysqli('127.0.0.1','root','','sample');
if(!$con)
{
	echo "<script>window.alert('Connection Error');</script>";
	goto a;
}
if(isset($_POST['sub']))
{
	$que="select rollno,name,department from login";
	$rec=mysqli_query($con,$que);
	if(!$rec)
	{
		echo "<script>window.alert('Query error');</script>";
		goto a;
	}
	echo"<table>";
	echo "<tr><th>RollNo</th><th>Name</th><th>Department</th></tr>";
	while($rec1=mysqli_fetch_assoc($rec))
	{
		echo "<tr>";
		echo "<td>".$rec1['rollno']."</td>";
		echo "<td>".$rec1['name']."</td>";
		echo "<td>".$rec1['department']."</td>";
		echo "</tr>";
	}
	echo "</table>";
}
a:
?>
<html>
<head>
<title>Sample</title>
</head>
<style>
table {
	background-color: lightgreen;
}
</style>

<body>
<form action="" method="POST">
<button  name="sub" type="submit">Click to Display all records</button>
</form>
</body>
</html>