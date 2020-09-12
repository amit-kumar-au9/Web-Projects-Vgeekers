<?php 

    include '../connection.php';
    
    $entityBody = file_get_contents('php://input');
    $decoded = json_decode(file_get_contents('php://input'), true);

    $name = $decoded['name'];
    $phone = $decoded['phone'];
    $sphone = $decoded['sphone'];
    $email = $decoded['email'];
    $address = $decoded['address'];
    $city = $decoded['city'];
    $location = $decoded['location'];
    $pin_code = $decoded['pin_code'];
    $referrer_code_used = $decoded['referrer_code'];
    
    $response['statusCode'] = 1;
    $response['msg'] = "Fill all details";
    $response['reason'] = "Failed";
    $response['actionCode'] = 0;
    $response['data'] = array();
    
    $error = 0;
    
    if($referrer_code_used!=""){
        $error = 1;
        // Test if string contains the word 
        if(strpos($referrer_code_used, 'TWZCR') !== false){
            //c to c
            $checkRefer = "SELECT * FROM customer_details WHERE referrer_code = '".$referrer_code_used."'";
            if(mysqli_num_rows(mysqli_query($conn, $checkRefer))>0){
                $error = 2;
            }
        } 
        elseif(strpos($referrer_code, 'TWZVN') !== false){
            //v to c
            $checkRefer = "SELECT * FROM vendor_details WHERE referring_code = '".$referrer_code_used."'"; 
            if(mysqli_num_rows(mysqli_query($conn, $checkRefer))>0){
                $error = 2;
            }
        }
        // if($error == 1){
        //     $referrer_code_used = '';
        // }
	}
// 	if($error != 1){
	    $checkQuery = " SELECT * FROM customer_details WHERE phone='".$phone."' ";
    	$checkResult = mysqli_query($conn, $checkQuery);
        
        if ( mysqli_num_rows($checkResult) == 0 ) {
            
            $checkQuery = "INSERT INTO customer_details (name, phone, sphone, email, referrer_code_used, active) VALUES ('".$name."', '".$phone."', '".$sphone."', '".$email."', '".$referrer_code_used."', '1')";
            $response['msg'] = "Registration Failed";
        	if( mysqli_query($conn, $checkQuery) ) {
        
        		$user_id = mysqli_insert_id($conn);
        		
        		$checkQuery = "INSERT INTO customer_wallet (user_id) VALUES ('".$user_id."')";
        		$checkResult = mysqli_query($conn, $checkQuery);
        		
        		$checkQuery = "INSERT INTO customer_address (customer_id, address, city, location, pin_code) VALUES ('".$user_id."', '".$address."', '".$city."', '".$location."', '".$pin_code."')";
        		$checkResult = mysqli_query($conn, $checkQuery);
        		
        		$address_id = mysqli_insert_id($conn);
        		$referrer_code = "TWZCR".$user_id;
        		$checkQuery = "UPDATE customer_details SET address_id = '".$address_id."', referrer_code = '".$referrer_code."' WHERE customer_details.id = '".$user_id."'";
        		mysqli_query($conn, $checkQuery);
        		
        		if($error == 2){
                    $updateCustomer = "UPDATE customer_details SET isFirstBooking = '1' WHERE id = '".$user_id."'";
                    mysqli_query($conn, $updateCustomer);
        		}
        		
        		$checkUser = "SELECT * FROM customer_details INNER JOIN customer_wallet ON customer_details.id = customer_wallet.user_id WHERE customer_details.id = '".$user_id."'";
        		$resultUser = mysqli_query($conn, $checkUser);
        		
        		$row = $resultUser -> fetch_assoc();
        	    
        		$response['msg'] = "Registration successful";
        		$response['reason'] = "Success";
        		$response['actionCode'] = 1;
        		$response['data'] = $row;
        	}
        }
        else{
        	$response['msg'] = "Mobile Number already exists";
        	$response['actionCode'] = 2;
        }
// 	}
// 	elseif($error == 1){
//     	$response['statusCode'] = 1;
//         $response['msg'] = "Refer Code is invalid";
//         $response['reason'] = "Failed";
//         $response['actionCode'] = 0;
//         $response['data'] = array();
//     }
	    
    echo json_encode($response);

?>