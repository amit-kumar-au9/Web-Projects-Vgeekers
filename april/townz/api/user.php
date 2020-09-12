<?php

    include 'connection.php';
    
    $entityBody = file_get_contents('php://input');
    $decoded = json_decode(file_get_contents('php://input'), true);
    
    $userId = $decoded['userId'];
    
    $checkQuery = "SELECT * FROM vendor_details INNER JOIN wallet ON vendor_details.user_id=wallet.user_id WHERE vendor_details.user_id = '".$userId."'";
    
    $checkResult = mysqli_query($conn, $checkQuery);
    
    if(mysqli_num_rows($checkResult) == 1){
    
        $row = $checkResult->fetch_assoc();
        
        $category = $row['category'];
    	$category1 = json_decode($category);
    	
    	$response['statusCode'] = 1;
    	$response['msg'] = "User details send";
    	$response['reason'] = "Success";
        $response['data'] = [
            "userId" => $row['user_id'], 
            "name" => $row['name'], 
            "phone" => $row['phone'], 
            "email" => $row['email'], 
            "country" => $row['country'], 
            "city" =>$row['city'], 
            "referrer_code" =>$row['referrer_code'], 
            "referring_code" => $row['referring_code'],
            "whatsapp" => $row['whatsapp'], 
            "active" => $row['active'],
            "is_approved" => $row['is_approved'],
            "send_approval" => $row['send_approval'], 
            "online" => $row['online'], 
            "category" => $category1, 
            "walletId" => $row['wallet_id'],
            "Profile_image" => $row['Profile_image'],
            "isBankCompleted" => $row['isBankCompleted'],
            "total_balance" => $row['total_balance'],
            "isIdentityCompleted" => $row['isIdentityCompleted'],
            "rating" => $row['rating'],
            "location" => $row['location'],
            "city" => $row['city'],
            "refer_amount" => 51
            ];
    	$response['actionCode'] = 1;
    
    }
    else{
    
    	$response['statusCode'] = 1;
    	$response['msg'] = "User not found";
    	$response['reason'] = "Failed";
    	$response['data'] = (object) null;
    	$response['actionCode'] = 0;
    
    }
    
    echo json_encode($response);

?>