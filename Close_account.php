<?php
session_start();
if(isset($_SESSION["user"])){
    $reg = mysqli_connect ('localhost','root','','car');
    mysqli_set_charset($reg, "UTF8");

    $name =$_SESSION["user"];
    $keb = " DELETE FROM login WHERE username = '".$name."'";
    $sql = mysqli_query($reg,$keb);
    if($sql){
        echo "successfullll :)";
    }
    else{
        echo "unsuccessfullll :(";
    }
    session_unset();
}
else{
    echo '???';
}
?>