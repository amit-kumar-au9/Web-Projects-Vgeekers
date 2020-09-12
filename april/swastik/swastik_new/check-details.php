<?php

	session_start();
	include 'connection.php';
	$name = $_POST['name'];
	$mobile = $_POST['mobile'];
	$class = $_POST['class'];
	$entered_otp = $_POST['otp'];
	$otp = $_SESSION['otp'];

	$response = array();

	if($entered_otp != $otp){

		$response['error'] = true;
		$response['message'] = 'Entered OTP is Wrong!';

	}
	else{

		$response['error'] = false;
		$response['message'] = 'OTP is Correct!';

	}
	$response['phase'] = 0;
	if(!$response['error']){
		$checkQuery ="SELECT * FROM student_reg WHERE student_phone = '".$mobile."'";
		if(mysqli_num_rows($checkResult = mysqli_query($conn, $checkQuery))==1){
			$row = $checkResult -> fetch_assoc();
			$response['phase'] = $row['phase_flag'];
		}
		else{
			$insertQuery = "INSERT INTO student_reg (student_name, student_phone, student_class, phase_flag) VALUES ('$name', '$mobile', '$class', 1)";
			$insertResult = mysqli_query($conn, $insertQuery);
		}
	}

	echo json_encode($response);


?>