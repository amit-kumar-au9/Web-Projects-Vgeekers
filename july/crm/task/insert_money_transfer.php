<?php 
    include '../include/connection.php';
    include '../include/session.php';

    $response['error'] = true;

    $to_admin_id = $_POST['to_admin_id'];
    $amount = $_POST['amount'];
    $reason = $_POST['reason'];

    $response['message'] = "Sorry Try Again"; 
    if ($to_admin_id != '' && $amount != '') {

        $selectPoints = "SELECT points FROM user_details WHERE id = '".$login_id."'";
        $result = mysqli_query($conn, $selectPoints);
        $row = $result -> fetch_assoc();
        $points = $row['points'];

        $new_points = $points-$amount;

        $checkQuery = "UPDATE user_details SET points = '".$new_points."' WHERE id='".$login_id."'";
        mysqli_query($conn, $checkQuery);

        $checkQuery = "INSERT INTO money_transfer_txn (to_admin_id, amount, from_admin_id, reason) VALUES ('".$to_admin_id."', '".$amount."', '".$login_id."', '".$reason."') ";
        mysqli_query($conn, $checkQuery);

            $response['error'] = false;
            $response['message'] = "New Money Tranfered";
    }   
    echo json_encode($response);
?>