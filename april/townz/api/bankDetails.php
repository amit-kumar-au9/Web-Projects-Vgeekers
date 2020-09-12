<?php 

    include 'connection.php';
    
    $entityBody = file_get_contents('php://input');
    $decoded = json_decode(file_get_contents('php://input'), true);
    
    $userId = $decoded['userId'];
    
    $checkQuery = "SELECT * FROM bank_details WHERE user_id = '".$userId."'";
    
    $checkResult = mysqli_query($conn, $checkQuery);
    
    if(mysqli_num_rows($checkResult) > 0){
    
    	$row = $checkResult -> fetch_assoc();
    	$response['data'] = $row;
    	$response['statusCode'] = 1;
    	$response['msg'] = "Bank details send";
    	$response['reason'] = "Success";
    	$response['actionCode'] = 1;
    
    }
    else{
    
    	$response['statusCode'] = 1;
    	$response['msg'] = "No Bank Details found for this User";
    	$response['reason'] = "Failed";
    	$data = (object) null;
    	$response['data'] = $data;
    	$response['actionCode'] = 0;
    
    }
    
    echo json_encode($response);

?>