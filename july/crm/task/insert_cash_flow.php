<?php 
    include '../include/connection.php';
    include '../include/session.php';
    
    $response['error'] = true;
    $response['message'] = "All field cannot be empty";

    if($_POST['item_name'] != "" OR $_POST['billing_amount'] != "" OR $_POST['dsc'] != ""){


        $item_name = $_POST['item_name'];
        $billing_amount = $_POST['billing_amount'];
        $dsc = addslashes($_POST['dsc']);
        $date = date('Y-m-d');
        $checkQuery = "INSERT INTO cash_flow (item_name, billing_amount, dsc, created_by, site_id , date) VALUES ('".$item_name."', '".$billing_amount."', '".$dsc."', '".$login_id."', '".$site_id."', '".$date."') ";  
        if(mysqli_query($conn, $checkQuery)){

            $last_id = mysqli_insert_id($conn);
            foreach($_FILES['UploadImage']['name'] as $key=>$val){ 
                
                $rand = rand(10000, 99999);
                
                $file_name = preg_replace('/\s+/', '_', trim(addslashes($rand.$_FILES['UploadImage']['name'][$key])));
                $file_tem_loc = $_FILES['UploadImage']['tmp_name'][$key];
                $file_store = "../assets/img/cash_flow/".$file_name;
                $file_upload = false;

                if(move_uploaded_file($file_tem_loc, $file_store)){
                    $file_upload = true;
                }

                if ($file_upload) {
                    $checkQuery = "INSERT INTO cash_flow_image (cash_flow_id, image) VALUES ('".$last_id."', '".$file_name."') ";  
                    mysqli_query($conn, $checkQuery);
                }
            }

            $response['error'] = false;
            $response['message'] = "New Bill Uploaded";
        }      
    }

    echo json_encode($response);
?>