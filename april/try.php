<?php 
    
    $entityBody = file_get_contents('php://input');
    $decoded = json_decode(file_get_contents('php://input'), true);
    
    $name = $decoded['name'];
    $phone = $decoded['phone'];
    $sphone = $decoded['sphone'];
    $email = $decoded['email'];
    $country = $decoded['country'];
    $city = $decoded['city'];
    $location = $decoded['location'];
    $referrer_code = $decoded['referrer_code'];
    $whatsapp = $decoded['whatsapp'];
    $terms = $decoded['terms'];
    $token = $decoded['token'];
    
    $filename = fopen('registerRecord.txt', 'a');//opens file in append mode  

    $txt = "Name : ".$name."  ///  ";
    fwrite($filename,$txt);

    $txt = "Phone : ".$phone."  ///  ";
    fwrite($filename,$txt);
    
    $txt = "Email : ".$email."  ///  ";
    fwrite($filename,$txt);

    $txt = "Country : ".$country."  ///  ";
    fwrite($filename,$txt);

    $txt = "City : ".$city."  ///  ";
    fwrite($filename,$txt);

    $txt = "Referrer_code : ".$referrer_code."  ///  ";
    fwrite($filename,$txt);

    $txt = "Whatsapp : ".$whatsapp."  ///  ";
    fwrite($filename,$txt);

    $txt = "Terms : ".$terms."  ///  ";
    fwrite($filename,$txt);

    $txt = "Token : ".$token."  ///  ";
    fwrite($filename,$txt);

    $txt = "Location : ".$location."\n\n";
    fwrite($filename,$txt);

    fclose($filename);  
?>