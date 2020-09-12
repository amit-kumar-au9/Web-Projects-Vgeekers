<?php 

    include '../connection.php';
    
    $entityBody = file_get_contents('php://input');
    $decoded = json_decode(file_get_contents('php://input'), true);
    //add lead page
    $customer_name = $decoded['userName'];   //DS
    $customer_id = $decoded['userId'];
    $phone = $decoded['phone'];
    $address = $decoded['address'];
    $category = $decoded['categoryName'];
    // $name = $decoded['subCategoryName'];
    $alternateNumber = $decoded['alternateNumber'];
    $address_id = $decoded['addressId'];   // full address not show in desc
    $visitingDate = $decoded['date']; // visiting date if empty or null N/A
    $visitingTime = $decoded['time'];  // visiting time dont add
    $price = $decoded['price']; 
    $lowerPrice = $decoded['lowerPrice'];  // Lower Price  show
    $upperPrice = $decoded['upperPrice'];  // upper Price show
    $catId = $decoded['catId'];
    $subCatId = $decoded['subCatId'];
    $slot = $decoded['slot'];
    $dsc = $decoded['userReq'];
    $visiting_date = $decoded['visiting_date'];

// Add notification for vendor with cat city loc
    $response['statusCode'] = 1;
    $response['msg'] = "We can't process your request";
    $response['reason'] = "Failed";
    $response['actionCode'] = 0;

    $price = ((($lowerPrice + $upperPrice ) / 2) * 0.01 );
    
    if($price >100){
        $price = 100;
    }

    $date = date("Y/m/d");
    $time = date("h:i:A");

    $checkAddress = "SELECT * FROM customer_address WHERE id = '".$address_id."'";
    $result = mysqli_query($conn, $checkAddress);
    $row = $result -> fetch_assoc();
    $city = $row['city'];
    $location = $row['location'];
    
    $dsc = "";
    $dsc = $dsc."<span style='line-height: 1'><b>Lead Details:-</b></span><br>";
    $dsc= $dsc."<span style='line-height: 1'><b>City</b>: ".$city."</span><br>";
    $dsc= $dsc."<span style='line-height: 1'><b>Location</b>: ".$location."</span><br>";
    $dsc = $dsc."<span style='line-height: 1'><b>Visiting Date</b>: ".$visiting_date."</span><br>";
    $dsc = $dsc."<span style='line-height: 1'><b>Customer Requirement</b>: ".$dsc."<br>";
    $dsc = $dsc."<span style='line-height: 1'><b>Min. Amount</b>: ".$lowerPrice."<br>";
    $dsc = $dsc."<span style='line-height: 1'><b>Max. Amount</b>: ".$upperPrice."<br>";
    
    $checkQuery = "INSERT INTO lead (is_lead, category, city, location, customer_id, customerName, name, date, time, price, upperPrice, status, dsc, lowerPrice, phone, address, is_accept, addressId, visiting_date) VALUES ('0', '".$category."', '".$city."', '".$location."', '".$customer_id."', '".$customer_name."', '".$category."', '".$date."', '".$time."', '".$price."', '".$upperPrice."', 'Pending', '".$dsc."', '".$lowerPrice."', '".$phone."', '".$address."', '0', '".$address_id."', '".$visiting_date."')";

    if( mysqli_query($conn, $checkQuery) ) {
      
        $sendLead = "SELECT * FROM vendor_details WHERE active = '1' AND is_approved = '1' AND city = '".$city."'";
        $resultLead = mysqli_query($conn, $sendLead);
        while($row = $resultLead -> fetch_assoc()){
            $someArray = json_decode($row['category'], true);
            $cat = array();
            foreach($someArray as $value){
                $cat[] = $value['name'];   
            }
            if(in_array($category, $cat)){
                $user[] = $row['user_id'];
                $token[] = $row['token'];
            }
        }
        $title = 'Townz';
        $body = 'New Lead Added for you';
        
        include '../notification.php';
        send_notification($body, $title, $token);
        include '../insert_notification.php';
        set_notification($body, $title, $user);

        $response['statusCode'] = 1;
        $response['msg'] = "Your Query has been sent to us";
        $response['reason'] = "Success";
        $response['actionCode'] = 1;
    
    }
    
    echo json_encode($response);

?>