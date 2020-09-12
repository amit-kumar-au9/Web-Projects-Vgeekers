<?php 

include '../include/connection.php';

$checkWarehouse = "SELECT * FROM warehouse_detail";
$resultWarehouse = mysqli_query($conn, $checkWarehouse);

$row = $resultWarehouse -> fetch_assoc();

$warehouse_name = $row['name'];
$warehouse_address = $row['address'];
$warehouse_city = $row['city'];
$warehouse_state = $row['state'];
$warehouse_country = "India";
$warehouse_phone = $row['phone'];
$warehouse_email = $row['email'];
$warehouse_gst = $row['gst'];

?>