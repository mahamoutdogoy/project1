<html>
	<head><center><h1>Donor Details</h1><center></head>
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
		}
		.text
		{
			width:164px;
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
		.buttonrs
		{
			border-radius:7px;
			width:75px;
			height:50px;
			font-weight:bold;
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
  			<li><a href="">About</a></li>
  			<li><a href="Signin.php">Application</a></li>
  			<li><a href="AdminLog.php">Admin</a></li>
  			<li><a href="DonorSignin.php">Donate</a></li>
        <li><a href="SponsorSignin.php">Sponsor</a></li>
  			<li><a href="contact.php">Contact Us</a></li>
  			<li><a href="">FAQ</a></li>
  			<li><a href="">Feedback</a></li>
	</ul></align>
		<table cellpadding="20" align="center" class="table">
			<tr>
				<td>
				<center><img src="images/Capture.PNG" ></center><br>
				<center><form action="Payment Info.html" method="post"> 
					<input type="text" name="first" placeholder="First Name" class="text" required>&nbsp
					<input type="text" name="last" placeholder="Last Name" class="text"required><br>
					<br><input type="text" name="email" placeholder="Email" class="list"required><br>
					<br><input type="text" placeholder="Phone Number (Optional)" class="list"><br>
					<!-- <font color="white"><h4>Billing Address</h4></font> -->
					<input type="text" name="street" placeholder="Street Address" class="list"><br>
					<br><input type="text" name="city" placeholder="City" class="text"><br>
					<br><input type="text" name="state" placeholder="State" class="text">&nbsp
					<input type="text" name="postal" placeholder="Postal Code" class="text"required><br>
					<br><input type="text" name="country" placeholder="Country" class="list"><br>
					<br><center><b><input type="submit" class="button" name="info" value="Payment Info"></b></center><br>
				</form></center>
			</td>
			</tr>
		</table>
	</body>
</html>