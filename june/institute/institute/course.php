<?php include 'include/header.php'; ?>
	<!-- Breadcrumb section -->
	<div class="site-breadcrumb">
		<div class="container">
			<a href="index.php"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-right"></i>
			<span>Course</span>
		</div>
	</div>
	<!-- Breadcrumb section end -->


	<!-- Courses section -->
	<section class="full-courses-section spad pt-0">
		<div class="container">
			<div class="row">
				<?php
					include 'dashboard/include/connection.php';
					$checkCourse = "SELECT * FROM course";
					$resultCourse = mysqli_query($conn, $checkCourse);
					while ( $row = $resultCourse -> fetch_assoc() ) {
				?>
				<!-- course item -->
				<div class="col-lg-4 col-md-6 course-item">
					<div class="course-thumb">
						<img src="img/course/<?php echo $row['image']; ?>" alt="">
						<div class="course-cat">
							<span><?php echo $row['class']; ?></span>
						</div>
					</div>
					<div class="course-info">
						<h4><?php echo $row['dsc']; ?></h4>
						<h4 class="cource-price">Rs. <?php echo $row['price']; ?><span>/month</span></h4>
					</div>
				</div>
				<?php 
					}
				?>
			</div>
		</div>
	</section>
	<!-- Courses section end-->

<?php include 'include/footer.php'; ?>
