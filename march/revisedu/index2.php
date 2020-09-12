<?php require'include/header.php'; ?>
<link rel="stylesheet" type="text/css" href="assets/css/animate.css">
    <div class="booking-area location-search">
        <div class="container">
           <div class="row ">
                <!-- <div class="col-12"> -->
                    <form action="">
                        <div class="booking-wrap d-flex justify-content-between align-items-center">
                            <div class="col-12 searchHeading" align="center">
                                <h1>Find Coaching Center</h1>
                            </div>
                            <!-- Single Select Box -->
                            <div class="searchbox" align="center">
                                <div class="boking-tittle" align="center">
                                    <span>Select your City</span>
                                </div>
                                <div class="select-this">
                                    <form action="#">
                                        <div class="select-itms">
                                            <select name="select" id="select1" class="form-control ">
                                                <option value="">Select your city</option>
                                                <option value="">Noida</option>
                                                <option value="">Delhi</option>
                                                <option value="">Jaipur</option>

                                            </select>
                                        </div>
                                    </form>
                                </div>
                           </div>
                            <!-- Single Select Box -->
                            <div class="searchbox" align="center">
                                <div class="boking-tittle" align="center">
                                    <span>Select your Location</span>
                                </div>
                                <div class="select-this">
                                    <form action="#">
                                        <div class="select-itms">
                                            <select name="select" id="select1" class="form-control ">
                                                <option value="">Select your location</option>
                                                <option value="">Noida 65</option>
                                                <option value="">Noida 66</option>
                                                <option value="">Noida 67</option>

                                            </select>
                                        </div>
                                    </form>
                                </div>
                           </div>
                            <!-- Single Select Box -->
                            <div class="searchbox ">
                                <div class="boking-tittle" align="center">
                                    <span>Select Your Class</span>
                                </div>
                                <div class="select-this">
                                    <form action="#">
                                        <div class="select-itms">
                                            <select name="select" id="select1" class="form-control ">
                                                <option value="">Select Class</option>
                                                <option value="">8</option>
                                                <option value="">9</option>
                                                <option value="">10</option>

                                            </select>
                                        </div>
                                    </form>
                                </div>
                           </div>
                            <!-- Single Select Box -->
                            <div class="searchbox" align="center">
                                <div class="boking-tittle" align="center">
                                    <span>Select Your Subject</span>
                                </div>
                                <div class="select-this">
                                    <form action="#">
                                        <div class="select-itms">
                                            <select name="select" id="select2" class="form-control ">
                                                <option value="">Select Subject</option>
                                                <option value="">English</option>
                                                <option value="">Hindi</option>
                                                <option value="">Science</option>
                                            </select>
                                        </div>
                                    </form>
                                </div>
                           </div>
                            <!-- Single Select Box -->
                            <div class="col" align="center">
                                <a href="#" class="btn select-btn">Search</a>
                           </div>
                       

                        </div>
                    </form>
                <!-- </div> -->
           </div>
        </div>
    </div>
    <!-- ***** Welcome Area Start ***** -->
    <section class="welcome-area" id="home-section">

    <!-- Filter End-->

        <div class="welcome-slides owl-carousel">
            <!-- Single Welcome Slide -->
            <div class="single-welcome-slide">
                <!-- Background Curve -->
                <div class="background-curve">
                    <img src="assets/images/curve-1.png" alt="">
                </div>

                <!-- Welcome Content -->
                <div class="welcome-content h-100">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <!-- Welcome Text -->
                            <div class="col-md-6">
                                <div class="welcome-text animated bounceInUp">
                                    <!-- <span> -->
                                        <h2 >RevisEdu makes your <br> study <span>easier</span></h2>
                                        <h6>STUDY ANTHING ANYTIME ANYWHERE YOU WANT</h6>
                                        <!--<a href="#" class="btn btn3 uza-btn btn-2">Start Exploring</a>-->
                                    <!-- </span> -->
                                </div>
                            </div>
                            <!-- Welcome Thumbnail -->
                            <div class="col-md-6">
                                <div class="welcome-thumbnail animated bounceInRight">
                                    <img src="assets/images/1.png" alt="" data-animation="slideInRight" data-delay="400ms">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--<div >-->
        <!--    <img  src="assets/images/banner/banner2.png" style=";width: -webkit-fill-available;height:300px">-->
        <!--</div>-->
    </section>
    <!-- ***** Welcome Area End ***** -->


    <!-- ***** Portfolio Area Start ***** -->

    <!-- First Package Area Start -->
    <?php 
    require 'dashboard/include/connection.php';

    $checkQuery = "SELECT * FROM package_name WHERE id=1";
    $checkResult = mysqli_query($conn, $checkQuery);

    $row = $checkResult -> fetch_assoc();

    ?>
    <section class="uza-portfolio-area section-padding-80" id="package-section">
        <div class="container mb-30" align="center" style="width:800px">
            <h1 class="coaching_heading">Find Coaching Center</h1>
        </div>
        <div class="container">
            <div class="row">
                <!-- Section Heading -->
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h2 class="mt1-20 animated lightSpeedIn"><?php echo $row['name']; ?></h2>
                        <p><?php echo $row['description']; ?></p>
                    </div>
                </div>
            </div>
        </div>
    <?php 

    $checkQuery = "SELECT * FROM package WHERE type=1";
    $checkResult = mysqli_query($conn, $checkQuery);

    ?>
        <div class="container-fluid">
            <div class="row">
                <!-- Portfolio Slides -->
                <div class="portfolio-sildes owl-carousel">

                    <?php 

                    while ($row = $checkResult -> fetch_assoc()) {
                    ?>
                    <!-- Single Portfolio Slide -->
                    
                        <div class="single-portfolio-slide animated bounceInLeft">
                            <a href="http://<?php echo $row['sub_domain']; ?>.revisedu.com">
                                <img src="assets/images/package/<?php echo $row['image']; ?>">
                                <!-- Overlay Effect -->
                                <div class="overlay-effect">
                                    <h4><?php echo $row['name']; ?></h4>
                                    <p><?php echo $row['description']; ?></p>
                                </div>
                                <!-- View More -->
                                <div class="view-more-btn">
                                    <a href="#"><i class="arrow_right"></i></a>
                                </div>
                            </a>
                        </div>
                    
                    <?php 
                    }
                    ?>


                </div>
            </div>
        </div>

        <!-- First Package Area End -->

        <div class="container">
            <div class="row">
                <!-- Section Heading -->
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h2>Offer's on Package</h2>
                        <!-- <p>A short line on first package</p> -->
                    </div>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/css/offer.css" rel="stylesheet">

        <?php 
            require 'dashboard/include/connection.php';
            $checkQuery = "SELECT * FROM offers";
            $checkResult = mysqli_query($conn, $checkQuery);
            $no_rows=mysqli_num_rows($checkResult);
        ?>
        <div class="container-fluid">
           <section class="customer-logos slider">
            <?php 
                while ($row = $checkResult -> fetch_assoc()) {
            ?>
                    <div class="slide">
                        <img src="assets/images/offer/<?php echo $row['image'];?>">
                    </div>
            <?php 
                }
            ?>
           </section>
        </div>

        <!-- Offers Area End -->


