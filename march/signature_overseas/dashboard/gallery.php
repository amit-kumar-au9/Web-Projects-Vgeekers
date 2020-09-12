<?php include 'include/header.php' ?>
<?php include 'include/sidebar.php' ?>

        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Edit Gallery</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="admin.php">Dashboard</a></li>
                            <li class="active">Edit Gallery</li>
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
                                        <label class="col-md-12">Name *</label>
                                        <div class="col-md-12">
                                            <input type="text" class="form-control form-control-line" name="name">  
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
                                $checkQuery = "SELECT * FROM gallery";
                                $checkResult = mysqli_query($conn, $checkQuery);
                                $no_rows=mysqli_num_rows($checkResult);
                                if ($no_rows>0) {
                            ?>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Sno.</th>
                                                    <th>Name</th>
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
                                            <td><?php echo $row['name'];?></td>
                                            <td><img src="../<?php echo $row['imageLink'];?>" width="150"></td>
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
    $name = $_POST['name'];
    $image = 'images/gallery/5.jpg';

    if ($name!="" && $image!="" ) {
        $checkQuery = "INSERT INTO gallery (name, imageLink) VALUES ('".$name."', '".$image."')";
        if (mysqli_query($conn, $checkQuery)) {
            echo "<script>window.alert('Gallery Photo Added');window.location.href='gallery.php';</script>";
        }
        else{
            echo "<script>window.alert('Please Retry');window.location.href='gallery.php';</script>";
        }
        
    }
    else{
        echo "<script>window.alert('Fill all the required details');window.location.href='gallery.php';</script>";
    }
}
if(isset($_POST['DeleteButton'])){ //check if form was submitted
    require 'include/connection.php';
    $id=$_POST['id'];
    if($id!=""){
        $checkQuery = "DELETE FROM gallery WHERE id='".$id."'";
        if (mysqli_query($conn, $checkQuery)) {
                echo "<script>window.alert('Photo Deleted');window.location.href='gallery.php';</script>";
            }
            else{
                echo "<script>window.alert('Please Retry');window.location.href='gallery.php';</script>";
            }    
    }
}   
?>