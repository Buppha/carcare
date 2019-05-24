<?php
if(isset($_SESSION["user"])){
    echo '<a href="logout.php" class="glyphicon glyphicon-user w3-bar-item w3-button">SIGN OUT</a>';
}
else{
    echo '<a href="LoginForm.html" class="glyphicon glyphicon-user w3-bar-item w3-button">SIGN IN</a>';
}
?>