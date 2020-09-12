<?php
    require 'dashboard/include/connection.php';
    $business=$_POST['business'];
    $state=$_POST['state'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $city=$_POST['city'];
    $phone=$_POST['phone'];
    $query=$_POST['query'];

    if ($business!="" && $state!="" && $phone!="" && $city!="" && $email!="" && $query!="" && $name!="" && strlen($phone)==10) {
        $checkQuery = "INSERT INTO bussinessquery (organizationName, state, email, city, phone, query, name) VALUES ('".$business."','".$state."','".$email."','".$city."', '".$phone."', '".$query."', '".$name."')";
        if (mysqli_query($conn, $checkQuery)) {
            echo "<script>window.alert('Bussiness Query Sent');window.location.href='index.php';</script>";
        }
        else{
            echo "<script>window.alert('Please Retry');window.location.href='index.php';</script>";
        }
    }
    else{
        echo "<script>window.alert('Fill all the required details');window.location.href='index.php';</script>";
    } 
?>