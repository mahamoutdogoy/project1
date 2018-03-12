<?php
			$name=$_POST['name'];
			$email=$_POST['email'];
			$phone=$_POST['phone'];
			$password=$_POST['pass'];
			$gender=$_POST['gender'];

			$servername="localhost";
			$username="root";
			$password="";
			$dbname="Scholarship";

			$conn=new mysqli($servername, $username, $password,$dbname);

			if ($conn->connect_error) 
			{
    			die("Connection failed: " . $conn->connect_error);
			} 
			echo "Connected successfully";
			$sql = "INSERT INTO register (name,email,password,phone,gender)VALUES ('$name','$email','$password','$phone','$gender')";

			if ($conn->query($sql) === TRUE)
			{
    			echo "New record created successfully";
			} 
			else 
			{
    			echo "Error: " . $sql . "<br>" . $conn->error;
			}
			$conn->close();
		?>