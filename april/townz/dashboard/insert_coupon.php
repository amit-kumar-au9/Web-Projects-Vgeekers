<?php 

    include 'include/connection.php';

    $response['error'] = true;
    $response['message'] = "Already Exist";

    $coupon_code = $_POST['coupon_code'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    $discount = $_POST['discount'];
    $min_amount = $_POST['min_amount'];
    $max_discount_amount = $_POST['max_discount_amount'];
    $available_no = $_POST['available_no'];
    $dsc = $_POST['dsc'];

    $checkQuery = "SELECT * FROM coupon_code WHERE coupon_code = '".$coupon_code."'";

    if(mysqli_num_rows(mysqli_query($conn, $checkQuery))<1){

      $response['message'] = "Error Occured";

      $checkQuery = "INSERT INTO coupon_code (coupon_code, start_date, end_date, discount, min_amount, max_discount_amount ,available_no, dsc, used) VALUES('".$coupon_code."', '".$start_date."', '".$end_date."', '".$discount."', '".$min_amount."', '".$max_discount_amount."',  '".$available_no."', '".$discount."', '0')";
      
      if (mysqli_query($conn, $checkQuery)) {

        $response['error'] = false;
        $response['message'] = "Coupon Code Added";

      }

    }

    echo json_encode($response);

?>