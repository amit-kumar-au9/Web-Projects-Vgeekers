<?php include 'include/header_admin.php' ?>
<?php include 'include/sidebar.php' ?>

        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Gallery</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="admin.php">Dashboard</a></li>
                            <li class="active">Gallery</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <?php
                                require 'include/connection.php'; 
                                $checkQuery = "SELECT * FROM gallery";
                                $checkResult = mysqli_query($conn, $checkQuery);
                                while( $row = $checkResult -> fetch_assoc() ){
                            ?>
                            <div class="col-sm-5">
                                <div class="card">
                                  <form method="post" action="">
                                  <img src="../<?php echo $row['link']?>" height="300">
                                  <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                  <div class="form-group">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success" name="submit" type="submit">Delete Photo</button>
                                        </div>
                                    </div>
                                  </form>
                                </div>
                            </div>
                            <?php
                                }
                            ?>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                
            </div>
            <!-- /.container-fluid -->
<?php require'include/footer.php'; ?>
<?php
if(isset($_POST['submit'])){ //check if form was submitted
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