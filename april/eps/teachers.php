<?php include 'include/header.php';?>
<div class="kingster-page-title-wrap  kingster-style-medium kingster-center-align" style="padding: 0px 0px 0px 0px; background-image: url(./asset/images/index/home_back.jpg); background-size: cover">
    <div class="kingster-header-transparent-substitute"></div>
    <div class="kingster-page-title-overlay"></div>
    <div class="kingster-page-title-container kingster-container">
        <div class="kingster-page-title-content kingster-item-pdlr">
            <div class="kingster-page-caption">More Pages</div>
            <h1 class="kingster-page-title">Our Faculty</h1></div>
    </div>
</div>
 <div class="kingster-breadcrumbs">
    <div class="kingster-breadcrumbs-container kingster-container">
        <div class="kingster-breadcrumbs-item kingster-item-pdlr"> <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Go to Kingster." href="index.php" class="home"><span property="name">Home</span></a>
            <meta property="position" content="1">
            </span>&gt;<span property="itemListElement" typeof="ListItem"><span property="name">More Pages/ Faculty</span>
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
                                <center>
                                    <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="text-transform: none ;">Our Faculties</h3>
                                    <?php 
                                        include 'dashboard/include/connection.php';

                                        $checkQuery = "SELECT * FROM faculty";
                                        $checkResult = mysqli_query($conn, $checkQuery);

                                        while($row = $checkResult -> fetch_assoc()){
                                    ?>
                                    <div class="card" style="width: 27rem;display: inline-block;margin: 5px;">
                                        <img class="card-img-top" src="asset/images/faculty/<?php echo $row['image'] ?>" alt="Card image cap" style="height: 27rem">
                                        <div class="card-body">
                                            <h6 class="card-title"><?php echo $row['name']; ?></h6>
                                            <?php 
                                                if($row['qualification']  != ""){
                                            ?>
                                            <p class="card-text" style="color: #132241;font-size: 14px">
                                                <span style="font-weight: bold;">Qualification</span> : <?php echo $row['qualification']; ?>
                                            </p>
                                            <?php 
                                                }
                                                if($row['experience']  != ""){
                                            ?>
                                            <p class="card-text" style="color: #132241;font-size: 14px">
                                                <span style="font-weight: bold;">Expierence</span> : <?php echo $row['experience']; ?>
                                            </p>
                                            <?php 
                                                }
                                            ?>
                                            <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#demo">More Information
                                            </button>
                                            <div id="demo" class="collapse">
                                                <br>
                                                <?php 
                                                    if($row['email']  != ""){
                                                ?>
                                                <p class="card-text" style="color: #132241;font-size: 14px">
                                                <span style="font-weight: bold;">Email:</span> <?php echo $row['email']; ?>
                                                </p>
                                                <?php 
                                                    }
                                                    if($row['phone']  != ""){
                                                ?>
                                                <p class="card-text" style="color: #132241;font-size: 14px;">
                                                <span style="font-weight: bold;">Phone</span> :<?php echo $row['phone']; ?>
                                                </p>
                                                <?php 
                                                    }
                                                    if($row['address']  != ""){
                                                ?>
                                                <p class="card-text" style="color: #132241;font-size: 14px">
                                                    <span style="font-weight: bold;">Address</span> : <?php echo $row['address']; ?>
                                                </p>
                                                <?php 
                                                    }
                                                    if($row['DOB']  != ""){
                                                ?>
                                                <p class="card-text" style="color: #132241;font-size: 14px">
                                                    <span style="font-weight: bold;">DOB:</span> <?php echo $row['DOB']; ?>
                                                </p>
                                                <?php 
                                                    }
                                                    if($row['blood_grp']  != ""){
                                                ?>
                                                <p class="card-text" style="color: #132241;font-size: 14px;">
                                                    <span style="font-weight: bold;">Blood Group</span> :<?php echo $row['blood_grp']; ?>
                                                </p>
                                                <?php 
                                                    }
                                                    if($row['facebook'] != ""){
                                                ?>
                                                <p class="card-text" style="color: #132241;font-size: 14px">
                                                    <span style="font-weight: bold;">Facebook:</span> : <?php echo $row['facebook']; ?>
                                                </p>
                                                <?php 
                                                    }
                                                    if($row['linkedin']  != ""){
                                                ?>
                                                <p class="card-text" style="color: #132241;font-size: 14px">
                                                    <span style="font-weight: bold;">LinkedIn:</span> <?php echo $row['linkedin']; ?>
                                                </p>
                                                <?php 
                                                    }
                                                    if($row['twitter']  != ""){
                                                ?>
                                                <p class="card-text" style="color: #132241;font-size: 14px;">
                                                    <span style="font-weight: bold;">Twitter</span> :<?php echo $row['twitter']; ?>
                                                </p>
                                                <?php 
                                                    }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                    <?php 
                                        }
                                    ?>

                                </center>  
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'include/footer.php';?>