<?php
	
	require 'dashboard/include/connection.php';
	
	$subject = $_GET['subject'];

	$query = "SELECT * FROM package WHERE subject='".$subject."' ";
	$result = mysqli_query($conn,$query);

	// $error = true;
	// $message = '';

	if(mysqli_num_rows($result) > 0){
		
		$response['error'] = false;
		while($row=mysqli_fetch_assoc($result)){
	
			$response['message'][] = ['id'=>$row['id'], 'name' => $row['name'], 'description' => $row['description'], 'image' => $row['image'], 'type' => $row['type'], 'subject' => $row['subject']];
			// array_push($response['message'], array($row));;
	
		}
	
	}
	else{
		$response['error'] = true;
	}

	echo json_encode($response);

?>