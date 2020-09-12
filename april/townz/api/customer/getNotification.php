<?php 
	include '../connection.php';

    $entityBody = file_get_contents('php://input');
	$decoded = json_decode(file_get_contents('php://input'), true);

	$userId = $decoded['userId'];
    
    $checkNoti = "SELECT * FROM customer_notification WHERE user_id = '".$userId."' ORDER BY id desc LIMIT 30";

    if(mysqli_num_rows($resultNoti = mysqli_query($conn, $checkNoti))>0){
        
        while($row = $resultNoti -> fetch_assoc()){
            $response['data'][]=$row['alert'];    
        }
        
        $response['statusCode'] = 1;
    	$response['msg'] = "Notification Sent";
    	$response['reason'] = "Success";
    	$response['actionCode'] = 1; 
    }
    else{
        $response['data'] = [];
        $response['statusCode'] = 1;
    	$response['msg'] = "Notification Not found";
    	$response['reason'] = "Failed";
    	$response['actionCode'] = 0; 
    }
   	echo json_encode($response);

    
    
?>