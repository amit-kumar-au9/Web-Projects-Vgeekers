<?php 
require 'connection.php';
$id=1;// in future replace it by session id of student
$checkQuery = "SELECT * FROM userDetail WHERE id='".$id."'";
$checkResult = mysqli_query($conn, $checkQuery);

$row = $checkResult->fetch_assoc();
$class=$row['class'];
$batch=$row['batch'];
$name=$row['name'];
$email=$row['email'];
$phone=$row['phone'];
?>