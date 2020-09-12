<?php include 'include/header_admin.php' ?>
<?php include 'include/sidebar_admin.php' ?>

        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Offers</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="studentDashboard.php">Dashboard</a></li>
                            <li class="active">Offers</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h2 class="page-title">ADD NEW OFFER</h2>


                            <form class="form-horizontal form-material" action="" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <input class="btn btn-success" name="UploadImage" type="file" value="Upload Image" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button class="btn btn-success" name="SubmitButton">ADD</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="white-box">
                            <h2 class="page-title">All the Offers</h2>

                            <?php 
                            include 'include/connection.php';

                            $checkOffers = "SELECT * FROM offers";
                            $resultOffers = mysqli_query($conn, $checkOffers);
                            $no_rows=mysqli_num_rows($resultOffers);
                            if ($no_rows>0) {
                                echo "<div class='row'";
                                while($row = $resultOffers -> fetch_assoc()){
                                ?>
                                    <form class="form-horizontal form-material" action="" method="post">
                                        <div class="col-md-4 col-sm-12 col-lg-3">
                                            <img src="images/offer/<?php echo $row['image'] ?>" height="200" width="200">
                                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                            <input type="hidden" name="image" value="<?php echo $row['image']; ?>">
                                            <br>
                                            <button class="btn btn-success" name="delete" style="margin-top: 10px;margin-left: 60px;">Delete</button>
                                            <br><br>
                                        </div>
                                    </form>
                                <?php }

                                echo "</div>";
                            }



                            ?> 
                            
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
<?php include 'include/footer.php' ?>

<?php
if(isset($_POST['SubmitButton'])){ //check if form was submitted
    require 'include/connection.php';

    $rand = rand(10000, 99999);
    
    $file_name = $rand.$_FILES['UploadImage']['name'];
    $file_tem_loc = $_FILES['UploadImage']['tmp_name'];
    $file_store = "images/offer/".$file_name;
    $file_upload = false;

    if(move_uploaded_file($file_tem_loc, $file_store)){
        $file_upload = true;
    }
    else{
        $file_upload = false;
    }


    if ($file_upload) {
        $checkQuery = "INSERT INTO offers (image) VALUES ('".$file_name."')";

        if (mysqli_query($conn, $checkQuery)) {
            echo "<script>window.alert('New Offer Added');window.location.href='offers.php';</script>";
        }

        else{
            echo "<script>window.alert('Please Retry');window.location.href='offers.php';</script>";
        }

    }

    else{
        echo "<script>window.alert('Please Provide Image');window.location.href='offers.php';</script>";
    }

}  
if(isset($_POST['delete'])){ //check if form was submitted
    $id = $_POST['id'];
    $checkQuery = "DELETE FROM offers WHERE id='".$id."'";
    $checkResult=mysqli_query($conn, $checkQuery);
    $image = "images/offer/".$_POST['image'];
    unlink($image);
    $page = $_SERVER['PHP_SELF'];
    $sec = "1";
    header("Refresh: $sec; url=$page");
}   
?>