<?php 

	include '../connection.php';

	$entityBody = file_get_contents('php://input');
	$decoded = json_decode(file_get_contents('php://input'), true);

	$leadId = $decoded['lead_id'];
    
	$response['statusCode'] = 1;
	$response['reason'] = "Failed";
	$response['msg'] = "Booking not found";
	$response['actionCode'] = 0;

	if(isset($leadId)){
	    
	    $response['msg'] = "Failed to cancel";
    	    
    		$checkQuery = "UPDATE lead SET status = 'Cancelled', is_accept = '3' WHERE id = '".$leadId."'";
    		
    		if(mysqli_query($conn, $checkQuery)){
    		    
    			$response['reason'] = "Success";
    			$response['msg'] = "Booking Cancelled";
    			$response['actionCode'] = 1;
    			
    			$checkToken = "SELECT * FROM customer_details JOIN lead ON customer_details.id = lead.customer_id WHERE lead.id = '".$leadId."'";
                $ResultToken = mysqli_query($conn, $checkToken);
                $row = $ResultToken -> fetch_assoc();
                
                $leadType = $row['is_lead'];
                $customer_id = $row['customer_id'];
                $price = $row['price'];
                $netPayAmount = $row['netPayAmount'];
                $visiting_date = $row['visiting_date'];
                $visiting_time = $row['visiting_time'];
                $vendor_id = $row['user_id'];
        		
        		$title = "Query Closed";
                $body = "Your Query has been closed...Thank You !!!";
                
                $date = date("Y/m/d");
                $time = date("h:i:s");
                
                
                if($leadType === '1'){
        		    
        		    $customer_refund = $netPayAmount;
        		    
        		    if($row['user_id'] != ''){
        		        
        		        $vendor_refund = $price;
            		    
            		    if($visiting_date == $date){
            		        
            		        $current_time = strtotime($time);
                            $visiting_time = strtotime($visiting_time);
                            $elapsed = ($visiting_time - $current_time)/60;
                            
                            if($elapsed<120 && $elapsed>60){
                                //10% 
                                $customer_refund = $netPayAmount*0.9;
                            }
                            elseif($elapsed<60){
                                $vendor_refund = $price + 99;
                                $customer_refund = ($netPayAmount*0.9) - 99;
                            }
            		    }
            		    
            		    $checkVendorBalance = "SELECT * FROM wallet JOIN vendor_details ON wallet.user_id = vendor_details.user_id WHERE wallet.user_id = '".$vendor_id."'";
            		    $resultVendorBalance = mysqli_query($conn, $checkVendorBalance);
            		    $row1 = $resultVendorBalance -> fetch_assoc();
            		    $vendor_balance = $row1['total_balance'];
            		    $vendor_wallet_id = $row1['wallet_id'];
            		    $token = $row1['token'];
            		    $vendor_balance = $vendor_balance + $vendor_refund;
            		    
            		    $updateVendorBalance = "UPDATE wallet SET total_balance = '".$vendor_balance."' WHERE wallet_id = '".$vendor_wallet_id."'";
                    	mysqli_query($conn, $updateVendorBalance);
                    	
                    	$date = date('Y/m/d');
                        $time = date("h:i:s A");
                        
                        $description = $vendor_refund." Refund Added";
                        
                        $insertQuery = "INSERT INTO transaction_table (payment_status, dsc, time, pay_id) VALUES ('Refund', '".$description."', '".$time."', 'Refund Added')";
                        
                        mysqli_query($conn, $insertQuery);
                        $txn_id = mysqli_insert_id($conn);
                        
                        $orderId = "RF".$row1['user_id'].$vendor_wallet_id.$txn_id;
                        
                        $insertOrder = "INSERT INTO order_txn (txn_id, wallet_id, amount, name, status, contact_no, email_id, order_id, description, date, time, type) VALUES ('".$txn_id."', '".$vendor_wallet_id."', '".$vendor_refund."', '".$row1['name']."', 'Success', '".$row1['phone']."', '".$row1['email']."', '".$orderId."', '".$description."', '".$date."', '".$time."', 'Refund')";
                        mysqli_query($conn, $insertOrder);
                        
                        $token = array($token);
                        $user = array($vendor_id);
                        
                        $title = 'Townz';
                        $body = 'Sorry, Your Accepted Booking is Cancelled by the Customer!!! Refund will be credit to your wallet in 24 hours';
                        
                        include '../notification.php';
                        send_notification($body, $title, $token);
                        include '../insert_notification.php';
                        set_notification($body, $title, $user);
                    	
        		    }
        		    
    		    	$checkCustomerBalance = "SELECT * FROM customer_wallet WHERE user_id = '".$row['customer_id']."' ";
                	$resultCustomerBalance = mysqli_query($conn, $checkCustomerBalance);
                	$row2 = $resultCustomerBalance -> fetch_assoc();
                	$customer_balance = $row2['total_balance'];
                	$customer_wallet_id = $row2['wallet_id'];	
                	$customer_balance = $customer_balance + $customer_refund;
                	
                	$updateCustomerBalance = "UPDATE customer_wallet SET total_balance = $customer_balance WHERE wallet_id = '".$customer_wallet_id."'";
                	mysqli_query($conn, $updateCustomerBalance);
                	
                	$date = date('Y/m/d');
                    $time = date("h:i:s A");
                    
                    $description = $customer_refund." Refund Added";
                    
                    $insertQuery = "INSERT INTO transaction_table_customer (payment_status, dsc, time, pay_id) VALUES ('Refund', '".$description."', '".$time."', 'Refund Added')";
                    
                    mysqli_query($conn, $insertQuery);
                    $txn_id = mysqli_insert_id($conn);
                    
                    $orderId = "RF".$customer_id.$customer_wallet_id.$txn_id;
                    
                    $insertOrder = "INSERT INTO order_txn_customer(txn_id, wallet_id, amount, name, status, contact_no, email_id, order_id, description, date, time, type) VALUES ('".$txn_id."', '".$customer_wallet_id."', '".$customer_refund."', '".$row['name']."', 'Success', '".$row['phone']."', '".$row['email']."', '".$orderId."', '".$description."', '".$date."', '".$time."', 'Refund')";
                    mysqli_query($conn, $insertOrder);
        		    
        		    
                }
    		}
		
	}

	echo json_encode($response);
?>