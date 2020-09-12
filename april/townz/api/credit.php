<?php 

include 'connection.php';

$entityBody = file_get_contents('php://input');
$decoded = json_decode(file_get_contents('php://input'), true);

$userId = $decoded['userId'];
$walletId = $decoded['walletId'];

$checkQuery = "SELECT * FROM wallet WHERE wallet_id = '".$walletId."'";
$checkResult = mysqli_query($conn, $checkQuery);

if(mysqli_num_rows($checkResult)>0){
    
	$row = $checkResult -> fetch_Assoc();
	
	$response['data'] = ["totalBalance" => $row['total_balance']];
	$response['statusCode'] = 1;
	$response['reason'] = "Success";
	$response['msg'] = "Credit Details Send";
	$response['actionCode'] = 1;
	
}
else{
    
	$data = (object) null;
	$response['data'] = $data;
	$response['statusCode'] = 1;
	$response['reason'] = "Failed";
	$response['msg'] = "No credit detail found";
	$response['actionCode'] = 0;
	
}

echo json_encode($response);

?>