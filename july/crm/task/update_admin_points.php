<?php 
    include '../include/connection.php';
    include '../include/session.php';
    
    $admin_id = $_POST['admin_id'];
    $points = $_POST['points'];
    $reason = $_POST['reason'];
    $type = $_POST['type'];
    
    $selectQuery = "SELECT * FROM user_details WHERE id='".$admin_id."'";
    $result = mysqli_query($conn, $selectQuery);
    $row = $result -> fetch_assoc();
    $curr_points = $row['points'];
    
    if($type == 'Added'){
        $total_points = intval($curr_points) + intval($points);    
    }
    elseif($type == 'Remove'){
        $total_points = intval($curr_points) - intval($points); 
    }
    
    $checkQuery = "UPDATE user_details SET points = '".$total_points."' WHERE id='".$admin_id."'";
    mysqli_query($conn, $checkQuery);
    
    $insertQuery = "INSERT INTO points_txn (points_added, points_updated, reason, admin_id, type) VALUES('".$points."', '".$total_points."', '".$reason."', '".$admin_id."', '".$type."')";
    mysqli_query($conn, $insertQuery);
    
    $response['error'] = false;
    echo json_encode($response);
?>