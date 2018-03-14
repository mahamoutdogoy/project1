<!doctype html>
<html lang=''>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="styles.css">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="script.js"></script>
   <title></title>

   <style>


      body
{

      background-image:url("images/yellow.jpg");
      background-size: cover;
 margin-left: 10%;

   }  
      
#cssmenu ul,
#cssmenu li,
#cssmenu span,
#cssmenu a {
  margin: 0;
  padding: 0;
  position: relative;
}
#cssmenu {
  line-height: 1;
  border-radius: 5px 5px 0 0;
  -moz-border-radius: 5px 5px 0 0;
  -webkit-border-radius: 5px 5px 0 0;
  background: #141414;
  background: -moz-linear-gradient(top, #333333 0%, #141414 100%);
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #333333), color-stop(100%, #141414));
  background: -webkit-linear-gradient(top, #333333 0%, #141414 100%);
  background: -o-linear-gradient(top, #333333 0%, #141414 100%);
  background: -ms-linear-gradient(top, #333333 0%, #141414 100%);
  background: linear-gradient(to bottom, #333333 0%, #141414 100%);
  border-bottom: 2px solid #0fa1e0;
  width: auto;
}
#cssmenu:after,
#cssmenu ul:after {
  content: '';
  display: block;
  clear: both;
}
#cssmenu a {
  background: #141414;
  background: -moz-linear-gradient(top, #333333 0%, #141414 100%);
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #333333), color-stop(100%, #141414));
  background: -webkit-linear-gradient(top, #333333 0%, #141414 100%);
  background: -o-linear-gradient(top, #333333 0%, #141414 100%);
  background: -ms-linear-gradient(top, #333333 0%, #141414 100%);
  background: linear-gradient(to bottom, #333333 0%, #141414 100%);
  color: #ffffff;
  display: block;
  font-family: Helvetica, Arial, Verdana, sans-serif;
  padding: 19px 20px;
  text-decoration: none;
}
#cssmenu ul {
  list-style: none;
}
#cssmenu > ul > li {
  display: inline-block;
  float: left;
  margin: 0;
}
#cssmenu.align-center {
  text-align: center;
}
#cssmenu.align-center > ul > li {
  float: none;
}
#cssmenu.align-center ul ul {
  text-align: left;
}
#cssmenu.align-right > ul {
  float: right;
}
#cssmenu.align-right ul ul {
  text-align: right;
}
#cssmenu > ul > li > a {
  color: #ffffff;
  font-size: 12px;
}
#cssmenu > ul > li:hover:after {
  content: '';
  display: block;
  width: 0;
  height: 0;
  position: absolute;
  left: 50%;
  bottom: 0;
  border-left: 10px solid transparent;
  border-right: 10px solid transparent;
  border-bottom: 10px solid #0fa1e0;
  margin-left: -10px;
}
#cssmenu > ul > li:first-child > a {
  border-radius: 5px 0 0 0;
  -moz-border-radius: 5px 0 0 0;
  -webkit-border-radius: 5px 0 0 0;
}
#cssmenu.align-right > ul > li:first-child > a,
#cssmenu.align-center > ul > li:first-child > a {
  border-radius: 0;
  -moz-border-radius: 0;
  -webkit-border-radius: 0;
}
#cssmenu.align-right > ul > li:last-child > a {
  border-radius: 0 5px 0 0;
  -moz-border-radius: 0 5px 0 0;
  -webkit-border-radius: 0 5px 0 0;
}
#cssmenu > ul > li.active > a,
#cssmenu > ul > li:hover > a {
  color: #ffffff;
  box-shadow: inset 0 0 3px #000000;
  -moz-box-shadow: inset 0 0 3px #000000;
  -webkit-box-shadow: inset 0 0 3px #000000;
  background: #070707;
  background: -moz-linear-gradient(top, #262626 0%, #070707 100%);
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #262626), color-stop(100%, #070707));
  background: -webkit-linear-gradient(top, #262626 0%, #070707 100%);
  background: -o-linear-gradient(top, #262626 0%, #070707 100%);
  background: -ms-linear-gradient(top, #262626 0%, #070707 100%);
  background: linear-gradient(to bottom, #262626 0%, #070707 100%);
}
#cssmenu .has-sub {
  z-index: 1;
}
#cssmenu .has-sub:hover > ul {
  display: block;
}
#cssmenu .has-sub ul {
  display: none;
  position: absolute;
  width: 200px;
  top: 100%;
  left: 0;
}
#cssmenu.align-right .has-sub ul {
  left: auto;
  right: 0;
}
#cssmenu .has-sub ul li {
  *margin-bottom: -1px;
}
#cssmenu .has-sub ul li a {
  background: #0fa1e0;
  border-bottom: 1px dotted #31b7f1;
  font-size: 11px;
  filter: none;
  display: block;
  line-height: 120%;
  padding: 10px;
  color: #ffffff;
}
#cssmenu .has-sub ul li:hover a {
  background: #0c7fb0;
}
#cssmenu ul ul li:hover > a {
  color: #ffffff;
}
#cssmenu .has-sub .has-sub:hover > ul {
  display: block;
}
#cssmenu .has-sub .has-sub ul {
  display: none;
  position: absolute;
  left: 100%;
  top: 0;
}
#cssmenu.align-right .has-sub .has-sub ul,
#cssmenu.align-right ul ul ul {
  left: auto;
  right: 100%;
}
#cssmenu .has-sub .has-sub ul li a {
  background: #0c7fb0;
  border-bottom: 1px dotted #31b7f1;
}
#cssmenu .has-sub .has-sub ul li a:hover {
  background: #0a6d98;
}
#cssmenu ul ul li.last > a,
#cssmenu ul ul li:last-child > a,
#cssmenu ul ul ul li.last > a,
#cssmenu ul ul ul li:last-child > a,
#cssmenu .has-sub ul li:last-child > a,
#cssmenu .has-sub ul li.last > a {
  border-bottom: 0;
}


