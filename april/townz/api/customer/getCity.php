<?php 

    include '../connection.php';
    
    $checkQuery = "SELECT * FROM city";
    
    $checkResult = mysqli_query($conn, $checkQuery);
    
    $response['statusCode'] = 1;
	$response['msg'] = "City Data Not Send";
	$response['reason'] = "Failed";
	$response['data'] = [];
	$response['actionCode'] = 0;
    
    if(mysqli_num_rows($checkResult) > 0){
    	
    	while($row = $checkResult->fetch_assoc()){
    	
    		$response['data'][]=["id" => $row['id'], "name" => $row['name'] ];
    	
    	}
    	
    	$response['msg'] = "City Send";
    	$response['reason'] = "Success";
    	$response['actionCode'] = 1;
    
    }

echo json_encode($response);

?>