<?php 
    include '../include/connection.php';
    include '../include/session.php';

    $response['error'] = true;

    $total_count = $_POST['total_count'];
    $today_count = $_POST['today_count'];
    $sub_admin_id = $_POST['sub_admin_id'];
    $date = date("Y-m-d");

    $response['message'] = "Sorry Try Again";   

    $checkQuery = "INSERT INTO attendance (total_count, today_count, site_id, sub_admin_id, date) VALUES ('".$total_count."', '".$today_count."', '".$site_id."', '".$sub_admin_id."', '".$date."') ";  
    if(mysqli_query($conn, $checkQuery)){
        $response['error'] = false;
        $response['message'] = "New Attendance Created";
    }

    echo json_encode($response);
?>