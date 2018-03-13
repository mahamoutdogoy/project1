

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
               <li class="has-sub"><a href='#'><span>Sub </span></a></li>
             
               <li class='last'><a href='#'><span>Sub </span></a></li>
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
      

      <table border="1" class="table" cellpadding="7"><br>
          <tr>
            <th>Donor username</th>
            <th>Donor Email</th>
            <th>Donor phone</th>
            <th>Donor password</th>
            <th>Donor gender</th>
          </tr> 
          <tr>
          <?php
          require('db.php');
  
               //storing the selected value in the php variable  
            $query3 = "SELECT * FROM donordetails";
            $result3 = $con->query($query3);
            while($rows3 = mysqli_fetch_array($result3)){
              $username = $rows3['username'];  
              $email = $rows3['email'];
              $phone = $rows3['phone'];
              $password = $rows3['password'];
              $gender = $rows3['gender'];
              ?>
              <tr>
              <td><?php echo $username; ?></td>
              <td><?php echo $email; ?></td>
              <td><?php echo $phone; ?></td>
              <td><?php echo $password; ?></td>
              <td><?php echo $gender; ?></td>
              </tr>

              <?php
              }
            
          ?>
          </tr>
          <br>
        </table>
 
  

</body>
</html>

