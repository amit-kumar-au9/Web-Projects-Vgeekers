<?php 
    include 'include/connection.php';
    
    $user_id = $_POST['user_id'];
    $check = "DELETE FROM vendor_details WHERE user_id = '".$user_id."'";
    $result = mysqli_query($conn, $check);
    
    $response['message'] = "User_id ".$user_id." Deleted";
    
    echo json_encode($response);

?>