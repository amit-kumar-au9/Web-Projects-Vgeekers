<?php 
    include 'include/connection.php';
    
    $user_id = $_POST['user_id'];
    $check = "SELECT * FROM customer_details WHERE id = '".$user_id."'";
    $result = mysqli_query($conn, $check);
    $row = $result -> fetch_assoc();
    $active_id = $row['active'];
    if($active_id == '0'){
        $checkQuery = "UPDATE customer_details SET active = '1' WHERE id = '".$user_id."'";   
        $body = "Your account is Activated by admin";
        $response['message'] = "Customer id ".$user_id." Active";
    }else{
        $checkQuery = "UPDATE customer_details SET active = '0' WHERE id = '".$user_id."'";
        $body = "Your account is Deactivated by admin";
        $response['message'] = "Customer id ".$user_id." Inactive";
    }
    if(!mysqli_query($conn, $checkQuery)){
        $response['message'] = "Customer id ".$user_id." failed";
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