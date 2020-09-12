<?php include 'include/header.php'; ?>

<?php 
    require 'dashboard/include/connection.php';
    $checkQuery = "SELECT * FROM subject_name";
    $checkResult = mysqli_query($conn, $checkQuery);
?>
    <!-- ***** Services Area Start ***** -->
    <section class="uza-services-area section-padding-80-0" id="services-section">
        <div class="container">
            <div class="row">
                <!-- Section Heading -->
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h2 class="mt1-20 animated slideInLeft">Our Subject</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <?php 
                    while($row = $checkResult -> fetch_assoc()){
                ?>
                        <!-- Single Service Area -->
                        <div class="col-lg-4 col-xs-4">
                            <div class="single-service-area hit_button mb-20" data-id="<?php echo $row['subject']; ?>">
                                <!-- Service Icon -->
                                <div class="service-icon">
                                    <i class="icon_cone_alt"></i>
                                </div>
                                <h5 class="animated bounceInUp"><?php echo $row['subject']; ?></h5>
                            </div>
                        </div>
                <?php 
                    }
                ?>
            </div>
        </div>
    </section>
    <!-- ***** Services Area End ***** -->

        <!-- ***** Portfolio Area Start ***** -->

    <!-- First Package Area Start -->
    <?php 
    require 'dashboard/include/connection.php';

    $checkQuery = "SELECT * FROM package_name WHERE id=1";
    $checkResult = mysqli_query($conn, $checkQuery);

    $row = $checkResult -> fetch_assoc();

    ?>
    <section class="uza-portfolio-area section-padding-80" id="package-section">
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
                <div class="owl-carousel portfolio-sildes1 package_first">

                    <?php 

                    while ($row = $checkResult -> fetch_assoc()) {
                    ?>
                    <!-- Single Portfolio Slide -->
                    <div class="single-portfolio-slide animated bounceInRight">
                        <img src="dashboard/images/package/<?php echo $row['image']; ?>" alt="">
                        <div class="overlay-effect">
                            <h4><?php echo $row['name']; ?></h4>
                            <p><?php echo $row['description']; ?></p>
                        </div>
                        <div class="view-more-btn">
                            <a href="#"><i class="arrow_right"></i></a>
                        </div>
                    </div>
                    <?php 
                    }
                    ?>

                </div>
            </div>
        </div>

        <!-- First Package Area End -->

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
                        <img src="dashboard/images/package/<?php echo $row['image']; ?>" alt="">
                        <!-- Overlay Effect -->
                        <div class="overlay-effect">
                            <h4><?php echo $row['name']; ?></h4>
                            <p><?php echo $row['description']; ?></p>
                        </div>
                        <!-- View More -->
                        <div class="view-more-btn">
                            <a href="#"><i class="arrow_right"></i></a>
                        </div>
                    </div>
                    <?php 
                    }
                    ?>


                </div>
            </div>
        </div>

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
                    <div class="single-portfolio-slide animated bounceInRight">
                        <img src="dashboard/images/package/<?php echo $row['image']; ?>" alt="">
                        <!-- Overlay Effect -->
                        <div class="overlay-effect">
                            <h4><?php echo $row['name']; ?></h4>
                            <p><?php echo $row['description']; ?></p>
                        </div>
                        <!-- View More -->
                        <div class="view-more-btn">
                            <a href="#"><i class="arrow_right"></i></a>
                        </div>
                    </div>
                    <?php 
                    }
                    ?>


                </div>
            </div>
        </div>

        <!-- Third Package Area End -->

        <!-- Border -->
        <div class="container">
            <div class="border-line"></div>
        </div>

        <!-- Background Curve -->
        <div class="portfolio-bg-curve">
            <img src="./img/core-img/curve-3.png" alt="">
        </div>
    </section>
    <!-- ***** Portfolio Area End ***** -->
<?php include 'include/footer.php'; ?>
<script type="text/javascript">
    
    $('.hit_button').on('click', function() {
        var subject = $(this).data('id');
        // console.log(subject);
        $.ajax({
            'type' : 'get',
            'url' : 'tution.php?subject='+subject,
            'data' : subject,
            success : function(response){
                var json = JSON.parse(response);
                if(!json.error){
                    // console.log(json.message[0].image);
                    var first_package = '';
                    $.each(json.message,function(key,value){
                        first_package += '<div class="single-portfolio-slide animated bounceInRight"><img src="dashboard/images/package/'+json.message[key].image+'" ><div class="overlay-effect"><h4>'+json.message[key].name+'</h4><p>'+json.message[key].description+'</p></div><div class="view-more-btn"><a href="#"><i class="arrow_right"></i></a></div></div>';
                    });
                    $('.package_first').addClass('portfolio-sildes1').html(first_package);
                }
                else{
                    console.log(json.message);
                }
            }
        });
    });

</script>