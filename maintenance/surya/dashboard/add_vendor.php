<?php include 'include/header.php' ?>
<?php include 'include/sidebar.php' ?>

        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Add Vendor</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="admin.php">Dashboard</a></li>
                            <li class="active">Add Vendor</li>
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
                                    <div class="form-group col-md-6">
                                        <label class="col-md-12">Address *</label>
                                        <div class="col-md-12">
                                            <input type="text" class="form-control form-control-line" name="address">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="col-md-12">City *</label>
                                        <div class="col-md-12">
                                            <input type="text" class="form-control form-control-line" name="city">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="col-md-12">State *</label>
                                        <div class="col-md-12">
                                            <input type="text" class="form-control form-control-line" name="state">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group col-md-12">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success" name="SubmitButton">Add Vendor</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                
            </div>
            <!-- /.container-fluid -->
<?php require'include/footer.php'; ?>
<?php

include'include/connection.php';

if(isset($_POST['SubmitButton'])){

    $name = $_POST['name'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];

    if ($name!="" &&  $address!="" && $city!="" && $state!="" ) {
        
        $checkQuery = "INSERT INTO vendor (name, address, city, state) VALUES ('".$name."','".$address."', '".$city."', '".$state."')";

        if (mysqli_query($conn, $checkQuery)) {

            echo "<script>window.alert('Vendor Added');window.location.href='add_vendor.php';</script>";

        }
        else{
            echo "<script>window.alert('Please Retry');window.location.href='add_vendor.php';</script>";

        }
        
    }

    else{

        echo "<script>window.alert('Fill all the required details');window.location.href='add_vendor.php';</script>";
    
    }

}  

?>