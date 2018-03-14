<!DOCTYPE html>
<html>
<head>
	<center><h1>Education Details</h1></center>
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
		.marks
		{
			width:100px;
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
		<form action="" method="post">

		<table cellpadding="4" align="center" class="table">
			<tr>
						<td><font color="white" size="5">Username:</font></td>
						<?php
						$usern  = $_GET['q']; 
						?>
						<td><input type="text" name="usern" placeholder="Username" value="<?php echo $usern?>" required></td>
					</tr>
			<tr>
				<td></td>
				<td><font color="white"size="4">Institution</font></td>
				<td><font color="white"size="4">Board</font></td>
				<td><font color="white"size="4">Year of passing</font></td>
				<td><font color="white"size="4">Percentage %</font></td>
			</tr>
			<tr>
				<td><font color="white" size="4">Class 10</font></td>
				<td><input type="text" name="tenins" required></td>
				<td><input type="text" name="tenboard" required></td>
				<td><input type="text" name="tenyop" required></td>
				<td><input type="text" name="tenper" class="marks"required></td>
			</tr>
			<tr>
				<td><font color="white"size="4">Class 12</font></td>
				<td><input type="text" name="twins" required></td>
				<td><input type="text" name="twboard" required></td>
				<td><input type="text" name="twyop" required></td>
				<td><input type="text" name="twper" class="marks"required></td>
			</tr>
			<tr>
				<td><font color="white"size="4">Degree</font></td>
				<td><input type="text" name="degins" required></td>
				<td><input type="text" name="degboard"></td>
				<td><input type="text" name="degyop" required></td>
				<td><input type="text" name="degper" class="marks"required></td>
			</tr>
			
		</table><br>
		<table cellpadding="4" align="center" class="table">
			<tr>
				<td><font color="white"size="4">Current Course</font></td>
				<td><input type="text" name="course" required></td>
			</tr>
			<tr>
				<td><font color="white"size="4">Duration of Course</font></td>
				<td><input type="text" name="dur" required></td>
			</tr>
			<tr>
				<td><font color="white"size="4">Nature of Course</font></td>
				<td><input type="radio" name="nature" value="Full Time"required><font color="white"size="4">Full Time</font><br>
				<input type="radio" name="nature" value="Part Time"required><font color="white"size="4">Part Time</font></td>
			</tr>
		</table><br>
		<center><b><input type="submit" class="button" name="edunext" value="Next"></b></center><br>
		<center><b><input type="reset" class="button" name="edureset" value="Clear"></b></center><br>
		</form>
	</body>
</html>
<?php
require('db.php');
// session_start();
   if (isset($_POST['usern']))
   {
		$usern = stripslashes($_REQUEST['usern']); 
		$usern = mysqli_real_escape_string($con,$usern); 
		$tenins = stripslashes($_REQUEST['tenins']);
		$tenins = mysqli_real_escape_string($con,$tenins);
		$tenboard = stripslashes($_REQUEST['tenboard']);
		$tenboard = mysqli_real_escape_string($con,$tenboard);
		$tenyop = stripslashes($_REQUEST['tenyop']); 
		$tenyop = mysqli_real_escape_string($con,$tenyop); 
		$tenper = stripslashes($_REQUEST['tenper']); 
		$tenper = mysqli_real_escape_string($con,$tenper); 
		$twins = stripslashes($_REQUEST['twins']);
		$twins = mysqli_real_escape_string($con,$twins);
		$twboard = stripslashes($_REQUEST['twboard']);
		$twboard = mysqli_real_escape_string($con,$twboard);
		$twyop = stripslashes($_REQUEST['twyop']); 
		$twyop = mysqli_real_escape_string($con,$twyop); 
		$twper = stripslashes($_REQUEST['twper']);
		$twper = mysqli_real_escape_string($con,$twper);
		$degins = stripslashes($_REQUEST['degins']);
		$degins   = mysqli_real_escape_string($con,$degins);
		$degboard = stripslashes($_REQUEST['degboard']);
		$degboard  = mysqli_real_escape_string($con,$degboard);
		$degyop  = stripslashes($_REQUEST['degyop']); 
		$degyop = mysqli_real_escape_string($con,$degyop); 
		$degper = stripslashes($_REQUEST['degper']);
		$degper   = mysqli_real_escape_string($con,$degper);
		$course = stripslashes($_REQUEST['course']);
		$course  = mysqli_real_escape_string($con,$course);
		$dur  = stripslashes($_REQUEST['dur']); 
		$dur = mysqli_real_escape_string($con,$dur);
		$nature  = stripslashes($_REQUEST['nature']); 
		$nature = mysqli_real_escape_string($con,$nature);

	$query = "INSERT INTO `education` (usern,ins10,board10,year10,percent10,ins12,board12,year12,percent12,insdeg,boarddeg,yeardeg,percentdeg,ccourse,dcourse,nature) VALUES ('$usern','$tenins','$tenboard','$tenyop','$tenper','$twins','$twboard','$twyop','$twper','$degins','$degboard','$degyop','$degper','$course','$dur','$nature')";
	$result = mysqli_query($con,$query);
	   // $rows = mysqli_num_rows($result);
   if($result){
   	//          $_SESSION['usern'] = $usern;
			 // header("Location: Family.php"); 
			 // echo "<div class='form'><h2>inserted successfully.</h2>"; 
			 echo " <div class='form'<h3>You are registered successfully.</h3><br></a>Click here to <a href='http://localhost/Scholarship/FeeDetails.php?q=$usern'> fill details</a></div>";  
        	}	
}
?>