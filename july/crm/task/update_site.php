<?php 
    include '../include/connection.php';
    include '../include/session.php';
    
    $id = $_POST['id'];
    $project_name = addslashes($_POST['project_name']);
    $cost = $_POST['cost'];
    $location = addslashes($_POST['location']);
    $assign = addslashes($_POST['assign']);
    $site_plan = addslashes($_POST['site_plan']);

    $checkQuery = "UPDATE site SET project_name = '".$project_name."', cost = '".$cost."', location = '".$location."', assign = '".$assign."', site_plan = '".$site_plan."' WHERE id = '".$id."' ";
    mysqli_query($conn, $checkQuery);

    $response['error'] = false;
    echo json_encode($response);

?>