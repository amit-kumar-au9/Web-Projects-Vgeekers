<?php 

	include 'connection.php';

	$entityBody = file_get_contents('php://input');
	$decoded = json_decode(file_get_contents('php://input'), true);

	$userId = $decoded['userId'];
	$imageType_id = $decoded['imageType'];
	$imageString = $decoded['imageString'];

	$image_type_array = ['profile', 'id_proof', 'address_proof','','', 'Profile_image']; 
	$imageType = $image_type_array[$imageType_id-1];
    
	$checkQuery = "SELECT * FROM identity WHERE user_id = '".$userId."'";
	$checkResult = mysqli_query($conn, $checkQuery);
	$rand = rand(10000, 99999);
	$image_name = $rand.$userId.'.jpg';
	$output_file = '../dashboard/assets/images/vendor_identity/'.$image_name;
	
    $file_name = base64_to_jpeg($imageString, $output_file);
    $file_name = 'https://townz.co.in/dashboard/assets/images/vendor_identity/'.$image_name;
    
	if($imageType == 'Profile_image'){
		$insertQuery = "UPDATE vendor_details SET ".$imageType." = '".$file_name."' WHERE user_id = '".$userId."' ";
	}
	else{
		if(mysqli_num_rows($checkResult) < 1){
			$insertQuery = "INSERT INTO identity (".$imageType.", user_id) VALUES ('".$file_name."', '".$userId."')";
		}
		else{
			$insertQuery = "UPDATE identity SET ".$imageType." = '".$file_name."' WHERE user_id = '".$userId."' ";
		}
	}

	if(mysqli_query($conn, $insertQuery)){
		$response['statusCode'] = 1;
		$response['msg'] = "Image Uploaded";
		$response['reason'] = "Success";
		$response['actionCode'] = 1;
		
		$checkQuery = "SELECT * FROM identity WHERE user_id = '".$userId."'";
        $checkResult = mysqli_query($conn, $checkQuery);
        
        $row = $checkResult->fetch_assoc();
    	
    	if($row['profile']!="" && $row['id_proof']!="" && $row['address_proof']!=""){
    	    $updateQuery = "UPDATE vendor_details SET isIdentityCompleted = '1' WHERE user_id = '".$userId."' ";
    	    mysqli_query($conn, $updateQuery);
    	    
    	    $body = "Your Document Details is Completed";
    	    $title = "Document Details";
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
    	    $updateQuery = "UPDATE vendor_details SET isIdentityCompleted = '0' WHERE user_id = '".$userId."' ";
    	    mysqli_query($conn, $updateQuery);
    	}
	}
	else{
		$response['statusCode'] = 1;
		$response['msg'] = "Retry";
		$response['reason'] = "Failed";	
		$response['actionCode'] = 0;
	}
	

	echo json_encode($response);
	
	function base64_to_jpeg($base64_string, $output_files) {
        // open the output file for writing
        $ifp = fopen( $output_files, 'wb' ); 

        // we could add validation here with ensuring count( $data ) > 1
        fwrite( $ifp, base64_decode( $base64_string ) );
    
        // clean up the file resource
        fclose( $ifp );
    
        return $output_files;
    }

?>