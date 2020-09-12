<?php 

    include '../connection.php';
    
    $entityBody = file_get_contents('php://input');
    $decoded = json_decode(file_get_contents('php://input'), true);
    
    $subcategory_id = $decoded['subCategory_id'];
    $category_id = $decoded['category_id'];
    
    $response['statusCode'] = 1;
    $response['msg'] = "Services Not Send";
    $response['reason'] = "Failed";
    $response['data'] = [];
    $response['actionCode'] = 0;
    
    if($subcategory_id != ""){
        $checkQuery = "SELECT id, category_id, sub_category_id, name, logo, price FROM services_subcategory WHERE sub_category_id = '".$subcategory_id."'";
    }
    elseif($category_id != ""){
        $checkQuery = "SELECT id, category_id, sub_category_id, name, logo, price FROM services_subcategory WHERE category_id = '".$category_id."'";
    }
    
    $checkResult = mysqli_query($conn, $checkQuery);
    
    if(mysqli_num_rows($checkResult) > 0){
    	
    	while($row = $checkResult->fetch_assoc()){
    	    
    	    $response['data'][]= [
    	            "id" => $row['id'],
                    "sub_category_id" => $row['sub_category_id'],
    	            "category_id" => $row['category_id'],
                    "name" => $row['name'],
                    "logo" => "https://vgeekersinfotech.com/townz/dashboard/assets/images/services/".$row['logo'],
                    "price" => $row['price']
    	        ];
    	
    	}
    	
    	$response['statusCode'] = 1;
    	$response['msg'] = "Services Send";
    	$response['reason'] = "Success";
    	$response['actionCode'] = 1;
    
    }
    
    echo json_encode($response);

?>