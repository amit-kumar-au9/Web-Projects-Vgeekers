<?php 

include 'include/connection.php';

$checkWarehouse = "SELECT * FROM vendor";
$resultWarehouse = mysqli_query($conn, $checkWarehouse);


?>