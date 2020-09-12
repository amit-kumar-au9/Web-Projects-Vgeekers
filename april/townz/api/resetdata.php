<?php 

    include 'connection.php';
    
    $checkQuery = "UPDATE lead SET is_accept = 0";
    mysqli_query($conn, $checkQuery);
    $checkQuery = "UPDATE vendor_details SET isBankCompleted = '0', isIdentityCompleted = '0'";
    mysqli_query($conn, $checkQuery);
    $checkQuery = "UPDATE wallet SET total_balance = 0";
    mysqli_query($conn, $checkQuery);
    
    $checkQuery = "TRUNCATE TABLE order_txn";
    mysqli_query($conn, $checkQuery);
    $checkQuery = "TRUNCATE TABLE transaction_table";
    mysqli_query($conn, $checkQuery);
    $checkQuery = "TRUNCATE TABLE bank_details";
    mysqli_query($conn, $checkQuery);
    $checkQuery = "TRUNCATE TABLE identity";
    mysqli_query($conn, $checkQuery);
    
?>