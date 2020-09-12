<?php

include 'connection.php';

$entityBody = file_get_contents('php://input');
$decoded = json_decode(file_get_contents('php://input'), true);

$userId = $decoded['userId'];

$checkQuery = "SELECT * FROM identity WHERE user_id = '".$userId."'";
$checkResult = mysqli_query($conn, $checkQuery);

if(mysqli_num_rows($checkResult) == 1){

    $row = $checkResult->fetch_assoc();
	
	$response['statusCode'] = 1;
	$response['msg'] = "User Identity Images send";
	$response['reason'] = "Success";
    $response['data'] = $row;
	$response['actionCode'] = 1;

}
else{

	$response['statusCode'] = 1;
	$response['msg'] = "User not found";
	$response['reason'] = "Failed";
	$response['data'] = (object) null;
	$response['actionCode'] = 0;

}

echo json_encode($response);

?>