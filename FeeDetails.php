<!DOCTYPE html>
<html>
<head>
	<center><h1>Fee Details</h1></center>
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
			border-radius:9px;
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
			border-radius:3px;
    		border:solid 1px;
   			padding:10px;
   			width :170px;
		}
 		.text
		{
			width:100px;
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
		.button:hover
		{
			background-color: #392F2F;
    		color: white;
		}
		input
		{
			size: 10px;
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
		<form action="" method="post">
		<table cellpadding="5" align="center" class="table">
			
				<tr>
					<td><font color="white" size="4">Username:</font></td><br>
					<?php
						$usern  = $_GET['q']; 
						?>
						<td><input type="text" name="usern" placeholder="Username" value="<?php echo $usern?>" required></td>
			</tr>
						
			<tr>
				<td><font color="white"size="4">Particulars</font></td>
				<td><font color="white"size="4">I Year</font></td>
				<td><font color="white"size="4">II Year</font></td>
				<td><font color="white"size="4">III Year</font></td>
				<td><font color="white"size="4">IV Year</font></td>
				
				<td><font color="white"size="4">Total</font></td>
			</tr>
			<tr>
				<td><font color="white" size="4">Tuition Fees</font></td>
				<td><input type="text" name="tuition1" class="text" ></td>
				<td><input type="text" name="tuition2" class="text" ></td>
				<td><input type="text" name="tuition3" class="text" ></td>
				<td><input type="text" name="tuition4" class="text" ></td>
				
				<td><input type="text" name="total" class="text" ></td>
			</tr>
			
			
		</table><br>
		<center><b><input type="submit" class="button" name="edu_next" value="Next"></b></center><br>
		<center><b><input type="reset" class="button" name="edu_reset" value="Clear"></b></center><br>
		</form>
	</body>
</html>
<?php
require('db.php');
   if (isset($_POST['usern']))
   {
		$usern = stripslashes($_REQUEST['usern']); 
		$usern = mysqli_real_escape_string($con,$usern); 
		$tuition1 = stripslashes($_REQUEST['tuition1']);
		$tuition1 = mysqli_real_escape_string($con,$tuition1);
		$tuition2 = stripslashes($_REQUEST['tuition2']);
		$tuition2 = mysqli_real_escape_string($con,$tuition2);
		$tuition3 = stripslashes($_REQUEST['tuition3']); 
		$tuition3 = mysqli_real_escape_string($con,$tuition3); 
		$tuition4 = stripslashes($_REQUEST['tuition4']); 
		$tuition4 = mysqli_real_escape_string($con,$tuition4); 
		$total = stripslashes($_REQUEST['total']);
		$total = mysqli_real_escape_string($con,$total);

	$query = "INSERT INTO `fees` (usern,tuition1,tuition2,tuition3,tuition4,total) VALUES ('$usern','$tuition1','$tuition2','$tuition3','$tuition4','$total')";
	$result = mysqli_query($con,$query);
	   // $rows = mysqli_num_rows($result);
   if($result){
   	//          $_SESSION['usern'] = $usern;
			 // header("Location: Home.php");
			   	 // echo "<div class='form'><h2>inserted successfully.</h2>"; 
			   	 echo " <div class='form'<h3>You are registered successfully.</h3><br></a>Click here to <a href='http://localhost/Scholarship/BankDetails.php?q=$usern'> fill details</a></div>";  
        	}	
}
?>
