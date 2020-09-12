<?php 

    include '../connection.php';
    
    $entityBody = file_get_contents('php://input');
    $decoded = json_decode(file_get_contents('php://input'), true);
    
    $string = $decoded['string'];
    
    $response['statusCode'] = 1;
    $response['msg'] = "Services Not Send";
    $response['reason'] = "Failed";
    $response['data'] = [];
    $response['actionCode'] = 0;
    
    $search = '%'.$string.'%';
    $checkQuery = "SELECT * FROM services_subcategory WHERE name LIKE '$search'";
    $checkResult = mysqli_query($conn, $checkQuery);
    
    if(mysqli_num_rows($checkResult) > 0){
    	
    	while($row = $checkResult->fetch_assoc()){
    	    
    	    $response['data'][]= $row;
    	
    	}
    	
    	$response['statusCode'] = 1;
    	$response['msg'] = "Services Send";
    	$response['reason'] = "Success";
    	$response['actionCode'] = 1;
    
    }
    
    echo json_encode($response);

?>