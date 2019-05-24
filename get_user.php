<?php
session_start();
if(isset($_SESSION["user"])){
    echo '<a href="#" class="w3-bar-item w3-button">'.$_SESSION["user"].'</a>';
    echo '<a href="Close_account.php" class="w3-bar-item w3-button">Close account</a>';
}
else{
    echo '<a href="#projects" class="w3-bar-item w3-button">GUEST</a>';
}
?>