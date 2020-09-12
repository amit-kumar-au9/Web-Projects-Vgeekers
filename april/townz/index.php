<?php

    session_start();
    if(isset($_SESSION['islogin']) && isset($_SESSION['id'])){
        echo "<script>window.alert('Already Login');window.location.href='dashboard/index.php';</script>";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>TOWNZ LOGIN</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<link rel="icon" href="logincss/images/logo1.png" type="image/png" sizes="16x16">
	<link rel="stylesheet" type="text/css" href="logincss/fonts/iconic/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" type="text/css" href="logincss/css/util.css">
	<link rel="stylesheet" type="text/css" href="logincss/css/main.css">
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('logincss/images/bg-01.jpg');">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="post" action="login.php">
					<span class="login100-form-logo">
						<img src="logincss/images/download.png" width="80px">
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Log in
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="email" placeholder="Username">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit">
							Login
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>

</body>
</html>
