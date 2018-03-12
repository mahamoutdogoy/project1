<!DOCTYPE html>
<html>
<head>
  	<center><h1>Registration Page</h1></center>
</head>
	<style>
		body
		{
    		background-image:url("images/yellow.jpg");
    		background-repeat:no-repeat,repeat;
    		background-size: cover;
			margin-left:200px;
			margin-right:200px;
			margin-top:100px;			
		}
		.table
		{
			background-color:#484646;
			border-radius:20px;
			font-color:white;
			border:1px solid;
			opacity:0.8;
		}
		form{
			text-align:justify;
			
		}
		input
		{
  			border-radius: 13px;
 			border-radius: 13px;
 			border-radius: 13px;
 			border-radius: 13px;
    		border:solid 1px;
   			padding:10px;
		}
		.text
		{
			width:300px;
		}
		.button 
		{
    		background-color: white;
    		border:2px solid #484646;
    		width:200px;
    		color: black;
    		padding: none;
   			text-align: center;
    		text-decoration: none;
    		display: inline-block;
    		font-size: 16px;
		}
		.button:hover
		{
			background-color: #392F2F;
    		color: white;
		}
	</style>
	<body>
	<link rel="stylesheet" type="text/css" href="Horizontal.css">
	<ul>
  			<li style="float:left"><a class="active"href="Home.php">Home</a></li>
  			<li><a href="PersonalDetails.php">About</a></li>
  			<li><a href="Signin.php">Application</a></li>
  			<li><a href="">Admin</a></li>
  			<li><a href="Donation.php">Donate</a></li>
  			<li><a href="Donation.php">Sponsor</a></li>
  			<li><a href="">Contact Us</a></li>
  			<li><a href="">FAQ</a></li>
  			<li><a href="">Feedback</a></li>
	</ul></align>
		<table cellpadding="20" align="center" class="table">
			<tr>
				<td>
				<center><img src="images/Capture.PNG" ></center><br>
				<form action ="#" 
				method="POST">
					<input type="text" class="text" name="username" placeholder="Username" required><br>
					<br>					
					<input type="email" class="text" name="email" placeholder="Email ID" required><br>
					<br>					
					<input type="text" class="text" name="phone" placeholder="Phone Number" required><br>
					<br>					 
					<input type="password" class="text" name="password" placeholder="Password"required><br>
					<br>
					<input type="password" class="text" name="password" placeholder="Confirm Password"required><br>
					<br>
					<font color="white">Gender:</font><br><br>
					<font color="white"><input type="radio" name="gender" value="Male">Male
					<input type="radio" name="gender" value="Female">Female
					<input type="radio" name="gender" value="Other">Other
					<br></font><br>
					<center><b><input type="submit" class="button" name="info" value="Register"></b></center><br>
				</form>
			</td>
			</tr>
		</table>
		
	</body>
</html>
<?php

require('db.php');

 if (isset($_REQUEST['username'])){
		$username = stripslashes($_REQUEST['username']); 
		$username = mysqli_real_escape_string($con,$username);
		$email = stripslashes($_REQUEST['email']);
		$email = mysqli_real_escape_string($con,$email);
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);

		$phone = stripslashes($_REQUEST['phone']);
		$phone = mysqli_real_escape_string($con,$phone);

		$gender = stripslashes($_REQUEST['gender']);
		$gender = mysqli_real_escape_string($con,$gender);

		// $trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `donordetails` (username,email,phone,password,gender) VALUES ('$username','$email','$phone','$password','$gender')";
        $result = mysqli_query($con,$query);
        
      if($result){
      	

        	  echo " <div class='form'<h3>You are registered successfully.</h3><br></a>Click here to <a href='DonorSignin.php'>Signin </a></div>"; 





 }
    }

	
?>