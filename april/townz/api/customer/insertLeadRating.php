<?php 

    include '../connection.php';
    
    $entityBody = file_get_contents('php://input');
    $decoded = json_decode(file_get_contents('php://input'), true);
    
    $lead_id = $decoded['lead_id'];
    $rating = $decoded['rating'];
    $user_id = $decoded['user_id'];
    
    $response['statusCode'] = 1;
	$response['msg'] = "Rating Not Inserted";
	$response['reason'] = "Failed";
	$response['actionCode'] = 0;
	
    if($rating!=""){
        
        $checkQuery = "UPDATE lead SET rating = '".$rating."' WHERE id = '".$lead_id."' AND is_accept = 2";
        $checkResult = mysqli_query($conn, $checkQuery);
        
        $allRating = "SELECT * FROM lead WHERE user_id = '".$user_id."' AND rating !=0";
        $resultRating = mysqli_query($conn, $allRating);
        
        $totalNo = mysqli_num_rows($resultRating);
        $totalRating = 0;
        
        while($row = $resultRating -> fetch_assoc()){
            $totalRating = $totalRating + $row['rating'];
        }
        $rating = $totalRating/$totalNo;
        
        $checkQuery = "UPDATE vendor_details SET rating = '".$rating."' WHERE user_id = '".$user_id."'";
        $checkResult = mysqli_query($conn, $checkQuery);
        
    	$response['msg'] = "Rating Inserted";
    	$response['reason'] = "Success";
    	$response['actionCode'] = 1;
    	
    }
    echo json_encode($response);

?>