<?php 

    include 'include/connection.php';

    $category_id = $_POST['category_id'];
    $sub_category = $_POST['sub_category'];
    $price = $_POST['price'];
    $problem1 = $_POST['problem1'];
    $problem2 = $_POST['problem2'];
    $problem3 = $_POST['problem3'];
    $problem4 = $_POST['problem4'];
    $dsc = $_POST['dsc'];
    $dsc_short = $_POST['dsc_short'];
    
    $response['msg'] = "Sub Category Already Exist";
    $response['error'] = true;
    
    $checkSub = "SELECT * FROM sub_category WHERE sub_category = '".$sub_category."'";
    
    if(mysqli_num_rows(mysqli_query($conn, $checkSub))==0){
        
        $response['msg'] = "Image Upload fail";
        
        $rand = rand(10000, 99999);
    
        $file_name = preg_replace('/\s+/', '_', trim(addslashes($rand.$_FILES['UploadImage']['name'])));
        $file_tem_loc = $_FILES['UploadImage']['tmp_name'];
        $file_store = "assets/images/sub_category/".$file_name;
        $file_upload_image = false;
    
        if(move_uploaded_file($file_tem_loc, $file_store)){
            $file_upload_image = true;
        }
        if ($file_upload_image == true) {
            
            $response['msg'] = "Sub Category Not Added";
            
            $insertSub = "INSERT INTO sub_category (sub_category, category_id, price, problem1, problem2, problem3, problem4, dsc, dsc_short, logo) VALUES('".$sub_category."', '".$category_id."', '".$price."', '".$problem1."', '".$problem2."', '".$problem3."', '".$problem4."', '".$dsc."', '".$dsc_short."', '".$file_name."')";
            
            if (mysqli_query($conn, $insertSub)) {
                $response['msg'] = "Sub Category Added";
                $response['error'] = false;
            }
        }
    }
    
    echo json_encode($response);

?>