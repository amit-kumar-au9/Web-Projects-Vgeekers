<?php

	require 'connection.php';

    $userId=$_POST['userId'];
    $class=$_POST['class'];
    $batch=$_POST['batch'];
    $amount=$_POST['amount'];
    $time=$_POST['time'];

if ($userId!="" && $amount!="" && $time!="" && $class!="" && $batch!="") {

        $checkQuery = "INSERT INTO onlinefees (id, batch, class, time, amount) VALUES ('".$userId."', '".$batch."','".$class."', '".$time."', '".$amount."')";

        if (mysqli_query($conn, $checkQuery)) {

            $response['errorCode'] = '0000';
			$response['errorMessage'] = 'Fees Succefull';

        }
        
        else{

            $response['errorCode'] = '0001';
			$response['errorMessage'] = 'Please Retry';

        }
}

else{

	$response['errorCode'] = '0000';
	$response['errorMessage'] = 'Fill All Details';
	$response['userId'] = '';

} 
echo json_encode($response);
?>