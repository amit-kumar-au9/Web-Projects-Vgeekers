<?php include 'include/header_admin.php' ?>
<?php include 'include/sidebar_admin.php' ?>

        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Information</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="studentDashboard.php">Dashboard</a></li>
                            <li class="active">Information</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">

                            <form class="form-horizontal form-material" action="" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label class="col-md-12">Heading*</label>
                                    <div class="col-md-12">
                                        <input type="text" class="form-control form-control-line" name="heading" required>  
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
                                        <button class="btn btn-success" name="SubmitButton">Send</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="white-box">
                            <h2 class="page-title">All the Testimonial</h2>

                                    <?php 
                                        require 'include/connection.php';
                                        $checkQuery = "SELECT * FROM testimonials";
                                        $checkResult = mysqli_query($conn, $checkQuery);
                                        $no_rows=mysqli_num_rows($checkResult);
                                        if ($no_rows>0) {
                                    ?>
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>Sno.</th>
                                                            <th>Heading</th>
                                                            <th>Description</th>
                                                            <th>Image</th>
                                                            <th>Delete</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        for($sno=1;$sno<=$no_rows;$sno++){
                                                        ?>
                                                            <form class="form-horizontal form-material" action="" method="post">
                                                            <?php
                                                                $row = $checkResult->fetch_assoc();
                                                                echo "<tr>","<td> ", $sno, "</td>";
                                                                echo "<td>", $row['heading'], "</td>";
                                                                echo "<td>", $row['description'], "</td>";
                                                            ?>
                                                                <td>
                                                                    <img src="images/testimonials/<?php echo $row['image'] ?>" height="100" width="100">
                                                                </td>
                                                                <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                                                                <td>
                                                                    <button class="btn btn-success" name="delete">Delete</button>
                                                                </td>
                                                            <?php 
                                                                }
                                                            ?>  
                                                                </tr>
                                                            </form>
                                                            <?php
                                                        }
                                                    echo"</tbody>
                                                </table>";  
                                                            ?>
                                            </div>
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
    $heading=$_POST['heading'];
    $description=$_POST['description'];

    $rand = rand(10000, 99999);
    
    $file_name = $rand.$_FILES['UploadImage']['name'];
    $file_tem_loc = $_FILES['UploadImage']['tmp_name'];
    $file_store = "images/info/".$file_name;
    $file_upload = false;

    if(move_uploaded_file($file_tem_loc, $file_store)){
        $file_upload = true;
    }
    else{
        $file_upload = false;
    }

    if ($heading!="" && $description!="") {

        if ($file_upload) {
            $checkQuery = "INSERT INTO info (heading,image, description) VALUES ('".$heading."', '".$file_name."','".$description."')";

            if (mysqli_query($conn, $checkQuery)) {
                echo "<script>window.alert('New Info Added');window.location.href='info.php';</script>";
            }

            else{
                echo "<script>window.alert('Please Retry');window.location.href='info.php';</script>";
            }

        }

        else{
            echo "<script>window.alert('Please Provide Image');window.location.href='info.php';</script>";
        }

    }

    else{
        echo "<script>window.alert('Fill all the required details');window.location.href='info.php';</script>";
    }
}  
if(isset($_POST['delete'])){ //check if form was submitted
    $id = $_POST['id'];
    $checkQuery = "DELETE FROM info WHERE id='".$id."'";
    $checkResult=mysqli_query($conn, $checkQuery);
    $page = $_SERVER['PHP_SELF'];
    $sec = "1";
    header("Refresh: $sec; url=$page");
}   
?>