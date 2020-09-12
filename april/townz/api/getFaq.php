<?php 

include 'connection.php';

$entityBody = file_get_contents('php://input');
$decoded = json_decode(file_get_contents('php://input'), true);

$checkQuery = "SELECT * FROM faq";

$checkResult = mysqli_query($conn, $checkQuery);

if(mysqli_num_rows($checkResult) > 0){
	
	while($row = $checkResult->fetch_assoc()){
	
	    $response['data'][]=$row;
	}
	
	$response['statusCode'] = 1;
	$response['msg'] = "FAQ Send";
	$response['reason'] = "Success";
	$response['actionCode'] = 1;

}
else{

	$response['statusCode'] = 1;
	$response['msg'] = "No FAQ found";
	$response['reason'] = "Failed";
	$response['data'] = [];
	$response['actionCode'] = 0;

}

echo json_encode($response);

?>