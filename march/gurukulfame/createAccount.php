<?php
    require 'dashboard/include/connection.php';
    $name=$_POST['name'];
    $class=$_POST['class'];
    $email=$_POST['email'];
    $batch=$_POST['batch'];
    $phone=$_POST['phone'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];
    if($password == $cpassword){
        if ($name!="" && $phone!="" && $email!="" && $password!="" && $class!="" && $batch!="" && strlen($phone)==10) {
            $email="student_".$email;
            $password=md5($password);
            $checkQuery = "SELECT * FROM userDetail WHERE phone='".$phone."' AND email='".$email."'";
            $result = mysqli_query($conn, $checkQuery);
            if (mysqli_num_rows($result)==0) {
                $checkQuery = "INSERT INTO userDetail (name, batch, class, email, phone, password,validate) VALUES ('".$name."', '".$batch."','".$class."', '".$email."', '".$phone."', '".$password."','0')";
                if (mysqli_query($conn, $checkQuery)) {
                    echo "<script>window.alert('Student Account Created');window.location.href='login.php';</script>";
                }
                else{
                    echo "<script>window.alert('Please Retry');window.location.href='login.php';</script>";
                }
            }
            else{
                echo "<script>window.alert('Email id or Phone no. already exist');window.location.href='login.php';</script>";

            }
        }
        else{
            echo "<script>window.alert('Fill all the required details');window.location.href='login.php';</script>";
        }
    }
    else{
        echo "<script>window.alert('Password Doesnot Match');window.location.href='login.php';</script>";

    }    
?>