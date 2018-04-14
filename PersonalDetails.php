<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<center><h1>Personal Details</h1></center>
	<title>Personal</title>
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
						<td><font color="white" size="5">First Name:</font></td>
						<td><input type="text" name="firstname" placeholder="First Name" required></td>
					</tr>
					<tr>
						<td><font color="white" size="5">Last Name:</font></td>
						<td><input type="text" name="lastname" placeholder="Last Name" required></td>
					</tr>
					<tr>
						<td><font color="white" size="5">Date of Birth:</font></td>
						<td><input type="date" name="dob" placeholder="DOB"  required></td>
					</tr>
					<tr>
						<td><font color="white" size="5">Age:</font></td>
						<td><input type="text"    name="age"  placeholder="Age" required></td>
					</tr>
					<tr>
						<td><font color="white" size="5">Aadhaar No:</font></td>
						<td><input type="text" name="adhar" placeholder="Aadhaar Number" maxlength="12" required></td>
					</tr> 
					<tr>
						<td><font color="white" size="5">Address:</font></td>
						<td><input type="text" name="address"placeholder="Address" required></td>
					</tr>
					<tr>
						<td><font color="white" size="5">Street Name:</font></td>
						<td><input type="text" name="street" placeholder="Street Name" required></td>
					</tr>
					<tr>
						<td><font color="white" size="5">City:</font></td>
						<td><input type="text" name="city" placeholder="City" required></td>
					</tr>
					<tr>
						<td><font color="white" size="5">State:</font></td>
						<td><input type="text" name="state" placeholder="State" required></td>
					</tr>
					<tr>
						<td><font color="white" size="5">Postal Code:</font></td>
						<td><input type="number" name="pin" placeholder="Postal Code" maxlength="6" required></td>
					</tr>

					<tr>
						<td><font color="white" size="5">Physically Handicapped</font><br>
						<td><font color="white"><input type="radio" name="physic" value="Yes" class="radio">Yes
						<input type="radio" name="physic" value="No" class="radio">No<br>
						<br></font></td>
					</tr>	
					<tr>
						<td><font color="white" size="5">Username:</font></td>
						<?php
						$usern  = $_GET['q']; 
						?>
						<td><input type="text" name="usern" placeholder="Username" value="<?php echo $usern?>"  readonly></td>
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
// session_start();
   if (isset($_POST['firstname']))
   {
		$firstname = stripslashes($_REQUEST['firstname']); 
		$firstname = mysqli_real_escape_string($con,$firstname); 
		$lastname = stripslashes($_REQUEST['lastname']);
		$lastname = mysqli_real_escape_string($con,$lastname);
		$dob = stripslashes($_REQUEST['dob']);
		$dob = mysqli_real_escape_string($con,$dob);
		$age = stripslashes($_REQUEST['age']); 
		$age = mysqli_real_escape_string($con,$age); 
		$adhar = stripslashes($_REQUEST['adhar']); 
		$adhar = mysqli_real_escape_string($con,$adhar); 
		$address = stripslashes($_REQUEST['address']);
		$address = mysqli_real_escape_string($con,$address);
		$street = stripslashes($_REQUEST['street']);
		$street = mysqli_real_escape_string($con,$street);
		$city = stripslashes($_REQUEST['city']); 
		$city = mysqli_real_escape_string($con,$city); 
		$state = stripslashes($_REQUEST['state']);
		$state = mysqli_real_escape_string($con,$state);
		$pin = stripslashes($_REQUEST['pin']);
		$pin   = mysqli_real_escape_string($con,$pin);
		$physic = stripslashes($_REQUEST['physic']);
		$physic  = mysqli_real_escape_string($con,$physic);
		// $usern  = $_GET['q']; 
		// $usern = mysqli_real_escape_string($con,$usern); 

	$query = "INSERT INTO `personal` (firstname,lastname,dob,age,adhar,address,street,city,state,pin,physic,usern) VALUES ('$firstname','$lastname','$dob','$age','$adhar','$address','$street','$city','$state','$pin','$physic','$usern')";
	$result = mysqli_query($con,$query);
	   // $rows = mysqli_num_rows($result);
   if($result){
   	//          $_SESSION['usern'] = $usern;
			  // header("Location:Education.php");
			   // header("Location: http://localhost/Scholarship/Family.php?q=$usern");  	  
        	   echo " <div class='form'<h3>You are registered successfully.</h3><br></a>Click here to <a href='http://localhost/Scholarship/Family.php?q=$usern'> fill details</a></div>"; 
        	}
        	else {
        			echo " some problem" ;
        		}	
}
?>