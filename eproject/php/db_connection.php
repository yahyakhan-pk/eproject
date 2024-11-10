<?php

$servername = "localhost"; 
$username = "root";         
$password = "";            
$dbname = "jenny_jewellery";  


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else{
    echo "connect";
}

$conn->set_charset("utf8");
?>
