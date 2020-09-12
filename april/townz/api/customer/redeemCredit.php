<?php 

	include '../connection.php';

	$entityBody = file_get_contents('php://input');
	$decoded = json_decode(file_get_contents('php://input'), true);

	$userId = $decoded['userId'];
    
	$response['statusCode'] = 1;
	$response['reason'] = "Failed";
	$response['msg'] = "User not found";
	$response['actionCode'] = 0;

	if(isset($userId)){
	    
	    $response['msg'] = "Points is less than 200";
	    
	    $checkToken = "SELECT * FROM customer_details JOIN customer_wallet ON customer_details.id = customer_wallet.user_id WHERE id = '".$userId."'";
        $ResultToken = mysqli_query($conn, $checkToken);
        
        $row = $ResultToken -> fetch_assoc();
        
	    $total_balance = $row['total_balance'];
	    $wallet_id = $row['wallet_id'];
	    $total_credit = $row['credit'];
	    
	    if($total_credit >= 200){
	        
	        $credit = $total_credit / 2;
            $total_balance = $total_balance + $credit;
    	    
    		$checkQuery = "UPDATE customer_wallet SET credit = '0', total_balance = '".$total_balance."' WHERE user_id = '".$userId."'";
    		
    		if(mysqli_query($conn, $checkQuery)){
    		    
    		    date_default_timezone_set('Asia/Kolkata');
                $date = date('Y/m/d');
                
                $time = date("h:i:s A");
                
    		    $description = $total_credit." Points is redeemed to wallet as " .$credit." Rs";
    		    
                $insertQuery = "INSERT INTO transaction_table_customer (payment_status, dsc, time, pay_id) VALUES ('Success', '".$description."', '".$time."', 'Pt. Redeem')";
                
                mysqli_query($conn, $insertQuery);
                $txn_id = mysqli_insert_id($conn);
                
                $orderId = "C".$userId.$wallet_id.$txn_id;
            
                $insertOrder = "INSERT INTO order_txn_customer(txn_id, wallet_id, amount, name, currency, status, contact_no, email_id, order_id, description,date, time, type) VALUES ('".$txn_id."', '".$wallet_id."', '".$credit."', '".$row['name']."', 'INR', 'Success', '".$row['phone']."', '".$row['email']."', '".$orderId."', '".$description."', '".$date."', '".$time."', 'Pt. Redeem')";
                mysqli_query($conn, $insertOrder);
    		    
    			$response['reason'] = "Success";
    			$response['msg'] = "Points Redeemed";
    			$response['actionCode'] = 1;
    		}
	    }
		
	}

	echo json_encode($response);
?>