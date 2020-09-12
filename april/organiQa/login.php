<?php
	session_start();
	include 'include/conn.php';
	$email=test_input($_POST['email']);
	$pass=$_POST['password'];
	$sql="SELECT * from signup WHERE email='$email' AND password='$pass'";
	$result= mysqli_query($con, $sql);
	$num= mysqli_num_rows($result);
	$results=mysqli_fetch_assoc($result);
	$id= $results['id'];
	$status=$results['isactive'];
	if($status=='1')
	{
		if($num==1)
		{
		
			$_SESSION['id']=$id;
		 header('Location:index.php');
		}
	}
	else if($status=='0')
	{
		echo "<script>alert('Sorry you have been blocked by the admin! Kindly contact admin! ');window.location.href ='form.php';</script>";
	}
	else{
		echo "<script>
				alert('Kindly check your details !!! ');
				window.location.href = 'form.php';
			  </script>";
	}
	function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }

?>