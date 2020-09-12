<?php 
require 'connection.php';// in future replace it by session id of student
$checkQuery = "SELECT * FROM aboutus";
$checkResult = mysqli_query($conn, $checkQuery);
$row = $checkResult->fetch_assoc();
$creation = $row['creation'];
$strategy = $row['strategy'];
$analysis = $row['analysis'];
$privacy_policy = $row['privacy_policy'];
$terms = $row['terms_and_condition'];
?>