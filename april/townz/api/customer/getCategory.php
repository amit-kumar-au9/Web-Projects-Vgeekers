<?php 

    include '../connection.php';
    
    $response['statusCode'] = 1;
    $response['msg'] = "category Data Not Send";
    $response['reason'] = "Failed";
    $response['data'] = [];
    $response['actionCode'] = 0;
    
    $checkQuery = "SELECT id, category.category as name, logo, dsc, dsc_short, is_show FROM category";
    
    $checkResult = mysqli_query($conn, $checkQuery);
    
    if(mysqli_num_rows($checkResult) > 0){
    	
    	while($row = $checkResult->fetch_assoc()){
    	
    	    $response['data'][]=[
    	        "id" => $row['id'], 
    	        "name" => $row['name'], 
    	        "logo" => "https://vgeekersinfotech.com/townz/dashboard/assets/images/category/".$row['logo'], 
    	        "dsc" => $row['dsc'], 
    	        "dsc_short" => $row['dsc_short'],
    	        "is_show" => $row['is_show']
    	        ];
    	
    	}
    	
    	$response['statusCode'] = 1;
    	$response['msg'] = "category Send";
    	$response['reason'] = "Success";
    	$response['actionCode'] = 1;
    
    }
    
    echo json_encode($response);

?>