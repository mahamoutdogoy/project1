<html>
	<head><center><h1>Make a Payment</h1><center></head>
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
		.card
		{
			width:277px;
		}
		.cvv
		{
			width:50px;
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
  			<li><a href="PersonalDetails.php">About</a></li>
  			<li><a href="Signin.php">Application</a></li>
  			<li><a href="">Admin</a></li>
  			<li><a href="Donation.php">Donate</a></li>
  			<li><a href="Donation.php">Sponsor</a></li>
  			<li><a href="">Contact Us</a></li>
  			<li><a href="">FAQ</a></li>
  			<li><a href="">Feedback</a></li>
	</ul></align>
		<table cellpadding="20" align="center" class="table">
			<tr>
				<td>
				<center><img src="images/Capture.PNG" ></center><br>
				<center><form action="" method="post"> 
					<input type="text" class="card" name="username" placeholder="username"  required><br><br>
					<input list="donate" name="card" placeholder="Donate with Card" class="card" required>
						<datalist id="donate">
							<option value="Credit Card">
							<option value="Debit Card">
						</datalist><br><br>
						<input type="text" name="amount" placeholder="amount" class="card" required><br><br>
			
					<input type="text" name="cardnum" placeholder="Card Number" class="card" required>&nbsp
					<input type="password" name="cvv" placeholder="CVV" class="cvv" required><br>
					<br><input type="text" name="month" placeholder="Month" class="text" required>&nbsp
					<input type="text" name="year" placeholder="Year" class="text" required><br>
					<br><center><b><input type="submit" class="button" name="submit" value="Submit Donation"></b></center><br>
				</form></center>
			</td>
			</tr>
		</table>
	</body>
</html>





<?php

require('db.php');

 if (isset($_REQUEST['username'])){
		$username = stripslashes($_REQUEST['username']); 
		$username = mysqli_real_escape_string($con,$username);
		$card = stripslashes($_REQUEST['card']);
		$card = mysqli_real_escape_string($con,$card);
		
		$amount = stripslashes($_REQUEST['amount']);
		$amount = mysqli_real_escape_string($con,$amount);
		$cardnum = stripslashes($_REQUEST['cardnum']);
		$cardnum = mysqli_real_escape_string($con,$cardnum);

		$cvv = stripslashes($_REQUEST['cvv']);
		$cvv = mysqli_real_escape_string($con,$cvv);

		$month = stripslashes($_REQUEST['month']);
		$month = mysqli_real_escape_string($con,$month);

		$year = stripslashes($_REQUEST['year']);
		$year = mysqli_real_escape_string($con,$year);

		// $trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `payment` (username,card,amount,cardnum,cvv,month,year) VALUES ('$username','$card','$amount','$cardnum','$cvv','$month','$year')";
        $result = mysqli_query($con,$query);
        
      if($result){
      	

        	  echo " <div class='form'<h3>You are registered successfully.</h3><br></a>Click here to <a href='Signin.php'> </a></div>"; 





 }
    }

	
?>