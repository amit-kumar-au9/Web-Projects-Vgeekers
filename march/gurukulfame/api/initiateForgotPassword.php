<?php 
require 'connection.php';
$email = $_POST['email'];

$checkQuery = "SELECT * FROM userDetail WHERE email='".$email."'";
$checkResult = mysqli_query($conn, $checkQuery);
if(mysqli_num_rows($checkResult)>0){
    
    $code = mt_rand(100000, 999999);
    $checkQuery= "UPDATE userDetail SET code='".$code."' WHERE email='".$email."'";
    $checkResult = mysqli_query($conn, $checkQuery);
    
    $to = $email;
    $subject = 'Code for Forgot Password';
    $message = 'This is the code for Forgot Password '.$code;
    $headers = array(
        'From' => 'gurukulfame.com',
        'Reply-To' => 'gurukulfame.com',
        'X-Mailer' => 'PHP/' . phpversion()
        );
    
    mail($to, $subject, $message, $headers);
    $response['errorCode'] = '0000';
    $response['errorMessage'] = 'Code generated';
}
else{
    $response['errorCode'] = '0001';
    $response['errorMessage'] = 'User Not Found';
}

echo json_encode($response);

?>