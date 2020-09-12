<?php 
		
	include 'connection.php';

	$student_phone = $_POST['student_phone'];

	$student_email = $_POST['student_email'];
	$student_re_email = $_POST['student_re_email'];
	$student_dob = $_POST['student_dob'];
	$student_gender = $_POST['student_gender'];
	$address1 = $_POST['address1'];
	$address2 = $_POST['address2'];
	$country = $_POST['country'];
	$state = $_POST['state'];
	$district = $_POST['district'];
	$city = $_POST['city'];
	$pincode = $_POST['pincode'];
	$test_date = $_POST['test_date'];
	$test_type = $_POST['test_type'];
	$school_name = $_POST['student_name'];
	$school_address = $_POST['school_address'];
	$father_phone_no = $_POST['father_phone_no'];
	$mother_phone_no = $_POST['mother_phone_no'];
	$father_email = $_POST['father_email'];
	$where_did_you = $_POST['where_did_you'];

	$response = array();

	if($student_email == $student_re_email) {

		$checkQuery = "UPDATE student_reg SET student_email = '$student_email', student_dob = '$student_dob', student_gender = '$student_gender', student_class = '$student_class', address1 = '$address1', address2 = '$address2', country = '$country', state = '$state', district = '$district', city = '$city', pincode = '$pincode', test_date = '$test_date', test_type = '$test_type', school_name = '$school_name', school_address = '$school_address', father_phone_no = '$father_phone_no', mother_phone_no = '$mother_phone_no', father_email = '$father_email', where_did_you = '$where_did_you',phase_flag = 3 WHERE student_phone = '$student_phone' ";
		
		if(mysqli_query($conn, $checkQuery)){

			$response['error'] = false;
			$response['message'] = 'Successfully Registered!';

		}
		else{

			$response['error'] = true;
			$response['message'] = 'Please contact the Admin!';

		}

	}
	else{

		$response['error'] = true;
		$response['message'] = 'Email ID does not matched!';

	}

	echo json_encode($response);
	
?>