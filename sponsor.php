
<html>
<head>
<title>Sponsor1</title>
</head>
<body>
<form method="POST" action="#">
<input type="submit" name="Submit" value="Submit">
</form>
</table>
</body>
</html>

<?php

	$host = "localhost";
	$user = "root";
	$password = "";
	$db = "practice";
	$conn = new mysqli($host,$user,$password,$db);
	if($conn->connect_error){
		die("connection failed" .$conn->connect_error);
	}

if(isset($_POST['Submit'])){
	$sql1 = "INSERT INTO scholarship (username,status) SELECT username,status FROM applied WHERE appliedfor='scholarship' AND username='monish'";

	$sql2 = "INSERT INTO sponsorship (username,status) SELECT username,status FROM applied WHERE appliedfor='sponsorship' AND username='mahamat'";

	if($conn->query($sql1)){
		echo "Scholarship table inserted";
	}
	else{
		echo"not inserted";
	}
	
	if($conn->query($sql2)){
		echo "Sponsorship table inserted";
	}
	else{
		echo"not inserted";
	}
}

?>