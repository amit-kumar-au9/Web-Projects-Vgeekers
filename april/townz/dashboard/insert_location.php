<?php 

    include 'include/connection.php';

    $category_id = $_POST['city_id'];
    $sub_category = $_POST['location'];

    $response['error'] = true;

    $insertSub = "INSERT INTO city_location (location, city_id) VALUES('".$sub_category."', '".$category_id."')";

    if (mysqli_query($conn, $insertSub)) {
        $response['error'] = false;
    }

    echo json_encode($response);

?>