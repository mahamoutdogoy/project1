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
  <input type="text" name="percent10" placeholder="Enter the 10th grade">&nbsp&nbsp&nbsp
  <input type="text" name="percent12" placeholder="Enter the 12th grade">&nbsp&nbsp&nbsp
  <input type="text" name="tincome" placeholder="Enter annual income">&nbsp&nbsp&nbsp
  <input type="text" name="tuition1" placeholder="Enter the fees"><br><br>
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
  <tr><br><br><br>
  <?php
    require('db.php');
    if(isset($_POST['percent10'])){

    $percent10 = $_POST['percent10'];
    $percent12 = $_POST['percent12'];
    $tincome = $_POST['tincome'];
    $tuition1 = $_POST['tuition1'];
    $scholarshipamnt = $_POST['scholarshipamnt'];

    if(isset($_POST['Submit'])){
      
      $query = "SELECT registration.username, personal.firstname, personal.lastname, education.percent10, education.percent12, family.tincome, fees.tuition1, scholarship.status FROM  registration LEFT JOIN personal ON registration.username=personal.usern LEFT JOIN education ON registration.username=education.usern LEFT JOIN family ON registration.username=family.usern LEFT JOIN fees ON registration.username=fees.usern LEFT JOIN scholarship ON registration.username=scholarship.usern WHERE education.percent10 >= '$percent10' AND education.percent12 >= '$percent12' AND family.tincome<='$tincome' AND fees.tuition1<='$tuition1' AND scholarship.status='no'";
       
      $result = $con->query($query);
      
      while($rows3 = mysqli_fetch_array($result)){
              $username = $rows3['username'];
              $firstname = $rows3['firstname']; 
              $lastname = $rows3['lastname'];
              $percent10 = $rows3['percent10'];
              $percent12 = $rows3['percent12'];
              $tincome = $rows3['tincome'];
              $tuition1 = $rows3['tuition1'];
              $status = $rows3['status'];
  
              $query3 = "INSERT INTO scholars (usern,amount) VALUES ('$username','$scholarshipamnt')";

              $result2 = $con->query($query3);

              ?>
              <tr>
              <td><?php echo $username; ?></td>
              <td><?php echo $firstname; ?></td>
              <td><?php echo $lastname; ?></td>
              <td><?php echo $percent10; ?></td>
              <td><?php echo $percent12; ?></td>
              <td><?php echo $tincome; ?></td>
              <td><?php echo $tuition1; ?></td>
              <td><?php echo $status; ?></td>
              </tr>

              <?php
              }
            }
               }
          ?>
          </tr>
        </table>
        <br><br>
        <input type="submit" name="Reward" value="Reward Them!!">
        <?php
          if(isset($_POST['Reward'])){

            $query4 = "UPDATE scholarship, scholars SET scholarship.status='yes' WHERE scholarship.usern =scholars.usern";

              $result4 = $con->query($query4);
              if($result4){
                echo"Successfully updated";
              }
            
          } 
        ?>
  </form>
</body>
</html>
