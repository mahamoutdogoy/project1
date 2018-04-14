<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
  	<meta name="Description" content="A Registration Form">
  	<meta name="Author" content="">
  	<center><h1>SPONSOR A KID TODAY</h1></center>
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
    padding-bottom : 200px;
  
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

	<div class="logout">
  
    <h2><button><a href="logout.php">Logout here</a> </h2></button>
</div>


            
    <p>
    	
 Hello to all Sponsors. Thanks for registering with 
  EasyScholarship.<br>
  <p class="pwork">Your work can save a child’s future.</p> <br>
  <p class="question">Why Sponsor?</p>
  <p>The list of students displayed are in need of finance for <br> their education. Your sponsorship can help them finance <br>their education  and their other needs.</p> 

  <p class="question">How it works?</p>
<p>The List of usernames are displayed of the students who <br>have applied for sponsorships. <br> 
On clicking on particular username, the details of <br> that student are displayed. <br>
You can click on the sponsor button to sponsor the kid. <br>
The amount to sponsor depends on the sponsor. <br>
After you sponsor the student, the particular contact <br> student details are sent to the sponsor for further <br> clarification and then the transfer of fund happens <br>
</p><br>




	
	
	<form action="" method="POST">
						<?php
							$sponsor  = $_GET['q']; 
						?>

						<!-- <button class=" sponsor"><a href="http://localhost/Scholarship/Sponsor1.php?q=$sponsor.php">Sponsor</a> </h2></button>
						<h2><button class="cancel"><a href="Home.php">Logout here</a></button> -->
	<center><b><input type="submit" class="button" name="sponsor" value="Sponsor a Kid Now!"></b></center><br>
		<center><input type="submit" class="button" name="cancel" value="Cancel"></center><br>
	
</form>
	</body>
</html>
<?php 

 

 if(isset($_POST['sponsor'])){
		header("Location: http://localhost/Scholarship/Sponsor1.php?q=$sponsor");
	}

	if(isset($_POST['cancel'])){
		header("Location: Home.php");
	}



 ?>

