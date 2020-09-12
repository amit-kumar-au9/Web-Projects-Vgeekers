<?php

    include '../connection.php';
    
    $entityBody = file_get_contents('php://input');
    $decoded = json_decode(file_get_contents('php://input') , true);
    
    $phone = $decoded['phone'];
    
    $response['actionCode'] = 0;
    $response['reason'] = "Failed";
    $response['statusCode'] = 1;
    
    if ($phone != "")
    {
    
        $checkQuery = " SELECT * FROM customer_details WHERE phone = '" . $phone . "'";
        $checkResult = mysqli_query($conn, $checkQuery);
    
        if (mysqli_num_rows($checkResult) == 1)
        {
    
            $expiry_minutes = 5;
            $otp_length = 4;
            $auth_key = '327457AwxcsM8uTc9n5ea66044P1';
            $template_id = '5eb19be1d6fc05713329f0e8';
            $email = '';
            $user_ip = '';
            $country_code = '+91';
    
            $url = 'https://api.msg91.com/api/v5/otp?authkey=' . $auth_key . '&template_id=' . $template_id . '&mobile=' . $country_code . $phone . '&invisible=1&otp=&userip=' . $user_ip . '&email=' . $email . '&otp_length=' . $otp_length . '&otp_expiry=' . $expiry_minutes;
    
            $curl = curl_init();
    
            curl_setopt_array($curl, array(
                CURLOPT_URL => $url,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "GET",
                CURLOPT_SSL_VERIFYHOST => 0,
                CURLOPT_SSL_VERIFYPEER => 0,
                CURLOPT_HTTPHEADER => array(
                    "content-type: application/json"
                ) ,
            ));
    
            $otpresponse = curl_exec($curl);
            $err = curl_error($curl);
            $otpresponse_array = json_decode($otpresponse, true);
    
            curl_close($curl);
    
            if ($err)
            {
                $response['msg'] = "Otp Failed";
                $response['reason'] = $err;
                
            }
            else
            {
                if ($otpresponse_array['type'] == 'success')
                {
                    $response['msg'] = "Otp Send Succesfully";
                    $response['reason'] = 'Success';
                    $response['actionCode'] = 1;
    
                }
                else
                {
                    $response['msg'] = "Otp Not Send";
                }
            }
        }
        else
        {
            $response['msg'] = "Customer not found";
            
        }
    
    }
    echo json_encode($response);

?>
