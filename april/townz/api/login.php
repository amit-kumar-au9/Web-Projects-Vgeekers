<?php 

include 'connection.php';

$entityBody = file_get_contents('php://input');
$decoded = json_decode(file_get_contents('php://input'), true);

$phone = $decoded['phone'];

if($phone != ""){

	$checkQuery = " SELECT * FROM vendor_details WHERE phone = '".$phone."'";

    $checkResult = mysqli_query($conn, $checkQuery);

	if(mysqli_num_rows($checkResult) == 1){

	    $expiry_minutes = 5;
	    $otp_length = 4;
	    $auth_key = '327457AwxcsM8uTc9n5ea66044P1';
	    $template_id = '5eb19be1d6fc05713329f0e8';
	    $email = '';
	    $user_ip = '';
	    $country_code = '+91';
	    
	    $url = 'https://api.msg91.com/api/v5/otp?authkey='.$auth_key.'&template_id='.$template_id.'&mobile='.$country_code.$phone.'&invisible=1&otp=&userip='.$user_ip.'&email='.$email.'&otp_length='.$otp_length.'&otp_expiry='.$expiry_minutes;
        	    
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
          ),
        ));
        
        $otpresponse = curl_exec($curl);
        $err = curl_error($curl);
        $otpresponse_array = json_decode($otpresponse,true);
         
        
        curl_close($curl);
        
        if ($err) {
          	$response['statusCode'] = 1;
			$response['msg'] = "Otp Failed";
			$response['reason'] = $err;
			$response['actionCode'] = 0;
        }else{
            if($otpresponse_array['type']=='success'){
            
                $response['statusCode'] = 1;
                $response['msg'] = "Otp Send Succesfully";
                $response['reason'] = 'success';
                $response['actionCode'] = 1;
            
            }
            else{
                $response['statusCode'] = 1;
                $response['msg'] = "Otp Not Send";
                $response['reason'] = 'failed';
                $response['actionCode'] = 0;
            }
        }
	}
	else{
		$response['statusCode'] = 0;
		$response['msg'] = "User not found";
		$response['reason'] = "Failed";
		$response['actionCode'] = 0;
	}

}
	echo json_encode($response);

?>