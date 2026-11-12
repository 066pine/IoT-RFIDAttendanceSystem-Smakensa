<?php
$servername = "localhost";
$username = "root"; // Replace with your MySQL username
$password = "pqpqpqpqpq"; // Replace with your MySQL password
$dbname = "rfid_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$conn->query("SET time_zone = '+08:00';");
date_default_timezone_set('Asia/Makassar');
// Check connection
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}


?>
