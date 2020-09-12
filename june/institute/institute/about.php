<?php include 'include/header.php'; ?>
<?php 
  include 'dashboard/include/connection.php';
  $checkCourse = "SELECT * FROM basic_data WHERE id = 1";
  $resultCourse = mysqli_query($conn, $checkCourse);
  $row = $resultCourse -> fetch_assoc();
?>

	<!-- Breadcrumb section -->
	<div class="site-breadcrumb">
		<div class="container">
			<a href="index.php"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-right"></i>
			<span>About Us</span>
		</div>
	</div>
	<!-- Breadcrumb section end -->


	<!-- About section -->
	<section class="about-section spad pt-0">
		<div class="container">
			<div class="section-title text-center">
				<h3>WELCOME TO Coaching</h3>
				<p>Let children creative and make a different</p>
			</div>
			<div class="row">
				<div class="col-lg-6 about-text">
					<?php echo $row['content']; ?>
				</div>
				<div class="col-lg-6 pt-5 pt-lg-0">
					<img src="img/<?php echo $row['image']; ?>" width="100%">
				</div>
			</div>
		</div>
	</section>

<?php include 'include/footer.php'; ?>
