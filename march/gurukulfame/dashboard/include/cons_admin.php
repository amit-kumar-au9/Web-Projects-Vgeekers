<?php 
require 'connection.php';// in future replace it by session id of student
$checkQuery = "SELECT * FROM aboutUs";
$checkResult = mysqli_query($conn, $checkQuery);
$row = $checkResult->fetch_assoc();
$aboutUs=$row['aboutUs'];

?>