<?php

	require 'connection.php';
	$response['errorCode'] = '0001';
	$response['errorMessage'] = 'Fill all the field';

	$mobile = $_POST['mobile'];

	if ($mobile != "") {
		$checkQuery = "SELECT * FROM userDetail WHERE phone='".$mobile."'";
	    if (mysqli_num_rows(mysqli_query($conn, $checkQuery))==1) {
	    	$error = $initate_otp($mobile);

	        if (!$error)) {
	            $response['errorCode'] = '0000';
				$response['errorMessage'] = $otp;

	        }else{
				$response['errorMessage'] = 'un-expected activity';
	        	}
	    }else{
			$response['errorMessage'] = 'Code doesnot match';
	        }
	}

	public function initate_otp($mobile){
		$expiry_minutes = 1;
	    $otp_length = 4;
	    $auth_key = '327457AwxcsM8uTc9n5ea66044P1';
	    $template_id = '5eb19be1d6fc05713329f0e8';
	    $email = '';
	    $user_ip = '';
	    $country_code = '+91';
	    $otp = mt_rand(1000, 9999);

	    $url = 'https://api.msg91.com/api/v5/otp?authkey='.$auth_key.'&template_id='.$template_id.'&mobile='.$country_code.$mobile.'&invisible=1&otp='.$otp.'&userip='.$user_ip.'&email='.$email.'&otp_length='.$otp_length.'&otp_expiry='.$expiry_minutes;
	    	    
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
	    	$error = true;
	      	
	    }else{
	        if($otpresponse_array['type']=='success'){
	        
	            $error = false;
	        
	        }else{
	            $error = true;
	        }
	    }
	    return $error;
	}
	echo json_encode($response);
?>
