<?php
  include 'conn.php';
  session_start();
  $name = addslashes($_POST['name']);
  $code = $_POST['code'];
  $cost = $_POST['cost'];
  $price = $_POST['price'];
  $discount = $_POST['discount'];
  $heading = addslashes($_POST['heading']);
  $description = addslashes($_POST['description']);
  if ($name!="" && $cost!="" && $price!="" && $heading!="" && $description!="") {
      $checkQuery = "INSERT INTO product_display (Product_name, Product_code, Product_cost, Product_price, discount, heading, description) VALUES ('".$name."', '".$code."', '".$cost."', '".$price."', '".$discount."', '".$heading."', '".$description."')";

    if (mysqli_query($con, $checkQuery)) {
        $last_id = mysqli_insert_id($con);
        $_SESSION['product_id']=$last_id;
        echo "<script>window.alert('STEP 1 COMPLETED');window.location.href='add_image.php';</script>";

      }

    else{
          echo "<script>window.alert('Please Retry');window.location.href='add_product.php';</script>";
      }

  }

  else{
          echo "<script>window.alert('Fill all the fields');window.location.href='add_product.php';</script>";
  }
 
?>

