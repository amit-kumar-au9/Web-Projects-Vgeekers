<?php 

    include 'include/connection.php';
    $name = $_POST['name'];

    $response['error'] = true;

    $checkQuery = "INSERT INTO city (name) VALUES ('".$name."')";

    if (mysqli_query($conn, $checkQuery)) {
        $response['error'] = false;
    }

    echo json_encode($response);

?>