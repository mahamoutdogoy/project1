<!DOCTYPE html>
<html>
<head>
	<center><h1> Details</h1></center>
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
						<td><font color="white" size="4">Username:</font></td>
						<?php
						$usern  = $_GET['q']; 
						?>
						<td><input type="text" name="usern" placeholder="Username" value="<?php echo $usern?>" required></td>
					</tr>				


					<tr>

						<td><font color="white" size="3">I WANT TO APPLY FOR </font><br>

						<td><font color="white"><input type="radio" name="appliedfor" value="Scholarship" class="radio">Scholarship
						<input type="radio" name="appliedfor" value="Sponsorship" class="radio">Sponsorship<br>
						<br></font></td>
					</tr>	
		</table>
		<br>
		<center><input type="submit" name="next" value="Next" class="button"><br><br>
		<input type="reset" value="Clear" class="button"><br><br></center>
		
		</form>
	</body>
</html>



<?php
require('db.php');
   if (isset($_POST['usern']))
   {
		$usern = stripslashes($_REQUEST['usern']); 
		$usern = mysqli_real_escape_string($con,$usern); 
		$appliedfor = stripslashes($_REQUEST['appliedfor']);
		$appliedfor = mysqli_real_escape_string($con,$appliedfor);
		

	$query = "INSERT INTO `applied` (usern,appliedfor,status) VALUES ('$usern','$appliedfor','no')";
	$result = mysqli_query($con,$query);
	$query1 = "INSERT INTO `scholarship` (usern,status) SELECT usern,status FROM applied WHERE appliedfor='Scholarship' AND usern='$usern'";
	$result1 = mysqli_query($con,$query1);
	$query2 = "INSERT INTO `sponsorship` (usern,status) SELECT usern,status FROM applied WHERE appliedfor='Sponsorship' AND usern='$usern'";
	$result2 = mysqli_query($con,$query2);

	   // $rows = mysqli_num_rows($result);
   if($result){
   	//          $_SESSION['usern'] = $usern;
			 // header("Location: FeeDetails.php");
			   	 // echo "<div class='form'><h2>inserted successfully.</h2>";  
                            echo " <div class='form'<h3>You are registered successfully.</a>Click here to <a href='ThanksApp.php'>Home</a></div>"; 
        	}	
    if($result1){
    	echo " <div class='form'<h3>scholarship registered.</a>Click here to <a href='ThanksApp.php'>Home</a></div>"; 
        	}
     if($result2){
    	echo " <div class='form'<h3>sponorship registered.</a>Click here to <a href='ThanksApp.php'>Home</a></div>"; 
        	}	

}
?>