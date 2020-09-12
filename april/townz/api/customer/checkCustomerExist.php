<?php

    include '../connection.php';
    
    $entityBody = file_get_contents('php://input');
    $decoded = json_decode(file_get_contents('php://input') , true);
    
    $phone = $decoded['phone'];
    
    $response['statusCode'] = 1;
    $response['msg'] = "Customer not found";
    $response['reason'] = "Failed";
    $response['actionCode'] = 0;
    
    if ($phone != ""){
        $checkQuery = " SELECT * FROM customer_details WHERE phone = '" . $phone . "'";
        $checkResult = mysqli_query($conn, $checkQuery);
        if (mysqli_num_rows($checkResult) == 1){
            $response['statusCode'] = 1;
            $response['msg'] = "Customer found";
            $response['reason'] = "Success";
            $response['actionCode'] = 1;   
        }else{
            $check = "SELECT * FROM customer_basic_data WHERE id = 2";
            $result = mysqli_query($conn, $check);
            $row = $result -> fetch_assoc();
            $response['reason'] = $row['content'];
        }
    }
    echo json_encode($response);

?>
