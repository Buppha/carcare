<!DOCTYPE html>
<html lang="en">
<head>
  <title>Car Care Online</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */ 
    .navbar {
      margin-bottom: 50px;
      border-radius: 0;
      background-color: pink;
    }
    
    /* Remove the jumbotron's default bottom margin */ 
     .jumbotron {
      margin-bottom: 0;
    }
   
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: paleturquoise;
      padding: 25px;
    }

    header {
      background-color: paleturquoise;
      padding: 25px;
    }
  </style>
</head>

<header class="w3-display-container w3-content w3-wide" style="max-width:1500px;" id="car" >

    <h1>CarCare Store</h1>      
    <p>รวดเร็ว, ปลอดภัย & ใส่ใจทุกบริการ</p>

</header>

<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#" class="w3-bar-item w3-button w3-teal" ><i class="fa fa-home w3-margin-right"></i>ยินดีต้อนรับ</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="Indexcarcare.php"><font color="black">หน้าแรก</font></a></li>
        <li><a href="seevice.php" class="w3-bar-item w3-button"><font color="black">บริการและการจองคิว</font></a></li>
        <li><a href="location.php" class="w3-bar-item w3-button"><font color="black">การเดินทาง</font></a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <?php include('get_user.php')?>
        
         <?php include("login_logout.php") ?>
  
      </ul>
    </div>
  </div>
</nav>


<?php
$objConnect = mysqli_connect ('localhost','root','','car') or die("Error Connect to Database");
$strSQL = "DELETE FROM report ";
$objQuery = mysqli_query($objConnect,$strSQL);
if($objQuery)
{
	echo "***************************************************************Deleted.*************************************************************************";
}
else
{
	echo "Error Delete [".$strSQL."]";
}
mysqli_close($objConnect);
?>
<br><br><br><br><br><br><br><br><br><br>
<center>
    <button type="submit" style="font-size:20px" ><a href ="report.php"><i class="fa fa-trash"> Back </i></a>
    </button>
</center>
<br>

</body>

<footer class="container-fluid text-center" >
  <p>322371 Software Engineering </p>
  <p>Khonkaen University Nong Khai Campus </p>
</footer>
</html>
