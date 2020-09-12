<?php

require 'connection.php';

$codes = $_POST['code'];
$password = md5($_POST['password']);
$email = $_POST['email'];

if ($codes != "" && $password != "" && $email != "") {
	
	$checkQuery = "SELECT * FROM userDetail WHERE email='".$email."' AND code='".$codes."'";
    $checkResult = mysqli_query($conn, $checkQuery);
    $row = $checkResult ->fetch_assoc();
    $id = $row['id'];

    if (mysqli_num_rows($checkResult)==1) {

       $checkQuery= "UPDATE userDetail SET password='".$password."', code='' WHERE email='".$email."'";

        if (mysqli_query($conn, $checkQuery)) {

            $response['errorCode'] = '0000';
			$response['errorMessage'] = 'Password Changed';
			$response['userId'] = $id;

        }
        
        else{

            $response['errorCode'] = '0001';
			$response['errorMessage'] = 'Please Retry';
			$response['userId'] = '';

        }
    }

    else{

            $response['errorCode'] = '0001';
			$response['errorMessage'] = 'Code doesnot match';
			$response['userId'] = '';

        }
}

else{

            $response['errorCode'] = '0001';
			$response['errorMessage'] = 'Fill all the field';
			$response['userId'] = '';

        }
echo json_encode($response);
?>