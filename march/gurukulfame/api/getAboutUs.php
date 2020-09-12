<?php

    require 'connection.php';

    $checkQuery = "SELECT * FROM common_data WHERE id=1" ;
    $checkResult = mysqli_query($conn, $checkQuery);
    $row = $checkResult->fetch_assoc();
    $response['errorCode'] = '0000';
    $response['errorMessage'] = 'Data Sent';
    $response['content'] = [
        "heading" => $row['heading'], 
        "subHeading" => $row['content']
    ];

    echo json_encode($response);
?>