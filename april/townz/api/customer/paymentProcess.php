<?php 

	include '../connection.php';

	$entityBody = file_get_contents('php://input');
	$decoded = json_decode(file_get_contents('php://input'), true);

	$txn_id = $decoded['txn_id'];
	$payment_status = $decoded['payment_status'];
    $desc = $decoded['pay_desc'];
	$pay_error_code = $decoded['pay_error_code'];
	$pay_id = $decoded['pay_id'];
	$pay_captured = $decoded['pay_captured'];
	$pay_signature = $decoded['pay_signature'];
	$gateway_order_id = $decoded['gateway_order_id'];
	$balance = $decoded['currentBalance'];
	$amount = $decoded['rechargeAmount'];
	$wallet_id = $decoded['wallet_id'];
	$userId = $decoded['user_id'];
	
	if(isset($amount) && isset($balance)){

	    $checkQuery = "SELECT * FROM transaction_table_customer WHERE id = '".$txn_id."'";

    	if(mysqli_num_rows(mysqli_query($conn, $checkQuery)) >0){   
        
        //  	mysqli_close($conn);
        //     $conn = new mysqli($servername, $username, $password, $database);
            
    		mysqli_autocommit($conn,FALSE);
            date_default_timezone_set('Asia/Kolkata');
    		$time = date("h:i:s A");
    		$updateTxn = "UPDATE transaction_table_customer SET payment_status = '".$payment_status."', dsc = '".$desc."', gateway_order_id = '".$gateway_order_id."', pay_error_code = '".$pay_error_code."', pay_id = '".$pay_id."', pay_captured = '".$pay_captured."', time = '".$time."', pay_signature = '".$pay_signature."' WHERE id = '".$txn_id."' ";
    		mysqli_query($conn, $updateTxn);
    		date_default_timezone_set('Asia/Kolkata');
    		$time = date("h:i:s A");
    		$updateOrder = "UPDATE order_txn_customer SET status = '".$payment_status."', time = '".$time."' WHERE txn_id = '".$txn_id."'";
    		mysqli_query($conn, $updateOrder);
    		
    		if($pay_error_code === 200){
    		    $balance = $balance + $amount;
    		    $updateWallet = "UPDATE customer_wallet SET total_balance = '".$balance."' WHERE wallet_id = '".$wallet_id."'";
    		    mysqli_query($conn, $updateWallet);

    		    mysqli_query($conn, $updateVendor);
        		if (!mysqli_commit($conn)) {
        		    $response['statusCode'] = 0;
        			$response['msg'] = "Payment Failed";
        			$response['reason'] = "Failed";
        			$response['actionCode'] = 0;
        			mysqli_rollback($conn);
        			$body = "Recharge of Rs ".$amount." is Failed";
        		}
        		else{
        
        			$response['statusCode'] = 1;
        			$response['msg'] = "Payment Successfull";
        			$response['reason'] = "Success";
        			$response['actionCode'] = 1;
        			
        			$body = "Recharge of Rs ".$amount." is Successfull";
        		}
    		}
    		else{
        
    			$response['statusCode'] = 1;
    			$response['msg'] = "Payment Failed";
    			$response['reason'] = "Failed";
    			$response['actionCode'] = 1;
    			
    			$body = "Recharge of Rs ".$amount." is Failed";
        	}
            $title = "Recharge Details";
        	$checkToken = "SELECT * FROM customer_details WHERE id = '".$userId."'";
        	$ResultToken = mysqli_query($conn, $checkToken);
        	$row = $ResultToken -> fetch_assoc();
        	
        	$token = array($row['token']);
        	$user = array($userId);
        	include 'notification.php';
        	send_notification($body, $title, $token);
        	include 'insert_notification.php';
        	set_notification($body, $title, $user);
    	}
	}
	else{
		$response['statusCode'] = 1;
		$response['msg'] = "Payment Failed";
		$response['reason'] = "Failed";	
		$response['actionCode'] = 0;
	
	}
    
	echo json_encode($response);

?>