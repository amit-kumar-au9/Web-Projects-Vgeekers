<?php 
    include 'include/connection.php';
    
    $user_id = $_POST['user_id'];
    $check = "SELECT * FROM vendor_details WHERE user_id = '".$user_id."'";
    $result = mysqli_query($conn, $check);
    $row = $result -> fetch_assoc();
    $active_id = $row['is_approved'];
    $token = array($row['token']);
    
    if($active_id == '1'){
        $checkQuery = "UPDATE vendor_details SET is_approved = '2' WHERE user_id = '".$user_id."'";
        $body = 'You are Blocked by the Admin';
        $response['message'] = "User_id ".$user_id." Blocked";
    }
    elseif($active_id == '2'){
        $checkQuery = "UPDATE vendor_details SET is_approved = '1' WHERE user_id = '".$user_id."'";
        $body = 'You are UnBlocked by the Admin';
        $response['message'] = "User_id ".$user_id." UnBlocked";
    }
    if(!mysqli_query($conn, $checkQuery)){
        $response['message'] = "Failed".$user_id;
    }
    
    $title = "Townz";
	$user = array($user_id);
	$token = array($row['token']);
	include '../api/notification.php';
	send_notification($body, $title, $token);
	include '../api/insert_notification.php';
	set_notification($body, $title, $user);
    
    echo json_encode($response);

?>