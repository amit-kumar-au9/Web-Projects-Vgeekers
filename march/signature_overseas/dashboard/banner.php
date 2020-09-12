<?php include 'include/header.php' ?>
<?php include 'include/sidebar.php' ?>

        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Edit Banner</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="admin.php">Dashboard</a></li>
                            <li class="active">Edit Banner</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <div class="row">
                                <form class="form-horizontal form-material" method="post">
                                    <div class="form-group col-md-6">
                                        <label class="col-md-12">Banner Heading *</label>
                                        <div class="col-md-12">
                                            <input type="text" class="form-control form-control-line" name="bannerHeading">  
                                        </div>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label class="col-md-12">Banner Content *</label>
                                        <div class="col-md-12">
                                            <input type="text" class="form-control form-control-line" name="bannerContent">  
                                        </div>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label class="col-md-12">Banner Info *</label>
                                        <div class="col-md-12">
                                            <input type="text" class="form-control form-control-line" name="bannerInfo">  
                                        </div>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success" name="UploadImage">Upload Image</button>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success" name="SubmitButton">Add Banner</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="white-box">
                            <?php 
                                require 'include/connection.php';
                                $checkQuery = "SELECT * FROM banner";
                                $checkResult = mysqli_query($conn, $checkQuery);
                                $no_rows=mysqli_num_rows($checkResult);
                                if ($no_rows>0) {
                            ?>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Sno.</th>
                                                    <th>Banner Heading</th>
                                                    <th>Banner Content</th>
                                                    <th>Banner Info</th>
                                                    <th>Image</th>
                                                    <th>Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                        <?php
                                        for($sno=1;$sno<=$no_rows;$sno++){
                                            $row = $checkResult->fetch_assoc();
                                            echo "<tr>","<td> ", $sno, "</td>";
    
                                        ?>
                                        <form class="form-horizontal form-material" method="post">
                                            <input type="hidden" class="form-control form-control-line" name="id" value="<?php echo $row['id'];?>">
                                            <td><?php echo $row['bannerHeading'];?></td>
                                            <td><?php echo $row['bannerContent'];?></td>
                                            <td><?php echo $row['bannerInfo'];?></td>
                                            <td><img src="../<?php echo $row['banner'];?>" width="150"></td>
                                            <td><button class="btn btn-success" name="DeleteButton">DELETE</button></td>
                                        </form>
                                        <?php
                                        }
                                        echo"</tbody>
                                        </table>
                                    </div>";
                                }
                                else {
                                       echo "<h2>No Client Data</h2>";
                                   }   
                            ?>       
                        </div>
                    </div>
                    </div>
                </div>
                <!-- /.row -->
                
            </div>
            <!-- /.container-fluid -->
<?php require'include/footer.php'; ?>
<?php
if(isset($_POST['SubmitButton'])){
    $bannerHeading = $_POST['bannerHeading'];
    $bannerContent = $_POST['bannerContent'];
    $bannerInfo = $_POST['bannerInfo'];
    $image = 'images/banner/5.jpg';

    if ($bannerHeading!="" && $bannerContent!="" && $bannerInfo!="" && $image!="" ) {
        $checkQuery = "INSERT INTO banner (bannerHeading, bannerContent, bannerInfo, banner) VALUES ('".$bannerHeading."', '".$bannerContent."', '".$bannerInfo."', '".$image."')";
        if (mysqli_query($conn, $checkQuery)) {
            echo "<script>window.alert('Banner Added');window.location.href='banner.php';</script>";
        }
        else{
            echo "<script>window.alert('Please Retry');window.location.href='banner.php';</script>";
        }
        
    }
    else{
        echo "<script>window.alert('Fill all the required details');window.location.href='banner.php';</script>";
    }
}
if(isset($_POST['DeleteButton'])){ //check if form was submitted
    require 'include/connection.php';
    $id=$_POST['id'];
    if($id!=""){
        $checkQuery = "DELETE FROM banner WHERE id='".$id."'";
        if (mysqli_query($conn, $checkQuery)) {
                echo "<script>window.alert('Photo Deleted');window.location.href='banner.php';</script>";
            }
            else{
                echo "<script>window.alert('Please Retry');window.location.href='banner.php';</script>";
            }    
    }
}   
?>