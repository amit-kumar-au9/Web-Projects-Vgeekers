<?php 

  include 'include/conn.php';

  $name = test_input($_POST['name']);
  $email = test_input($_POST['email']);
  $phone = test_input($_POST['phone']);
  $subject = test_input($_POST['subject']);
  $detail = test_input($_POST['detail']); 
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
    
  if($name!="" && $email!="" && $phone!="" && $subject!="" && $detail!=""){

    $checkQuery = "INSERT INTO query (name, email, phone, detail, subject) VALUES ('".$name."', '".$email."', '".$phone."', '".$detail."', '".$subject."')";
    mysqli_query($con, $checkQuery);
    echo "<script>window.location.href='contact.php';</script>";
  }
?>