<?php 
    require 'dashboard/include/connection.php';

    $checkQuery = "SELECT * FROM package_name WHERE id=2";
    $checkResult = mysqli_query($conn, $checkQuery);

    $row = $checkResult -> fetch_assoc();
    
?>
        <!-- Second Package Area Start -->

        <div class="container">
            <div class="row">
                <!-- Section Heading -->
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h2><?php echo $row['name']; ?></h2>
                        <p><?php echo $row['description']; ?></p>
                    </div>
                </div>
            </div>
        </div>

<?php 

    $checkQuery = "SELECT * FROM package WHERE type=2";
    $checkResult = mysqli_query($conn, $checkQuery);

    ?>
        <div class="container-fluid">
            <div class="row">
                <!-- Portfolio Slides -->
                <div class="portfolio-sildes owl-carousel">

                    <?php 

                    while ($row = $checkResult -> fetch_assoc()) {
                    ?>
                    <!-- Single Portfolio Slide -->
                    <div class="single-portfolio-slide animated bounceInLeft">
                            <a href="http://<?php echo $row['sub_domain']; ?>.revisedu.com">
                                <img src="assets/images/package/<?php echo $row['image']; ?>">
                                <!-- Overlay Effect -->
                                <div class="overlay-effect">
                                    <h4><?php echo $row['name']; ?></h4>
                                    <p><?php echo $row['description']; ?></p>
                                </div>
                                <!-- View More -->
                                <div class="view-more-btn">
                                    <a href="#"><i class="arrow_right"></i></a>
                                </div>
                            </a>
                        </div>
                    <?php 
                    }
                    ?>


                </div>
            </div>
        </div>
