<?php

	require 'connection.php';

    $name=$_POST['name'];
    $userId=$_POST['userId'];
    $email=$_POST['email'];
    $suggestion=$_POST['suggestions'];

    if ($name!="" && $email!="" && $suggestion!="" && $userId!="") {

        $checkQuery = "INSERT INTO query (email, name, query,studentid) VALUES ('".$email."', '".$name."', '".$suggestion."','".$userId."')";

        if (mysqli_query($conn, $checkQuery)) {

            $response['errorCode'] = '0000';
            $response['errorMessage'] = 'Contact Us saved';

        }
        else{

            $response['errorCode'] = '0001';
            $response['errorMessage'] = 'Contact Us not saved';

        }
    }
    else{

        $response['errorCode'] = '0001';
        $response['errorMessage'] = 'Fill all the field';

    }

echo json_encode($response);
?>