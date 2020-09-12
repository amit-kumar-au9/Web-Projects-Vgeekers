<?php include 'include/header.php';?>
<?php 

    include 'dashboard/include/connection.php';
    $checkQuery = "SELECT * FROM contact_us";
    $checkResult = mysqli_query($conn, $checkQuery);

    $row = $checkResult -> fetch_assoc(); 
?>
<div class="kingster-page-wrapper" id="kingster-page-wrapper">
    <div class="gdlr-core-page-builder-body">
        <div class="gdlr-core-pbf-wrapper " style="padding: 250px 0px 160px 0px;">
            <div class="gdlr-core-pbf-background-wrap">
                <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" style="background-image: url(asset/images/index/index2.JPG) ;background-size: cover ;background-position: center ;" data-parallax-speed="0.3"></div>
            </div>
            <div class="gdlr-core-pbf-wrapper-content gdlr-core-js " data-gdlr-animation="fadeInUp" data-gdlr-animation-duration="600ms" data-gdlr-animation-offset="0.8">
                <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                    <div class="gdlr-core-pbf-element">
                        <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr">
                            <div class="gdlr-core-title-item-title-wrap clearfix">
                                <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 75px ;font-weight: 700 ;letter-spacing: 0px ;text-transform: none ;color: #ffffff ;">Contact Us</h3></div><span class="gdlr-core-title-item-caption gdlr-core-info-font gdlr-core-skin-caption" style="font-size: 25px ;font-style: normal ;color: #f2f2f2 ;margin-top: 25px ;">Get In Touch</span></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="gdlr-core-pbf-wrapper " style="padding: 50px 0px 40px 0px;" data-skin="White Text">
            <div class="gdlr-core-pbf-background-wrap" style="background-color: #161616 ;"></div>
            <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                    <div class="gdlr-core-pbf-column gdlr-core-column-20 gdlr-core-column-first">
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 50px 20px 0px 20px;">
                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js " data-gdlr-animation="fadeInUp" data-gdlr-animation-duration="600ms" data-gdlr-animation-offset="0.8">
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-icon-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 35px ;"><i class=" gdlr-core-icon-item-icon fa fa-phone" style="color: #ffffff ;font-size: 40px ;min-width: 40px ;min-height: 40px ;"></i></div>
                                </div>
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 25px ;">
                                        <div class="gdlr-core-title-item-title-wrap clearfix">
                                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 26px ;letter-spacing: 0px ;text-transform: none ;">Phone</h3></div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 0px ;">
                                        <div class="gdlr-core-text-box-item-content" style="font-size: 16px ;">
                                            <p>A wonderful serenity has taken possession of my entire soul, like these.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align">
                                        <div class="gdlr-core-text-box-item-content" style="font-size: 16px ;text-transform: none ;color: #3db166 ;">
                                            <p>
                                                <a>
                                                    +91 <?php echo $row['phone1']; ?> 
                                                    <?php 
                                                        if($row['phone2']!=""){         
                                                    ?>
                                                            || +91 <?php echo $row['phone2']; ?>
                                                    <?php 
                                                        }
                                                    ?>
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-column gdlr-core-column-20">
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 50px 20px 0px 20px;">
                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js " data-gdlr-animation="fadeInDown" data-gdlr-animation-duration="600ms" data-gdlr-animation-offset="0.8">
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-icon-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 35px ;"><i class=" gdlr-core-icon-item-icon fa fa-envelope-o" style="color: #ffffff ;font-size: 40px ;min-width: 40px ;min-height: 40px ;"></i></div>
                                </div>
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 25px ;">
                                        <div class="gdlr-core-title-item-title-wrap clearfix">
                                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 26px ;letter-spacing: 0px ;text-transform: none ;">Email</h3></div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 0px ;">
                                        <div class="gdlr-core-text-box-item-content" style="font-size: 16px ;">
                                            <p>A wonderful serenity has taken possession of my entire soul, like these.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align">
                                        <div class="gdlr-core-text-box-item-content" style="font-size: 16px ;">
                                             <p><a href="mailto:<?php echo $row['email1']; ?>"><?php echo $row['email1']; ?></a> 
                                                <?php 
                                                    if($row['email2']!=""){ 
                                                ?>
                                                <a href="mailto:<?php echo $row['email2']; ?>"> || <?php echo $row['email2']; ?></a>
                                                <?php 
                                                    }
                                                ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-column gdlr-core-column-20">
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 50px 20px 0px 20px;">
                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js " data-gdlr-animation="fadeInUp" data-gdlr-animation-duration="600ms" data-gdlr-animation-offset="0.8">
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-icon-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 35px ;"><i class=" gdlr-core-icon-item-icon fa fa-location-arrow" style="color: #ffffff ;font-size: 40px ;min-width: 40px ;min-height: 40px ;"></i></div>
                                </div>
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 25px ;">
                                        <div class="gdlr-core-title-item-title-wrap clearfix">
                                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 26px ;letter-spacing: 0px ;text-transform: none ;">Location</h3></div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 0px ;">
                                        <div class="gdlr-core-text-box-item-content" style="font-size: 16px ;">
                                            <p>Elite Public School, Chakbalarampur/Devpur<br>P.O. & P.S.-Pakur, District- Pakur, Jharkhand, India</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align">
                                        <div class="gdlr-core-text-box-item-content" style="font-size: 16px ;">
                                            <p><a href="#">Contact Us</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="gdlr-core-pbf-wrapper " style="padding: 115px 0px 40px 0px;">
            <div class="gdlr-core-pbf-background-wrap" style="background-color: #f3f3f3 ;"></div>
            <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                    <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first">
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js " style="max-width: 760px ;">
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr" style="padding-bottom: 60px ;">
                                        <div class="gdlr-core-title-item-title-wrap clearfix">
                                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 39px ;">Leave us your info</h3></div><span class="gdlr-core-title-item-caption gdlr-core-info-font gdlr-core-skin-caption" style="font-size: 19px ;font-style: normal ;text-transform: uppercase ;">and we will get back to you.</span></div>
                                </div>
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-contact-form-7-item gdlr-core-item-pdlr gdlr-core-item-pdb ">
                                        <div role="form" class="wpcf7" id="wpcf7-f1979-p1964-o1" lang="en-US" dir="ltr">
                                            <div class="screen-reader-response"></div>
                                            <form class="quform" method="post">
                                                <div class="quform-elements">
                                                    <div class="quform-element">
                                                        <p>Your Name (required)
                                                            <br>
                                                            <span class="wpcf7-form-control-wrap your-name">
                                                                <input id="name" type="text" name="name" size="40" class="input1" required aria-required="true" aria-invalid="false">
                                                            </span> 
                                                        </p>
                                                    </div>
                                                    <div class="quform-element">
                                                        <p>Your Email (required)
                                                            <br>
                                                            <span class="wpcf7-form-control-wrap your-email">
                                                                <input id="email" type="email" required name="email" size="40" class="input1" aria-required="true" aria-invalid="false">
                                                            </span> 
                                                        </p>
                                                    </div>
                                                    <div class="quform-element">
                                                        <p>Your Message (300 words)
                                                            <br>
                                                            <span class="wpcf7-form-control-wrap your-message">
                                                                <textarea  id="message" name="message" required cols="40" rows="10" maxlength="300" class="input1" aria-invalid="false"></textarea>
                                                            </span>
                                                        </p>
                                                    </div>
                                                    <p>
                                                        <!-- Begin Submit button -->
                                                        <div class="quform-submit">
                                                            <div class="quform-submit-inner">
                                                                <button type="submit" class="submit-button" name="sendContact">SEND</button>
                                                            </div>
                                                            <div class="quform-loading-wrap"><span class="quform-loading"></span></div>
                                                        </div>
                                                    </p>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="gdlr-core-pbf-wrapper " style="padding: 80px 0px 50px 0px;">
            <div class="gdlr-core-pbf-background-wrap" style="background-color: #ffffff ;"></div>
            <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                    <div class="gdlr-core-pbf-element">
                        <div class="gdlr-core-social-network-item gdlr-core-item-pdb  gdlr-core-center-align gdlr-core-item-pdlr"><a href="mailto:#" target="_blank" class="gdlr-core-social-network-icon" title="email" style="font-size: 20px ;color: #1e1e1e ;"><i class="fa fa-envelope" ></i></a><a href="#" target="_blank" class="gdlr-core-social-network-icon" title="facebook" style="font-size: 20px ;color: #1e1e1e ;margin-left: 40px ;"><i class="fa fa-facebook" ></i></a><a href="#" target="_blank" class="gdlr-core-social-network-icon" title="google-plus" style="font-size: 20px ;color: #1e1e1e ;margin-left: 40px ;"><i class="fa fa-google-plus" ></i></a><a href="#" target="_blank" class="gdlr-core-social-network-icon" title="skype" style="font-size: 20px ;color: #1e1e1e ;margin-left: 40px ;"><i class="fa fa-skype" ></i></a><a href="#" target="_blank" class="gdlr-core-social-network-icon" title="twitter" style="font-size: 20px ;color: #1e1e1e ;margin-left: 40px ;"><i class="fa fa-twitter" ></i></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'include/footer.php';?>

<?php 

    if(isset($_POST['sendContact'])){

        include 'dashboard/include/connection.php';

        $name = test_input($_POST['name']);
        $email = test_input($_POST['email']);
        $message = test_input($_POST['message']);   

        function test_input($data) {
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          return $data;
        }

        if($name!="" && $email!="" && $message!=""){

            $checkQuery = "INSERT INTO contacted (name, email, message) VALUES (".$name.", '".$email."', ".$message.")";

            if(mysqli_query($conn, $checkQuery)){

                echo "<script>window.alert('Contact Us ');window.location.href='contact.php';</script>";
            
            }
            else{
                echo "<script>window.alert('Retry');window.location.href='contact.php';</script>";
            }

        }

        else{

            echo "<script>window.alert('Fill all the fields');window.location.href='contact.php';</script>";
        
        }
    }

?>