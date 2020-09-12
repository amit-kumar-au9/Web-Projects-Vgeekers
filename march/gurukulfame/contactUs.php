<?php
    require 'dashboard/include/connection.php';
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $phone=$_POST['phone'];
    $message=$_POST['message'];

    if ($fname!="" && $lname!="" && $phone!="" && $subject!="" && $email!="" && $message!="" && strlen($phone)==10) {
        $checkQuery = "INSERT INTO contactus (fname, lname, email, subject, phone, message) VALUES ('".$fname."','".$lname."','".$email."','".$subject."', '".$phone."', '".$message."')";
        if (mysqli_query($conn, $checkQuery)) {
            echo "<script>window.alert('Thank for contacting/Suggestion');window.location.href='index.php';</script>";
        }
        else{
            echo "<script>window.alert('Please Retry');window.location.href='index.php';</script>";
        }
    }
    else{
        echo "<script>window.alert('Fill all the required details');window.location.href='index.php';</script>";
    } 
?>