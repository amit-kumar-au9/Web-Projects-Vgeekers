<?php
	
	include 'connection.php';

	$mobile = $_POST['mobile'];

	$checkQuery = "SELECT * FROM student_reg WHERE student_phone = '$mobile' ";
	$checkResult = mysqli_query($conn, $checkQuery);

	if(mysqli_num_rows($checkResult) < 1){

		$otp = rand(100000,999999);

		$my_url = 'https://www.foxxsms.com//sms//submitsms.jsp?user=Wefrew&key=4326501795XX&mobile=+91'.$mobile.'&message='.$otp.'&senderid=swastk&accusage=1';
		// create & initialize a curl session
		$curl = curl_init();

		// set our url with curl_setopt()
		curl_setopt($curl, CURLOPT_URL, $my_url);

		// return the transfer as a string, also with setopt()
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

		// curl_exec() executes the started curl session
		// $output contains the output string
		$output = curl_exec($curl);

		// close curl resource to free up system resources
		// (deletes the variable made by curl_init)
		curl_close($curl);

		$response = array();

		$output = explode(',', $output);

		if($output[1] == 'success'){
			session_start();
			$response['error'] = false;
			$response['message'] = 'OTP Sent!';
			$_SESSION['otp'] = $otp;
		}
		else{
			$response['error'] = true;
			$response['message'] = 'Error Occured';
		}

	}
	else{
		$response['error'] = true;
		$response['message'] = 'Mobile Number Already Registered!';
	}

	echo json_encode($response);
	
?>