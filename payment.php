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

<form>
    <center><h1>ช่องทางการชำระเงิน</h1></center>
    <center><h1>จำนวนเงินที่ท่านต้องชำระ ทั้งหมด 
      <?php
         $price1 = $_POST['price'];
         $txt_data=explode(",",$price1)[0];
         $price=explode(",",$price1)[1];
          echo $price;
          $reg = mysqli_connect ('localhost','root','','car');
          mysqli_set_charset($reg, "UTF8");
          $user=$_SESSION["user"];
      
          $keb = "INSERT INTO report (name, service, totalcost) VALUES ('$user','$txt_data','$price')";
          $sql = mysqli_query($reg,$keb);// or trigger_error("Query Failed! SQL: $sql - Error: ".mysqli_error(), E_USER_ERROR);;

      ?>
       บาท  
      </h1>
      </center>
    <br>
    
</form>
<br>


<div class="container">    
        <div class="row">
          <div class="col-sm-4">
            <div class="panel panel-primary">
              <div class="panel-heading">E-Banking</div>
              <div class="panel-body"><a href="banking.php"><img src="prom1.jpg" alt="Image" class="img-responsive" style="width:100%"></a></div>
              <div class="panel-footer"></div>
            </div>
          </div>
          
          <div class="col-sm-4"> 
            <div class="panel panel-primary">
              <div class="panel-heading">Cradit Card</div>
              <div class="panel-body"><a href="https://www.paypal.com/th/webapps/mpp/accept-payments-online?locale.x=th_TH"><img src="cra1.jpg" alt="Image" class="img-responsive" style="width:150%"></a></div>
              <div class="panel-footer"></div>
            </div>
          </div>

          <div class="row" >
          <div class="col-sm-4">
            <div class="panel panel-primary">
              <div class="panel-heading">E-Wallet</div>
              <div class="panel-body"><a href="https://wallet.truemoney.com/"><img src="ABVWallet.jpg" alt="Image" class="img-responsive" style="width:100%"></a></div>
              <div class="panel-footer"></div>
            </div>
          </div>
      </div><br>

      
</div><br><br>


</body>
<footer class="container-fluid text-center" >
  <p>322371 Software Engineering </p>
  <p>Khonkaen University Nong Khai Campus </p>
</footer>

</html>
