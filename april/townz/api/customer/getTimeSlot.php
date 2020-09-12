<?php 

    include '../connection.php';
    
    $response['statusCode'] = 1;
    $response['msg'] = "Time Slot";
    $response['reason'] = "Failed";
    $response['data'] = [];
    $response['actionCode'] = 0;
    
    $checkQuery = "SELECT * FROM time_slot";
    $checkResult = mysqli_query($conn, $checkQuery);
    
    if(mysqli_num_rows($checkResult) > 0){
    	
    	while($row = $checkResult->fetch_assoc()){
    	    $response['data'][]= $row;
    	}
    	$response['msg'] = "Time Slot Send";
    	$response['reason'] = "Success";
    	$response['actionCode'] = 1;
    
    }
    
    echo json_encode($response);

?>