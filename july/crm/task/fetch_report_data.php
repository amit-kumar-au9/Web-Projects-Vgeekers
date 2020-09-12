<?php 
	
	include '../include/connection.php';

	$duration = $_POST['duration'];
	$report_type = $_POST['report_type'];
	$site_id = $_POST['site_id'];

	if($report_type == 'attendance'){
		include 'view_report_attendance.php';
		$response['data'] = view_attendance($duration, $site_id);
	}
	elseif ($report_type == 'created_bill') {
		include 'view_report_created_bill.php';
		$response['data'] = view_created_bill($duration, $site_id);
	}
	elseif ($report_type == 'uploaded_bill') {
		include 'view_report_uploaded_bill.php';
		$response['data'] = view_uploaded_bill($duration, $site_id);
	}
	elseif ($report_type == 'inventory') {
		include 'view_report_inventory.php';
		$response['data'] = view_inventory($duration, $site_id);
	}
    echo json_encode($response);
    $response['error'] = true;
    $response['message'] = "User name already exist"; 
?>