<?php 

    include 'connection.php';
    
    $entityBody = file_get_contents('php://input');
    $decoded = json_decode(file_get_contents('php://input'), true);
    
    $user_id = $decoded['userId'];
    $token = $decoded['token'];
    
    $response['statusCode'] = 1;
	$response['msg'] = "FCM null";
	$response['reason'] = "Failed";
	$response['actionCode'] = 0;
	
    if($token!=""){
        $checkQuery = "UPDATE vendor_details SET token = '".$token."' WHERE user_id = '".$user_id."'";
        
        $checkResult = mysqli_query($conn, $checkQuery);
        
        mysqli_num_rows($checkResult);
    	$response['statusCode'] = 1;
    	$response['msg'] = "FCM updated";
    	$response['reason'] = "Success";
    	$response['actionCode'] = 1;
    }
    echo json_encode($response);

?>