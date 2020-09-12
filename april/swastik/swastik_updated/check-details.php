<?php

	session_start();

	$name = $_POST['name'];
	$mobile = $_POST['mobile'];
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

	echo json_encode($response);


?>