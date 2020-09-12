<?php 

    include '../connection.php';
    
    $entityBody = file_get_contents('php://input');
    $decoded = json_decode(file_get_contents('php://input'), true);
    
    $type = $decoded['type'];
    // 1 for faq and 2 for tnc and 3 for need help
    $check = "SELECT * FROM customer_basic_data WHERE id = '".$type."'";
    $result = mysqli_query($conn, $check);
    $row = $result -> fetch_assoc();
    
    $response['statusCode'] = 1;
    $response['msg'] = "Detail Send";
    $response['reason'] = "Success";
    $response['actionCode'] = 1;
    $response['data'] = $row['content'];
    
    echo json_encode($response);

?>