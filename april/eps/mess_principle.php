
<?php include 'include/header.php';?>


<div class="kingster-page-title-wrap  kingster-style-medium kingster-center-align" style="padding: 0px 0px 0px 0px; background-image: url(./asset/images/index/home_back.jpg); background-size: cover">
    <div class="kingster-header-transparent-substitute"></div>
    <div class="kingster-page-title-overlay"></div>
    <div class="kingster-page-title-container kingster-container">
        <div class="kingster-page-title-content kingster-item-pdlr" >
            <div class="kingster-page-caption">Messages</div>
            <h1 class="kingster-page-title" >Message From The Principal</h1></div>
    </div>
</div>
 <div class="kingster-breadcrumbs">
    <div class="kingster-breadcrumbs-container kingster-container">
        <div class="kingster-breadcrumbs-item kingster-item-pdlr"> <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Go to Kingster." href="index.php" class="home"><span property="name">Home</span></a>
            <meta property="position" content="1">
            </span>&gt;<span property="itemListElement" typeof="ListItem"><span property="name">Messages/Message From The Principal</span>
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
                                <div class="col-md-9 about-grids">
                                    <h5 class="ti">Dear students,</h5>
                                    <p class="para-w3-agile">
                                    <?php 
                                        include 'dashboard/include/connection.php';

                                        $checkQuery = "SELECT * FROM message";
                                        $checkResult = mysqli_query($conn, $checkQuery);

                                        $row = $checkResult -> fetch_assoc();

                                        echo $row['pstudent'];
                                    ?>
                                        
                                    </p>
                                </div>
                                <div class="col-md-2 ">
                                    <p class="para-w3-agile"><center><div class="card" style="width: 18rem;">
                                    <img src="asset/images/<?php echo $row['pimage']; ?>" class="card-img-top" alt="..." style="width: 17rem;">
                                        <div class="card-body">
                                            <h6 class="card-title" style="color:#122140"><?php echo $row['pname']; ?></h6>
                                            <p class="card-text">THE PRINCIPAL</p>
                                            <!--<span href="#" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style='color:white'>About The Principal</span>-->
                                        </div>
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
<div class="modal fade" id="exampleModal" tabindex="1" >
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">About the principal</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
            <center>
            <div class="card" style="width: 23rem;">
            <img src="asset/images/<?php echo $row['pimage']; ?>" class="card-img-top" alt="..." style="width: 17rem;">
            <div class="card-body">
            <h5 class="card-title" style="color:#dead25"><?php echo $row['pname']; ?></h5>
            <p class="card-text"><?php echo $row['pmessage']; ?></p>
            </div>
            </div>
            </center>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<?php include 'include/footer.php';?>
