<?php 

    require '../include/connection.php';

    $id = $_POST['id'];
    $vendor_id = $_POST['vendorId'];
    $warehouse_id = $_POST['warehouseId'];

    $error = true;
    $message = '';
    $product_array = array();
    $response = array();
    $searchQuery = "SELECT * FROM product where id='".$id."'";
    $searchResult = mysqli_query($conn, $searchQuery);

    $vendor_state_query = "SELECT state FROM vendor WHERE id = $vendor_id";
    $vendor_result = mysqli_query($conn, $vendor_state_query);
    $vendor_row = mysqli_fetch_assoc($vendor_result);
    $vendor_state = $vendor_row['state'];

    $warehouse_state_query = "SELECT state FROM warehouse_detail WHERE id = $warehouse_id";
    $warehouse_result = mysqli_query($conn, $warehouse_state_query);
    $warehouse_row = mysqli_fetch_assoc($warehouse_result);
    $warehouse_state = $warehouse_row['state'];

    $igst = 0;

    if($warehouse_state == $vendor_state){
        $igst = 5;
    }

    if($searchResult){
        $error = false; 
        while($row = mysqli_fetch_array($searchResult)){
            array_push($product_array, array('id'=>$row['id'], 'product_name'=>$row['name'], 'qty'=>$row['qty'], 'selling_price'=>$row['selling_price'], 'hsn'=>$row['hsn'], 'igst'=>$igst));
        }
    }

    $response['error'] = $error ;
    $response['productDetails'] = $product_array ;

    echo json_encode($response);
?>