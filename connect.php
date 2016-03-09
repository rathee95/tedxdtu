<?php
$servername = "mysql.hostinger.in";
$username = "u370679023_haris";
$password = "burnsagenda";

// Create connection
$conn = new mysqli($servername, $username, $password,"u370679023_txd");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>