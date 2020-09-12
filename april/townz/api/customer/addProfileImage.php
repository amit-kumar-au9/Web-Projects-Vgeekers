<?php 

	include '../connection.php';

	$entityBody = file_get_contents('php://input');
	$decoded = json_decode(file_get_contents('php://input'), true);

	$userId = $decoded['userId'];
	$imageString = $decoded['imageString1'];
	
	$rand = rand(10000, 99999);
	$image_name = $rand.$userId.'.jpg';
	$output_file = '../../dashboard/assets/images/customer_profile/'.$image_name;
	
    $file_name = base64_to_jpeg($imageString, $output_file);
    $file_name = 'https://vgeekersinfotech.com/townz/dashboard/assets/images/customer_profile/'.$image_name;
	
	$response['statusCode'] = 1;
	$response['msg'] = "Retry";
	$response['reason'] = "Failed";	
	$response['actionCode'] = 0;
	
    function base64_to_jpeg($base64_string, $output_files) {
        // open the output file for writing
        $ifp = fopen( $output_files, 'wb' ); 

        // we could add validation here with ensuring count( $data ) > 1
        fwrite( $ifp, base64_decode( $base64_string ) );
    
        // clean up the file resource
        fclose( $ifp );
    
        return $output_files;
    }
    $insertQuery = "UPDATE customer_details SET profile_image = '".$file_name."' WHERE id = '".$userId."'";

	if(mysqli_query($conn, $insertQuery)){
		$response['statusCode'] = 1;
		$response['msg'] = 'Profile Uploaded';
		$response['reason'] = $file_name;
		$response['actionCode'] = 1;
	}

	echo json_encode($response);

?>