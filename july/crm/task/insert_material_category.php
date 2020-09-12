<?php 
    include '../include/connection.php';
    include '../include/session.php';

    $response['error'] = true;
    $response['message'] = "Material Category Already Exist";

    $material_category = $_POST['material_category'];
    
    $select  = "SELECT * FROM material_category_list WHERE material_category = '".$material_category."'";
    if(mysqli_num_rows(mysqli_query($conn, $select)) == 0){
        
        $checkQuery = "INSERT INTO material_category_list (material_category, created_by) VALUES ('".$material_category."', '".$login_id."') ";  
        if(mysqli_query($conn, $checkQuery)){
            $response['error'] = false;
            $response['message'] = "New Material Category Created";
        }
    }
    
    echo json_encode($response);
?>