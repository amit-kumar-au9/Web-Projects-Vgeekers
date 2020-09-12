<?php 
    
    include '../connection.php';
    
    $entityBody = file_get_contents('php://input');
    $decoded = json_decode(file_get_contents('php://input'), true);
    
    $addressId = $decoded['addressId'];
    
	$response['msg'] = "Address not deleted";
	$response['reason'] = "Failed";
    $response['statusCode'] = 0;
	$response['actionCode'] = 0;
    
    $checkQuery = "DELETE FROM customer_address WHERE id='".$addressId."'";
    
    if(mysqli_query($conn, $checkQuery)){
    	
    	$response['statusCode'] = 1;
    	$response['msg'] = "Address deleted";
    	$response['reason'] = "Success";
    	$response['actionCode'] = 1;
    
    }
    
    echo json_encode($response);

?>