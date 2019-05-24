<?php
    $reg = mysqli_connect ('localhost','root','','car');
    mysqli_set_charset($reg, "UTF8");
    session_start();

    $name = $_POST['uname'];
    $pass = $_POST['pas'];
    if($name=="admin"&&$pass=="12345"){
        $_SESSION["user"]=$name;
        echo '
        <!DOCTYPE html>
        <html>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="refresh" content="0; url=report.php">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        </head>
        </html>

        ';
    }
    else{
    $keb = "SELECT * FROM login WHERE username = '".$name."' and password = '".$pass."'";
    $sql = mysqli_query($reg,$keb);// or trigger_error("Query Failed! SQL: $sql - Error: ".mysqli_error(), E_USER_ERROR);;
    $check=mysqli_num_rows($sql);
    if($check){
        
        $_SESSION["user"]=$name;
        echo '
        <!DOCTYPE html>
        <html>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="refresh" content="0; url=Indexcarcare.php">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        </head>
        </html>

        ';
       
    }
    else
    {
        echo '
        <!DOCTYPE html>
        <html>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
            <body>
            <h1>Signin faile, You do not memmber.Please Sign up.</h1>
                <form action="LoginForm.html">
                <input type="submit" value="Go to Sign up" />
        </form>
            </body>
        </html>

        ';
    }
}
?>
