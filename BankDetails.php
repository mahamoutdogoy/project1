<!DOCTYPE html>
<html>
<head>
  	<center><h1>Bank Details</h1></center>
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
  			<li><a href="PersonalDetails.php">Personal Details</a></li>
  			<li><a href="Education.php">Education Details</a></li>
  			<li><a href="Fees.php">Fees Details</a></li>
  			<li><a href="Family.php">Family Details</a></li>
  			<li><a href="Bank.php">Bank Details</a></li>
  			<li><a href="Others.php">Other Info</a></li>
	</ul></align>
		<table cellpadding="20" align="center" class="table">
			<tr>
				<td>
				<center><img src="images/Capture.PNG" ></center><br>
				<form action="" method="POST">
					<input type="text" class="text" name="name" placeholder="Name as per Bank Account" required><br>
					<br>					
					<input list="acctype" class="text" name="acctype" placeholder="Nature of Account Maintained" required>
						<datalist id="acctype">
							<option value="Current">
							<option value="Savings">
							<option value="General">
						</datalist><br><br>					
					<input type="text" class="text" name="accnum" placeholder="Account Number" required><br>
					<br>					 
					<input type="text" class="text" name="bname" placeholder="Name of Bank"required><br>
					<br>
					<input type="text" class="text" name="branch" placeholder="Branch of Bank"required><br>
					<br>
					<input type="text" class="text" name="ifsc" placeholder="IFSC Code"required><br>
					<br>
					<input type="text" class="text" name="usern" placeholder="username"required><br><br>
					<center><b><input type="submit" class="button" name="info" value="Next"></b></center><br>
				</form>
			</td>
			</tr>
		</table>
		
	</body>
</html>
<?php
require('db.php');
   if (isset($_POST['name']))
   {
		$name = stripslashes($_REQUEST['name']); 
		$name = mysqli_real_escape_string($con,$name); 
		$acctype = stripslashes($_REQUEST['acctype']);
		$acctype = mysqli_real_escape_string($con,$acctype);
		$accnum = stripslashes($_REQUEST['accnum']);
		$accnum = mysqli_real_escape_string($con,$accnum);
		$bname = stripslashes($_REQUEST['bname']); 
		$bname = mysqli_real_escape_string($con,$bname); 
		$branch = stripslashes($_REQUEST['branch']); 
		$branch = mysqli_real_escape_string($con,$branch); 
		$ifsc = stripslashes($_REQUEST['ifsc']);
		$ifsc = mysqli_real_escape_string($con,$ifsc);
		$usern  = stripslashes($_REQUEST['usern']); 
		$usern = mysqli_real_escape_string($con,$usern); 

	$query = "INSERT INTO `bank` (name,acctype,accnum,bname,branch,ifsc,usern) VALUES ('$name','$acctype','$accnum','$bname','$branch','$ifsc','$usern')";
	$result = mysqli_query($con,$query);
	   // $rows = mysqli_num_rows($result);
   if($result){
   	//          $_SESSION['usern'] = $usern;
			 // header("Location: FeeDetails.php");
			   	 // echo "<div class='form'><h2>inserted successfully.</h2>";  
                            echo " <div class='form'<h3>You are registered successfully.</h3><br></a>Click here to <a href='Applied.php'> fill details</a></div>"; 

        	}	
}
?>