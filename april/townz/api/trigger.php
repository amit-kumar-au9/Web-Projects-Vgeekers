<?php 

include 'connection.php';

$entityBody = file_get_contents('php://input');
$decoded = json_decode(file_get_contents('php://input'), true);

$userId = $decoded['userId'];
$active = $decoded['active'];

if($active == 0){

	$checkQuery = "UPDATE vendor_details SET online = '0' WHERE user_id = '".$userId."' ";
	$response['msg'] = "User is offline";
	$body = "User is offline";

}
elseif($active == 1){

	$checkQuery = "UPDATE vendor_details SET online = '1' WHERE user_id = '".$userId."' ";
	$response['msg'] = "User is online";
	$body = "User is online";

}
if(mysqli_query($conn, $checkQuery)){

	$response['statusCode'] = 1;
	$response['reason'] = "Success";
	$response['actionCode'] = 1;
	$title = "Townz";
	$checkToken = "SELECT * FROM vendor_details WHERE user_id = '".$userId."'";
	$ResultToken = mysqli_query($conn, $checkToken);
	$row = $ResultToken -> fetch_assoc();
	
	$token = array($row['token']);
	$user = array($userId);
	include 'notification.php';
	send_notification($body, $title, $token);
	include 'insert_notification.php';
	set_notification($body, $title, $user);

}
else{

	$response['msg'] = "Error found";
	$response['statusCode'] = 0;
	$response['reason'] = "Failed";
	$response['actionCode'] = 0;

}

echo json_encode($response);

?>