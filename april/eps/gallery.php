<?php include 'include/header.php';?>
<div class="kingster-page-title-wrap  kingster-style-medium kingster-center-align" style="padding: 0px 0px 0px 0px; background-image: url(./asset/images/index/home_back.jpg); background-size: cover">
    <div class="kingster-header-transparent-substitute"></div>
    <div class="kingster-page-title-overlay"></div>
    <div class="kingster-page-title-container kingster-container">
        <div class="kingster-page-title-content kingster-item-pdlr">
            <div class="kingster-page-caption">Gallery</div>
            <h1 class="kingster-page-title">Photo Gallery</h1>
        </div>
    </div>
</div>
<div class="kingster-breadcrumbs">
    <div class="kingster-breadcrumbs-container kingster-container">
        <div class="kingster-breadcrumbs-item kingster-item-pdlr"> <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Go to Kingster." href="index.php" class="home"><span property="name">Home</span></a>
            <meta property="position" content="1">
            </span>&gt;<span property="itemListElement" typeof="ListItem"><span property="name">Gallery/Photo Gallery</span>
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
                                <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="text-transform: none ;">Beautiful Memories</h3></div><span class="gdlr-core-title-item-caption gdlr-core-info-font gdlr-core-skin-caption">EPS Gallery</span></div>
                    </div>
                    <div class="gdlr-core-pbf-element">
                        <div class="gdlr-core-gallery-item gdlr-core-item-pdb clearfix  gdlr-core-gallery-item-style-grid">
                            <div class="gdlr-core-gallery-item-holder gdlr-core-js-2 clearfix" data-layout="fitrows">
                                <?php 
                                include 'dashboard/include/connection.php';
                                $checkQuery = "SELECT * FROM gallery";
                                $checkResult = mysqli_query($conn, $checkQuery);
                                $no = 1;
                                while($row = $checkResult -> fetch_assoc()){
                                ?>
                                    <div class="gdlr-core-item-list gdlr-core-gallery-column  gdlr-core-column-15 gdlr-core-item-pdlr gdlr-core-item-mgb <?php if($no==1){echo "gdlr-core-column-first"; $no=1;} ?>">
                                        <div class="gdlr-core-gallery-list gdlr-core-media-image">
                                            <a class="gdlr-core-lightgallery gdlr-core-js " href="asset/images/gallery/<?php echo $row['image']; ?>" data-lightbox-group="gdlr-core-img-group-1">
                                                <img src="asset/images/gallery/<?php echo $row['image']; ?>" width="700" height="660" alt="" />
                                                <span class="gdlr-core-image-overlay ">
                                                    <i class="gdlr-core-image-overlay-icon gdlr-core-size-22 fa fa-search"  ></i>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                <?php
                                    $no++;
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'include/footer.php';?>