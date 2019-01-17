<?php
$con=new mysqli('127.0.0.1','root','','namedb');
if(!$con){
	echo "Connection err";
	goto a;
}
$que="SELECT * from name ORDER BY name";
$rec=mysqli_query($con,$que);
if(!$rec)
	goto a;
$req=$_REQUEST["q"];
$ans="";
if(strlen($req)>0)
{ 
	$req=strtolower($req);
	$len=strlen($req);
	while($rec1=mysqli_fetch_assoc($rec)){
		if(strlen($rec1['name'])>0)
		{
		$name1=$rec1["name"];
		$name=$rec1["name"];
		$name=strtolower($name);
		if(stristr($req,substr($name,0,$len))){
				$ans.="<br>$name1";
		}
		}
	}
}
if($ans==="")
	echo "No records Found";
else
	echo $ans;
a:
?>