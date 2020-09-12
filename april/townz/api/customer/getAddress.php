<?php 
    
    include '../connection.php';
    
    $entityBody = file_get_contents('php://input');
    $decoded = json_decode(file_get_contents('php://input'), true);
    
    $userId = $decoded['userId'];
    
	$response['msg'] = "No address found";
	$response['reason'] = "Failed";
	$response['data'] = [];
	$response['actionCode'] = 0;
	$response['statusCode'] = 1;
    
    $checkQuery = "SELECT * FROM customer_address WHERE customer_id = '".$userId."'";
    
    $checkResult = mysqli_query($conn, $checkQuery);
    
    if(mysqli_num_rows($checkResult) > 0){
    	
    	while($row = $checkResult->fetch_assoc()){
    	
    	    $response['data'][]=$row;
    	}
    	
    	$response['statusCode'] = 1;
    	$response['msg'] = "Address Send";
    	$response['reason'] = "Success";
    	$response['actionCode'] = 1;
    
    }
    
    echo json_encode($response);

?>