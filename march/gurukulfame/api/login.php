<?php

require 'connection.php';
$email = $_POST['email'];
$password = md5($_POST['password']);

if ($email!="" && $password!=""){
    $checkQuery = "SELECT * FROM userDetail WHERE email='".$email."' AND password='".$password."'";
    $checkResult = mysqli_query($conn, $checkQuery);
    if(mysqli_num_rows($checkResult) == 1){
        $row = $checkResult->fetch_assoc();
        $response['errorCode'] = '0000';
        $response['errorMessage'] = 'Login Succefull';
        $response['userId'] = $row['id'];
        if($row['validate']==0 || $row['validate']==1 || $row['validate']==2){
            $response['type'] = 'student';
        }
        elseif($row['validate']==3){
            $response['type'] = 'teacher';
        }
        elseif($row['validate']==4){
            $response['type'] = 'admin';
        }
    }
    else{
        $response['errorCode'] = '0001';
        $response['errorMessage'] = 'Login UnSuccefull';
        $response['userId'] = '';
        $response['type'] = '';
    }
}

echo json_encode($response);


?>