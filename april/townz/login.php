<?php
include 'dashboard/include/connection.php';

	session_start();

	$email = test_input($_POST['email']);
	$password = test_input($_POST['password']);

	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}

	if ($email!="" && $password!="") {
	    $password=md5($password);
		$checkQuery = "SELECT * FROM admin_details WHERE email='".$email."' AND password='".$password."' AND id= 2";
		$checkResult = mysqli_query($conn, $checkQuery);
		if(mysqli_num_rows($checkResult) == 1){
			$row = $checkResult -> fetch_assoc();
			$_SESSION['id']=$row['id'];
			$_SESSION['islogin']=true;
            echo "<script>window.location.href='dashboard/index.php';</script>";
		}
		else{
		    session_unset();
		    session_destroy();
		    echo "<script>window.alert('Invalid Email or Password');window.location.href='index.php';</script>";   
		}
	}
	else {
	    session_unset();
	    session_destroy();
        echo "<script>window.alert('Please input email and password');window.location.href='index.php';</script>";
	}
?>