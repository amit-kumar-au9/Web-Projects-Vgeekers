<?php 

    include 'connection.php';
    
    $entityBody = file_get_contents('php://input');
    $decoded = json_decode(file_get_contents('php://input'), true);
    
    $cityId = $decoded['id'];
    
    $checkQuery = "SELECT * FROM city_location WHERE city_id = '".$cityId."'";
    
    $checkResult = mysqli_query($conn, $checkQuery);
    
    if(mysqli_num_rows($checkResult) > 0){
    
    	$response['data'] = array();
    	
    	while($row = $checkResult->fetch_assoc()){
    		$response['data'][]=["id" => $row['id'], "name" => $row['location'] ];
    	
    	}
    	
    	$response['statusCode'] = 1;
    	$response['msg'] = "Locations Send";
    	$response['reason'] = "Success";
    	$response['actionCode'] = 1;
    
    }
    else{
    
    	$response['statusCode'] = 1;
    	$response['msg'] = "Locations Not found";
    	$response['reason'] = "Failed";
    	$response['data'] = [];
    	$response['actionCode'] = 0;
    
    }
    
    echo json_encode($response);

?>