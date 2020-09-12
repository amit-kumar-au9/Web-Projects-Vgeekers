<?php 

    include '../connection.php';
    
    $response['statusCode'] = 1;
    $response['msg'] = "No active coupon";
    $response['reason'] = "Failed";
    $response['data'] = [];
    $response['actionCode'] = 0;
    
    date_default_timezone_set('Asia/Kolkata');
    $date = date('Y/m/d');
	    
    $checkQuery = "SELECT * FROM coupon_code WHERE start_date<'".$date."' AND end_date>'".$date."' AND available_no>0";
    $checkResult = mysqli_query($conn, $checkQuery);
    
    if(mysqli_num_rows($checkResult) > 0){
    	
    	while($row = $checkResult->fetch_assoc()){
    	
    	    $response['data'][]=$row;
    	
    	}
    	
    	$response['statusCode'] = 1;
    	$response['msg'] = "Coupon Send";
    	$response['reason'] = "Success";
    	$response['actionCode'] = 1;
    
    }
    
    echo json_encode($response);

?>