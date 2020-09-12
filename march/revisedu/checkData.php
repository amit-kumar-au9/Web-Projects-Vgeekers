<?php 

	include 'dashboard/include/connection.php';

	$class = $_POST['class'];
	$subject = $_POST['subject'];
	$topic = $_POST['topic'];

	$error = true;
	$message = '';
	$response = array();

	if($class!="" && $subject!=""){

		$checkQuery = "SELECT * FROM notes where class='".$class."' AND subject='".$subject."' AND topic='".$topic."'";
		$checkResult = mysqli_query($conn, $checkQuery);

		if(mysqli_num_rows($checkResult) > 0){

			$row = $checkResult -> fetch_assoc();

			$error = false;
			$message = $row['notelink'];

		}
		else{

			$error = true;
			$message = 'No File Found!';

		}

	}
	else{

		$error = true;
		$message = 'Values cannot be empty!';

	}

	$response['error'] = $error;
	$response['message'] = $message;

	echo json_encode($response);

?>