</section>
<!-- Second Package Area End -->
<?php 
$checkQuery = "SELECT * FROM aboutus";
$resultQuery = mysqli_query($conn, $checkQuery);
$row = $resultQuery -> fetch_assoc();

?>
<section>
    <div class="mt-20">
        <img  src="assets/images/banner/<?php echo $row['banner']; ?>" style=";width: -webkit-fill-available;height: 300px;">
    </div>
    
</section>
        
<!-- Third Package Area Start -->
<section class="uza-portfolio-area section-padding-80" id="package-section">

<?php 
    require 'dashboard/include/connection.php';

    $checkQuery = "SELECT * FROM package_name WHERE id=3";
    $checkResult = mysqli_query($conn, $checkQuery);

    $row = $checkResult -> fetch_assoc();
    
?>
        <div class="container">
            <div class="row">
                <!-- Section Heading -->
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h2><?php echo $row['name']; ?></h2>
                        <p><?php echo $row['description']; ?></p>
                    </div>
                </div>
            </div>
        </div>

<?php 

    $checkQuery = "SELECT * FROM package WHERE type=3";
    $checkResult = mysqli_query($conn, $checkQuery);

?>
        <div class="container-fluid">
            <div class="row">
                <!-- Portfolio Slides -->
                <div class="portfolio-sildes owl-carousel">

                    <?php 

                    while ($row = $checkResult -> fetch_assoc()) {
                    ?>
                    <!-- Single Portfolio Slide -->
                    <div class="single-portfolio-slide animated bounceInLeft">
                            <a href="http://<?php echo $row['sub_domain']; ?>.revisedu.com">
                                <img src="assets/images/package/<?php echo $row['image']; ?>">
                                <!-- Overlay Effect -->
                                <div class="overlay-effect">
                                    <h4><?php echo $row['name']; ?></h4>
                                    <p><?php echo $row['description']; ?></p>
                                </div>
                                <!-- View More -->
                                <div class="view-more-btn">
                                    <a href="#"><i class="arrow_right"></i></a>
                                </div>
                            </a>
                        </div>
                    <?php 
                    }
                    ?>


                </div>
            </div>
        </div>

        <!-- Third Package Area End -->
        
    <!-- ***** Cool Facts Area Start ***** -->
    <div class="uza-cf-area section-padding-80-0 mb-80">
        <div class="container">
            <div class="row animated fadeInUp">

                <?php 
                include 'dashboard/include/connection.php';

                $VendorCount = mysqli_query($conn, "SELECT * FROM vendordetail");
                $vendor_row = mysqli_num_rows($VendorCount);

                $UserCount = mysqli_query($conn, "SELECT * FROM userdetail");
                $user_row = mysqli_num_rows($UserCount);

                ?>

                <!-- Single Cool Facts Area -->
                <div class="col-sm-6 col-lg-3 col-xs-6">
                    <div class="single-cf-area d-flex align-items-center">
                        <h2><span class="counter"><?php echo $user_row; ?></span></h2>
                        <div class="cf-text">
                            <h6>Happy<br>Students</h6>
                        </div>
                        <div class="bg-icon"><i class="icon_piechart"></i></div>
                    </div>
                </div>

                <!-- Single Cool Facts Area -->
                <div class="col-sm-6 col-lg-3 col-xs-6">
                    <div class="single-cf-area d-flex align-items-center">
                        <h2><span class="counter"><?php echo $vendor_row; ?></span></h2>
                        <div class="cf-text">
                            <h6>Happy<br>Vendors</h6>
                        </div>
                        <div class="bg-icon"><i class="icon_heart_alt"></i></div>
                    </div>
                </div>

                <!-- Single Cool Facts Area -->
                <div class="col-sm-6 col-lg-3 col-xs-6">
                    <div class="single-cf-area d-flex align-items-center ">
                        <h2><span class="counter">50</span></h2>
                        <div class="cf-text">
                            <h6>Hours of<br>Learning</h6>
                        </div>
                        <div class="bg-icon"><i class="icon_book_alt"></i></div>
                    </div>
                </div>

                <!-- Single Cool Facts Area -->
                <div class="col-sm-6 col-lg-3 col-xs-6">
                    <div class="single-cf-area d-flex align-items-center ">
                        <h2><span class="counter">20</span></h2>
                        <div class="cf-text">
                            <h6>Average Teacher<br>Ranking</h6>
                        </div>
                        <div class="bg-icon"><i class="icon_profile"></i></div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- ***** Cool Facts Area End ***** -->

        <!-- Testimonials Feedback Area Start -->
        <div class="clients-feedback-area clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Testimonial Slides -->
                        <div class="testimonial-slides owl-carousel">
                            <?php 
                                require 'dashboard/include/connection.php';
                                $checkQuery = "SELECT * FROM testimonials";
                                $checkResult = mysqli_query($conn, $checkQuery);
                                $no_rows=mysqli_num_rows($checkResult);
                                if ($no_rows>0) {
                                    for($sno=1;$sno<=$no_rows;$sno++){
                                        $row = $checkResult->fetch_assoc();

                            ?>

                            <!-- Single Testimonial Slide -->
                            <div class="single-testimonial-slide d-flex align-items-center animated fadeInUp">
                                <!-- Testimonial Thumbnail -->
                                <div class="testimonial-thumbnail">
                                    <img src="assets/images/<?php echo $row['image']; ?>" alt="">
                                </div>
                                <!-- Testimonial Content -->
                                <div class="testimonial-content">
                                    <h4>“<?php echo $row['content']; ?>”</h4>
                                    <!-- Ratings -->
                                    <div class="ratings">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                    </div>
                                    <!-- Author Info -->
                                    <div class="author-info">
                                        <h5><?php echo $row['name']; ?> <span>- <?php echo $row['school']; ?></span></h5>
                                    </div>
                                    <!-- Quote Icon -->
                                    <div class="quote-icon"><img src="assets/images/quote.png" alt=""></div>
                                </div>
                            </div>
                            <?php 
                                    }
                                }
                            ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonials Feedback Area End -->


        <!-- Border -->
        <div class="container">
            <div class="border-line"></div>
        </div>

        <!-- Background Curve -->
        <div class="portfolio-bg-curve">
            <img src="assets/images/curve-3.png" alt="">
        </div>
    </section>
    <!-- ***** Portfolio Area End ***** -->

    <!-- ***** About Us Area Start ***** -->
    <section class="uza-about-us-area">
        <div class="container">
            <div class="row align-items-center animated bounceInUp mb-40">

                <!-- About Thumbnail -->
                <div class="col-12 col-md-6 col-xs-6">
                    <div class="about-us-thumbnail">
                        <video controls="controls" width="100%" height="100%" src="assets/images/video/revisedu.mp4" frameborder="0" allowfullscreen></video>
                        <!-- Video Area -->
                        <!-- <div class="uza-video-area hi-icon-effect-8">
                            <a href="https://www.youtube.com/watch?v=sSakBz_eYzQ" class="hi-icon video-play-btn"><i class="fa fa-play" aria-hidden="true"></i></a>
                        </div> -->
                    </div>
                </div>

                <!-- About Us Content -->
                <div class="col-12 col-md-6 col-xs-6">
                    <div class="about-us-content">
                        <h2>Short video for tuition center owner's</h2>
                        <p>Our technology enables teachers to provide study notes, assignments and take attendance through our App. It enables students to complete assignments, give online tests.</p>
                        <p> It also helps parents in having a detailed view of class taken, subjects learnt and assignments evaluation.</p>
                        <a href="#" class="btn uza-btn btn-2">Start Exploring</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- About Background Pattern -->
        <div class="about-bg-pattern">
            <img src="assets/images/curve-2.png" alt="">
        </div>
    </section>
    <!-- ***** About Us Area End ***** -->

    <!-- ***** Blog Area Start ***** -->
    <section class="uza-blog-area" id="blog-section">
        <!-- Background Curve -->
        <div class="blog-bg-curve">
            <img src="assets/images/curve-4.png" alt="">
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center animated bounceInRight">
                        <h2 >Our Latest Blogs</h2>
                        <p>Hit the button below or give us a call!</p>
                    </div>
                </div>
            </div>

            <?php 
                require 'dashboard/include/connection.php';
                $checkQuery = "SELECT * FROM blogs";
                $checkResult = mysqli_query($conn, $checkQuery);
            ?>         
            <div class="container-fluid">
                <div class="row">
                    <!-- Portfolio Slides -->
                    <div class="testimonial-slides owl-carousel">

                        <?php 
                        while ($row = $checkResult -> fetch_assoc()) {
                        ?>
                        <!-- Single Portfolio Slide -->
                        <div class="single-portfolio-slide">
                            <div class="single-blog-post bg-img mb-80 animated slideInLeft" style="background-image: url(assets/images/8.jpg);">
                                <div class="post-content about-us-content">
                                    <h2><?php echo $row['heading']; ?></h2>
                                    <p><?php echo $row['content']; ?></p>
                                </div>
                            </div>
                        </div>
                        <?php 
                        }
                        ?>

                    </div>
                </div>
            </div>
        </div>




    <!-- CTA Area Start -->
        <div class="uza-cta-area" id="interested-section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-8">
                        <div class="cta-content mb-40">
                            <h2>Interested in working with us?</h2>
                            <h6>Hit the button below or give us a call!</h6>
                        </div>
                    </div>

                    <div class="col-12 col-lg-4">
                        <div class="cta-content mb-40">
                            <div class="call-now-btn">
                                <a href="#"><span>Call us now:</span><span style="color:#1583E9">(+91)93897 81978</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- CTA Area End -->

    </section>
    <!-- ***** Blog Area End ***** -->

    <!-- ***** Newsletter Area Start ***** -->
    <section class="uza-newsletter-area">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <!-- Newsletter Content -->
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="nl-content mb-40">
                        <h2>Subscribe to our Newsletter</h2>
                        <p>Subscribe our newsletter gor get notification about new updates, etc...</p>
                    </div>
                </div>
                <!-- Newsletter Form -->
                <div class="col-12 col-md-6 col-lg-5">
                    <div class="nl-form mb-40">
                        <form action="" method="post">
                            <input type="email" name="email" value="" placeholder="Your Email">
                            <button type="submit" name="Subscribe">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Border Bottom -->
            <div class="border-line"></div>
        </div>
    </section>
    <!-- ***** Newsletter Area End ***** -->

