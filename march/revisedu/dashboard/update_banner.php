<?php include 'include/header_admin.php' ?>
<?php include 'include/sidebar_admin.php' ?>

        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Banner</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="studentDashboard.php">Dashboard</a></li>
                            <li class="active">Banner</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h2 class="page-title">Update The Banner</h2>

                            <?php 
                            include 'include/connection.php';

                            $checkOffers = "SELECT * FROM aboutus";
                            $resultOffers = mysqli_query($conn, $checkOffers);
                            $no_rows=mysqli_num_rows($resultOffers);
                            $row = $resultOffers -> fetch_assoc()
                            ?>
                            <form class="form-horizontal form-material" action="" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <img src="images/banner/<?php echo $row['banner'] ?>" height="300">
                                    <input type="hidden" name="image" value="<?php echo $row['image']; ?>">
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <input class="btn btn-success" name="UploadImage" type="file" value="Upload Image" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button class="btn btn-success" name="SubmitButton">Update</button>
                                    </div>
                                </div>
                            </form>
                            
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
    $file_store = "images/banner/".$file_name;
    $file_upload = false;

    if(move_uploaded_file($file_tem_loc, $file_store)){
        $file_upload = true;
    }
    else{
        $file_upload = false;
    }


    if ($file_upload) {

        $checkQuery= "UPDATE aboutus SET banner='".$file_name."' WHERE id=1 ";

        $banner = "images/banner/".$_POST['image'];

        unlink($banner);
        
        if (mysqli_query($conn, $checkQuery)) {
            echo "<script>window.alert('New Banner Added');window.location.href='update_banner.php';</script>";
        }

        else{
            echo "<script>window.alert('Please Retry');window.location.href='update_banner.php';</script>";
        }

    }

    else{
        echo "<script>window.alert('Please Provide Image');window.location.href='update_banner.php';</script>";
    }

}    
?>