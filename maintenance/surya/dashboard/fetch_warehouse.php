<?php 

include 'include/connection.php';

$checkWarehouse = "SELECT * FROM warehouse";
$resultWarehouse = mysqli_query($conn, $checkWarehouse);


?>