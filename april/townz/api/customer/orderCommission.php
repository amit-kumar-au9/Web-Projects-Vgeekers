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
    $netPayAmount = $decoded['netPayAmount'];
    $wallet_id = $decoded['wallet_id'];
    $userId = $decoded['user_id'];
    $transactionType = $decoded['transactionType'];
    $isFirstBooking = $decoded['isFirstBooking'];

    $response['statusCode'] = 1;
    $response['msg'] = "Payment Failed";
    $response['reason'] = "Failed";
    $response['actionCode'] = 0;
    
    $type = 'Order failed';
    $payment_status = 'Failed';
    
    $time = date("h:i:s A");
    $status = 'Pay. Failed';

    if(isset($netPayAmount)){

        $checkQuery = "SELECT * FROM transaction_table_customer WHERE id = '".$txn_id."'";

        if(mysqli_num_rows(mysqli_query($conn, $checkQuery)) >0){   
            
            $checkBallance = "SELECT * FROM customer_wallet JOIN customer_details ON customer_wallet.user_id = customer_details.id WHERE wallet_id = '".$wallet_id."'";
            $resultCheckBalance = mysqli_query($conn, $checkBallance);
            $row = $resultCheckBalance -> fetch_assoc();
            $total_balance = $row['total_balance'];
            $customer_id = $row['user_id'];
            $old_credit = $row['credit'];
            $referrer_code_used = $row['referrer_code_used'];
            $isFirstBooking = $row['isFirstBooking'];
            $c_name = $row['name'];
            $c_phone = $row['phone'];
            $c_email = $row['email'];
            
            if($transactionType == 1){ // for wallet

                $response['msg'] = "Wallet Balance is less";
                $payment_status = 'Failed';
                $body = "Booking Failed \n Wallet Balance Insufficient";

                
                if($total_balance >= $netPayAmount){
                    $total_balance = $total_balance - $netPayAmount;
                    $updateWallet = "UPDATE customer_wallet SET total_balance = '".$total_balance."' WHERE wallet_id = '".$wallet_id."'";
                    mysqli_query($conn, $updateWallet);
                    $payment_status = 'Success';
                    $body = "Booking Completed \n Wallet Balance updated";
                    $response['actionCode'] = 1;
                    $response['msg'] = "Booking Successfull";
                    $response['reason'] = "Success";
                    $status = 'Pending';
                    $type = 'Booking';
                }
            }
            elseif($transactionType == 0){ // for online payment

                $payment_status = 'Failed';
                $body = "Booking Failed \n Online Payment Failed";      
                $response['msg'] = "Booking Failed Online Payment Failed";
                $type = "order_failed";
                
                if($pay_error_code == 200){
                    $payment_status = 'Success';
                    $status = 'Pending';
                    $body = "Booking Completed \n Online Payment Successfull";
                    $response['actionCode'] = 1;
                    $response['msg'] = "Booking Successfull";
                    $response['reason'] = "Success";
                    $type = 'Booking';
                }
            }
            $updateTxn = "UPDATE transaction_table_customer SET payment_status = '".$payment_status."', dsc = '".$desc."', gateway_order_id = '".$gateway_order_id."', pay_error_code = '".$pay_error_code."', pay_id = '".$pay_id."', pay_captured = '".$pay_captured."', time = '".$time."', pay_signature = '".$pay_signature."' WHERE id = '".$txn_id."' ";
            mysqli_query($conn, $updateTxn);

            $updateOrder = "UPDATE order_txn_customer SET status = '".$payment_status."', time = '".$time."', type = '".$type."' WHERE txn_id = '".$txn_id."'";
            mysqli_query($conn, $updateOrder);

            $updateLead = "UPDATE lead SET transactionType = '".$transactionType."', payment_status = '".$payment_status."', status = '".$status."' WHERE txn_id = '".$txn_id."'";
            $resultUpdateLead = mysqli_query($conn, $updateLead);
            
            $checkCoupon = "SELECT * FROM lead WHERE txn_id = '".$txn_id."'";
            $resultCoupon = mysqli_query($conn, $checkCoupon);
            $row = $resultCoupon -> fetch_assoc();
            $couponId = $row['couponId'];
            $couponCode = $row['couponCode'];
            $category = $row['category'];
            $booking_status = $row['status'];
            $customer_id = $row['customer_id'];
            $city = $row['city'];
            $location = $row['location'];
            
            if($booking_status == 'Pending'){
                
                if($couponCode != "" ){
                
                    $checkCouponDetail = "SELECT * FROM coupon_code WHERE id = '".$couponId."'";
                    $checkCouponDetailResult = mysqli_query($conn, $checkCouponDetail);
                    $row = $checkCouponDetailResult -> fetch_assoc();
                    $available_no = $row['available_no'] - 1;
                    $used = $row['used'] + 1;
                    
                    $insertCoupon = "UPDATE coupon_code SET available_no = '".$available_no."', used = '".$used."' WHERE id = '".$couponId."' ";
                    mysqli_query($conn, $insertCoupon);
                }

                if($isFirstBooking == '1'){
                        
                        $date = date('Y/m/d');
                        $time = date("h:i:s A");
                        
                        // Test if string contains the word 
                        if(strpos($referrer_code_used, 'TWZCR') !== false){
                            //c to c
                            $checkRefer = "SELECT * FROM customer_details JOIN customer_wallet ON customer_details.id = customer_wallet.user_id WHERE customer_details.referrer_code = '".$referrer_code_used."'";
                            $resultRefer = mysqli_query($conn, $checkRefer);
                            if(mysqli_num_rows($resultRefer)>0){

                                $row = $resultRefer -> fetch_assoc();
                                $refer_c_id = $row['user_id'];
                                $refer_credit_balance = $row['credit'];

                                $refer_credit_balance = $refer_credit_balance + 21;

                                $checkQuery = "UPDATE customer_wallet SET credit = '".$refer_credit_balance."' WHERE user_id = '".$refer_c_id."'";
                                mysqli_query($conn, $checkQuery);
                                
                                    $description ="21 Points added for Referal";
                                    
                                    $insertQuery = "INSERT INTO transaction_table_customer (payment_status, dsc, time, pay_id) VALUES ('Success', '".$description."', '".$time."', 'Refer Pt.')";
                                    
                                    mysqli_query($conn, $insertQuery);
                                    $txn_id = mysqli_insert_id($conn);
                                    
                                    $orderId = "C".$refer_c_id.$row['wallet_id'].$txn_id;
                                    
                                    $insertOrder = "INSERT INTO order_txn_customer(txn_id, wallet_id, amount, name, status, contact_no, email_id, order_id, description, date, time, type) VALUES ('".$txn_id."', '".$row['wallet_id']."', '21', '".$row['name']."', 'Success', '".$row['phone']."', '".$row['email']."', '".$orderId."', '".$description."', '".$date."', '".$time."', 'Refer Pt.')";
                                    mysqli_query($conn, $insertOrder);

                                $new_credit = $old_credit + 21;

                                $checkQuery = "UPDATE customer_wallet SET credit = '".$new_credit."' WHERE wallet_id = '".$wallet_id."'";
                                mysqli_query($conn, $checkQuery);
                                
                                    $insertQuery = "INSERT INTO transaction_table_customer (payment_status, dsc, time, pay_id) VALUES ('Success', '".$description."', '".$time."', 'Points Added')";
                                    
                                    mysqli_query($conn, $insertQuery);
                                    $txn_id = mysqli_insert_id($conn);
                                    
                                    $orderId = "C".$customer_id.$wallet_id.$txn_id;
                                    
                                    $insertOrder = "INSERT INTO order_txn_customer(txn_id, wallet_id, amount, name, status, contact_no, email_id, order_id, description, date, time, type) VALUES ('".$txn_id."', '".$wallet_id."', '21', '".$c_name."', 'Success', '".$c_phone."', '".$c_email."', '".$orderId."', '".$description."', '".$date."', '".$time."', 'Refer Pt.')";
                                    mysqli_query($conn, $insertOrder);
                            }

                        } 
                        elseif(strpos($referrer_code_used, 'TWZVN') !== false){
                            //v to c
                            $checkRefer = "SELECT * FROM vendor_details JOIN wallet ON vendor_details.user_id = wallet.user_id WHERE referring_code = '".$referrer_code_used."'";   

                            $resultRefer = mysqli_query($conn, $checkRefer);
                            $row = $resultRefer -> fetch_assoc();
                            $refer_v_id = $row['user_id'];
                            $refer_credit_balance = $row['total_balance'];

                            $refer_credit_balance = $refer_credit_balance + (11/2);

                            $checkQuery = "UPDATE wallet SET total_balance = '".$refer_credit_balance."' WHERE user_id = '".$refer_v_id."'";
                            mysqli_query($conn, $checkQuery);
                            
                                $description ="11 Points added for Referal";
                                
                                $insertQuery = "INSERT INTO transaction_table (payment_status, dsc, time, pay_id) VALUES ('Success', '".$description."', '".$time."', 'Points Added')";
                                
                                mysqli_query($conn, $insertQuery);
                                $txn_id = mysqli_insert_id($conn);
                                
                                $orderId = "C".$refer_v_id.$row['wallet_id'].$txn_id;
                                
                                $insertOrder = "INSERT INTO order_txn(txn_id, wallet_id, amount, name, status, contact_no, email_id, order_id, description, date, time, type) VALUES ('".$txn_id."', '".$row['wallet_id']."', '21', '".$row['name']."', 'Success', '".$row['phone']."', '".$row['email']."', '".$orderId."', '".$description."', '".$date."', '".$time."', 'Refer Pt.')";
                                mysqli_query($conn, $insertOrder);

                            $new_credit = $old_credit + 11;

                            $checkQuery = "UPDATE customer_wallet SET credit = '".$new_credit."' WHERE wallet_id = '".$wallet_id."'";
                            mysqli_query($conn, $checkQuery);
                            
                                $insertQuery = "INSERT INTO transaction_table_customer (payment_status, dsc, time, pay_id) VALUES ('Success', '".$description."', '".$time."', 'Points Added')";
                                
                                mysqli_query($conn, $insertQuery);
                                $txn_id = mysqli_insert_id($conn);
                                
                                    
                                $orderId = "C".$customer_id.$wallet_id.$txn_id;
                                    
                                $insertOrder = "INSERT INTO order_txn_customer(txn_id, wallet_id, amount, name, status, contact_no, email_id, order_id, description, date, time, type) VALUES ('".$txn_id."', '".$wallet_id."', '21', '".$c_name."', 'Success', '".$c_phone."', '".$c_email."', '".$orderId."', '".$description."', '".$date."', '".$time."', 'Refer Pt.')";
                                    mysqli_query($conn, $insertOrder);

                        }
                        $updateCustomer = "UPDATE customer_details SET isFirstBooking = '0' WHERE id = '".$customer_id."'";
                        mysqli_query($conn, $updateCustomer);
                }
                
                $sendLead = "SELECT * FROM vendor_details WHERE active = '1' AND is_approved = '1' AND city = '".$city."' AND location = '".$location."'";
                $resultLead = mysqli_query($conn, $sendLead);
                while($row = $resultLead -> fetch_assoc()){
                    $someArray = json_decode($row['category'], true);
                    $cat = array();
                    foreach($someArray as $value){
                        $cat[] = $value['name'];   
                    }
                    if(in_array($category, $cat)){
                        $user[] = $row['user_id'];
                        $token[] = $row['token'];
                    }
                }
                
                $title = 'Townz';
                $body = 'New '.$category.' Booking Added for you';
                
                include '../notification.php';
                send_notification($body, $title, $token);
                include '../insert_notification.php';
                set_notification($body, $title, $user);
            }
        }
    }
    
    echo json_encode($response);

?>