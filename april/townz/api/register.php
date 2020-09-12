<?php 

    include 'connection.php';
    
    $entityBody = file_get_contents('php://input');
    $decoded = json_decode(file_get_contents('php://input'), true);
    
    $name = $decoded['name'];
    $phone = $decoded['phone'];
    $email = $decoded['email'];
    $country = $decoded['country'];
    $city = $decoded['city'];
    $referrer_code = $decoded['referrer_code'];
    $whatsapp = $decoded['whatsapp'];
    $sphone = $decoded['sphone'];
    $terms = $decoded['terms'];
    $token = $decoded['token'];
    $location = $decoded['location'];
    
    $category = $decoded['category'];
    $cat = JSON_encode($category);
    
    $password=md5($password);
    
	$checkQuery = " SELECT * FROM vendor_details WHERE phone='".$phone."' ";
	$checkResult = mysqli_query($conn, $checkQuery);
    
    if ( mysqli_num_rows($checkResult) == 0 ) {
    
        $checkQuery = "INSERT INTO vendor_details (name, phone, token, secondary_phone, email, country, city, referrer_code, whatsapp, category, active, location) VALUES ('".$name."', '".$phone."', '".$token."', '".$sphone."', '".$email."', '".$country."', '".$city."', '".$referrer_code."', '".$whatsapp."', '".$cat."', '0', '".$location."')";
    
    	if( mysqli_query($conn, $checkQuery) ) {
    
    		$user_id = mysqli_insert_id($conn);
    		$referring_code = "TWZVN". $user_id;
    		$checkQuery = "UPDATE vendor_details SET referring_code = '".$referring_code."' WHERE user_id = '".$user_id."'";
    		$checkResult = mysqli_query($conn, $checkQuery);
    		
    		$checkQuery = "INSERT INTO wallet (user_id) VALUES ('".$user_id."')";
    		$checkResult = mysqli_query($conn, $checkQuery);
    		
    		$checkQuery = "INSERT INTO bank_details (user_id) VALUES ('".$user_id."')";
    		$checkResult = mysqli_query($conn, $checkQuery);
    		
    		$checkQuery = "INSERT INTO identity (user_id) VALUES ('".$user_id."')";
    		$checkResult = mysqli_query($conn, $checkQuery);
		
    		$checkUser = "SELECT * FROM vendor_details INNER JOIN wallet ON vendor_details.user_id = wallet.user_id WHERE vendor_details.user_id = '".$user_id."'";
    		$resultUser = mysqli_query($conn, $checkUser);
    		
    		$row = $resultUser -> fetch_assoc();
    		
    		$category = $row['category'];
    	    $category1 = json_decode($category);
    	    
    		$response['statusCode'] = 1;
    		$response['msg'] = "Registration successful";
    		$response['reason'] = "Success";
    		$response['actionCode'] = 1;
    	
    	}
    	else{
    
    		$response['statusCode'] = 0;
    		$response['msg'] = "Registration Failed";
    		$response['reason'] = "Failed";
    		$response['actionCode'] = 0;
    
    	}
    }
    else{
    
    	$response['statusCode'] = 1;
    	$response['msg'] = "Mobile Number already exists";
    	$response['reason'] = "Failed";
    	$response['actionCode'] = 2;
    
    }
    
    echo json_encode($response);

?>