<?php 

    include 'include/connection.php';
    
    $id = $_POST['id'];
    $user_id = $_POST['user_id'];

    $newCategory = array();

    $checkCategory = "SELECT id, category FROM category";
    $resultCategory = mysqli_query($conn, $checkCategory);
    $no = 1;
    while($row = $resultCategory -> fetch_assoc()){
    	$cat_id = $row['id'];
    	if(in_array($cat_id, $id)) {
    		$newCategory[] = [
    			"id" => $no++, 
    			"isChecked" => "true", 
    			"name" => $row['category']
    		];
    	}
    }

    $newCategory = json_encode($newCategory);

    $updateCategory = "UPDATE vendor_details SET category = '".$newCategory."' WHERE user_id = '".$user_id."'";

    if(!mysqli_query($conn, $updateCategory)){
        $response['message'] = "Category for user id".$user_id." not changed";
    }

    echo $newCategory;
?>