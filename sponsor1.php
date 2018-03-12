<?php
	require('db.php');
?>
<html>
	<head>
		<title></title>
		<!-- <link rel = "stylesheet" type="text/css" href="css/style.css"/> -->
<link rel="stylesheet" type="text/css" href="Horizontal.css">


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
			background-color:white;
			border-radius:20px;
			font-color:white;
			
			opacity:0.8;
			text-align: center;

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
		.submit
		{
			width: 95px;
		}
		.box
		{
			width: 295px;
		}
        .change
		{
			width: 130px;
		}
		h1

		{
		    text-align: center;
		}

	</style>
	</head>
	<body>
		<table>
	
		<div class="container">
		<div class="wrapper">
				<h1>SPONSORED KID</h1>
		</div>
		<div class="data">
			<form action="" method="POST" >
				<select name="usern">
					<option>STUDENT</option>

					<?php 
						$query1 = "SELECT usern FROM sponsorship WHERE status='no'";
						$result1 = $con->query($query1);
						while($rows1 = mysqli_fetch_array($result1))	//mysqli_fetch_array is used to return an array 

						{
							$sid = $rows1['usern'];		//storing the value selected form the displayed lsit				
							$rowsData1 = $rows1['usern'];	//displaying the values from the table
							?>
							<option value="<?php echo $sid;?>"><?php echo $rowsData1;?></option>nbsp
							<?php
							}
						?> 
				</select>&nbsp&nbsp&nbsp&nbsp
				<input type="submit" name="submit" class="submit"/>
				<table border="1" class="table" cellpadding="7"><br>
					<tr>
						<th>Student username</th>
						<th>Student status</th>
						<th>Student First Name</th>
						<th>Student Last Name</th>
						<th>Student Annual Income</th>
						 <th>Institution Name</th>
						<th>Course Name</th>
						<th>Fees Paid</th> 
					</tr> 
					<tr>
					<?php
						if(isset($_POST['submit'])){
						$sponsorkid = $_POST['usern'];		//storing the selected value in the php variable	
						$query3 = "SELECT sponsorship.usern, sponsorship.status, personal.firstname, personal.lastname,family.tincome, education.insdeg, education.ccourse, fees.total FROM sponsorship LEFT JOIN personal ON sponsorship.usern=personal.usern LEFT JOIN family ON sponsorship.usern=family.usern LEFT JOIN education ON sponsorship.usern=education.usern LEFT JOIN fees ON sponsorship.usern=fees.usern  WHERE sponsorship.usern = '$sponsorkid'";
						$result3 = $con->query($query3);
						while($rows3 = mysqli_fetch_array($result3)){
							$studentFName = $rows3['usern'];	
							$studentLName = $rows3['status'];
							$studentFirst = $rows3['firstname'];
							$studentLast = $rows3['lastname'];
							$studentannual = $rows3['tincome'];
							$studentins = $rows3['insdeg'];
							$studentcourse = $rows3['ccourse'];
							$studenttot = $rows3['total'];


							?>
							<tr>
							<td><?php echo $studentFName; ?></td>
							<td><?php echo $studentLName; ?></td>
							<td><?php echo $studentFirst; ?></td>
							<td><?php echo $studentLast; ?></td>
							<td><?php echo $studentannual; ?></td>
							<td><?php echo $studentins; ?></td>
							<td><?php echo $studentcourse; ?></td>
							<td><?php echo $studenttot; ?></td>
							</tr>

							<?php
							}
						}
					?>
					</tr>
					<br>
				</table><br>
				<br><input type="text" name="username2" placeholder="enter the username of the student" class="box">&nbsp&nbsp&nbsp&nbsp
				 <input type="text" name="sponsorname" placeholder="enter your username" class="box">
				 &nbsp&nbsp&nbsp&nbsp
				 <input type="text" name="sponsoramount" placeholder="amount" class="box"> 
				<br><br>
				<input type="submit" name="changestatus" value="change status"  class="change"/>
				<?php
						if(isset($_POST['changestatus'])){
							$sponsorkid2 = $_POST['username2'];
							$sponsor = $_POST['sponsorname'];
							$sponsoramount = $_POST['sponsoramount'];
							$query4 = "UPDATE sponsorship SET status='yes' WHERE usern = '$sponsorkid2'";
							$query5 = "INSERT into `sponsored` (usern,sponusern,amount) VALUES ('$sponsorkid2','$sponsor','$sponsoramount')";
						$result4 = $con->query($query4);
						$result5 = $con->query($query5);
						if($result4){
							echo"$sponsorkid2";
							echo"Successfully updated";
						}
						else{
							echo"some error in updating";
						}
						if($result5){
							echo"Successfully sponsored";

						}
						else{
							echo"Some problem";

						}

						}
?>
				</form>
			</div>
			</div>	
</body>

</html>