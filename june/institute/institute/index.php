<?php include 'include/header.php'; ?>
	<!-- Hero section -->
	<section class="hero-section">
		<div class="hero-slider owl-carousel">
			<div class="hs-item set-bg" data-setbg="img/hero-slider/1.jpg">
				<div class="hs-text">
					<div class="container">
						<div class="row">
							<div class="col-lg-8">
								<h2 class="hs-title">An investment in knowledge pays the best interest.</h2>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="hs-item set-bg" data-setbg="img/hero-slider/2.jpg">
				<div class="hs-text">
					<div class="container">
						<div class="row">
							<div class="col-lg-8">
								<h2 class="hs-title">An investment in knowledge pays the best interest.</h2>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Hero section end -->

	<!-- Services section -->
	<section class="service-section spad">
		<div class="container services">
			<div class="section-title text-center">
				<h3>OUR SERVICES</h3>
				<p>We provides the opportunity to prepare for life</p>
			</div>
			<div class="row">
				<div class="col-lg-4 col-sm-6 service-item">
					<div class="service-icon">
						<img src="img/services-icons/1.png" alt="1">
					</div>
					<div class="service-content">
						<h4>Ac Room</h4>
						<p>Lorem ipsum dolor sitdo amet, consectetur dont adipis elit. Vivamus interdum ultrices augue. Aenean dos cursus lania.</p>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6 service-item">
					<div class="service-icon">
						<img src="img/services-icons/2.png" alt="1">
					</div>
					<div class="service-content">
						<h4>Great Facility</h4>
						<p>Lorem ipsum dolor sitdo amet, consectetur dont adipis elit. Vivamus interdum ultrices augue. Aenean dos cursus lania.</p>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6 service-item">
					<div class="service-icon">
						<img src="img/services-icons/3.png" alt="1">
					</div>
					<div class="service-content">
						<h4>Activity Hub</h4>
						<p>Lorem ipsum dolor sitdo amet, consectetur dont adipis elit. Vivamus interdum ultrices augue. Aenean dos cursus lania.</p>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6 service-item">
					<div class="service-icon">
						<img src="img/services-icons/4.png" alt="1">
					</div>
					<div class="service-content">
						<h4>Fully Qualified</h4>
						<p>Lorem ipsum dolor sitdo amet, consectetur dont adipis elit. Vivamus interdum ultrices augue. Aenean dos cursus lania.</p>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6 service-item">
					<div class="service-icon">
						<img src="img/services-icons/5.png" alt="1">
					</div>
					<div class="service-content">
						<h4>Flexible Schedule</h4>
						<p>Lorem ipsum dolor sitdo amet, consectetur dont adipis elit. Vivamus interdum ultrices augue. Aenean dos cursus lania.</p>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6 service-item">
					<div class="service-icon">
						<img src="img/services-icons/6.png" alt="1">
					</div>
					<div class="service-content">
						<h4>Experienced Teachers</h4>
						<p>Lorem ipsum dolor sitdo amet, consectetur dont adipis elit. Vivamus interdum ultrices augue. Aenean dos cursus lania.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Services section end -->

    <!-- Fact section -->
	<section class="fact-section spad set-bg" data-setbg="img/fact-bg.jpg">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-lg-3 fact">
					<div class="fact-icon">
						<i class="ti-crown"></i>
					</div>
					<div class="fact-text">
						<h2>18</h2>
						<p>YEARS</p>
					</div>
				</div>
				<div class="col-sm-6 col-lg-3 fact">
					<div class="fact-icon">
						<i class="ti-briefcase"></i>
					</div>
					<div class="fact-text">
						<h2>15</h2>
						<p>TEACHERS</p>
					</div>
				</div>
				<div class="col-sm-6 col-lg-3 fact">
					<div class="fact-icon">
						<i class="ti-user"></i>
					</div>
					<div class="fact-text">
						<h2>500</h2>
						<p>STUDENTS</p>
					</div>
				</div>
				<div class="col-sm-6 col-lg-3 fact">
					<div class="fact-icon">
						<i class="ti-pencil-alt"></i>
					</div>
					<div class="fact-text">
						<h2>80+</h2>
						<p>LESSONS</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Fact section end-->
	


	<!-- Courses section -->
	<section class="courses-section spad">
		<div class="container">
			<div class="section-title text-center">
				<h3>OUR COURSES</h3>
				<p>Building a better world, one course at a time</p>
			</div>
			<div class="row">
				<?php
					include 'dashboard/include/connection.php';
					$checkCourse = "SELECT * FROM course WHERE is_show = '1'";
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
			<div class="section-title text-center">
				<a href="course.php" style="background:#f6783a;padding:10px;color:white">View All Course</a>
			</div>
		</div>
	</section>
	<!-- Courses section end-->

<?php include 'include/footer.php'; ?>

