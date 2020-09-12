<?php 

    include '../connection.php';
    
    $entityBody = file_get_contents('php://input');
    $decoded = json_decode(file_get_contents('php://input'), true);
    
    $category_id = $decoded['category_id'];
    
    $response['statusCode'] = 1;
    $response['msg'] = "SubCategory Data Not Send";
    $response['reason'] = "Failed";
    $response['data'] = [];
    $response['actionCode'] = 0;
    
    $checkQuery = "SELECT sub_category.id as id, sub_category, price, problem1, problem2, problem3, problem4, sub_category.dsc as dsc, sub_category.dsc_short as dsc_short, sub_category.logo as logo, category, category_id, is_show FROM sub_category JOIN category ON category.id = sub_category.category_id WHERE category_id = '".$category_id."'";
    
    $checkResult = mysqli_query($conn, $checkQuery);
    
    if(mysqli_num_rows($checkResult) > 0){
    	
    	while($row = $checkResult->fetch_assoc()){
    	    $problem = array();
    	    if($row['problem1'] != ""){
    	        array_push($problem, $row['problem1']);
    	    }
        	if($row['problem2'] != ""){
    	        array_push($problem, $row['problem2']);
    	    }
    	    if($row['problem3'] != ""){
    	        array_push($problem, $row['problem3']);
    	    }
    	    if($row['problem4'] != ""){
    	        array_push($problem, $row['problem4']);
    	    }
    	    $response['data'][]=[
    	        "id" => $row['id'], 
    	        "category_id" => $row['category_id'],
        	    "name" => $row['sub_category'], 
        	    "price" => $row['price'], 
        	    "problem" => $problem, 
        	    "dsc" => $row['dsc'], 
        	    "dsc_short" => $row['dsc_short'], 
        	    "is_show" => $row['is_show'], 
        	    "category" => $row['category'],
        	    "logo" => "https://vgeekersinfotech.com/townz/dashboard/assets/images/sub_category/".$row['logo']
    	    ];
    	
    	}
    	
    	$response['statusCode'] = 1;
    	$response['msg'] = "category Send";
    	$response['reason'] = "Success";
    	$response['actionCode'] = 1;
    
    }
    
    echo json_encode($response);

?>