.delete1

 {

  width: 200px;
}






   </style>
</head>
<body>

<div id='cssmenu'>
<ul>
   <li><a href='adminhome.php'><span>Home</span></a></li>
   <li class='active has-sub'><a href='#'><span>Student</span></a>
      <ul>
         <li class='has-sub'><a href='#'><span>View</span></a>
            <ul>
               <li><a href='scholars.php'><span>Scholars</span></a></li>
               <li class='last'><a href='Sponsored.php'><span>Sponsored</span></a></li>
               <li class='active has-sub'><a href='#'><span>All details</span></a>


                </ul>
  </li>



         <li class=' active has-sub'><a href='#'><span>Delete</span></a>
            <ul>
               <li class="has-sub"><a href='DeleteS.php'><span>Delete duplicate  </span></a></li>
             
              
            </ul>
        </li>




                   
                  <li class='active has-sub'><a href='#'><span>reward</span></a>
                      
                  <ul>
                           <li class="last"><a href='#'><span>Sub Product</span></a></li>
                           <li class='last'><a href='#'><span>Sub </span></a></li>
                  </ul>
               </li>

              


  
   </li>
   
      </li>                  
</ul>
  
         <li class='has-sub'><a href='#'><span>Donor</span></a>
            <ul>
               <li><a href='ViewdonorD.php'><span>View donor details</span></a></li>
               <li class='last'><a href='ViewdonorW.php'><span>View donor work</span></a></li>
               
            </ul>




<li class='has-sub'><a href='#'><span>Sponsor</span></a>
            <ul>
               <li><a href='ViewsponsorD.php'><span>View sponsor details</span></a></li>
               <li class='last'><a href='ViewsponsorW.php'><span>View sponsor work</span></a></li>
               
            </ul>



</div>

 <br><br><br>

 <form action="" method="POST">
  <input type="text" name="grade10" placeholder="Enter the 10th grade">&nbsp&nbsp&nbsp
  <input type="text" name="grade12" placeholder="Enter the 12th grade">&nbsp&nbsp&nbsp
  <input type="text" name="amount" placeholder="Enter annual income">&nbsp&nbsp&nbsp
  <input type="text" name="feespaid" placeholder="Enter the fees"><br><br>
  <input type="text" name="scholarshipamnt" placeholder="Enter the amount">&nbsp&nbsp&nbsp
  <input type="submit" name="Submit" value="Search">
  <table border="1" class="table">
          <tr>
            <th>Student Username</th>
            <th>Student Firstname</th>
            <th>Student Lastname</th>
            <th>Student 10th grade</th>
            <th>Student 12th grade</th>
            <th>Student annual income</th>
            <th>Student fees paid</th>
            <th>Student status</th>           
          </tr> 
  <tr>
  <?php
    require('db.php');
    $grade10 = $_POST['grade10'];
    $grade12 = $_POST['grade12'];
    $amount = $_POST['amount'];
    $feespaid = $_POST['feespaid'];
    $scholarshipamnt = $_POST['scholarshipamnt'];

    if(isset($_POST['Submit'])){
      
      $query = "SELECT personal.username, personal.firstname, personal.lastname, education.grade10, education.grade12, annual2.amount, fees.feespaid, scholarship.status FROM  personal LEFT JOIN education ON personal.username=education.username LEFT JOIN annual2 ON personal.username=annual2.username LEFT JOIN fees ON personal.username=fees.username LEFT JOIN scholarship ON personal.username=scholarship.username WHERE education.grade10 >= '$grade10' AND education.grade12 >= '$grade12' AND annual2.amount<='$amount' AND fees.feespaid<='$feespaid' AND scholarship.status='no'";
       
      $result = $conn->query($query);
      
      while($rows3 = mysqli_fetch_array($result)){
              $username = $rows3['username'];
              $firstname = $rows3['firstname']; 
              $lastname = $rows3['lastname'];
              $grade10 = $rows3['grade10'];
              $grade12 = $rows3['grade12'];
              $amount = $rows3['amount'];
              $feespaid = $rows3['feespaid'];
              $status = $rows3['status'];
  
              $query3 = "INSERT INTO scholarshiped (username,amount) VALUES ('$username','$scholarshipamnt')";

              $result2 = $conn->query($query3);

              ?>
              <tr>
              <td><?php echo $username; ?></td>
              <td><?php echo $firstname; ?></td>
              <td><?php echo $lastname; ?></td>
              <td><?php echo $grade10; ?></td>
              <td><?php echo $grade12; ?></td>
              <td><?php echo $amount; ?></td>
              <td><?php echo $feespaid; ?></td>
              <td><?php echo $status; ?></td>
              </tr>

              <?php
              }
            }
          ?>
          </tr>
        </table>
        <br><br>
        <input type="submit" name="Reward" value="Reward Them!!">
        <?php
          if(isset($_POST['Reward'])){
            $query4 = "UPDATE scholarship, scholarshiped SET scholarship.status='yes' WHERE scholarship.username=scholarshiped.username";

              $result4 = $conn->query($query4);
              if($result4){
                echo"Successfully updated";
              }
            
          } 
        ?>
  </form>
</body>
</html>
