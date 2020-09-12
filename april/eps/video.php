<?php include 'include/header.php';?>
 <div class="kingster-page-title-wrap  kingster-style-medium kingster-center-align" style="padding: 0px 0px 0px 0px; background-image: url(./asset/images/index/home_back.jpg); background-size: cover">
    <div class="kingster-header-transparent-substitute"></div>
    <div class="kingster-page-title-overlay"></div>
    <div class="kingster-page-title-container kingster-container">
        <div class="kingster-page-title-content kingster-item-pdlr">
            <div class="kingster-page-caption">Gallery</div>
            <h1 class="kingster-page-title">Video Gallery</h1>
        </div>
    </div>
</div>
<div class="kingster-breadcrumbs">
    <div class="kingster-breadcrumbs-container kingster-container">
        <div class="kingster-breadcrumbs-item kingster-item-pdlr"> <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Go to Kingster." href="index.php" class="home"><span property="name">Home</span></a>
            <meta property="position" content="1">
            </span>&gt;<span property="itemListElement" typeof="ListItem"><span property="name">Gallery/Video Gallery</span>
            <meta property="position" content="2">
            </span>
        </div>
    </div>
</div>
<div class="kingster-page-wrapper" id="kingster-page-wrapper">
    <div class="gdlr-core-page-builder-body">
        <div class="gdlr-core-pbf-wrapper " style="padding: 100px 20px 30px 20px;">
            <div class="gdlr-core-pbf-background-wrap"></div>
            <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-pbf-wrapper-full">
                    <div class="gdlr-core-pbf-element">
                        <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr" style="padding-bottom: 60px ;">
                            <div class="gdlr-core-title-item-title-wrap clearfix">
                                <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="text-transform: none ;">Beautiful Memories</h3>
                            </div>
                            <span class="gdlr-core-title-item-caption gdlr-core-info-font gdlr-core-skin-caption">EPS Gallery</span>
                            <?php 
                                include 'dashboard/include/connection.php';
                                $checkQuery = "SELECT * FROM video_gallery";
                                $checkResult = mysqli_query($conn, $checkQuery);

                                while($row = $checkResult -> fetch_assoc()){
                            ?>
                            <div class="card" style="width: 24rem;display: inline-block;margin:15px;">
                                <video controls style="width: 24rem;height:300px;">
                                    <source src="assets/images/gallery/<?php echo $row['video']; ?>" type="video/mp4">
                                </video>
                            </div>
                            <?php 
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'include/footer.php';?>