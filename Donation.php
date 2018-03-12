<html>
	<head><center><h1>DONATE</h1><center></head>
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
	<script language="JavaScript">
		function money(themoney)
		{
			document.getElementById('mmm').value=themoney;
		}
	</script>

	<body>
	<link rel="stylesheet" type="text/css" href="Horizontal.css">
	<ul>
  			<li style="float:left"><a class="active"href="Home.php">Home</a></li>
  			<li><a href="PersonalDetails.php">About</a></li>
  			<li><a href="Signin.html">Application</a></li>
  			<li><a href="Registration.html">Register</a></li>
  			<li><a href="Signin.html">Sign In</a></li>
  			<li><a href="">Admin</a></li>
  			<li><a href="Donation.html">Donate/Sponsor</a></li>
  			<li><a href="">Contact Us</a></li>
  			<li><a href="">FAQ</a></li>
  			<li><a href="">Feedback</a></li>
	</ul></align>
		<table cellpadding="20" align="center" class="table">
			<tr>
				<td>
				<center><img src="images/Capture.PNG" ></center><br>
				<center><form action="DonorReg.php" method="post">
					<font color="white">Select donation amount:</font><br><br> &nbsp 
					<input type="button" name="rs5k" value="₹.5,000" class="buttonrs" onclick="money('5000')";>&nbsp
					<input type="button" name="rs10k" value="₹.10,000" class="buttonrs" onclick="money('10000')";>&nbsp
					<input type="button" name="rs20k" value="₹.20,000" class="buttonrs" onclick="money('20000')";>&nbsp 
					<input type="button" name="rs50k" value="₹.50,000" class="buttonrs" onclick="money('50000')";>
					<br><br>
					<font color="white">₹.:</font> &nbsp 
					<input type="int" id="mmm" class="text" name="" maxlength="6" size="6" required><br>
					<br>
					<input list="donate" name="donate" placeholder="Donate with Card" class="list" required>
						<datalist id="donate">
							<option value="Donate with Card">
							<option value="Donate with PayPal">
						</datalist><br><br>
					<input list="time" name="time" placeholder="One Time" class="list" required>
						<datalist id="time">
							<option value="One Time">
							<option value="Monthly">
							<option value="Yearly">
						</datalist><br><br>
					<center><b><input type="submit" class="button" name="info" value="Your Information"></b></center><br>
				</form></center>
			</td>
			</tr>
		</table>
	</body>
</html>