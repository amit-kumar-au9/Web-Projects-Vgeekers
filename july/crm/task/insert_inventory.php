<?php 
    include '../include/connection.php';
    include '../include/session.php';

    $response['error'] = true;

    $quantity = $_POST['quantity'];
    $material_id = $_POST['material_id'];

    $response['message'] = "Sorry Try Again"; 
    if ($quantity != '' && $material_id != '') {
        $date = date('Y-m-d');
        $checkQuery = "INSERT INTO inventory (quantity, material_id, created_by, site_id, date) VALUES ('".$quantity."', '".$material_id."', '".$login_id."', '".$site_id."' ,'".$date."') ";
        if(mysqli_query($conn, $checkQuery)){

            $last_id = mysqli_insert_id($conn);
            foreach($_FILES['UploadImage']['name'] as $key=>$val){ 
                
                $rand = rand(10000, 99999);
                
                $file_name = preg_replace('/\s+/', '_', trim(addslashes($rand.$_FILES['UploadImage']['name'][$key])));
                $file_tem_loc = $_FILES['UploadImage']['tmp_name'][$key];
                $file_store = "../assets/img/inventory/".$file_name;
                $file_upload = false;

                if(move_uploaded_file($file_tem_loc, $file_store)){
                    $file_upload = true;
                }

                if ($file_upload) {
                    $checkQuery = "INSERT INTO inventory_image (inventory_id, image) VALUES ('".$last_id."', '".$file_name."') ";  
                    mysqli_query($conn, $checkQuery);
                }
            }

            $response['error'] = false;
            $response['message'] = "New inventory Created";
        }   
    }
    echo json_encode($response);
?>