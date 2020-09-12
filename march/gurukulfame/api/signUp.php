<?php

	require 'connection.php';

    $name=$_POST['name'];
    $class=$_POST['class'];
    $email=$_POST['email'];
    $batch=$_POST['batch'];
    $phone=$_POST['phone'];
    $password=$_POST['password'];

if ($name!="" && $phone!="" && $email!="" && $password!="" && $class!="" && $batch!="") {

    $password=md5($password);
    $checkQuery = "SELECT * FROM userDetail WHERE phone='".$phone."' AND email='".$email."'";
    $result = mysqli_query($conn, $checkQuery);

    if (mysqli_num_rows($result)==0) {

        $checkQuery = "INSERT INTO userDetail (name, batch, class, email, phone, password,validate) VALUES ('".$name."', '".$batch."','".$class."', '".$email."', '".$phone."', '".$password."','0')";

        if (mysqli_query($conn, $checkQuery)) {

			$last_id = mysqli_insert_id($conn);
            $response['errorCode'] = '0000';
			$response['errorMessage'] = 'Signup Succefull';
			$response['userId'] = $last_id;

        }
        
        else{

            $response['errorCode'] = '0001';
			$response['errorMessage'] = 'Please Retry';
			$response['userId'] = '';

        }
    }

    else{

        $response['errorCode'] = '0001';
		$response['errorMessage'] = 'Phone Number Or Email id already Exist';
		$response['userId'] = '';

    }
}

else{

	$response['errorCode'] = '0001';
	$response['errorMessage'] = 'Fill All Details';
	$response['userId'] = '';

} 

echo json_encode($response);
?>