<?php

    include '../connection.php';
    
    $entityBody = file_get_contents('php://input');
    $decoded = json_decode(file_get_contents('php://input') , true);
    
    $phone = $decoded['phone'];
    $otp = $decoded['otp'];
    
    $auth_key = '327457AwxcsM8uTc9n5ea66044P1';
    $country_code = '+91';
    $url = 'https://api.msg91.com/api/v5/otp/verify?mobile='.$country_code.$phone.'&otp='.$otp.'&authkey='.$auth_key;
    
    $curl = curl_init();
    
    curl_setopt_array($curl, array(
      CURLOPT_URL => $url,
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "POST",
      CURLOPT_POSTFIELDS => "",
      CURLOPT_SSL_VERIFYHOST => 0,
      CURLOPT_SSL_VERIFYPEER => 0,
    ));
    
    $otpresponse = curl_exec($curl);
    $err = curl_error($curl);
    
    $otpresponse_array = json_decode($otpresponse,true);
    
    curl_close($curl);
    
    if ($err) {
        $response['statusCode'] = 0;
        $response['msg'] = "Error Occurred";
        $response['reason'] = $err;
        $response['actionCode'] = 0;
        $data = (object) null;
        $response['data'] = $data;
    } 
    else {
        if ($otpresponse_array['type'] == 'success') {

            $checkQuery = "SELECT name, token, phone, sphone, email, profile_image, address_id, referrer_code, referrer_code_used, active, customer_details.id as id, address, city, location, pin_code, wallet_id, total_balance, credit, user_id FROM customer_details INNER JOIN customer_wallet ON customer_details.id = customer_wallet.user_id JOIN customer_address ON customer_details.address_id = customer_address.id WHERE customer_details.phone = '".$phone."'";
            $checkResult = mysqli_query($conn, $checkQuery);

            $row = $checkResult->fetch_assoc();
            
            $response['statusCode'] = 1;
            $response['msg'] = "Login Successfull";
            $response['reason'] = "Success";
            $response['actionCode'] = 1;
            $response['data'] = $row;
        }
        else{
            $response['statusCode'] = 1;
            $response['msg'] = "Invalid OTP";
            $response['reason'] = "Failed";
            $response['actionCode'] = 0;
            $data = (object) null;
            $response['data'] = $data;
        }
    }
    
    echo json_encode($response);

?>