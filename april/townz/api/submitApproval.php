<?php
    
    include 'connection.php';
    
    $entityBody = file_get_contents('php://input');
    $decoded = json_decode(file_get_contents('php://input'), true);
    
    $userId = $decoded['userId'];
    
    $response['statusCode'] = 0;
    $response['msg'] = "Submission failed";
    $response['reason'] = "Failed";
    $response['actionCode'] = 0;
    
    $checkQuery = " SELECT * FROM vendor_details WHERE user_id = '".$userId."'";
    
    if(mysqli_num_rows(mysqli_query($conn, $checkQuery))>0){
    
        $checkQuery= "UPDATE vendor_details SET send_approval = '1' WHERE user_id='".$userId."'";
        
        if(mysqli_query($conn, $checkQuery)){
            
        	$response['statusCode'] = 1;
        	$response['msg'] = "Approval Sent";
        	$response['reason'] = "Success";
        	$response['actionCode'] = 1;
        	
        	$body = "Your Approval Request is Raised";
    	    $title = "Approval Request";
        	$checkToken = "SELECT * FROM vendor_details WHERE user_id = '".$userId."'";
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
    echo json_encode($response);

?>