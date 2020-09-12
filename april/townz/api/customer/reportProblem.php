<?php 

	include '../connection.php';

	$entityBody = file_get_contents('php://input');
	$decoded = json_decode(file_get_contents('php://input'), true);

	$userId = $decoded['userId'];
	$problem = $decoded['problem'];
	$imageString1 = $decoded['imageString1'];
	$imageString2 = $decoded['imageString2'];
	
	$rand = rand(10000, 99999);
	$file_name1 = "";
	if(isset($imageString1)){
	    
    	$image_name1 = $rand.$userId.'1.jpg';
    	$output_file1 = '../../dashboard/assets/images/report_problem/'.$image_name1;
    	
    	$file_name1 = base64_to_jpeg($imageString1, $output_file1);
        $file_name1 = $image_name1;
	}
	$file_name2 = "";
	if(isset($imageString2)){
	    
    	$image_name2 = $rand.$userId.'2.jpg';
    	$output_file2 = '../../dashboard/assets/images/report_problem/'.$image_name2;
    	
        $file_name2 = base64_to_jpeg($imageString2, $output_file2);
        $file_name2 = $image_name2;
	}
	
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

	$insertQuery = "INSERT INTO report_problem (problem, image1, image2, customer_id) VALUES ('".$problem."','".$file_name1."', '".$file_name2."', '".$userId."')";

	if(mysqli_query($conn, $insertQuery)){
		$response['statusCode'] = 1;
		$response['msg'] = "Problem Uploaded";
		$response['reason'] = "Success";
		$response['actionCode'] = 1;
	}

	echo json_encode($response);

?>