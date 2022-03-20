<?php
$servername = "localhost";
$database = "doneter";
$username = "root";
$password = "";

// Create connection

$con = new mysqli($servername, $username, $password, $database);

// Check connection

if ($con) {
echo "";
}
else{
    die(mysqli_error());
}




?>