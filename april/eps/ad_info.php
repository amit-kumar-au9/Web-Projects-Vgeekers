
<?php include 'include/header.php';?>

<div class="kingster-page-title-wrap  kingster-style-medium kingster-center-align" style="padding: 0px 0px 0px 0px; background-image: url(./asset/images/index/home_back.jpg); background-size: cover">
    <div class="kingster-header-transparent-substitute"></div>
    <div class="kingster-page-title-overlay"></div>
    <div class="kingster-page-title-container kingster-container">
        <div class="kingster-page-title-content kingster-item-pdlr">
            <div class="kingster-page-caption">Admission</div>
            <h1 class="kingster-page-title">Admission Information</h1></div>
    </div>
</div>
<div class="kingster-breadcrumbs">
    <div class="kingster-breadcrumbs-container kingster-container">
        <div class="kingster-breadcrumbs-item kingster-item-pdlr"> <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Go to Kingster." href="index.php" class="home"><span property="name">Home</span></a>
            <meta property="position" content="1">
            </span>&gt;<span property="itemListElement" typeof="ListItem"><span property="name">Admission//Admission Information</span>
            <meta property="position" content="2">
            </span>
        </div>
    </div>
</div>
<?php 
    include 'dashboard/include/connection.php';

    $checkQuery = "SELECT * FROM admission";
    $checkResult = mysqli_query($conn, $checkQuery);

    $row = $checkResult -> fetch_assoc();

?>
<div class="kingster-page-wrapper" id="kingster-page-wrapper">
    <div class="gdlr-core-page-builder-body">
        <div class="gdlr-core-pbf-wrapper " style="padding: 0px 0px 0px 0px;">
            <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-pbf-wrapper-full-no-space">
                    <div class="gdlr-core-pbf-element">
                        <div class="gdlr-core-blog-item gdlr-core-item-pdb clearfix  gdlr-core-style-blog-image-no-space gdlr-core-item-pdlr" style="padding-bottom: 50px ;">
                            <div class="gdlr-core-blog-item-holder gdlr-core-js-2 clearfix" data-layout="fitrows">
                                <div class="col-md-10 about-grids">
                                    <h5 class="ti">Admission Information</h5>
                                    <div class="para-w3-agile">
                                        <?php echo $row['code_of_conduct']; ?>
                                    </div>
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
