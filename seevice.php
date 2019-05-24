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
  
<form action="QQ.php" method="post">
  <div class="container" id="โปรโมชัน">    
    <div class="row">
      <div class="col-sm-4">
        <div class="panel panel-primary">
          <div class="panel-heading">ล้างรถ ราคา 250</div>
          <div class="panel-body"><img src="../carcare/Car-Washing-icon.png" class="img-responsive" style="width:100%" alt="Image"></div>
          <div class="panel-footer">
            
                <center><input type="checkbox" name="check_list[]" value="ล้างรถ"> เลือก </center> 

          </div>
        </div>
      </div>

      <div class="col-sm-4"> 
        <div class="panel panel-danger">
          <div class="panel-heading">ทำสีรถ 8000</div>
          <div class="panel-body"><img src="../carcare/Car-Painting-icon.png" class="img-responsive" style="width:100%" alt="Image"></div>
          <div class="panel-footer">
   
                  <center><input type="checkbox" name="check_list[]" value="ทำสีรถ"> เลือก  </center> 
     
          </div>
        </div>
      </div>

      <div class="col-sm-4"> 
        <div class="panel panel-success">
          <div class="panel-heading">ติดตั้งเครื่องเสียง 15,000</div>
          <div class="panel-body"><img src="../carcare/Car-Sound-icon.png" class="img-responsive" style="width:100%" alt="Image"></div>
          <div class="panel-footer">
   
                  <center><input type="checkbox" name="check_list[]" value="ติดตั้งเครื่องเสียง">เลือก  </center> 
         
          </div>
        </div>
      </div>
    </div>
  </div><br>


  <div class="container" id="โปรโมชัน">    
          <div class="row">
           
            <div class="col-sm-4">
              <div class="panel panel-primary">
                <div class="panel-heading">ซ่อมรถ</div>
                <div class="panel-body"><img src="../carcare/Car-Repair-icon.png" class="img-responsive" style="width:100%" alt="Image"></div>
                <div class="panel-footer">
                   
                        <center><input type="checkbox" name="check_list[]" value="ซ่อมรถ"> เลือก </center> 
                   
                </div>
              </div>
            </div>
            <div class="col-sm-4"> 
              <div class="panel panel-danger">
                <div class="panel-heading">รับรถนอกสถานที่ 80</div>
                <div class="panel-body"><img src="../carcare/car6.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
                <div class="panel-footer">
                   
                        <center><input type="checkbox" name="check_list[]" value="รับรถนอกสถานที่"> เลือก </center> 
                
                </div>
              </div>
            </div>
            <div class="col-sm-4"> 
              <div class="panel panel-success">
                <div class="panel-heading">ซ่อมรถนอกสถานที่ 300</div>
                <div class="panel-body"><img src="../carcare/car7.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
                <div class="panel-footer">
                   
                        <center><input type="checkbox" name="check_list[]" value="ซ่อมรถนอกสถานที่"> เลือก </center> 
                   
                </div>
              </div>
            </div>
          </div>
  </div><br><br>
  <div class="panel-footer">
      <center><button type="submit" style="font-size:20px" >จองคิว<i class="fa fa-check-square-o"></i></button></center>
  </div>
</form>


</body>
<footer class="container-fluid text-center" >
  <p>322371 Software Engineering </p>
  <p>Khonkaen University Nong Khai Campus </p>
</footer>


</html>
