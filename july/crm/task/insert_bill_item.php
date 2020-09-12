<?php 
    include '../include/connection.php';
    include '../include/session.php';
    
    $response['error'] = true;
    $response['message'] = "Enter Correct Value";

    $name = $_POST['name'];
    $bill_id = $_POST['id'];
    $hsn = $_POST['hsn'];
    $qty = $_POST['qty'];
    $rate = $_POST['rate'];
    $unit = $_POST['unit'];
    $igst_rate = $_POST['igst_rate'];

    $total = intval($rate) * intval($qty);
    $taxable_value = $total;
    $igst_amount = $taxable_value * ($igst_rate/100);
    $date = date('Y-m-d');

    $checkQuery = "INSERT INTO create_bill_item (name, hsn, qty, unit,rate, total, taxable_value, igst_rate, igst_amount, create_bill_id, date) VALUES ('".$name."', '".$hsn."', '".$qty."', '".$unit."', '".$rate."', '".$total."', '".$taxable_value."', '".$igst_rate."', '".$igst_amount."', '".$bill_id."', '".$date."') ";

    if(mysqli_query($conn, $checkQuery)){

        $select = "SELECT * FROM create_bill WHERE id = '".$bill_id."'";
        $result = mysqli_query($conn, $select);
        $row = $result -> fetch_assoc();
        $total_amount = $row['total_amount'];
        $total_amount = $total_amount + $total + $igst_amount;

        $update = "UPDATE create_bill SET total_amount = '".$total_amount."' WHERE id = '".$bill_id."'";
        mysqli_query($conn, $update);
        $response['error'] = false;
        $response['message'] = "New Item Added";

    }
    $response['id'] = $bill_id;

    echo json_encode($response);

?>