<?php


$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "democratic";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname,"3308");
// Check connection

mysqli_set_charset($conn, "utf8");

if ($conn->connect_error) {
    die("<p style='font-family:calibri;font-size:22px;'>Connection failed: " . $conn->connect_error."</p>");
} 
?>