<?php 

    include 'include/connection.php';

    $category_id = $_POST['category_id'];
    $sub_category_id = $_POST['sub_category_id'];
    $price = $_POST['price'];
    $name = $_POST['name'];
    
    $response['msg'] = "Service Already Exist";
    $response['error'] = true;
    
    $checkSub = "SELECT * FROM services_subcategory WHERE name = '".$name."'";
    
    if(mysqli_num_rows(mysqli_query($conn, $checkSub))==0){
        
        $response['msg'] = "Image Upload fail";
        
        $rand = rand(10000, 99999);
    
        $file_name = preg_replace('/\s+/', '_', trim(addslashes($rand.$_FILES['UploadImage']['name'])));
        $file_tem_loc = $_FILES['UploadImage']['tmp_name'];
        $file_store = "assets/images/services/".$file_name;
        $file_upload_image = false;
    
        if(move_uploaded_file($file_tem_loc, $file_store)){
            $file_upload_image = true;
        }
        if ($file_upload_image == true) {
            
            $response['msg'] = "Service Not Added";
            
            $insertSub = "INSERT INTO services_subcategory (sub_category_id, category_id, price, name, logo) VALUES('".$sub_category_id."', '".$category_id."', '".$price."', '".$name."', '".$file_name."')";
            
            if (mysqli_query($conn, $insertSub)) {
                $response['msg'] = "Service Added";
                $response['error'] = false;
            }
        }
    }
    
    echo json_encode($response);

?>