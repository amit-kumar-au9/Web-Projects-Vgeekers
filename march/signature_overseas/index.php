<?php include 'include/header.php'; ?>
<!-- banner slider-->
<div class="banner-silder">
	<div id="JiSlider" class="jislider">
		<ul>
			<?php 
			include 'dashboard/include/connection.php';
			$bannerQuery = "SELECT * FROM banner";
			$bannerResult = mysqli_query($conn, $bannerQuery);
   			while($row = $bannerResult->fetch_assoc()){
			?>
			<li>
				<div class="w3layouts-banner-top" style="background: url(<?php echo $row['banner']; ?>) no-repeat 0px 0px;">
					<div class="bs-slider-overlay">
						<div class="container">
							<!-- Slide Text Layer -->
							<div class="w3l-slide-text text-center">
								<p><?php echo $row['bannerContent'] ?></p>
								<h3 class="text-uppercase pt-4 pb-3"><?php echo $row['bannerHeading'] ?></h3>
								<p class="heading_bottom mb-4"><?php echo $row['bannerInfo'] ?></p>
								<a href="products.php" class="button-style">View More</a>
							</div>
						</div>
					</div>
				</div>
			</li>
			<?php 
			}
			?>
		</ul>
	</div>
</div>
<!-- //banner slider -->

<!-- Welcome section -->
<section class="welcome py-5 my-lg-5" id="welcome">
	<h3 class="heading text-center text-uppercase">Welcome to industry</h3>
	<p class="heading-bottom text-center font-italic mb-5">Industrial Revolution Business</p>
	<div class="container">
		<div class="row">
			<div class="col-lg-6 welcome_left">
				<img src="images/welcome.jpg" alt="welcome image">
			</div>
			<div class="col-lg-6 welcome_right mt-5 py-5 px-4">
				<p>Nulla pellentesque mi non laoreet eleifend. Integer porttitor mollisar lorem, at molestie arcu pulvinar ut. Proin ac fermentum est. Cras mi ipsum, consectetur ac ipsum in, egestas vestibulum tellus.</p>
				
				<div class="row grid1 my-4">
					<div class="col-md-2 col-sm-2 col-3 icon color1 text-center">
						<span class="fas fa-info-circle" aria-hidden="true"></span>
					</div>
					<div class="col-md-10 col-sm-10 col-9 grid_info">
						<h3 class="text-uppercase mb-2">Industrial Business</h3>
						<p>Lorem ipsum dolor sit amet aueit, consectetur adipiscing elit. Quisque utrisus eget libero finibus. Etiam males</p>
					</div>
				</div>
				<div class="row grid2 my-4">
					<div class="col-md-2 col-sm-2 col-3 icon color1 text-center">
						<span class="fas fa-headphones" aria-hidden="true"></span>
					</div>
					<div class="col-md-10 col-sm-10 col-9 grid_info">
						<h3 class="text-uppercase mb-2">24/7 support</h3>
						<p>Lorem ipsum dolor sit amet aueit, consectetur adipiscing elit. Quisque utrisus eget libero finibus. Etiam males</p>
					</div>
				</div>
				<div class="row grid3">
					<div class="col-md-2 col-sm-2 col-3 icon color1 text-center">
						<span class="fas fa-users" aria-hidden="true"></span>
					</div>
					<div class="col-md-10 col-sm-10 col-9 grid_info">
						<h3 class="text-uppercase mb-2">Professional Team</h3>
						<p>Lorem ipsum dolor sit amet aueit, consectetur adipiscing elit. Quisque utrisus eget libero finibus. Etiam males</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- //Welcome section -->

