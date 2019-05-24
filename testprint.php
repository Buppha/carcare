<html>  
 <head>  
  <title>Export MySQL data to Excel in PHP</title>  
  <style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 60%;
   
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;

}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
 </head>  
 <body>  
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php  
//export.php  
$connect = mysqli_connect("localhost", "root", "", "car");
mysqli_set_charset($connect,"utf8");
$output = '';
//if(isset($_POST["report"]))
{
 $query  = "SELECT * FROM report ";
 $result = mysqli_query($connect, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
<p>
  <h2 align="center">รายชื่อผู้ใช้บริการ</h2><br /> 

   <table class="table"  border="1" bordered="1">  
   <thead>
 

   <tr >
   <th><div align="center"><h4><strong>ที่ </strong></h4></th>
   <th width ="10%"><div align="center"><h4><strong>ID </strong></h4></th>
   <th width ="30%"><div align="center"><h4><strong>Name</strong></h4></th>
   <th width ="30%"><div align="center"><h4><strong>Service</strong></h4></th>
   <th width ="30%"><div align="center"><h4><strong>Total Cost</strong></h4></th>
   
   </tr>
   </thead>
 
  ';
  $i=0;
  while($row = mysqli_fetch_array($result))
  {
   
    $i++;
  
   $output .= '
   
    <tr>  
   
                         <td><div align="center">'.$i.'</td>  
                         <td><div align="center">'.$row["id"].'</td>  
                         <td><div align="center">'.$row['name'].'</td>  
                         <td><div align="center">'.$row["service"].'</td>  
                         <td><div align="center">'.$row["totalcost"].'</td>  
                    </tr>
                    
    
                 
   ';

  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=รายละเอียดการเข้าใช้บริการ.xls');
  echo $output;
 }
}
?>
 </body>  
</html>