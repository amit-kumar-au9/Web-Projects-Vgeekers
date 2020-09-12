<?php 

require '../include/connection.php';

$name = $_POST['keyword'];

$error = true;
$message = array();
$response = array();

$checkProduct = "SELECT * FROM product WHERE name LIKE '%$name%'";
$resultProduct = mysqli_query($conn, $checkProduct);

if(mysqli_num_rows($resultProduct) > 0){

	$error = false;

	while($row = $resultProduct -> fetch_assoc() ){

    	array_push($message, array('id' => $row['id'], 'name' => $row['name']));

	}  

}
else{

	$error = true;
	$message = '';

}

$response['error'] = $error;
$response['message'] = $message;

echo json_encode($response);

?>