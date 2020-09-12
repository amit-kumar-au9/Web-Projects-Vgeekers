<?php

	require 'connection.php';

    // $userId = $_POST['userId'];
    // $className = $_POST['className'];
    // $subjectName = $_POST['subjectNames'];

    $entityBody = file_get_contents('php://input');
    $decoded = json_decode(file_get_contents('php://input'), true);

    $userId = $decoded['userId'];
    $className = $decoded['className'];
    $subjectName = $decoded['subjectName'];
    $content = $decoded['content'];
    echo $content;

    if ( isset($userId) && isset($className) && isset($subjectName) && isset($content) ) {

        foreach ($content as $key => $value) {
            # code...
        }

        $checkQuery = "INSERT INTO time_table (teacher_id, class, subject_batch, day, time_at) VALUES ('".$userId."', '".$className."', '".$subjectName."','".$dayName."' ,'".$timeSelected."')";

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