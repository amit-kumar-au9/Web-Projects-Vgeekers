<?php
$servername = "localhost";
$username = "gurukulf_gurukul";
$password = "gurukul@123";
$database = "gurukulf_gurukul";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>