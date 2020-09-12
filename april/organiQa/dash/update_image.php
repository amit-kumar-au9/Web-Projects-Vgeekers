<?php
  include 'conn.php';
  session_start();
  $response = array();
  $response['error'] = true;
  $response['message'] = 'Image Not Updated';
  $image_id = $_POST['image_id'];
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
    $checkQuery = "UPDATE product_images  SET image = '$file_name' WHERE id = '$image_id' ";
    if (mysqli_query($con, $checkQuery)){
      $image = "../asset/images/products/".$_POST['image'];
      unlink($image);
      $response['error'] = false;
      $response['message'] = "Image Uploaded";
    }
    else{
      $response['message'] = "Couldnot upload Image";
    }      
  }
  echo json_encode($response);
?>