<!-- services -->
<section class="services py-5 my-lg-5">
	<h3 class="heading text-center text-uppercase">Our Products</h3>
	<p class="heading-bottom text-center font-italic mb-5">Industrial Foam Business</p>
	<div class="container">
		<div class="row">
				<div class="col-lg-4 col-md-6 agileits_banner_bottom_left">
					<div class="agileinfo_banner_bottom_pos">
						<div class="row w3_agileits_banner_bottom_pos_grid">
							<div class="col-3 wthree_banner_bottom_grid_left">
								<div class="agile_banner_bottom_grid_left_grid hvr-radial-out text-center">
									<i class="fab fa-steam" aria-hidden="true"></i>
								</div>
							</div>
							<div class="col-9 wthree_banner_bottom_grid_right">
								<h4 class="sub_service_agileits text-uppercase mb-2">Product First</h4>
								<p class="mb-2">Morbi viverra lacus commodo felis semper, eu iaculis lectus feugiat egestas erat.</p>
								<div class="agileits-button two service">
									<a class="btn btn-primary btn-lg hvr-underline-from-left text-uppercase" href="#" data-toggle="modal" data-target="#exampleModalCenter" role="button">Read More »</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 agileits_banner_bottom_left mt-md-0 mt-4">
					<div class="agileinfo_banner_bottom_pos">
						<div class="row w3_agileits_banner_bottom_pos_grid">
							<div class="col-3 wthree_banner_bottom_grid_left">
								<div class="agile_banner_bottom_grid_left_grid hvr-radial-out text-center">
									<i class="fa fa-rocket" aria-hidden="true"></i>
								</div>
							</div>
							<div class="col-9 wthree_banner_bottom_grid_right">
								<h4 class="sub_service_agileits text-uppercase mb-2">Product Second</h4>
								<p class="mb-2">Morbi viverra lacus commodo felis semper, eu iaculis lectus feugiat egestas erat.</p>
								<div class="agileits-button two service">
									<a class="btn btn-primary btn-lg hvr-underline-from-left text-uppercase" href="#" data-toggle="modal" data-target="#exampleModalCenter" role="button">Read More »</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 agileits_banner_bottom_left mt-lg-0 mt-md-5 mt-4">
					<div class="agileinfo_banner_bottom_pos">
						<div class="row w3_agileits_banner_bottom_pos_grid">
							<div class="col-3 wthree_banner_bottom_grid_left">
								<div class="agile_banner_bottom_grid_left_grid hvr-radial-out text-center">
									<i class="fa fa-paint-brush" aria-hidden="true"></i>
								</div>
							</div>
							<div class="col-9 wthree_banner_bottom_grid_right">
								<h4 class="sub_service_agileits text-uppercase mb-2">Product Third</h4>
								<p class="mb-2">Morbi viverra lacus commodo felis semper, eu iaculis lectus feugiat egestas erat.</p>
								<div class="agileits-button two service">
									<a class="btn btn-primary btn-lg hvr-underline-from-left text-uppercase" href="#" data-toggle="modal" data-target="#exampleModalCenter" role="button">Read More »</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 agileits_banner_bottom_left mt-md-5 mt-4">
					<div class="agileinfo_banner_bottom_pos">
						<div class="row w3_agileits_banner_bottom_pos_grid">
							<div class="col-3 wthree_banner_bottom_grid_left">
								<div class="agile_banner_bottom_grid_left_grid hvr-radial-out text-center">
									<i class="fas fa-industry" aria-hidden="true"></i>
								</div>
							</div>
							<div class="col-9 wthree_banner_bottom_grid_right">
								<h4 class="sub_service_agileits text-uppercase mb-2">Product Fourth</h4>
								<p class="mb-2">Morbi viverra lacus commodo felis semper, eu iaculis lectus feugiat egestas erat.</p>
								<div class="agileits-button two service">
									<a class="btn btn-primary btn-lg hvr-underline-from-left text-uppercase" href="#" data-toggle="modal" data-target="#exampleModalCenter" role="button">Read More »</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 agileits_banner_bottom_left mt-md-5 mt-4">
					<div class="agileinfo_banner_bottom_pos">
						<div class="row w3_agileits_banner_bottom_pos_grid">
							<div class="col-3 wthree_banner_bottom_grid_left">
								<div class="agile_banner_bottom_grid_left_grid hvr-radial-out text-center">
									<i class="fa fa-fire" aria-hidden="true"></i>
								</div>
							</div>
							<div class="col-9 wthree_banner_bottom_grid_right">
								<h4 class="sub_service_agileits text-uppercase mb-2">Product Five</h4>
								<p class="mb-2">Morbi viverra lacus commodo felis semper, eu iaculis lectus feugiat egestas erat.</p>
								<div class="agileits-button two service">
									<a class="btn btn-primary btn-lg hvr-underline-from-left text-uppercase" href="#" data-toggle="modal" data-target="#exampleModalCenter" role="button">Read More »</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 agileits_banner_bottom_left mt-md-5 mt-4">
					<div class="agileinfo_banner_bottom_pos">
						<div class="row w3_agileits_banner_bottom_pos_grid">
							<div class="col-3 wthree_banner_bottom_grid_left">
								<div class="agile_banner_bottom_grid_left_grid hvr-radial-out text-center">
									<i class="fas fa-cogs" aria-hidden="true"></i>
								</div>
							</div>
							<div class="col-9 wthree_banner_bottom_grid_right">
								<h4 class="sub_service_agileits text-uppercase mb-2">Product Six</h4>
								<p class="mb-2">Morbi viverra lacus commodo felis semper, eu iaculis lectus feugiat egestas erat.</p>
								<div class="agileits-button two service">
									<a class="btn btn-primary btn-lg hvr-underline-from-left text-uppercase" href="#" data-toggle="modal" data-target="#exampleModalCenter" role="button">Read More »</a>
								</div>
							</div>
						</div>
					</div>
				</div>
		</div>
	</div>
