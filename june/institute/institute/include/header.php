<!DOCTYPE html>
<html lang="en">
<head>
	<title>Coaching Institute</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->   
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/themify-icons.css"/>
	<link rel="stylesheet" href="css/magnific-popup.css"/>
	<link rel="stylesheet" href="css/animate.css"/>
	<link rel="stylesheet" href="css/owl.carousel.css"/>
	<link rel="stylesheet" href="css/style.css"/>


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<!-- <div id="preloder">
		<div class="loader"></div>
	</div> -->

	<!-- header section -->
	<?php 
      include 'dashboard/include/connection.php';
      $checkCourse = "SELECT * FROM basic_data WHERE id = 2";
      $resultCourse = mysqli_query($conn, $checkCourse);
      $row = $resultCourse -> fetch_assoc();
    ?>
	<header class="header-section">
		<div class="container">
			<!-- logo -->
			<a href="index.html" class="site-logo"><img src="img/<?php echo $row['image']; ?>" height="30px"></a>
			<div class="nav-switch">
				<i class="fa fa-bars"></i>
			</div>
			<div class="header-info">
				<div class="hf-item">
					<i class="fa fa-clock-o"></i>
					<p><span>Working time:</span>Monday - Friday: 08 AM - 06 PM</p>
				</div>
				<div class="hf-item">
					<i class="fa fa-map-marker"></i>
					<p><span>Find us:</span>40 Baria Street 133/2, New York City, US</p>
				</div>
			</div>
		</div>
	</header>
	<!-- header section end-->


	<!-- Header section  -->
	<nav class="nav-section">
		<div class="container">
			<!--<div class="nav-right">-->
			<!--	<a href=""><i class="fa fa-search"></i></a>-->
			<!--	<a href=""><i class="fa fa-shopping-cart"></i></a>-->
			<!--</div>-->
			<ul class="main-menu">
				<li><a href="index.php">Home</a></li>
				<li><a href="about.php">About Us</a></li>
				<li><a href="course.php">COURSES</a></li>
				<li><a href="contact.php">Contact</a></li>
			</ul>
		</div>
	</nav>
	<!-- Header section end -->