<?php 

    include '../connection.php';
    
    $entityBody = file_get_contents('php://input');
    $decoded = json_decode(file_get_contents('php://input'), true);
    
    $vendor_id = $decoded['vendor_id'];
    $lead_id = $decoded['lead_id'];
    $customer_id = $decoded['customer_id'];
    $reason = $decoded['reason'];
    
    $response['statusCode'] = 1;
	$response['msg'] = "Strike Cannot be added as vendor is assigned";
	$response['reason'] = "Failed";
	$response['actionCode'] = 0;
        
    if($vendor_id != ""){
        $insertLead = "UPDATE lead SET isStrike = '1' WHERE id = '".$lead_id."'";
        mysqli_query($conn, $insertLead);
        
        $insertQuery = "INSERT INTO strike_info (vendor_id, customer_id, lead_id, reason) VALUES ('".$vendor_id."', '".$customer_id."', '".$lead_id."', '".$reason."')";

        if(mysqli_query($conn, $insertQuery)){
    
            $checkQuery = "SELECT * FROM vendor_details WHERE user_id = '".$vendor_id."'";
            $checkResult = mysqli_query($conn, $checkQuery);
            
            $row = $checkResult -> fetch_assoc();
            $strike = $row['strike'] + 1;
            
            $checkQuery = "UPDATE vendor_details SET strike = '".$strike."' WHERE user_id = '".$vendor_id."'";
            $checkResult = mysqli_query($conn, $checkQuery);
    
            $response['msg'] = "Strike Added";
            $response['reason'] = "Success";
            $response['actionCode'] = 1;
        }
    }
        
    echo json_encode($response);

?>