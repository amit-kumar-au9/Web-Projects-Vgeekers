<?php
    $servername = "localhost";
    // $username = "pashupati_constr";
    // $password = "HtzmNnoSY;HR";
    // $database = "pashupati_const";
    $username = "root";
    $password = "";
    $database = "crm";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    date_default_timezone_set("Asia/Kolkata");
    $date = date('Y-m-d');
?>