<?php require'include/footer.php' ?>
<!--Offer slider js-->
<script type="text/javascript">
    $(document).ready(function(){
    $('.customer-logos').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 4
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 3
            }
        }]
    });
});
</script>
<!--Offer slider js-->

<script type="text/javascript">
    
$(document).ready(function() {
  $("#myCarousel").on("slide.bs.carousel", function(e) {
    var $e = $(e.relatedTarget);
    var idx = $e.index();
    var itemsPerSlide = 3;
    var totalItems = $(".carousel-item").length;

    if (idx >= totalItems - (itemsPerSlide - 1)) {
      var it = itemsPerSlide - (totalItems - idx);
      for (var i = 0; i < it; i++) {
        // append slides to end
        if (e.direction == "left") {
          $(".carousel-item")
            .eq(i)
            .appendTo(".carousel-inner");
        }
        else {
          $(".carousel-item")
            .eq(0)
            .appendTo($(this).find(".carousel-inner"));
        }
      }
    }
  });
});


</script>
<?php 
if(isset($_POST['Subscribe'])){ //check if form was submitted
    $email = $_POST['email'];
    $checkQuery = "INSERT INTO newsletter (email) VALUES ('".$email."')";
    $checkResult=mysqli_query($conn, $checkQuery);
}
?>