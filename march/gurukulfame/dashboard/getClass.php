<?php

	include 'include/connection.php';	

	$class = $_POST['class'];
	$batch = $_POST['batch'];

    $error = true;
    $message = array();
    $response = array();

	$checkQuery = "SELECT * FROM userDetail WHERE class='".$class."' AND batch='".$batch."'";
	$checkResult = mysqli_query($conn, $checkQuery);
	
	if(mysqli_num_rows($checkResult) < 1){
	    
	   $error = true;
	   $message = 'No Data Found!';
	    
	}
	else{
        
        $error = false;
        	
    	while($checkRow = mysqli_fetch_array($checkResult)){
    		array_push($message, array('id' => $checkRow['id'], 'name' => $checkRow['name'], 'class' => $checkRow['class'], 'batch' => $checkRow['batch']));
    	}
    	
	}
	
	$response['error'] = $error;
	$response['message'] = $message;
	
	echo json_encode($response);
		
?>