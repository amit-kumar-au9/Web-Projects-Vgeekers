<?php 
    include 'include/connection.php';
    
    $user_id = $_POST['user_id'];
    $check = "DELETE FROM customer_details WHERE id = '".$user_id."'";
    $result = mysqli_query($conn, $check);
    
    $response['message'] = "Customer id ".$user_id." Deleted";
    
    echo json_encode($response);

?>