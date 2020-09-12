<?php require'include/header.php' ?>


    <!-- ***** Breadcrumb Area Start ***** -->
    <div class="breadcrumb-area">
        <div class="container h-100">
            <div class="row h-100 align-items-end">
                <div class="col-12">
                    <div class="breadcumb--con">
                        <h2 class="title">About</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">About</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <!-- Background Curve -->
        <div class="breadcrumb-bg-curve">
            <img src="./img/core-img/curve-5.png" alt="">
        </div>
    </div>
    <!-- ***** Breadcrumb Area End ***** -->

    <!-- ***** About Us Area Start ***** -->
    <section class="uza-about-us-area section-padding-80">
        <div class="container">
            <div class="row align-items-center">
                <!-- About Thumbnail -->
                

                <!-- About Us Content -->
                <div class="col-12 col-lg-12">
                    <div class="section-heading mb-5">
                        <h2>Our Mission</h2>
                    </div>

                    <div class="about-us-content mb-80">
                        <div class="about-tab-area">
                            <ul class="nav nav-tabs mb-50" id="mona_modelTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="tab1" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">CREATION</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="tab2" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false"> ANALYSIS</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="tab3" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false">STRATEGY</a>
                                </li>
                            </ul>
                        </div>

                        <!-- Mona Tab Content -->
                        <div class="about-tab-content">
                            <div class="tab-content" id="mona_modelTabContent">
                                <div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="tab1">
                                    <!-- Tab Content Text -->
                                    <div class="tab-content-text">
                                        <?php include 'dashboard/include/cons.php'; echo $creation; ?>
                                        <a href="contact.php" class="btn uza-btn mt-30">Get In Touch</a>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="tab2">
                                    <!-- Tab Content Text -->
                                    <div class="tab-content-text">
                                        <?php include 'dashboard/include/cons.php'; echo $strategy; ?>
                                        <a href="contact.php" class="btn uza-btn mt-30">Get In Touch</a>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="tab3">
                                    <!-- Tab Content Text -->
                                    <div class="tab-content-text">
                                        <?php include 'dashboard/include/cons.php'; echo $analysis; ?>
                                        <a href="contact.php" class="btn uza-btn mt-30">Get In Touch</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- About Background Pattern -->
        <div class="about-bg-pattern">
            <img src="./img/core-img/curve-2.png" alt="">
        </div>
    </section>
    <!-- ***** About Us Area End ***** -->

    <!-- ***** Why Choose Us Area Start ***** -->
    <section class="uza-why-choose-us-area">
        <div class="container">
            <div class="row align-items-center">
                <!-- Choose Us Content -->
                <div class="col-12 col-lg-6">
                    <div class="choose-us-content mb-80">
                        <div class="section-heading mb-4">
                            <h2>Why Choose Us</h2>
                            <p>We’re Your Partner in Your Success</p>
                        </div>
                        <ul>
                            <li><i class="fa fa-check" aria-hidden="true"></i> Distinctive Experts That Provide Effortless Expertise</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i> Enriched Outcomes Enabled By Experienced Professionals</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i> Wide-Ranging Thoughts Bread Exceptional Ideas</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i> Generating Best Results Through Open Communication</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i> Extensive Marketing Research Generates Valuable Insights</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i> We are Results-Driven, Oriented, We deliver results</li>
                        </ul>
                    </div>
                </div>
                <!-- Choose Us Thumbnail -->
                <div class="col-12 col-lg-6">
                    <div class="choose-us-thumbnail mb-80">
                        <img class="w-100" src="img/bg-img/22.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Why Choose Us Area End ***** -->

    <!-- ***** Team Member Area Start ***** -->
    <section class="uza-portfolio-area section-padding-80">
        <div class="container">
            <div class="row">
                <!-- Section Heading -->
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h2>Team of Experts</h2>
                        <p>We stay on top of our industry by being experts in yours.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <!-- Team Member Slides -->
                <div class="team-sildes owl-carousel">
                    <?php 
                        include 'dashboard/include/connection.php';
                        $checkTeam = "SELECT * FROM team_member";
                        $resultTeam = mysqli_query($conn, $checkTeam);
                        while($row = $resultTeam -> fetch_assoc()){

                    ?>
                            <!-- Single Team Slide -->
                            <div class="single-team-slide">
                                <img src="dashboard/images/team/<?php echo $row['image']; ?>" alt="Teacher">
                                <!-- Overlay Effect -->
                                <div class="overlay-effect">
                                    <h6><?php echo $row['designation']; ?></h6>
                                    <h4><?php echo $row['name']; ?></h4>
                                    <p><?php echo $row['description']; ?></p>
                                </div>
                                <!-- Social Info -->
                                <!-- <div class="team-social-info">
                                    <a href="#" class="facebook" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a>
                                    <a href="#" class="twitter" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a>
                                    <a href="#" class="pinterest" data-toggle="tooltip" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a>
                                    <a href="#" class="instagram" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram"></i></a>
                                    <a href="#" class="youtube" data-toggle="tooltip" data-placement="top" title="YouTube"><i class="fa fa-youtube-play"></i></a>
                                </div> -->
                            </div>

                    <?php 
                    }
                    ?>

                </div>
            </div>
        </div>

        <!-- Border -->
        <div class="container">
            <div class="border-line mt-80"></div>
        </div>
    </section>
    <!-- ***** Team Member Area End ***** -->

    <!-- ***** CTA Area Start ***** -->
    <div class="uza-cta-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-8">
                    <div class="cta-content mb-80">
                        <h2>Interested in working with us?</h2>
                        <h6>Hit the button below or give us a call!</h6>
                    </div>
                </div>

                <div class="col-12 col-lg-4">
                    <div class="cta-content mb-80">
                        <div class="call-now-btn">
                            <a href="#"><span>Call us now:</span> (+65) 1234 5678</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** CTA Area End ***** -->

<?php require'include/footer.php' ?>
