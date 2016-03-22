<?php
$servername = "localhost";
$username = "tedxdtu";
$password = "tedxdtu2016@123@";

// Create connection
$conn = new mysqli($servername, $username, $password,"tedxdtu");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>