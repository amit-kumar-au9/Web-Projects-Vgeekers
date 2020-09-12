<?php

	include 'connection.php';

	$name = $_POST['name'];
	$class = $_POST['class'];
	$mobile = $_POST['mobile'];
	$payment_id = $_POST['payment_id'];

	$response = array();

	$insertQuery = "INSERT INTO student_reg (student_name, student_phone, student_class, payment_id, is_payment) VALUES ('$name', '$mobile', '$class', '$payment_id', 'success')";
	$insertResult = mysqli_query($conn, $insertQuery);

	if($insertResult){

		$response['error'] = false;
		$response['message'] = 'Please proceed with Next Step!';

	}
	else{

		$response['error'] = true;
		$response['message'] = 'Please contact the admin!';

	}

	echo json_encode($response);


?>