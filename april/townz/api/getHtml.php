<?php 

include 'connection.php';

$entityBody = file_get_contents('php://input');
$decoded = json_decode(file_get_contents('php://input'), true);

$type = $decoded['type'];

$checkQuery = "SELECT * FROM basic_data WHERE id = '".$type."'";
if(mysqli_num_rows($checkResult = mysqli_query($conn, $checkQuery))>0){
    $row = $checkResult ->fetch_assoc();
    $response['statusCode'] = 1;
	$response['msg'] = "Data Found";
	$response['reason']  = "Success";
	$response['actionCode'] = 1;
	$response['data'] = $row['content'];
}
else{

	$response['statusCode'] = 1;
	$response['msg'] = "Data Not Found";
	$response['reason'] = "Failed";
	$response['actionCode'] = 0;
	$response['data'] = "";

}

echo json_encode($response);

?>