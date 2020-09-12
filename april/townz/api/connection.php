<?php
    $servername = "localhost";
    $username = "townz";
    $password = "&-1(LGZ;7tBl";
    $database = "townz";
    
    $key_id = 'rzp_test_5SCrxhBkeai5qX';
    // $key_id = 'rzp_live_1yGaZRU1fzjrX9';
    date_default_timezone_set('Asia/Kolkata');
    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>