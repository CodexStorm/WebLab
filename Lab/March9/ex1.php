
<!DOCTYPE HTML>
<html>
<head>
<title>AJAX</title>
</head>
<style>
body {
	font-weight: bold;
}
form {
	
	margin-left: 30%;
}
</style>
<script>
function fun(str){
	if(str.length===0)
	{
		document.getElementById("txt").innerHTML="";
		return;
	}
	else
	{
		var xmlhttp = new XMLHttpRequest();
 xmlhttp.onreadystatechange = function() {
 if (this.readyState == 4 && this.status == 200) {
 document.getElementById("txt").innerHTML = this.responseText;
 }
 };
 xmlhttp.open("GET", "ex11.php?q=" + str, true);
 xmlhttp.send(); 
	}
}
</script>
<body>
<a href="ex12.php"> Click to insert</a>
<form>
<label for="name">Name</label>
<input type="text" name="name" id="name" placeholder="Enter a name...." onkeyup="fun(this.value)"><br>
</form>
<br>
<h1>List of Suggestions</h1>
<span id="txt"></span>
</body>
</html>
