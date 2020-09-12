<?php 

    include '../connection.php';
    
    $entityBody = file_get_contents('php://input');
    $decoded = json_decode(file_get_contents('php://input'), true);
    
    $lead_id = $decoded['lead_id'];
    
    $response['statusCode'] = 1;
	$response['msg'] = "Not Updated";
	$response['reason'] = "Failed";
	$response['actionCode'] = 0;
	
    $updateQuery = "UPDATE lead SET status = 'Completed', is_accept = '2' WHERE id = '".$lead_id."'";
    
    if(mysqli_query($conn, $updateQuery)){

        $response['msg'] = "Your Booking Has Been Completed";
        $response['reason'] = "Success";
        $response['actionCode'] = 1;
        
        $checkToken = "SELECT token, vendor_details.user_id as user_id, is_lead FROM vendor_details JOIN lead ON vendor_details.user_id = lead.user_id WHERE lead.id = '".$lead_id."'";
        $ResultToken = mysqli_query($conn, $checkToken);
        $row = $ResultToken -> fetch_assoc();
        
        $leadType = $row['is_lead'];
        $vendor_id = $row['user_id'];
        $token = $row['token'];
        
        $title = "Booking Completed";
		$body = "Your Booking Has Been Completed. Thank You !!!";
		
        if($leadType == 0){
            $title = "Query Closed";
            $body = "Your Query has been closed. Thank You !!!";
            $response['msg'] = "Your Query Has Been Closed";
        }
        
        $token = array($token);
        $user = array($vendor_id);
        
        include '../notification.php';
        send_notification($body, $title, $token);
        include '../insert_notification.php';
        set_notification($body, $title, $user);
        
    }
    
    echo json_encode($response);

?>