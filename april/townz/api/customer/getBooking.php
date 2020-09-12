<?php 
    
    include '../connection.php';
    
    $entityBody = file_get_contents('php://input');
    $decoded = json_decode(file_get_contents('php://input'), true);
    
    $bookingType = $decoded['bookingType']; //1 is for active and 0 is for all
    $userId = $decoded['userId'];
    $leadType = $decoded['leadType']; //1 for commission and 0 for lead
    
	$response['msg'] = "No booking found";
	$response['reason'] = "Failed";
	$response['data'] = [];
	$response['actionCode'] = 1;
	$response['statusCode'] = 1;
    
    if($bookingType == '0'){
        $checkQuery = "SELECT * FROM lead WHERE customer_id = '".$userId."' AND is_lead = '".$leadType."' ORDER BY id DESC";    
    }
    elseif($bookingType == '1'){
        $checkQuery = "SELECT * FROM lead WHERE customer_id = '".$userId."' AND is_lead = '".$leadType."' AND status = 'Pending' OR status = 'In Progress' ORDER BY id DESC";
    }
    
    if(mysqli_num_rows($checkResult = mysqli_query($conn, $checkQuery)) > 0){
    	
    	while($row = $checkResult->fetch_assoc()){
    	
    	    $response['data'][]=$row;
    	}
    
    	$response['msg'] = "Booking Send";
    	$response['reason'] = "Success";
    
    }
    
    echo json_encode($response);

?>