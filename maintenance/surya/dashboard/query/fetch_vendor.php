<?php 

include '../include/connection.php';

$checkVendor = "SELECT * FROM vendor";
$resultVendor = mysqli_query($conn, $checkVendor);

$row = $resultVendor -> fetch_assoc();

$vendor_name = $row['name'];
$vendor_address = $row['address'];
$vendor_city = $row['city'];
$vendor_state = $row['state'];
$vendor_phone = $row['phone'];
$vendor_email = $row['email'];
$vendor_gst = $row['gst'];
$vendor_postal_code = "201007";
?>