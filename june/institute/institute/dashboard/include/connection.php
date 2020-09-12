<?php
    $servername = "localhost";
    $username = "revisedt";
    $password = "yZ^uJt3#C3kK";
    $database = "institute_12";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>