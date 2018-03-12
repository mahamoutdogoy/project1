<!DOCTYPE html>
<html>
<head>
	<center><h1>Family Details</h1></center>
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
			font-size:20px;
		}
		input
		{
  			border-radius: 10px;
    		border:solid 1px;
   			padding:10px;
   			width :300px;
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
		.list
		{
			width:340px;
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
		.radio
		{
			width:100px;
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
  			<li><a href="PersonalDetails.php">Personal Details</a></li>
  			<li><a href="Education.php">Education Details</a></li>
  			<li><a href="Fees.php">Fees Details</a></li>
  			<li><a href="Family.php">Family Details</a></li>
  			<li><a href="Bank.php">Bank Details</a></li>
  			<li><a href="Others.php">Other Info</a></li>
	</ul></align>
		<table cellpadding="10" align="center" class="table">
					<form action="" method="Post">
					<tr>
						<td></td>
						<td><font color="white" size="4">Mother</font></td>
						<td><font color="white" size="4">Father</font></td>
					</tr>
					<tr>
						<td><font color="white" size="4">Name:</font></td>
						<td><input type="text" name ="mname" placeholder="Mother's Name" required></td>
						<td><input type="text" name ="fname" placeholder="Father's Name" required></td>
					</tr>
					<tr>
						<td><font color="white" size="4">Occupation:</font></td>
						<td><input type="text" name ="moccupation" placeholder="Mother's Occupation" required></td>
						<td><input type="text" name ="foccupation" placeholder="Father's Occuption" required></td>
					</tr>
					<tr>
						<td><font color="white" size="4">Income:</font></td>
						<td><input type="text" name ="mincome" placeholder="Mother's Income" required></td>
						<td><input type="text" name ="fincome" placeholder="Father's Income" required></td>
					</tr>
					<tr>
						<td><font color="white" size="4">Total Income:</font></td>
						<td><input type="text" name ="tincome" placeholder="Rs."></td>
					</tr>
					<tr>
						<td><font color="white" size="5">Username:</font></td>
						<td><input type="text" name="usern" placeholder="Username" required></td>
					</tr>
							
		</table>
		<br>
		<center><input type="submit" name="submit" value="Next" class="button"><br><br>
		<input type="reset" value="Clear" class="button"><br><br></center>
		</form>
	</body>
</html>
<?php
require('db.php');
   if (isset($_POST['mname']))
   {
		$mname = stripslashes($_REQUEST['mname']); 
		$mname = mysqli_real_escape_string($con,$mname); 
		$fname = stripslashes($_REQUEST['fname']);
		$fname = mysqli_real_escape_string($con,$fname);
		$moccupation = stripslashes($_REQUEST['moccupation']);
		$moccupation = mysqli_real_escape_string($con,$moccupation);
		$foccupation = stripslashes($_REQUEST['foccupation']); 
		$foccupation = mysqli_real_escape_string($con,$foccupation); 
		$mincome = stripslashes($_REQUEST['mincome']); 
		$mincome = mysqli_real_escape_string($con,$mincome); 
		$fincome = stripslashes($_REQUEST['fincome']);
		$fincome = mysqli_real_escape_string($con,$fincome);
		$tincome = stripslashes($_REQUEST['tincome']);
		$tincome = mysqli_real_escape_string($con,$tincome);
		$usern  = stripslashes($_REQUEST['usern']); 
		$usern = mysqli_real_escape_string($con,$usern); 

	$query = "INSERT INTO `family` (mname,fname,moccupation,foccupation,mincome,fincome,tincome,usern) VALUES ('$mname','$fname','$moccupation','$foccupation','$mincome','$fincome','$tincome','$usern')";
	$result = mysqli_query($con,$query);
	   // $rows = mysqli_num_rows($result);
   if($result){
   	//          $_SESSION['usern'] = $usern;
			 // header("Location: BankDetails.php");
			   	 // echo "<div class='form'><h2>inserted successfully.</h2>";  
   	echo " <div class='form'<h3>You are registered successfully.</h3><br></a>Click here to <a href='Education.php'> fill details</a></div>"; 
        	}	
}
?>
