<?php

    include '../connection.php';
    
    $entityBody = file_get_contents('php://input');
    $decoded = json_decode(file_get_contents('php://input'), true);
    
    $userId = $decoded['userId'];
    
    echo $userId;
    
    $response['statusCode'] = 1;
	$response['msg'] = "User not found";
	$response['reason'] = "Failed";
	$response['data'] = (object) null;
	$response['actionCode'] = 0;
    
    $checkQuery = "SELECT name, token, phone, sphone, email, profile_image, address_id, referrer_code, referrer_code_used, active, customer_details.id as id, address, city, location, pin_code, wallet_id, total_balance, credit, user_id FROM customer_details INNER JOIN customer_wallet ON customer_details.id = customer_wallet.user_id JOIN customer_address ON customer_details.address_id = customer_address.id WHERE customer_details.id = '".$userId."'";
    
    $checkResult = mysqli_query($conn, $checkQuery);
    
    if(mysqli_num_rows($checkResult) == 1){
    
        $row = $checkResult->fetch_assoc();
    	
    	$response['msg'] = "User details send";
    	$response['reason'] = "Success";
        $response['data'] = $row;
    	$response['actionCode'] = 1;
    
    }
    
    echo json_encode($response);

?>