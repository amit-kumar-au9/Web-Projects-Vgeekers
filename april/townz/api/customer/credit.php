<?php 

    include '../connection.php';
    
    $entityBody = file_get_contents('php://input');
    $decoded = json_decode(file_get_contents('php://input'), true);
    
    $walletId = $decoded['walletId'];
    
    $checkQuery = "SELECT * FROM customer_wallet WHERE wallet_id = '".$walletId."'";
    $checkResult = mysqli_query($conn, $checkQuery);
    
	$response['data'] = (object) null;
	$response['statusCode'] = 1;
	$response['reason'] = "Failed";
	$response['msg'] = "No credit detail found";
	$response['actionCode'] = 0;
    
    if(mysqli_num_rows($checkResult)>0){
        
    	$row = $checkResult -> fetch_Assoc();
    	
    	$response['data'] = $row;
    	$response['statusCode'] = 1;
    	$response['reason'] = "Success";
    	$response['msg'] = "Credit Details Send";
    	$response['actionCode'] = 1;
    	
    }

    echo json_encode($response);

?>