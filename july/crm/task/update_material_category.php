<?php 
    include '../include/connection.php';
    include '../include/session.php';
    
    $id = $_POST['id'];
    $material_category = $_POST['material_category'];
    
    $response['error'] = true;
    $response['message'] = "Material Category already exist";
    
    $checkUsername = "SELECT * FROM material_category_list WHERE material_category = '".$material_category."'";
    if(mysqli_num_rows(mysqli_query($conn, $checkUsername)) == 0){
        $checkQuery = "UPDATE material_category_list SET material_category = '".$material_category."' WHERE id = '".$id."' ";
        mysqli_query($conn, $checkQuery);
        $response['error'] = false;
        $response['message'] = "Material Category already exist";
    }

    echo json_encode($response);
?>