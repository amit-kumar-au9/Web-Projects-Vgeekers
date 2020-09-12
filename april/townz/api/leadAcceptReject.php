<?php
    include 'connection.php';
    
    $entityBody = file_get_contents('php://input');
    $decoded = json_decode(file_get_contents('php://input') , true);
    
    $userId = $decoded['userId'];
    $leadId = $decoded['leadId'];
    $actionType = $decoded['actionType']; 
    $price = $decoded['price'];
    $userName = $decoded['name'];
    
    $checkUserWallet = "SELECT * FROM wallet WHERE user_id = '" . $userId . "' ";
    $result = mysqli_query($conn, $checkUserWallet);
    $row = $result -> fetch_assoc();
    $walletId = $row['wallet_id'];
    $balance = $row['total_balance'];
    if ($actionType == 1)
    {
        if ($balance >= $price)
        {
            $checkLead = "SELECT * FROM lead WHERE id = '" . $leadId . "'";
            $resultLead = mysqli_query($conn, $checkLead);
            $row = $resultLead -> fetch_assoc();
            $leadType = $row['is_lead'];
            $error = false;
            if ($leadType == 1)
            {
                $checkAccept = "SELECT * FROM lead WHERE id = '" . $leadId . "' AND is_accept = '0'";
                if (mysqli_num_rows(mysqli_query($conn, $checkAccept)) > 0)
                {
                    $checkQuery = "UPDATE lead SET is_accept = 1, status = 'In Progress', user_id = '" . $userId . "', vendor_name = '".$userName."' WHERE id = '" . $leadId . "'";
                    $response['msg'] = "Commission Accepted";
                }
                else
                {
                    $error = true;
                    $response['msg'] = "Lead Not Available";
                    $response['statusCode'] = 1;
                    $response['reason'] = "Success";
                    $response['actionCode'] = 0;
                }
            }
            else
            {   
                $checkQuery = "INSERT accepted_lead (vendor_id, vendor_name, lead_id) VALUES ('" . $userId . "', '".$userName."' '" . $leadId . "')";
                $response['msg'] = "Lead Accepted";
            }
            if(!$error){
                    $updateWallet = "UPDATE wallet SET total_balance = '" . ($balance - $price) . "' WHERE user_id = '" . $userId . "'";
                    $date = date('Y/m/d');
                    $time = date("h:i:s A");
                    $desc = "Lead Id " . $leadId;
                    $orderId = "E" . $userId . $walletId . $leadId;
                    $insertOrder = "INSERT INTO order_txn (wallet_id, amount, currency, status, description, date, type, time, order_id, name) VALUES ('" . $walletId . "', '" . $price . "', 'INR', 'Success', '" . $desc . "', '" . $date . "', 'expense', '" . $time . "', '" . $orderId . "', '" . $userName . "')";
        
                    mysqli_close($conn);
                    $conn = new mysqli($servername, $username, $password, $database);
        
                    mysqli_autocommit($conn, false);
                    mysqli_query($conn, $checkQuery);
                    mysqli_query($conn, $updateWallet);
                    mysqli_query($conn, $insertOrder);
    
                if (!mysqli_commit($conn))
                {
                    mysqli_rollback($conn);
                    $response['msg'] = "Cannot Update";
                    $response['statusCode'] = 0;
                    $response['reason'] = "Failed";
                    $response['actionCode'] = 0;
                }
                else
                {
                    $response['statusCode'] = 1;
                    $response['reason'] = "Success";
                    $response['actionCode'] = 1;
    
                    $body = "New lead is accepted";
                    $title = "Lead Accepted";
                    $checkToken = "SELECT * FROM vendor_details WHERE user_id = '" . $userId . "'";
                    $ResultToken = mysqli_query($conn, $checkToken);
                    $row = $ResultToken->fetch_assoc();
    
                    $token = array(
                        $row['token']
                    );
                    $user = array(
                        $userId
                    );
                    include 'notification.php';
                    send_notification($body, $title, $token);
                    include 'insert_notification.php';
                    set_notification($body, $title, $user);
                }
            }
        }
        else
        {
            $response['msg'] = "Balance Not Available";
            $response['statusCode'] = 1;
            $response['reason'] = "Balance not available";
            $response['actionCode'] = 0;
        }

    }
    elseif ($actionType == 2)
    {

        $rejectMsg = $decoded['rejectMsg'];

        $checkQuery = "UPDATE lead SET is_accept = 2, rejectReason = '" . $rejectMsg . "' WHERE user_id = '" . $userId . "' AND id = '" . $leadId . "'";

        if (mysqli_query($conn, $checkQuery))
        {

            $response['msg'] = "Lead Rejected";
            $response['statusCode'] = 1;
            $response['reason'] = "Success";
            $response['actionCode'] = 1;

        }
        else
        {

            $response['msg'] = "Cannot Upate";
            $response['statusCode'] = 0;
            $response['reason'] = "Failed";
            $response['actionCode'] = 0;

        }

    }
    else
    {

        $response['msg'] = "Lead type wrong or Balance not available";
        $response['statusCode'] = 0;
        $response['reason'] = "Failed";
        $response['actionCode'] = 0;

    }
    echo json_encode($response);

?>
