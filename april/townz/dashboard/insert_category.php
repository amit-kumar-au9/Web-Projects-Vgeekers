<?php 

    $response['error'] = true;

    include 'include/connection.php';
    $category = $_POST['category'];
    $dsc = $_POST['dsc'];
    $dsc_short = $_POST['dsc_short'];

    $rand = rand(10000, 99999);
    
    $file_name_logo = preg_replace('/\s+/', '_', trim(addslashes($rand.$_FILES['UploadLogo']['name'])));
    $file_tem_loc = $_FILES['UploadLogo']['tmp_name'];
    $file_store = "assets/images/category/".$file_name_logo;
    $file_upload = false;

    if(move_uploaded_file($file_tem_loc, $file_store)){
        $file_upload = true;
    }
    
    $file_name = preg_replace('/\s+/', '_', trim(addslashes($rand.$_FILES['UploadImage']['name'])));
    $file_tem_loc = $_FILES['UploadImage']['tmp_name'];
    $file_store = "assets/images/category/".$file_name;
    $file_upload_image = false;

    if(move_uploaded_file($file_tem_loc, $file_store)){
        $file_upload_image = true;
    }
    $response['message'] = "Image Upload fail";
    if ($file_upload == true && $file_upload_image == true) {
        $response['message'] = "Category Already Exist";
        $checkCategory = "SELECT * FROM category WHERE category = '".$category."'";
        if(mysqli_num_rows(mysqli_query($conn, $checkCategory))==0){
            
            $checkQuery = "INSERT INTO category (category, logo, dsc, dsc_short) VALUES ('".$category."', '".$file_name_logo."', '".$dsc."', '".$dsc_short."')";

            if (mysqli_query($conn, $checkQuery)) {
                $response['error'] = false;
                $category_id = mysqli_insert_id($conn);
                $checkQuery = "INSERT INTO category_image (category_id, image) VALUES ('".$category_id."', '".$file_name."')";
                mysqli_query($conn, $checkQuery);
                $response['message'] = "Added Succesfully";
            }
        }
        
  }

    echo json_encode($response);

?>