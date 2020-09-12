<?php require'include/header.php' ?>

    <!-- ***** Breadcrumb Area Start ***** -->
    <div class="breadcrumb-area">
        <div class="container h-100">
            <div class="row h-100 align-items-end">
                <div class="col-12">
                    <div class="breadcumb--con">
                        <h2 class="title">Info</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Info</li>
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

    <!-- ***** Information Start ***** -->
    <section>
        <div class="container">
            <div class="row">

                <!-- <?php 

                include 'dashboard/include/connection.php';

                $checkInfo = "SELECT * FROM info";
                $resultInfo = mysqli_query($conn, $checkInfo);

                while($row = $resultInfo -> fetch_assoc()){

                ?>

                <div class="col-md-3">
                    <img src="<?php $row['image']; ?>">
                    <h3><?php $row['name']; ?></h3>
                    <p><?php $row['description']; ?></p>
                </div>

                <?php 

                }
                
                ?> -->

            </div>
        </div>
        
    </section>

    <!-- ***** Information End ***** -->

    <!-- ***** Services Area Start ***** -->
    <section class="uza-services-area" style="margin-top: -30px">
        <div class="container">
            <div class="row">

                <?php 

                include 'dashboard/include/connection.php';

                $checkInfo = "SELECT * FROM info";
                $resultInfo = mysqli_query($conn, $checkInfo);

                while($row = $resultInfo -> fetch_assoc()){

                ?>

                <div class="col-md-3 col-sm-3 col-lg-3">
                    <div class="single-service-area mb-20">
                        <img src="dashboard/images/info/<?php echo $row['image']; ?>">
                        <h5><?php echo $row['name']; ?></h5>
                        <p><?php echo $row['description']; ?></p>
                    </div>
                </div>

                <?php 
                }
                ?>

            </div>
        </div>
    </section>
    <!-- ***** Services Area End ***** -->

    <!-- ***** Newsletter Area Start ***** -->
    <section class="uza-newsletter-area">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <!-- Newsletter Content -->
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="nl-content mb-80">
                        <h2>Subscribe to our Newsletter</h2>
                        <p>Subscribe our newsletter gor get notification about new updates, etc...</p>
                    </div>
                </div>
                <!-- Newsletter Form -->
                <div class="col-12 col-md-6 col-lg-5">
                    <div class="nl-form mb-80">
                        <form action="#" method="post">
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

<?php
require 'dashboard/include/connection.php';
if(isset($_POST['Subscribe'])){ //check if form was submitted

    $email = test_input($_POST['email']);
    $checkQuery = "INSERT INTO newsletter (email) VALUES ('".$email."')";
    $checkResult=mysqli_query($conn, $checkQuery);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>