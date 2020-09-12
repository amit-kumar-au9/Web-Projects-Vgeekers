<?php 

    include 'connection.php';
    
    $entityBody = file_get_contents('php://input');
    $decoded = json_decode(file_get_contents('php://input'), true);
    
    $userId = $decoded['userId'];
    $gst = $decoded['gst'];
    $pan = $decoded['pan'];
    $account = $decoded['account_no'];
    $name = $decoded['name'];
    $ifsc = $decoded['ifsc']; 
    
    $checkQuery = "SELECT * FROM bank_details WHERE user_id = '".$userId."' ";
    
    $checkResult = mysqli_query($conn, $checkQuery);
    
    if( mysqli_num_rows($checkResult) == 0 ){
    
    	$checkQuery = "INSERT INTO bank_details (user_id, gst, pan, account_no, name, ifsc) VALUES ('".$userId."', '".$gst."', '".$pan."', '".$account."', '".$name."', '".$ifsc."')";
    	$response['msg'] = "Bank Details Inserted";
    	$body = "Your Bank Details is Completed";
    }
    elseif( mysqli_num_rows($checkResult) == 1 ){
    
    	$checkQuery= "UPDATE bank_details SET gst='".$gst."', pan='".$pan."', account_no='".$account."', name='".$name."', ifsc='".$ifsc."'  WHERE user_id='".$userId."'";
    	$response['msg'] = "Bank Details Updated";
    	$body = "Your Bank Details is Updated";
    
    }
    
    if($result = mysqli_query($conn, $checkQuery)){
        
        $updateQuery = "UPDATE vendor_details SET isBankCompleted = '1' WHERE user_id = '".$userId."' ";
        mysqli_query($conn, $updateQuery);
    	
    	$response['statusCode'] = 1;
    	$response['reason'] = "Success";
    	$response['actionCode'] = 1;
    	
    	$title = "Bank Details";
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
    
    	$response['statusCode'] = 0;
    	$response['msg'] = "Bank Details Not Updated";
    	$response['reason'] = "Failed";
    	$response['actionCode'] = 0;
    }
    
    echo json_encode($response);

?>