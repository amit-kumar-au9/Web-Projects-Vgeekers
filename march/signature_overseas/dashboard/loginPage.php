<?php
	session_start();
	require 'include/connection.php';
	$email = $_POST['username'];
	$password = $_POST['password'];

	if ($email!="" && $password!="") {
	    $password=md5($password);
		$checkQuery = "SELECT * FROM admin WHERE email='".$email."' AND password='".$password."'";
		$checkResult = mysqli_query($conn, $checkQuery);
		if(mysqli_num_rows($checkResult) == 1){
			$row = $checkResult -> fetch_assoc();
			$_SESSION['id']=$row['id'];
			$_SESSION['islogin']=true;
            echo "<script>window.alert('Admin Login Successful');window.location.href='admin.php';</script>";
		}
		else{
		    session_unset();
		    session_destroy();
		    echo "<script>window.alert('Invalid Email or Password');window.location.href='login.php';</script>";   
		}
	}
	else {
	    session_unset();
	    session_destroy();
        echo "<script>window.alert('Please input email and password');window.location.href='login.php';</script>";
	}
?>