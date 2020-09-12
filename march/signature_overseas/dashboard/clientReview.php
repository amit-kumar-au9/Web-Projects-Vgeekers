<?php include 'include/header.php' ?>
<?php include 'include/sidebar.php' ?>

        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Edit Client Review</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="admin.php">Dashboard</a></li>
                            <li class="active">Edit Client Review</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <div class="row">
                                <form class="form-horizontal form-material" action="" method="post">
                                    <div class="form-group col-md-6">
                                        <label class="col-md-12">Name *</label>
                                        <div class="col-md-12">
                                            <input type="text" value="" class="form-control form-control-line" name="name">  
                                        </div>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label class="col-md-12">Heading *</label>
                                        <div class="col-md-12">
                                            <input type="text" value="" class="form-control form-control-line" name="heading">  
                                        </div>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label class="col-md-12">Data *</label>
                                        <div class="col-md-12">
                                            <input type="text" value="" class="form-control form-control-line" name="data">  
                                        </div>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success" name="UploadImage">Upload Image</button>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success" name="SubmitButton">Add Client Review</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="white-box">
                            <?php 
                                require 'include/connection.php';
                                $checkQuery = "SELECT * FROM clientreview";
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
                                                    <th>Heading</th>
                                                    <th>Data</th>
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
                                            <td><?php echo $row['heading'];?></td>
                                            <td><?php echo $row['data'];?></td>
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
<?php include 'include/footer.php' ?>

<?php 
if(isset($_POST['SubmitButton'])){
    $name = $_POST['name'];
    $heading = $_POST['heading'];
    $data = $_POST['data'];
    $image = 'images/review/s1.jpg';

    if ($name!="" && $heading!="" && $data!="" && $image!="" ) {
        $checkQuery = "INSERT INTO clientreview (name, heading, data, imageLink) VALUES ('".$name."', '".$heading."', '".$data."', '".$image."')";
        if (mysqli_query($conn, $checkQuery)) {
            echo "<script>window.alert('Client Review Added');window.location.href='clientReview.php';</script>";
        }
        else{
            echo "<script>window.alert('Please Retry');window.location.href='clientReview.php';</script>";
        }
        
    }
    else{
        echo "<script>window.alert('Fill all the required details');window.location.href='clientReview.php';</script>";
    }
}

if(isset($_POST['DeleteButton'])){ //check if form was submitted
    require 'include/connection.php';
    $id=$_POST['id'];
    if($id!=""){
        $checkQuery = "DELETE FROM clientreview WHERE id='".$id."'";
        if (mysqli_query($conn, $checkQuery)) {
                echo "<script>window.alert('Client Review Deleted');window.location.href='clientReview.php';</script>";
        }
        else{
            echo "<script>window.alert('Please Retry');window.location.href='clientReview.php';</script>";
        }    
    }
}
?>