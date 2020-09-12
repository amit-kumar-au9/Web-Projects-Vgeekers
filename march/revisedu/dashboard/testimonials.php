<?php include 'include/header_admin.php' ?>
<?php include 'include/sidebar_admin.php' ?>

        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Testimonial</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="studentDashboard.php">Dashboard</a></li>
                            <li class="active">Testimonial</li>
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
                                    <label class="col-md-12">Student Name *</label>
                                    <div class="col-md-12">
                                        <input type="text" class="form-control form-control-line" name="name" required>  
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">School Name *</label>
                                    <div class="col-md-12">
                                        <input type="text" class="form-control form-control-line" name="school" required>  
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Content *</label>
                                    <div class="col-md-12">
                                        <textarea rows="5" class="form-control form-control-line" name="content" required></textarea>
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
                                                            <th>Student Name</th>
                                                            <th>School Name</th>
                                                            <th>Content</th>
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
                                                                echo "<td>", $row['name'], "</td>";
                                                                echo "<td>", $row['school'], "</td>";
                                                                echo "<td>", $row['content'], "</td>";
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
    $name=$_POST['name'];
    $school=$_POST['school'];
    $content=$_POST['content'];

    $rand = rand(10000, 99999);
    
    $file_name = $rand.$_FILES['UploadImage']['name'];
    $file_tem_loc = $_FILES['UploadImage']['tmp_name'];
    $file_store = "images/testimonials/".$file_name;
    $file_upload = false;

    if(move_uploaded_file($file_tem_loc, $file_store)){
        $file_upload = true;
    }
    else{
        $file_upload = false;
    }

    if ($name!="" && $content!="" && $school!="") {

        if ($file_upload) {
            $checkQuery = "INSERT INTO testimonials (name, content,image, school) VALUES ('".$name."', '".$content."', '".$file_name."','".$school."')";

            if (mysqli_query($conn, $checkQuery)) {
                echo "<script>window.alert('Testimonial Added');window.location.href='testimonials.php';</script>";
            }

            else{
                echo "<script>window.alert('Please Retry');window.location.href='testimonials.php';</script>";
            }

        }

        else{
            echo "<script>window.alert('Please Provide Image');window.location.href='testimonials.php';</script>";
        }

    }

    else{
        echo "<script>window.alert('Fill all the required details');window.location.href='testimonials.php';</script>";
    }
}  
if(isset($_POST['delete'])){ //check if form was submitted
    $id = $_POST['id'];
    $checkQuery = "DELETE FROM testimonials WHERE id='".$id."'";
    $checkResult=mysqli_query($conn, $checkQuery);
    $page = $_SERVER['PHP_SELF'];
    $sec = "1";
    header("Refresh: $sec; url=$page");
}   
?>