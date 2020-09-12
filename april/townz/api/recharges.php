<?php

include 'connection.php';

$entityBody = file_get_contents('php://input');
$decoded = json_decode(file_get_contents('php://input'), true);

$walletId = $decoded['walletId'];
$rechargeType = $decoded['rechargeType'];

if($rechargeType == 0){
	
	$checkQuery = "SELECT * FROM order_txn WHERE wallet_id = '".$walletId."' ORDER BY id desc";

	$response['msg'] = "All the recharge details sent";

}
elseif ($rechargeType == 1) {

	$checkQuery = "SELECT * FROM order_txn WHERE wallet_id = '".$walletId."' AND type = 'recharge' ORDER BY id desc";

	$response['msg'] = "Recharge detail sent";

}
elseif ($rechargeType == 2) {

	$checkQuery = "SELECT * FROM order_txn WHERE wallet_id = '".$walletId."' AND type = 'expense' ORDER BY id desc";

	$response['msg'] = "Expenses details sent";
}
elseif ($rechargeType == 3) {

	$checkQuery = "SELECT * FROM order_txn WHERE wallet_id = '".$walletId."' AND type = 'penalty' ORDER BY id desc";

	$response['msg'] = "Penalty details Sent";
}


$checkResult = mysqli_query($conn, $checkQuery);
if($checkResult){
    if(mysqli_num_rows($checkResult) > 0){

    	while($row = $checkResult -> fetch_assoc()){		
    
    		$response['data'][] = $row;
    
    	}
    
    	$response['statusCode'] = 1;
    	$response['reason'] = "Success";
    	$response['actionCode'] = 1;
	
    }	
    else{
    
    	$response['statusCode'] = 1;
    	$response['msg'] = "No recharge details found";
    	$response['reason'] = "Success";
    	$response['data'] = array();
    	$response['actionCode'] = 0;
    
    }
}
else{
    
    	$response['statusCode'] = 1;
    	$response['msg'] = "No user found";
    	$response['reason'] = "Failed";
    	$response['data'] = array();
    	$response['actionCode'] = 0;
    
    }

echo json_encode($response);

?>