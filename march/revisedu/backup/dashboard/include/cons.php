<?php 
require 'connection.php';// in future replace it by session id of student
$checkQuery = "SELECT * FROM aboutus";
$checkResult = mysqli_query($conn, $checkQuery);
$row = $checkResult->fetch_assoc();
$creation=$row['creation'];
$strategy=$row['strategy'];
$analysis=$row['analysis'];

?>