<?php
  include 'conn.php';
  session_start();
  $response = array();
  $response['error'] = true;
  $response['message'] = 'Insert Proper Image';
  $product_id = $_POST['product_id'];
  $rand = rand(10000, 99999);
  $file_name = $rand.$_FILES['UploadImage']['name'];
  $file_tem_loc = $_FILES['UploadImage']['tmp_name'];
  $file_store = "../asset/images/products/".$file_name;
  $file_upload = false;
  
  if(move_uploaded_file($file_tem_loc, $file_store))
  {
    $file_upload = true;
  }
  else
  {
    $file_upload = false;
  }
  
  if ($file_upload) {
    $checkQuery = "INSERT into  product_images (image,product_id) VALUES ('$file_name', '$product_id')";
    if (mysqli_query($con, $checkQuery)){
      $response['error'] = false;
      $response['message'] = "Image Uploaded";
    }
    else{
      $response['message'] = "Couldnot upload Image";
    }      
  }
  echo json_encode($response);
?>