</section>
<!-- //services -->

<!--Gallery -->
<section class="gallery indexgallery py-5 my-lg-5" id="gallery">
<div class="container">
	<h3 class="heading text-center text-uppercase">Foam Gallery</h3>
	<p class="heading-bottom text-center font-italic mb-5">Industrial Foam Business</p>
		<div class="agileinfo_work_grids">
			<div class="row">

				<?php
					$galleryQuery = "SELECT * FROM gallery";
					$galleryResult = mysqli_query($conn, $galleryQuery);
					$galleryCount = mysqli_num_rows($galleryResult); // 12

					$galleryColumns = ceil($galleryCount / 3); // 4

					$i = 0;
					$j = 0;


						while($i < $galleryColumns){

							echo "<div class='col-lg-3 col-md-6 col-sm-6 col-6 w3_agile_work_grid'>";

								while ($j < 3){
									$galleryRow = mysqli_fetch_array($galleryResult);
									echo "<div class='wthree_work_grid1'>
											<a href='".$galleryRow['imageLink']."' class='b-link-stripe b-animate-go  swipebox' title='".$galleryRow['name']."'>
												<div class='agile_work_grid w3_agileits_sub_work'>
												<img src='".$galleryRow['imageLink']."' class='img-responsive' />
												<div class='agileits_w3layouts_work text-center'>
													".$galleryRow['name']."
												</div>
												</div>
											</a>
										</div>";

									$j++;

								}

							echo "</div>";

							$j = 0;
							$i++;

						}

				?>

			</div>
		</div>
	</div>
</section>	
<!-- //Gallery -->

<!-- Clients -->
<section class="clients-main py-5" id="testimonials">
	<h3 class="heading text-center text-uppercase">Clients Reviews</h3>
	<p class="heading-bottom text-center font-italic mb-5">Industrial Foam Business</p>
		<div class="container">
			<!-- Owl-Carousel -->
			<div class="cli-ent">
				<section class="slider">
					<div class="flexslider">
						<ul class="slides">
							<?php 
							$reviewQuery = "SELECT * FROM clientreview";
							$reviewResult = mysqli_query($conn, $reviewQuery);

							while($row = $reviewResult -> fetch_assoc()){
							?>
							<li>
								<div class="item g1">
									<div class="agile-dish-caption">
									<img class="lazyOwl" src="<?php echo $row['imageLink']; ?>" alt="" />
										<h5 class="text-capitalize font-italic"><?php echo $row['name']; ?></h5>
										<h4 class="text-capitalize"><?php echo $row['heading']; ?></h4>
									</div>
									
									<div class="clearfix"></div>
									<p class="para-w3-agile text-center"><span class="fa fa-quote-left" aria-hidden="true"></span> <?php echo $row['data']; ?></p>
								</div>
							</li>
							<?php 

							}

							?>
						</ul>
					</div>
				</section>
			</div>
			<!--// Owl-Carousel -->
		</div>
</section>
<!--// Clients -->

<!-- Newsletter  -->
<section class="newsletter py-5 my-lg-5" id="newsletter">
	<h3 class="heading text-center text-uppercase">Subscribe Newsletter</h3>
	<p class="heading-bottom text-center font-italic mb-5">Industrial Revolution Business</p>
	<div class="container">
		<form action="#" method="post">
			<input type="email" name="email" placeholder="Enter Your Email..." required="">
			<input type="submit" class="text-uppercase" value="Send" name="Subscribe">
		</form>
	</div>
</section>
<!-- //Newsletter  -->

<?php include'include/footer.php'; ?>
<?php 
if(isset($_POST['Subscribe'])){ //check if form was submitted
    $email = $_POST['email'];
    $subscribeQuery = "INSERT INTO newsletter (email) VALUES ('".$email."')";
    $subscribeResult=mysqli_query($conn, $subscribeQuery);
}
?>