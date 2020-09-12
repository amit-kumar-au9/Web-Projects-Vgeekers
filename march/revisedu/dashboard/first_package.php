<?php include 'include/header_admin.php' ?>
<?php include 'include/sidebar_admin.php' ?>

        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">First Package</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="studentDashboard.php">Dashboard</a></li>
                            <li class="active">First Package</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h2 class="page-title">Change Package Name</h2>
                            <?php 
                            require 'include/connection.php';
                            $checkQuery = "SELECT * FROM package_name WHERE id=1";
                            $checkResult = mysqli_query($conn, $checkQuery);
                            $row = $checkResult -> fetch_assoc();
                            ?>
                            <form class="form-horizontal form-material" action="" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label class="col-md-12">Package Name*</label>
                                    <div class="col-md-12">
                                        <input type="text" class="form-control form-control-line" name="name" value="<?php echo $row['name']; ?>" required>  
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Package Description*</label>
                                    <div class="col-md-12">
                                        <input type="text" class="form-control form-control-line" name="description" value="<?php echo $row['description']; ?>" required>  
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button class="btn btn-success" name="UpdateName">UPDATE</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="white-box">
                            <h2 class="page-title">ADD NEW PACKAGE</h2>

                            <form class="form-horizontal form-material" action="" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label class="col-md-12">Teacher Name *</label>
                                    <div class="col-md-12">
                                        <input type="text" class="form-control form-control-line" name="name" required>  
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Description*</label>
                                    <div class="col-md-12">
                                        <input type="text" class="form-control form-control-line" name="description" required>  
                                    </div>
                                </div>
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
                            <h2 class="page-title">All the Package</h2>

                            <?php 
                            include 'include/connection.php';

                            $checkOffers = "SELECT * FROM package WHERE type = '1'";
                            $resultOffers = mysqli_query($conn, $checkOffers);
                            $no_rows=mysqli_num_rows($resultOffers);
                            if ($no_rows>0) {
                                ?>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Sno.</th>
                                                <th>Teacher Name</th>
                                                <th>Decription</th>
                                                <th>Image</th>
                                                <th>Update</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $sno = 1;
                                            while($row = $resultOffers -> fetch_assoc()){
                                                ?>
                                            <form class="form-horizontal form-material" action="" method="post">
                                                <tr>
                                                    <td>
                                                        <?php echo $sno; ?> 
                                                    </td>
                                                    <input type="hidden" value="<?php echo $row['id']; ?>" name="id" required>  

                                                    <td>
                                                        <input type="text" value="<?php echo $row['name']; ?>" class="form-control form-control-line" name="name" required>  
                                                    </td>
                                                    <td>
                                                        <input type="text" value="<?php echo $row['description']; ?>" class="form-control form-control-line" name="description" required>  
                                                    </td>
                                                    <td>
                                                        <img src="images/package/<?php echo $row['image'] ?>" height="100" width="100">
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-success" name="update">UPDATE</button>                    
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-success" name="delete">Delete</button>                
                                                    </td>
                                                </tr>
                                            </form>
                                            <?php
                                            $sno++;
                                            }

                                            ?>
                                        </tbody>
                          <?php  }



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

    $name = $_POST['name'];
    $description = $_POST['description'];

    $rand = rand(10000, 99999);
    
    $file_name = $rand.$_FILES['UploadImage']['name'];
    $file_tem_loc = $_FILES['UploadImage']['tmp_name'];
    $file_store = "images/package/".$file_name;
    $file_upload = false;

    if(move_uploaded_file($file_tem_loc, $file_store)){
        $file_upload = true;
    }
    else{
        $file_upload = false;
    }


    if ($file_upload) {
        $checkQuery = "INSERT INTO package (name, description, image, type) VALUES ('".$name."', '".$description."', '".$file_name."', '1')";

        if (mysqli_query($conn, $checkQuery)) {
            echo "<script>window.alert('New Package Added');window.location.href='first_package.php';</script>";
        }

        else{
            echo "<script>window.alert('Please Retry');window.location.href='first_package.php';</script>";
        }

    }

    else{
        echo "<script>window.alert('Please Provide Image');window.location.href='first_package.php';</script>";
    }

}  
if(isset($_POST['delete'])){ //check if form was submitted
    $id = $_POST['id'];
    $checkQuery = "DELETE FROM package WHERE id='".$id."'";
    $checkResult=mysqli_query($conn, $checkQuery);
    $image = "images/package/".$_POST['image'];
    unlink($image);
    $page = $_SERVER['PHP_SELF'];
    $sec = "1";
}  

if(isset($_POST['UpdateName'])){
    $name = $_POST['name'];
    $description = $_POST['description'];
    $checkQuery= "UPDATE package_name SET name='".$name."', description = '".$description."' WHERE id=1 ";
    $checkResult=mysqli_query($conn, $checkQuery);
    $page = $_SERVER['PHP_SELF'];
    $sec = "1";
}

if(isset($_POST['update'])){
    
    $id = $_POST['id'];
    $name = $_POST['name'];
    $description = $_POST['description'];

    $checkQuery= "UPDATE package SET name='".$name."', description='".$description."' WHERE id = '".$id."' ";
    $checkResult=mysqli_query($conn, $checkQuery);
    $page = $_SERVER['PHP_SELF'];
    $sec = "1";
} 
?>