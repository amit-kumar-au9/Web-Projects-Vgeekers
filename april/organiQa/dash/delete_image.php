<?php 

  include 'conn.php';

  $id=$_POST['image_id'];
  $response = array();
  $response['error'] = true;
  $response['message'] = 'Image Not Deleted';
  $checkQuery = "SELECT * FROM product_images WHERE id = '".$id."'";
  $result = mysqli_query($con, $checkQuery);
  $row = $result -> fetch_assoc();
  $image = $row['image'];
  if($id!=""){
    $checkQuery = "DELETE FROM product_images WHERE id='".$id."'";
    if (mysqli_query($con, $checkQuery)) {
      $response['error'] = false;
      $response['message'] = 'Image Deleted';
      $image = "../asset/images/products/".$image;
      unlink($image);
    }
  }
  echo json_encode($response);
?>