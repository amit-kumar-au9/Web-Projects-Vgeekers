<?php 

	include 'connection.php';

	$entityBody = file_get_contents('php://input');
	$decoded = json_decode(file_get_contents('php://input'), true);

	$userId = $decoded['userId'];
	$walletId = $decoded['walletId'];
	$payStatus = $decoded['payStatus'];  //status processing, failed, success
	$userEmail = $decoded['userEmail'];
	$currency = $decoded['currency'];
	$userContact = $decoded['userContact'];
	$description = $decoded['description'];
	$amount = $decoded['amount'];
	$name = $decoded['name'];

	$checkQuery = "SELECT * FROM vendor_details WHERE user_id = '".$userId."'";

	if(mysqli_num_rows(mysqli_query($conn, $checkQuery)) >0){
    
     mysqli_close($conn);
        $conn = new mysqli($servername, $username, $password, $database);
        
		mysqli_autocommit($conn,FALSE);

		$insertQuery = "INSERT INTO transaction_table (payment_status) VALUES ('Initiated')";
		mysqli_query($conn, $insertQuery);
		$last_id = mysqli_insert_id($conn);

		$orderId = "R".$userId.$walletId.$last_id;
        // $orderId = "123";
        date_default_timezone_set('Asia/Kolkata');
	    $date = date('Y/m/d');
		$insertOrder = "INSERT INTO order_txn(txn_id, wallet_id, amount, name, currency, status, contact_no, email_id, order_id, description, date) VALUES ('".$last_id."', '".$walletId."', '".$amount."', '".$name."', '".$currency."', '".$payStatus."', '".$userContact."', '".$userEmail."', '".$orderId."', '".$description."', '".$date."')";
		mysqli_query($conn, $insertOrder);

		$response['orderId'] = '';

		if (mysqli_commit($conn)) {
		    
		    $response['statusCode'] = 1;
			$response['msg'] = "Transaction Initiated";
			$response['reason'] = "Success";
			$response['actionCode'] = 1;
			
			$response['keyId'] = $key_id;
			$response['orderId'] = $orderId;
			$response['txn_id'] = $last_id;
		}
		else{
			
		  // echo "Commit transaction failed";
		  // Rollback transaction
		    $response['statusCode'] = 0;
			$response['msg'] = "Transaction Failed";
			$response['reason'] = "Failed";
			$response['actionCode'] = 0;
			mysqli_rollback($conn);
		}

	}
	else{
		$response['statusCode'] = 1;
		$response['msg'] = $checkQuery;
		$response['reason'] = "Failed";	
		$response['actionCode'] = 0;
	}

	echo json_encode($response);

?>