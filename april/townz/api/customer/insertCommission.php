<?php 

    include '../connection.php';
    
    $entityBody = file_get_contents('php://input');
    $decoded = json_decode(file_get_contents('php://input'), true);

    $customer_name = $decoded['userName'];
    $customer_id = $decoded['userId'];
    $walletId = $decoded['walletId'];
    $orderJson = $decoded['orderJson'];
    $orderProduct = $decoded['orderProduct'];
    $orderProduct = JSON_encode($orderProduct);
    $phone = $decoded['phone'];
    $address = $decoded['address'];
    $timeSlot = $decoded['timeSlot'];
    $addressId = $decoded['addressId'];
    $orderAmount = $decoded['orderAmount'];
    $netPayAmount = $decoded['netPayAmount'];
    $couponCode = $decoded['couponCode'];
    $couponId = $decoded['couponId'];
    $category = $decoded['categoryName'];
    $visiting_date = $decoded['visiting_date'];
    $visiting_time = $decoded['startTime'];
    $pin_code = $decoded['pin_code'];

    $response['statusCode'] = 1;
    $response['msg'] = "Commission creation Failed";
    $response['reason'] = "Failed";
    $response['actionCode'] = 0;
    $response['orderId'] = '';
    $response['keyId'] = '';
    $response['orderId'] = '';
    $response['txn_id'] = '';

    $date = date("Y/m/d");
    $time = date("h:i:A");

    $checkAddress = "SELECT * FROM customer_address WHERE id = '".$addressId."'";
    $result = mysqli_query($conn, $checkAddress);
    $row = $result -> fetch_assoc();
    $price = $netPayAmount /10;
    
    $insertQuery = "INSERT INTO transaction_table_customer (payment_status) VALUES ('Initiated')";
    mysqli_query($conn, $insertQuery);
    $last_id = mysqli_insert_id($conn);
    
    $orderId = "B".$customer_id.$walletId.$last_id;
    $date = date('Y/m/d');
    
    $insertOrder = "INSERT INTO order_txn_customer(txn_id, wallet_id, amount, name, currency, status, contact_no, email_id, order_id, description, date, type, time) VALUES ('".$last_id."', '".$walletId."', '".$netPayAmount."', '".$customer_name."', 'INR', 'processing', '".$phone."', '', '".$orderId."', 'processing', '".$date."', 'Booking', '".$time."')";
    mysqli_query($conn, $insertOrder);
    
    $dsc = "";
    $someArray = json_decode($orderProduct, true);
    $dsc = $dsc."<span style='line-height: 1'><b>Booking Details:-</b></span><br>";
    $dsc= $dsc."<span style='line-height: 1'><b>City</b>: ".$row['city']."</span><br>";
    $dsc= $dsc."<span style='line-height: 1'><b>Location</b>: ".$row['location']."</span><br>";
    $dsc = $dsc."<span style='line-height: 1'><b>Time Slot</b>: ".$timeSlot."</span><br>";
    $dsc = $dsc."<span style='line-height: 1'><b>Visiting Date</b>: ".$visiting_date."</span><br>";
    $dsc = $dsc."<h3 style='line-height:1'>Booked Services :</h3><ul>";
    foreach($someArray as $value){  
        $dsc = $dsc ."<li><span style='line-height:0.1'><b>".$value['name']."</b> (Qty. : ".$value['counterValue'].", Price : ".$value['price'].")</span></li>";
    }
    $dsc = $dsc."</ul></div>";
    
    $customer_dsc = "";
    $someArray = json_decode($orderProduct, true);
    $customer_dsc = "<span style='line-height:1'><b>Customer Name</b> : ".$customer_name."</span><br>";
    $customer_dsc = $customer_dsc."<span style='line-height:1'><b>Order ID </b>: ".$orderId."</span><br>";
    $customer_dsc = $customer_dsc."<span style='line-height:1'><b>Address </b>: ".$address.", ".$row['location'].", ".$row['city'].", ".$row['pin_code']."</span><br>";
    $customer_dsc = $customer_dsc."<div style='margin-top:30px;margin-bottom: 30px'>";
    $customer_dsc = $customer_dsc."<h3 style='line-height:1'>Booked Services :</h3><ul>";
    foreach($someArray as $value){  
        $customer_dsc = $customer_dsc ."<li><span style='line-height:0.1'><b>".$value['name']."</b> (Qty. : ".$value['counterValue'].", Price : ".$value['price'].")</span></li>";
    }
    $customer_dsc = $customer_dsc."</ul></div>";
    $customer_dsc = $customer_dsc."<span style='line-height: 1'><b>Time Slot</b>: ".$timeSlot."</span><br>";
    $customer_dsc = $customer_dsc."<span style='line-height: 1'><b>Visiting Date</b>: ".$visiting_date."</span><br>";
    $discount = $orderAmount - $netPayAmount;

    $customer_dsc = $customer_dsc ."<span style='line-height: 1'><b>Total Price</b>: Rs.".$orderAmount."</span><br>";
    if($couponCode != ""){
        $customer_dsc = $customer_dsc ."<span style='line-height: 1'><b>Coupon Applied</b>: ".$couponCode."</span><br>";
        $customer_dsc = $customer_dsc ."<span style='line-height: 1'><b>Discount Applied</b>: Rs.".$discount."</span><br>";
    }
    else{
        $customer_dsc = $customer_dsc ."<span style='line-height: 1'><b>Coupon Applied</b>: <i>Not Applied</i> </span><br>";
        $customer_dsc = $customer_dsc ."<span style='line-height: 1'><b>Discount Applied</b>: Rs 0</span><br>";
    }
    $customer_dsc = $customer_dsc ."<span style='line-height: 1'><b>Paid Amount</b>: Rs.".$netPayAmount."</span><br>";
    $customer_dsc = addslashes($customer_dsc);

    $insertCommission = "INSERT INTO lead (is_lead, category, city, location, customer_id, customerName, name, date, time, price, status, dsc, phone, address, is_accept, orderJson, orderProduct, timeSlot, addressId, orderAmount, couponCode, couponId, payment_status, netPayAmount, txn_id, order_id, customer_dsc, visiting_date, visiting_time) VALUES ('1', '".$category."', '".$row['city']."', '".$row['location']."', '".$customer_id."', '".$customer_name."', '".$category."', '".$date."', '".$time."', '".$price."', 'Not Started', '".$dsc."', '".$phone."', '".$address."', '0', '".$orderJson."', '".$orderProduct."', '".$timeSlot."', '".$addressId."', '".$orderAmount."', '".$couponCode."', '".$couponId."', 'Pending', '".$netPayAmount."', '".$last_id."', '".$orderId."', '".$customer_dsc."', '".$visiting_date."', '".$visiting_time."')";

    if( mysqli_query($conn, $insertCommission) ) {
            
        $response['statusCode'] = 1;
        $response['msg'] = "Complete Payment for Booking";
        $response['reason'] = "Success";
        $response['actionCode'] = 1;
        
        $response['keyId'] = $key_id;
        $response['orderId'] = $orderId;
        $response['txn_id'] = $last_id;

    }
    
    echo json_encode($response);

?>