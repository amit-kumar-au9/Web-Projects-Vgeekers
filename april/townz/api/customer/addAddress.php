<?php 

	include '../connection.php';

	$entityBody = file_get_contents('php://input');
	$decoded = json_decode(file_get_contents('php://input'), true);

	$user_id = $decoded['userId'];
	$location = $decoded['locality'];
	$city = $decoded['city'];
	$address = $decoded['address'];
	$pin_code = $decoded['pin_code'];

	$response['statusCode'] = 0;
	$response['reason'] = "Failed";
	$response['msg'] = "Address Not Saved";
	$response['actionCode'] = 0;

	if(isset($user_id) && isset($location) && isset($city) && isset($address) && isset($pin_code)){
	    
		$checkQuery = "INSERT INTO customer_address (customer_id, address, city, location, pin_code) VALUES ('".$user_id."', '".$address."', '".$city."', '".$location."', '".$pin_code."')";
		
		$response['statusCode'] = 1;
		
		if(mysqli_query($conn, $checkQuery)){
			$response['reason'] = "Success";
			$response['msg'] = "Address Saved";
			$response['actionCode'] = 1;
		}
		
	}else{
		$response['msg'] = "Fill all details";
	}

	echo json_encode($response);
?>