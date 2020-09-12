<?php 
    include '../include/connection.php';

    session_start();

    $username = test_input($_POST['username']);
    $password = test_input($_POST['password']);

    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }

    if ($username!="" && $password!="") {
      $password=md5($password);
      $checkQuery = "SELECT * FROM user_details WHERE username='".$username."' AND password='".$password."' AND is_block = '0'";
      $checkResult = mysqli_query($conn, $checkQuery);
      if(mysqli_num_rows($checkResult) == 1){
        $row = $checkResult -> fetch_assoc();
        $_SESSION['id'] = $row['id'];
        $_SESSION['type'] = $row['type'];
        $_SESSION['site_id'] = $row['site_id'];
        $_SESSION['username'] = $row['username'];
        echo "<script>window.location.href='../dashboard.php';</script>";
      }
      else{
          session_unset();
          session_destroy();
          echo "<script>window.alert('Invalid username or Password');window.location.href='../index.php';</script>";   
      }
    }
    else {
        session_unset();
        session_destroy();
          echo "<script>window.alert('Please input username and password');window.location.href='../index.php';</script>";
    }
?>