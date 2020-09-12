
<?php include 'include/header.php';?>
<div class="kingster-page-title-wrap  kingster-style-medium kingster-center-align" style="padding: 0px 0px 0px 0px; background-image: url(./asset/images/index/home_back.jpg); background-size: cover">
    <div class="kingster-header-transparent-substitute"></div>
    <div class="kingster-page-title-overlay"></div>
    <div class="kingster-page-title-container kingster-container">
        <div class="kingster-page-title-content kingster-item-pdlr">
            <div class="kingster-page-caption">Home</div>
            <h1 class="kingster-page-title">EPS At Glance</h1></div>
    </div>
</div>
 <div class="kingster-breadcrumbs">
    <div class="kingster-breadcrumbs-container kingster-container">
        <div class="kingster-breadcrumbs-item kingster-item-pdlr"> <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Go to Kingster." href="index.php" class="home"><span property="name">Home</span></a>
            <meta property="position" content="1">
            </span>&gt;<span property="itemListElement" typeof="ListItem"><span property="name">EPS At Glance</span>
            <meta property="position" content="2">
            </span>
        </div>
    </div>
</div>
<div class="kingster-page-wrapper" id="kingster-page-wrapper">
    <div class="gdlr-core-page-builder-body">
        <div class="gdlr-core-pbf-wrapper " style="padding: 0px 0px 0px 0px;">
            <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-pbf-wrapper-full-no-space">
                    <div class="gdlr-core-pbf-element">
                        <div class="gdlr-core-blog-item gdlr-core-item-pdb clearfix  gdlr-core-style-blog-image-no-space gdlr-core-item-pdlr" style="padding-bottom: 50px ;">
                            <div class="gdlr-core-blog-item-holder gdlr-core-js-2 clearfix" data-layout="fitrows">
                                <div class="col-md-6 about-grids" style="color:black">
                                    <h5 style="margin: 20px;">Everything You want to know</h5>
                                    <?php 
                                        include 'dashboard/include/connection.php';

                                        $checkQuery = "SELECT * FROM home";
                                        $checkResult = mysqli_query($conn, $checkQuery);

                                        $row = $checkResult -> fetch_assoc();

                                        echo $row['glance'];
                                    ?>
                                </div>
                                <br>
                                 <div class="col-md-2 " style="display: inline-block">
                                    <p class="para-w3-agile"><center>
                                    <div class="card" style="width: 20rem;">
                                    <img src="asset/images/home/<?php echo $row['glance_image1'] ?>" class="card-img-top" alt="..." style="width: 20rem;">
                                    </div>
                                    </p>
                                </div>
                                 <div class="col-md-2 " style="display: inline-block;">
                                    <p class="para-w3-agile"><center><div class="card" style="width: 20rem;">
                                    <img src="asset/images/home/<?php echo $row['glance_image2'] ?>" class="card-img-top" alt="..." style="width: 20rem;">
                                    </div>
                                    </p>
                                </div>
                                <div class="col-md-2 " style="display: inline-block;">
                                    <p class="para-w3-agile"><center>
                                    <div class="card" style="width: 20rem;">
                                    <img src="asset/images/home/<?php echo $row['glance_image3'] ?>" class="card-img-top" alt="..." style="width: 20rem;">
                                    </div>
                                    </p>
                                </div>
                                 <div class="col-md-2 " style="display: inline-block;">
                                    <p class="para-w3-agile"><center><div class="card" style="width: 20rem;">
                                    <img src="asset/images/home/<?php echo $row['glance_image4'] ?>" class="card-img-top" alt="..." style="width: 20rem;">
                                    </div>
                                    </p>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'include/footer.php';?>
