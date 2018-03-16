


<!DOCTYPE html>
<html>
<head>
 <title></title>
 <link rel="stylesheet" type="text/css" href="stylesheet.css">
<style>
body {
 background: url('images/yellow.jpg') no-repeat;
 background-size: cover;
 margin-left: 10%;

}

.menu ul {
 margin: 0px;
 padding: 0px;
 list-style: none;
 font-family: arial;
}

.menu ul li {
 float: left;
 width: 200px;
 height: 40px;
 background-color: black;
 opacity: .8px;
 line-height: 40px;
 text-align: center;
 font-size: 20px;

}

.menu ul li a {
 text-decoration: none;
 color: white;
 display: block;
 
 padding-left: 0px;
 padding-right: 10px;


}

ul li a:hover {
 background-color: green;
}

ul li ul li{
 display: none;
}

ul li:hover ul li {
 display: block;
}
.hero
{
  position: absolute;
  width: 1200px;
  margin-left: 0px;
  margin-top: 0px;
}
h2
{
  color: white;
  text-transform: uppercase;
  font-size: 70px;
  text-align: center;
  margin-top: 275px;
}
.button
{
  margin-top: 30px;
  margin-left: 440px;
}
.btn
{
  border:1px solid white;
  padding: 10px 30px;
  text-decoration: none;
  margin-right: 3px;
  font-size: 13px;
  text-transform: uppercase;
}
.btn-one
{
    background-color: darkorange;
    font-family: "roboto", sans-serif;

}
.btn-two
{
  font-family: "roboto", sans-serif;

}
.btn-two:hover
{
  background-color: darkorange;
  transition: all 0.5s ease-in;
}
.menu
{
  margin-right: 150px;
  padding-right: 100px;
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
<div class="menu">
<ul>
    <li><a href="alldetails.php">Home</a></li>
 <li><a href="#">STUDENT</a></li>
 <li><a href="#">DONOR</a>
  <ul>
   <li><a href="ViewdonorD.php">View donor details</a></li>
   <li><a href="ViewdonorW.php">View donor work</a></li>
 

  </ul>
 </li>
 <li><a href="#">SPONSORER</a>
  <ul>
   <li><a href="ViewsponsorD.php">View sponsorer details</a></li>
   <li><a href="ViewsponsorW.php">View sponsorer work</a></li>
  
  </ul>
 </li>
 <br><br><br>
      

      <table border="1" class="table" cellpadding="7"><br>
          <tr>
            
            <th>Student first name</th>
            <th>Student last name</th>
            <th>Percentage in 10th</th>
            <th>Percentage in 12th</th>
            <th>UG institution</th>
            <th>UG Course</th>
            <th>UG Nature</th>
            <th>UG Fees</th>
          </tr> 
          <tr>
          <?php
          require('db.php');
  
               //storing the selected value in the php variable  
            $query3 = "SELECT applied.usern, personal.firstname, personal.lastname, education.percent10, education.percent12, education.insdeg, education.ccourse, education.nature,fees.total FROM applied LEFT JOIN personal ON applied.usern = personal.usern LEFT JOIN education ON applied.usern = education.usern LEFT JOIN fees ON applied.usern = fees.usern";
            $result3 = $con->query($query3);
            while($rows3 = mysqli_fetch_array($result3)){
              $firstname = $rows3['firstname'];  
              $lastname = $rows3['lastname'];
              $percent10 = $rows3['percent10'];
              $percent12 = $rows3['percent12'];  
              $insdeg = $rows3['insdeg'];
              $ccourse = $rows3['ccourse'];
              $nature = $rows3['nature'];
              $total = $rows3['total'];
                
              ?>
              <tr>
              <td><?php echo $firstname; ?></td>
              <td><?php echo $lastname; ?></td>
              <td><?php echo $percent10; ?></td>
              <td><?php echo $percent12; ?></td>
              <td><?php echo $insdeg; ?></td>
              <td><?php echo $ccourse; ?></td>
              <td><?php echo $nature; ?></td>
              <td><?php echo $total; ?></td>
              </tr>

              <?php
              }
            
          ?>
          </tr>
          <br>
        </table>
 
  

</body>
</html>

