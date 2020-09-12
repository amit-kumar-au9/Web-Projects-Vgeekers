<?php 

include 'connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	if(isset($_POST['action']) && !empty($_POST['action'])){

		function basic_form($details, $conn){
			$name = $details['fname'].' '.$details['lname'];
			$email = $details['email'];
			$mobno = $details['mobno'];
			$intloc = $details['intloc'];
			$shifting = $details['shifting'];
			$relocation = $details['relocation'];
			$cv_upload = false;
			$src_file = $_FILES['usercv']['name'];
			$server_file = $_FILES['usercv']['tmp_name'];
			$uploaded_file = "assets/docs/".time().$src_file;
			if(move_uploaded_file($server_file, $uploaded_file)){
			  	$cv_upload = true;
			}
			else{
			    $cv_upload = false;
			}
			if($cv_upload){
				$insertQuery = "INSERT INTO basic_req (name, email, mobno, interested_location, shifting, relocation, cv_file) VALUES ('".$name."', '".$email."', '".$mobno."', '".$intloc."', '".$shifting."', '".$relocation."', '".$uploaded_file."')";
				if(mysqli_query($conn, $insertQuery)){
					return true;
				}
				else{
					return false;
				}
			}
		}

		function employee_form($details, $conn){
			$name = $details['fname'].' '.$details['lname'];
			$email = $details['email'];
			$mobno = $details['mobno'];
			$vacancy = $details['vacancy'];
			$location = $details['location'];
			$experience = $details['experience'];
			$communication = $details['communication'];
			$salary = $details['salary'];
			$benefits = $details['benefits'];
			$timeliness = $details['timelines'];
			$insertQuery = "INSERT INTO employee_reg (name, email, mobno, vacancy, location, experience, communication, salary, benefits, timeliness) VALUES ('".$name."', '".$email."', '".$mobno."', '".$vacancy."', '".$location."', '".$experience."', '".$communication."', '".$salary."', '".$benefits."', '".$timeliness."')";
			if(mysqli_query($conn, $insertQuery)){
				return true;
			}
			else{
				return false;
			}
		}

		$error = true;
		$message = '';
		$response = array();

		switch ($_POST['action']) {
			case 'basic':
				if(basic_form($_POST, $conn)){
					$error = false;
					$message = "Thankyou for your interest in engaging with us. We shall contact you within 2-3 working days!";
				}
				else{
					$error = true;
					$message = "Some Error Occured";
				}
				break;
			case 'employeereg':
				if(employee_form($_POST, $conn)){
					$error = false;
					$message = "Thankyou for your interest in engaging with us. We shall contact you within 48 Hours!";
				}
				else{
					$error = true;
					$message = "Some Error Occured";
				}
				break;
			default:
				$error = true;
				$message = "Please Contact your Admin";
				break;
		}
		
		$response['error'] = $error;
		$response['message'] = $message;
		echo json_encode($response);
	}
	else{
		echo 'You can\'t access this page directly';
	}
}
else {
	echo 'Only POST Request Allowed';
}

?>