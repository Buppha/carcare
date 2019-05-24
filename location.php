<!DOCTYPE html>
<html>
    <head>
    <title>Car Care Map</title>
        <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
        <meta charset="utf-8">
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
              html, body, #map-canvas {
            height: 100%;
            margin: 0px;
            padding: 0px
            } 
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


        <script type="text/javascript"
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBil-dACyKcpUg6N5vfajnyLtFNaQpVIus&sensor=true">
        </script>
            <script>
                function initialize() {
                  var myLatlng = new google.maps.LatLng(17.799406, 102.747919);
                  var mapOptions = {
                    zoom: 12,
                    center: myLatlng
                  }
                  var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
                
                  var marker = new google.maps.Marker({
                      position: myLatlng,
                      map: map,
                      title: 'Share Olanlab Com'
                  });
                }
                google.maps.event.addDomListener(window, 'load', initialize);
            </script>
        <div id="map-canvas"></div>

    </body>
    <!-- Footer -->
    <footer class="container-fluid text-center" >
      <p>322371 Software Engineering </p>
      <p>Khonkaen University Nong Khai Campus </p>
    </footer>
</html>