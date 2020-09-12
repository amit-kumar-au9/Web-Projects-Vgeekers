<?php 
    
    include '../include/connection.php';
    include '../include/session.php';
    
    $sub_admin_id = $_POST['sub_admin_id'];
    
    $checkShow = "SELECT * FROM user_details WHERE id = '".$sub_admin_id."'";
    $resultShow = mysqli_query($conn, $checkShow);
    $row = $resultShow -> fetch_assoc();
    $is_block = $row['is_block'];

    $updateShow = "UPDATE user_details SET is_block = '1' WHERE id = '".$sub_admin_id."'";    
    
    if($is_block == '1'){
        $updateShow = "UPDATE user_details SET is_block = '0' WHERE id = '".$sub_admin_id."'";
    }
    
    mysqli_query($conn, $updateShow);

    $response['error'] = false;
    echo json_encode($response);

?>