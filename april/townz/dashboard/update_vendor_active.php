<?php 
    include 'include/connection.php';
    
    $user_id = $_POST['user_id'];
    $check = "SELECT * FROM vendor_details WHERE user_id = '".$user_id."'";
    $result = mysqli_query($conn, $check);
    $row = $result -> fetch_assoc();
    $active_id = $row['active'];
    if($active_id == '0'){
        $checkQuery = "UPDATE vendor_details SET active = '1' WHERE user_id = '".$user_id."'";   
        $body = "Your account is Activated by admin";
        $response['message'] = "User_id ".$user_id." Active";
    }else{
        $checkQuery = "UPDATE vendor_details SET active = '0' WHERE user_id = '".$user_id."'";
        $body = "Your account is Deactivated by admin";
        $response['message'] = "User_id ".$user_id." Inactive";
    }
    if(!mysqli_query($conn, $checkQuery)){
        $response['message'] = "User_id ".$user_id." failed";
    }
    
    $title = "Townz";
	$token = array($row['token']);
	$user = array($user_id);
	include '../api/notification.php';
	send_notification($body, $title, $token);
	include '../api/insert_notification.php';
	set_notification($body, $title, $user);
    
    echo json_encode($response);

?>