<?php 

include 'connection.php';

$entityBody = file_get_contents('php://input');
$decoded = json_decode(file_get_contents('php://input'), true);

$type = $decoded['type'];

// $userId = $_POST['userId'];

// $checkQuery = "SELECT * FROM training_center WHERE user_id = '".$userId."' ";

if($type == 1){

    $checkQuery = "SELECT * FROM training_center ";
    
    $checkResult = mysqli_query($conn, $checkQuery);
    
    if(mysqli_num_rows($checkResult) > 0){
    	
    	while($row = $checkResult->fetch_assoc()){
    	
    		$response['data'][] =[
    			"title" => $row['heading'], 
    			"desc" => $row['content']
    		]; 
    	
    	}
    	
    	$response['statusCode'] = 1;
    	$response['msg'] = "Training Details Send";
    	$response['reason'] = "Success";
    	$response['actionCode'] = 1;
    
    }
    else{

    	$response['statusCode'] = 0;
    	$response['msg'] = "Training Details Not Send";
    	$response['reason'] = "Failed";
    	$response['data'] = [];
    	$response['actionCode'] = 0;

    }
    
}

else{

	$response['statusCode'] = 0;
	$response['msg'] = "Wrong type";
	$response['reason'] = "Failed";
	$response['data'] = [];
	$response['actionCode'] = 0;

}

echo json_encode($response);

?>