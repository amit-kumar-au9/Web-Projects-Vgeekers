<?php 

include 'connection.php';

$entityBody = file_get_contents('php://input');
$decoded = json_decode(file_get_contents('php://input'), true);

$userId = $decoded['userId'];
$isWhatsapp = $decoded['isWhatsapp'];

$response['msg'] = "No userID found";
$response['statusCode'] = 0;
$response['reason'] = "Failed";
$response['actionCode'] = 0;

$checkQuery = " SELECT * FROM vendor_details WHERE user_id = '".$userId."' ";

if(mysqli_num_rows(mysqli_query($conn, $checkQuery))>0){
    
    $checkQuery = "UPDATE vendor_details SET whatsapp = '".$isWhatsapp."' WHERE user_id = '".$userId."' ";
    $response['msg'] = "Whatsapp is active";
    $body = "Whatsapp is active";
    
    if($isWhatsapp == 0){

    	$response['msg'] = "Whatsapp is inactive";
    	$body = "Whatsapp is inactive";

    }
    
    mysqli_query($conn, $checkQuery);
	
	$response['actionCode'] = 1;
	$response['statusCode'] = 1;
	$response['reason'] = "Success";
	
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

echo json_encode($response);

?>