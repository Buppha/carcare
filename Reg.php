<?php
    $reg = mysqli_connect ('localhost','root','','car');
    mysqli_set_charset($reg, "UTF8");

    $name = $_POST['uname'];
    $pass = $_POST['pass'];
    $ad = $_POST['add'];

    $keb = "INSERT INTO login (username, password, email) VALUES ('$name','$pass','$ad')";
    $sql = mysqli_query($reg,$keb);// or trigger_error("Query Failed! SQL: $sql - Error: ".mysqli_error(), E_USER_ERROR);;
    if($sql){
        echo 'เพิ่มข้อมูลแล้ว';

       header('Location: '.$_SERVER['HTTP_REFERER']);
    }
    else
    {
        echo 'ไม่สามารถเพิ่มข้อมูลได้';//. mysqli_error($reg);
    }
?>