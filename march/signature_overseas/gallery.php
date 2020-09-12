<?php include 'include/header.php'; ?>

<!-- inner page banner -->
<section class="inner_page_banner text-center pt-4">
	<h2 class="page_heading text-uppercase pt-md-5 pt-sm-4">Gallery Page</h2>
	<h4 class="text-uppercase pt-2"><a href="index.php">Home</a> - Gallery Page</h4>
</section>
<!-- //inner page banner -->

<!--Gallery -->
<section class="gallery py-5 my-lg-5" id="gallery">
<div class="container">
	<h3 class="heading text-center text-uppercase">Foam Gallery</h3>
	<p class="heading-bottom text-center font-italic mb-5">Industrial Revolution Business</p>
		<div class="agileinfo_work_grids">
			<div class="row">
				<div class="col-lg-12 mb-lg-0 mb-sm-5 mb-4 w3_agile_work_grid gallery1">
					<h3 class="text-capitalize">Our industrial infrastructure</h3>
					<p class="text-capitalize py-4">Orci varius natoque penatibus ettdis magnis disk parturient montes, init nascetur ridiculus mus. Ut molestie venenatis nunc, in pellentesque nu llacursus sit amet. Curabitur imper diet lectus sit amet turpis pellentes que euismod. Vivamus lorem elite. Donec eget consequat elit. Aenean ettellus ut massa sodales luctus. In Pellentesque vulputate, neque ac varius ornare, urna velit fringilla sapien, ac lacinia tortor risus nec orci. Quisque lobortis eu dui id scelerisque.</p>
					<!-- <div class="read">
						<a href="#">Explore</a>
					</div> -->
				</div>

				<?php
					include 'dashboard/include/connection.php';
					$galleryQuery = "SELECT * FROM gallery";
					$galleryResult = mysqli_query($conn, $galleryQuery);
					$galleryCount = mysqli_num_rows($galleryResult); // 12

					$galleryColumns = ceil($galleryCount / 3); // 4

					$i = 0;
					$j = 0;


						while($i < $galleryColumns){

							echo "<div class='col-lg-3 col-sm-4 col-6 w3_agile_work_grid'>";

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

<?php include 'include/footer.php'; ?>
