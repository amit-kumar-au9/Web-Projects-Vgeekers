<?php 
    include '../include/connection.php';
    include '../include/session.php';

    $response['error'] = true;

    $project_name = addslashes($_POST['project_name']);
    $cost = $_POST['cost'];
    $location = addslashes($_POST['location']);
    $assign = addslashes($_POST['assign']);
    $site_plan = addslashes($_POST['site_plan']);

    $response['message'] = "Project Name already exist!!! Try Again";     

    $checkSite = "SELECT * FROM site WHERE project_name = '".$project_name."'";
    
    if(mysqli_num_rows(mysqli_query($conn, $checkSite))==0){

        $response['message'] = "Sorry Try Again";   

        $checkQuery = "INSERT INTO site (project_name, cost, location, assign, site_plan, created_by) VALUES ('".$project_name."', '".$cost."', '".$location."', '".$assign."', '".$site_plan."', '".$login_id."') ";  
        if(mysqli_query($conn, $checkQuery)){
            $response['error'] = false;
            $response['message'] = "New Site Created";
        }
    }
    echo json_encode($response);
?>