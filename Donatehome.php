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
p
{
	font-family: 'Cairo', sans-serif;
  font-size: 20px;
  text-align: center;
  
}
.question
{
  font-size: 20px;
  text-align: center;
  font-family: 'Crete Round', serif;
  text-align: center;

}
.pwork
{
  font-size: 24px;
  text-align: center;
  font-family: 'Lobster', cursive;
  text-align: center;

}



	</style>
	<body>
	<link rel="stylesheet" type="text/css" href="Horizontal.css">
	<link href="https://fonts.googleapis.com/css?family=Cairo|Crete+Round|Lobster" rel="stylesheet">
	<ul>
  			<li style="float:left"><a class="active"href="Home.php">Home</a></li>
  			<li><a href="">About</a></li>
  			<li><a href="Signin.php">Application</a></li>
  			<li><a href="AdminLog.php">Admin</a></li>
  			<li><a href="DonorSignin.php">Donate</a></li>
        <li><a href="SponsorSignin.php">Sponsor</a></li>
  			<li><a href="contact.php">Contact Us</a></li>
  			<li><a href="">FAQ</a></li>
  			<li><a href="">Feedback</a></li>
	</ul></align>

            
    <p>
    	
 Hello to all Donors. Thanks for registering with 
  EasyScholarship.<br>
  <p class="pwork">Your work can save a child’s future.</p> <br>
  <p class="question">Why Donate for EasyScholarship?</p>
  <p>EasyScholarship get finance help from various sponsors.
 But the finance help<br> received is not sufficient to manage
  a huge number of student needs. Your <br>Donation to the portal
   can help us to help students with finance needs.</p> 

  <p class="question">How it works?</p>
<p>After clicking on the donate button, the Donors will be taken
 to a fill bank <br>details page.
After filling in all the details, the donor can enter the amount<br>
 to donate for the organization.
And then finish the donation. After donation <br>the donors will be
 notified by our technical team members for further<br> processing.
  Notification is sent through email and SMS from the registered<br>
   email and phone number.
After receiving the mail clarification from<br> the technical team,
you will receive a link and then complete the transaction</p><br>




    </p>











	<div class="logout">
  
    <h2><button><a href="logout.php">Logout here</a> </h2></button>
</div>
	
	<form action="#" method="POST">
	<?php
							$Donate  = $_GET['q']; 
						?>
	<center><b><input type="submit" class="button" name="Donate" value="Make a Donation"></b></center><br>
		<center><input type="submit" class="button" name="cancel" value="Cancel"></center><br>
	
	

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

