<?php
    session_start();
    if(isset($_SESSION['id'])){
        echo "<script>
        window.location.href = 'index.php';
        </script>";
    } 
?>

<!DOCTYPE html>

<html lang="en">

  <head>
      <title>Organiqa</title>
      <meta charset="utf-8">
      <link rel="apple-touch-icon" sizes="180x180" href="asset/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="asset/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="asset/images/favicon-16x16.png">
    <link rel="manifest" href="asset/images/site.webmanifest">
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="icon" href="asset/images/logo.png" type="image/png" sizes="16x16">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes user-scalable=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="asset/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="asset/css/animate.css">
    <link rel="stylesheet" href="asset/css/owl.carousel.min.css">
    <link rel="stylesheet" href="asset/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="asset/css/magnific-popup.css">
    <link rel="stylesheet" href="asset/css/aos.css">
    <link rel="stylesheet" href="asset/css/ionicons.min.css">
    <link rel="stylesheet" href="asset/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="asset/css/jquery.timepicker.css">
    <link rel="stylesheet" href="asset/css/flaticon.css">
    <link rel="stylesheet" href="asset/css/icomoon.css">
    <link rel="stylesheet" href="asset/css/style.css">
    <link rel="stylesheet" type="text/css" href="asset/css/form.css">
  </head>
  <body class="goto-here" style="background-image: url('asset/images/getimage.svg');background-size:cover;background-position: center;background-repeat: no-repeat;">
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar " id="ftco-navbar" style="background: white">
      <div class="container">
        <a class="navbar-brand" href="index.php"><img src="asset/images/logo.png"  height="60"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item" style="margin:10px">
            	<span><button class="btn btn-outline-success" onclick="b()">Welcome</button></span>
            </li>
          </ul>
        </div>
      </div>
    </nav>
	<body>
		<center>
			<div class="form-structor" style="height: 500px;margin: 5px;">
		    	<form class="signup" action="signup.php" method="post" style="margin: 2px">
		      		<h2 class="form-title" id="signup" style="color:yellowgreen"><span>or</span>Sign up</h2>
		      		<div class="form-holder" style="margin: 5px">
		        		<input type="text" class="input" id="name" placeholder="First Name" autocomplete="off"  required name="name"/>
		        		<input type="text" class="input" placeholder="Last Name" autocomplete="off"  required name="Lname"/>
		        		<input type="phone" class="input"  placeholder="phone"  maxlength="10" required name="phone">
		        		<input type="email" class="input" placeholder="Email"  autocomplete="off" required name="email"/>
		        		<input type="text" class="input" placeholder="Enter Password" autocomplete="off" required name="password" minlength="8">
		     		   </div>
		      		  <button class="submit-btn" id="submit" style="background: yellowgreen">Sign up</button>
		    	</form>
		    	<form class="login slide-up" action="login.php" method="post">
		     		<div class="center">
	        		<h2 class="form-title" id="login" style="color:yellowgreen"><span>or</span>Log in</h2>
	        		<div class="form-holder">
	          		<input type="email" class="input" placeholder="Email" name='email' autocomplete="off" required />
	        		  <input type="text" class="input" placeholder="Enter Password" autocomplete="off" required name="password">
	        		</div>
	           	<button class="submit-btn" id="b" style="background: yellowgreen">Log in</button>
		      	</div>
		    	</form>
		  	</div>
		</center>
	</body>
</html>
<script type="text/javascript">
  console.clear();
  const loginBtn = document.getElementById('login');
  const signupBtn = document.getElementById('signup');
  loginBtn.addEventListener('click', (e) => {
  let parent = e.target.parentNode.parentNode;
  Array.from(e.target.parentNode.parentNode.classList).find((element) => {
  if (element !== "slide-up") {
      parent.classList.add('slide-up')
  } 
  else{

      signupBtn.parentNode.classList.add('slide-up')
      parent.classList.remove('slide-up')
  }
    });

  });
  signupBtn.addEventListener('click', (e) => {
    let parent = e.target.parentNode;
    Array.from(e.target.parentNode.classList).find((element) => {
      if (element !== "slide-up") {
        parent.classList.add('slide-up')

      } else {
        loginBtn.parentNode.parentNode.classList.add('slide-up')
        parent.classList.remove('slide-up')
      }
    });
  });
</script>
