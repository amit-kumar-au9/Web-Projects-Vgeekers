<?php
	session_start();
	require 'dashboard/include/connection.php';
	$email = $_POST['email'];
	$password = $_POST['password'];

	if ($email!="" && $password!="") {
	    $password=md5($password);
		$checkQuery = "SELECT * FROM userDetail WHERE email='".$email."' AND password='".$password."'";
		$checkResult = mysqli_query($conn, $checkQuery);
		if(mysqli_num_rows($checkResult) == 1){
			$_SESSION['id']=$row['id'];
			$_SESSION['islogin']=true;
			$_SESSION['type']=$row['validate'];
			if ($_SESSION['type']!='3' &&  $_SESSION['type']!='4') {
            	echo "<script>window.alert('Student Login Successful');window.location.href='dashboard/studentDashboard.php';</script>";
			}
			elseif ($_SESSION['type']=='3') {
            	echo "<script>window.alert('Teacher Login Successful');window.location.href='dashboard/teacherDashboard.php';</script>";
			}
			else{
            	echo "<script>window.alert('Admin Login Successful');window.location.href='dashboard/admin.php';</script>";
			}

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