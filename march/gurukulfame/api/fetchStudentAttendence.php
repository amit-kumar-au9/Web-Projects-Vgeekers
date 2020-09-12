<?php
	require 'connection.php';

	$userId = $_POST['userId'];

	//$checkQuery = "SELECT * FROM attendance WHERE studentid='".$userId."'";
    //$checkResult = mysqli_query($conn, $checkQuery);
    //$no_rows=mysqli_num_rows($checkResult);

//   	if ($no_rows>0) {
	    $response['errorCode'] = '0000';
		$response['errorMessage'] = 'Attendance Sent';
//	    for($sno=1;$sno<=$no_rows;$sno++){
	
//	        $row = $checkResult->fetch_assoc();
		    $response['content'][] = ["Date" => "23/03/2020", "isPresent" => 1];
		    $response['content'][] = ["Date" => "24/03/2020", "isPresent" => 0];
		    $response['content'][] = ["Date" => "25/03/2020", "isPresent" => 0];
		    $response['content'][] = ["Date" => "26/03/2020", "isPresent" => 1];
		    $response['content'][] = ["Date" => "27/03/2020", "isPresent" => 2];
		    $response['content'][] = ["Date" => "28/03/2020", "isPresent" => 2];
		    $response['content'][] = ["Date" => "29/03/2020", "isPresent" => 2];
//	    }
  //  }

//    else{

    	//$response['errorCode'] = '0001';
	   // $response['errorMessage'] = 'UserId not present';
	  //  $response['content'][] = "";
    
    //}

	echo json_encode($response);
?>