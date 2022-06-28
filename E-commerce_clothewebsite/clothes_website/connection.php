<?php

$conn = mysqli_connect('localhost', 'root', '', "login_db");

if (!$conn) {
   
    die("Connection failed".mysqli_connect_error());
}
echo "Connection unsuccessful";
?>
