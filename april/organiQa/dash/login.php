<?php
	
	include 'conn.php';
	session_start();
	
	$pass = md5($_POST['password']);
	$email = $_POST['email'];

	$sql = " SELECT * from admin WHERE email='".$email."' AND password='".$pass."' ";
	$result = mysqli_query($con, $sql);
	
	if(mysqli_num_rows($result)==1)
	{
	    $row = $result -> fetch_assoc();
		$_SESSION['id'] = $row['id'];
		echo "<script>window.location.href ='index.php';</script>";
	}
	else{
	    session_destroy();
		echo "<script>window.alert('Wrong username or Password');
				window.location.href = 'form.php';
			  </script>";
	}
?>