<footer class="ftco-footer ftco-section">
  <div class="container" style="width:900px">
  	<div class="row">
  		<div class="mouse" style="z-index: 0;">
			<a href="#" class="mouse-icon">
				<div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
			</a>
		</div>
  	</div>
    <div class="row mb-5">
      <div class="col-md">
        <div class="ftco-footer-widget mb-4">
          <h2 class="ftco-heading-2">OrganiQa</h2>
        
          <!--<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>-->
       
          <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5" >
            <li class="ftco-animate"><i class="fa fa-twitter" style="font-size: 25px;margin: 10px;"></i></li>
            <li class="ftco-animate"><i class="fa fa-facebook" style="font-size: 25px;margin: 10px"></i></li>
            <li class="ftco-animate"><i class="fa fa-instagram" style="font-size: 25px;margin: 10px"></i></li>          
          </ul>
        </div>
      </div>
      <div class="col-md">
        <div class="ftco-footer-widget mb-4 ml-md-5">
          <h2 class="ftco-heading-2">Menu</h2>
          <ul class="list-unstyled">
            <li><a href="index.php#shop" class="py-2 d-block">Shop</a></li>
            <li><a href="index.php#aboutus" class="py-2 d-block">About</a></li>
            <li><a href="edit_profile.php" class="py-2 d-block">Edit Profile</a></li>
            <li><a href="your_orders.php" class="py-2 d-block">Your Orders</a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-4">
         <div class="ftco-footer-widget mb-4">
          <h2 class="ftco-heading-2">Help</h2>
          <div class="d-flex">
              <ul class="list-unstyled mr-l-5 pr-l-3 mr-4">
                <!--<li><a href="#" class="py-2 d-block">Shipping Information</a></li>-->
                <!--<li><a href="#" class="py-2 d-block">Returns &amp; Exchange</a></li>-->
                <li><a href="terms_and_condition.php" class="py-2 d-block">Terms &amp; Conditions</a></li>
                <li><a href="privacy_policy.php" class="py-2 d-block">Privacy Policy</a></li>
                <li><a href="faq.php" class="py-2 d-block">FAQs</a></li>
                <li><a href="contact.php" class="py-2 d-block">Contact</a></li>
              </ul>
              
            </div>
        </div>
      </div>
      <div class="col-md">
        <div class="ftco-footer-widget mb-4">
        	<h2 class="ftco-heading-2">Have a Questions?</h2>
        	<div class="block-23 mb-3">
              <ul>
                <?php
                  $query="SELECT * FROM home_page_details";
                  $data= mysqli_query($con, $query);
                  $total=mysqli_num_rows($data);
                  $result=mysqli_fetch_assoc($data);
                ?>
                <li id="a"><i class="fas fa-map-marker" style="font-size: 15px;margin:10px"></i><span class="text"><?php echo $result['address']?></span></li><br>
                <li><a href="#"><i class="fas fa-phone" style="font-size: 15px;margin:5px"></i><span class="text"><?php echo $result['phone']?></span></a></li>
                <li><a href="#"><i class="fas fa-envelope" style="font-size: 15px;margin: 10px"></i><span class="text"><?php echo $result['email']?><span></a></li>
              </ul>
            </div>
        </div>
      </div>
    </div>
    <div class="row" style="margin-top:-40px">
      <div class="col-md-12 text-center">

        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
					  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					</p>
      </div>
    </div>
  </div>
</footer>


<style type="text/css">
  @media (min-width: 100px) and (max-width: 1000px)
  {
    p
    {
    width: 300px;
    }
    #a
    {
      width: 300px;
    }
  }
</style>
<!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="asset/js/jquery.min.js"></script>
  <script src="asset/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="asset/js/popper.min.js"></script>
  <script src="asset/js/bootstrap.min.js"></script>
  <script src="asset/js/jquery.easing.1.3.js"></script>
  <script src="asset/js/jquery.waypoints.min.js"></script>
  <script src="asset/js/jquery.stellar.min.js"></script>
  <script src="asset/js/owl.carousel.min.js"></script>
  <script src="asset/js/jquery.magnific-popup.min.js"></script>
  <script src="asset/js/aos.js"></script>
  <script src="asset/js/jquery.animateNumber.min.js"></script>
  <script src="asset/js/bootstrap-datepicker.js"></script>
  <script src="asset/js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="asset/js/google-map.js"></script>
  <script src="asset/js/main.js"></script>

  </body>
</html>