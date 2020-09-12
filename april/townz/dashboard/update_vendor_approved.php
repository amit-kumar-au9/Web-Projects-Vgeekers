<?php 
    include 'include/connection.php';
    
    $user_id = $_POST['user_id'];
    $check = "SELECT * FROM vendor_details WHERE user_id = '".$user_id."'";
    $result = mysqli_query($conn, $check);
    $row = $result -> fetch_assoc();
    $active_id = $row['is_approved'];
    
    if($active_id == '1'){
        $checkQuery = "UPDATE vendor_details SET is_approved = '0' WHERE user_id = '".$user_id."'";
        $body = "Your Account is Disapproved by the admin";
        $response['message'] = "User_id ".$user_id." Disapproved";
    }else{
        $checkQuery = "UPDATE vendor_details SET is_approved = '1' WHERE user_id = '".$user_id."'";
        $body = "Your Account is Approved by the admin";
        $response['message'] = "User_id ".$user_id." Approved";
    }
    if(!mysqli_query($conn, $checkQuery)){
        $response['message'] = "User_id ".$user_id." failed";
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