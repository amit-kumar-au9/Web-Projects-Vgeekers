<?php 

include 'connection.php';

$entityBody = file_get_contents('php://input');
$decoded = json_decode(file_get_contents('php://input'), true);

$catId = $decoded['catId'];

$checkQuery = "SELECT * FROM sub_category WHERE category_id = '".$catId."'";

$checkResult = mysqli_query($conn, $checkQuery);

if(mysqli_num_rows($checkResult) > 0){
	
	while($row = $checkResult->fetch_assoc()){
	
	    $response['data'][]=[
	    	"id" => $row['id'], 
	    	"name" => $row['sub_category']
	    ];
	}
	
	$response['statusCode'] = 1;
	$response['msg'] = "Sub category Send";
	$response['reason'] = "Success";
	$response['actionCode'] = 1;

}
else{

	$response['statusCode'] = 1;
	$response['msg'] = "Sub category Data Not Send";
	$response['reason'] = "Failed";
	$response['data'] = [];
	$response['actionCode'] = 0;

}

echo json_encode($response);

?>