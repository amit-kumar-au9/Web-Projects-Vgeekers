<?php

require 'connection.php';
$userId = $_POST['userId'];

if ($userId!=""){

    $checkQuery = "SELECT * FROM userDetail WHERE id='".$userId."'";
    $checkResult = mysqli_query($conn, $checkQuery);

    if(mysqli_num_rows($checkResult) == 1){

        $row = $checkResult->fetch_assoc();
        $response['errorCode'] = '0000';
        $response['errorMessage'] = 'Detail Sent';
        $response['name'] = $row['name'];
        $response['email'] = $row['email'];


    }
    else{

        $response['errorCode'] = '0001';
        $response['errorMessage'] = 'UserId Not available';
        $response['name'] = "";   
        $response['email'] = "";   

    }

}

else{

        $response['errorCode'] = '0000';
        $response['errorMessage'] = 'UserId required';
        $response['name'] = "";   
        $response['email'] = "";   
    }

echo json_encode($response);
?>