<?php
	require 'connection.php';
	$conn = Connect();
	$name = $conn->real_escape_string($_POST['name']);
	$email= $conn->real_escape_string($_POST['email']);
	$subj= $conn->$_POST['phone'];
	$password= $conn->real_escape_string($_POST['password']);
	$gender= $conn->real_escape_string($_POST['gender']);
	$query= "INSERT into register (name,email,phone,password,gender) VALUES ('".$name."','".$email."','".$phone."','".$password."','".$gender."')";
	$success=$conn->query($query);
	if(!$success)
	{
		die("Couldn't enter data: ".$conn->error);
	}
	echo "Registered Successfully!!!!<br>";
	$conn->close();
?>