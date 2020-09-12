<?php

include 'connection.php';

$entityBody = file_get_contents('php://input');
$decoded = json_decode(file_get_contents('php://input'), true);

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
} else {
    if ($otpresponse_array['type'] == 'success') {
            $checkQuery = "SELECT * FROM vendor_details INNER JOIN wallet ON vendor_details.user_id=wallet.user_id WHERE phone = '".$phone."'";
            $checkResult = mysqli_query($conn, $checkQuery);

            $row = $checkResult->fetch_assoc();
    
            $category = $row['category'];
            $category1 = json_decode($category);
            
            $response['statusCode'] = 1;
            $response['msg'] = "OTP Matched";
            $response['reason'] = "Success";
            $response['actionCode'] = 1;
            $response['data'] = [
                "userId" => $row['user_id'], 
                "name" => $row['name'], 
                "phone" => $row['phone'], 
                "email" => $row['email'], 
                "country" => $row['country'], 
                "city" =>$row['city'], 
                "referrer_code" =>$row['referrer_code'], 
                "referring_code" => $row['referring_code'],
                "whatsapp" => $row['whatsapp'],
                "active" => $row['active'], 
                "is_approved" => $row['is_approved'],
                "send_approval" => $row['send_approval'], 
                "online" => $row['online'], 
                "category" => $category1,
                "walletId" => $row['wallet_id'],
                "Profile_image" => $row['Profile_image'],
                "isBankCompleted" => $row['isBankCompleted'],
                "isIdentityCompleted" => $row['isIdentityCompleted'],
                "total_balance" => $row['total_balance'],
                "rating" => $row['rating'],
                "location" => $row['location'],
                "city" => $row['city'],
                "refer_amount" => 51
                ];

      }else{
    
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