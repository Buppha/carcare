<?php
session_start();
if("admin"!=$_SESSION["user"]){
    echo "You Not admin"
;}
else{
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Web Application CarCare Store</title>
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
      font color: black;
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
        <li><a href="Indexcarcare.php"> <font color="black">หน้าแรก</font></a></li>
        <li><a href="seevice.php" class="w3-bar-item w3-button"><font color="black">บริการและการจองคิว</font></a></li>
        <li><a href="location.php" class="w3-bar-item w3-button"><font color="black">การเดินทาง</font></a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        
         <?php include("login_logout.php") ?>
  
      </ul>
    </div>
  </div>
</nav>

  
<div class="w3-container w3-padding-32" id ="details" >
  <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">รายละเอียดการเข้าใช้บริการ</h3>
    <!-- เริ่มตาราง -->
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID  </th>
      <th scope="col">Name </th>
      <th scope="col">Service </th>
      <th scope="col">Total Cost </th>
    </tr>
  </thead>
  <tbody>
    
  <?php
    $con = mysqli_connect("localhost", "root", "", "car");
    mysqli_set_charset($con, "utf8");

    $q = "SELECT* FROM `report`";
    $qmany = mysqli_query($con,$q);

    while($row= mysqli_fetch_array($qmany)) {

?>
    <tr>
      <th> <?php echo $row['id'] ?> </th>
      <td> <?php echo $row['name'] ?> </td>
      <td> <?php echo $row['service'] ?> </td>
      <td> <?php echo $row['totalcost'] ?> </td>
    </tr>
    
  </tbody>
  <?php   } ?>
</table>
  </div>
</div><br><br>

<center>
    <button type="submit" style="font-size:20px" onclick="window.print()" ><i class="fa fa-print"> Print </i>
    <button type="submit" style="font-size:20px" ><a href ="testprint.php"><i class="fa fa-print"> CSV File</i></a>
    <button type="submit" style="font-size:20px" ><a href ="clear.php"><i class="fa fa-trash"> Clear </i></a>
    
    </button>
</center>
<br>

</body>
<footer class="container-fluid text-center" >
  <p>322371 Software Engineering </p>
  <p>Khonkaen University Nong Khai Campus </p>
</footer>

</html>
<?php
}
?>