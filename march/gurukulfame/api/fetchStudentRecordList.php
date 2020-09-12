<?php 

require 'connection.php';
$userId = $_POST['userId'];
$class = $_POST['class'];
$batch = $_POST['batch'];

date_default_timezone_set('Asia/Kolkata');
$date = date('d/m/Y');

$checkQuery = "SELECT * FROM userDetail WHERE class='".$class."' AND batch='".$batch."'";
$checkResult = mysqli_query($conn, $checkQuery);

if(mysqli_num_rows($checkResult)>0){
    $response['errorCode'] = '0000';
    $response['errorMessage'] = 'Student Record Sent';
    while($row = $checkResult -> fetch_assoc()){
        $response['content'] = ["name" =>$row['name'],"roll_number" =>$row['id']];
    }
}

echo json_encode($response);

?>