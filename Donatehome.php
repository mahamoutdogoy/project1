<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
  	<meta name="Description" content="A Registration Form">
  	<meta name="Author" content="">
  	<center><h1>DONATE FOR A CAUSE</h1></center>
</head>
	<style>
		body
		{
			background-image:url("images/yellow.jpg");
    		background-repeat:no-repeat;
    		background-size: cover;
			margin-left:200px;
			margin-right:200px;
			margin-top:100px;
		}
		table
		{
			background-color:#BAC8DF;
			border-radius:20px;
			border:1px solid;
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
			font-size:20px;
		}
		input
		{
  			border-radius: 17px;
 			border-radius: 17px;
 			border-radius: 17px;
 			border-radius: 17px;
    		border:solid 1px;
   			padding:10px;
		}
		.text
		{
			width:200px;
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


		.logout

 {
  float: right;
    padding-top: : 100px;
  
}
.logout a
{
  
  text-decoration: none;

}
button
{
 width: 90px;
 height: 40px;
 border-radius: 10px;
}


	</style>
	<body>
	<link rel="stylesheet" type="text/css" href="Horizontal.css">
	<ul>
  			<!-- <li style="float:left"><a class="active"href="Home.php">Home</a></li>
  			<li><a href="PersonalDetails.php">About</a></li>
  			<li><a href="Signin.php">Application</a></li>
  			<!-- <li><a href="Registration.php">Register</a></li> -->
  			<li><a href="">Admin</a></li>
  			<li><a href="Donation.php">Donate</a></li>
  			<li><a href="Donation.php">Sponsor</a></li>
  			<li><a href="">Contact Us</a></li>
  			<li><a href="">FAQ</a></li>
  			<li><a href="">Feedback</a></li> -->
	</ul></align>
	<div class="logout">
  
    <h2><button><a href="logout.php">Logout here</a> </h2></button>
</div>
	
	<form action="#" method="POST">
	<?php
							$Donate  = $_GET['q']; 
						?>
	<center><b><input type="submit" class="button" name="Donate" value="Make a Donation"></b></center><br>
		<center><input type="submit" class="button" name="cancel" value="Cancel"></center><br>
	
		</table>

	</body>


	

</html>
<?php 

 

 if(isset($_POST['Donate'])){
		header("Location: http://localhost/Scholarship/PaymentInfo.php?q=$Donate");
	}

	if(isset($_POST['cancel'])){
		header("Location: Home.php");
	}



 ?>

