<?php 

	include '../connection.php';

	$entityBody = file_get_contents('php://input');
	$decoded = json_decode(file_get_contents('php://input'), true);

	$userId = $decoded['userId'];
	$addCredit = $decoded['addCredit'];
    
	$response['statusCode'] = 1;
	$response['reason'] = "Failed";
	$response['msg'] = "Fill all details";
	$response['actionCode'] = 0;

	if(isset($userId) && isset($addCredit)){
	    
	    $response['msg'] = "Credit Not Added";
	    
	    $checkToken = "SELECT * FROM customer_details JOIN customer_wallet ON customer_details.id = customer_wallet.user_id WHERE id = '".$userId."'";
        $ResultToken = mysqli_query($conn, $checkToken);
        $row = $ResultToken -> fetch_assoc();
        $credit = $row['credit'];
        
	    $credit = $addCredit + $credit;
		$checkQuery = "UPDATE customer_wallet SET credit = '".$credit."' WHERE user_id = '".$userId."'";
		
		if(mysqli_query($conn, $checkQuery)){
		    
			$response['reason'] = "Success";
			$response['msg'] = $addCredit." Points Added";
			$response['actionCode'] = 1;
			
            date_default_timezone_set('Asia/Kolkata');
            $date = date('Y/m/d');
            
            $time = date("h:i:s A");
            
            $description = $addCredit." Points added";
            
            $insertQuery = "INSERT INTO transaction_table_customer (payment_status, dsc, time, pay_id) VALUES ('Success', '".$description."', '".$time."', 'Pt. Earned')";
            
            mysqli_query($conn, $insertQuery);
            $txn_id = mysqli_insert_id($conn);
            
            $orderId = "C".$userId.$row['wallet_id'].$txn_id;
            
            $insertOrder = "INSERT INTO order_txn_customer(txn_id, wallet_id, amount, name, status, contact_no, email_id, order_id, description, date, time, type) VALUES ('".$txn_id."', '".$row['wallet_id']."', '".$addCredit."', '".$row['name']."', 'Success', '".$row['phone']."', '".$row['email']."', '".$orderId."', '".$description."', '".$date."', '".$time."', 'Pt. Earned')";
            mysqli_query($conn, $insertOrder);
		}
		
	}

	echo json_encode($response);
?>