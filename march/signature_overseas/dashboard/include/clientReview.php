<?php include 'include/header_admin.php' ?>
<?php include 'include/sidebar_admin.php' ?>

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
                                <form class="form-horizontal form-material" action="" method="post">
                                    <div class="form-group col-md-6">
                                        <label class="col-md-12">Name *</label>
                                        <div class="col-md-12">
                                            <input type="text" value="" class="form-control form-control-line" name="name">  
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="col-md-12">Subjects *</label>
                                        <div class="col-md-12">
                                            <input type="text" value="" class="form-control form-control-line" name="subjects">  
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="col-md-12">Location *</label>
                                        <div class="col-md-12">
                                            <input type="text" value="" class="form-control form-control-line" name="location">  
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="col-md-12">Email *</label>
                                        <div class="col-md-12">
                                            <input type="email" value="" class="form-control form-control-line" name="email">  
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="col-md-12">Phone No *</label>
                                        <div class="col-md-12">
                                            <input type="number" minlength="10" maxlength="10" class="form-control form-control-line" name="phone">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="col-md-12">Experience (Years)*</label>
                                        <div class="col-md-12">
                                            <input type="number" value="" class="form-control form-control-line" name="experience">  
                                        </div>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label class="col-md-12">Description *</label>
                                        <div class="col-md-12">
                                            <textarea type="text" row="4" class="form-control form-control-line" name="description"></textarea> 
                                        </div>
                                    </div>
                                    
                                    <div class="form-group col-md-6">
                                        <label class="col-md-12">Registration number *</label>
                                        <div class="col-md-12">
                                            <input type="number" value="" class="form-control form-control-line" name="regno">  
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="col-md-12">Address*</label>
                                        <div class="col-md-12">
                                            <input type="text" class="form-control form-control-line" name="address">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="col-md-12">Password *</label>
                                        <div class="col-md-12">
                                            <input type="password" class="form-control form-control-line" name="password">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="col-md-12">Confirm Password *</label>
                                        <div class="col-md-12">
                                            <input type="password" class="form-control form-control-line" name="cpassword">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success" name="UploadImage">Upload Image</button>
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
<?php include 'include/footer.php' ?>

<?php 
require 'include/connection.php';
if(isset($_POST['SubmitButton'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $location = $_POST['location'];
    $description = $_POST['description'];
    $experience = $_POST['experience'];
    $subjects = $_POST['subjects'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $regno = $_POST['regno'];
    $address = $_POST['address'];
    $image = '4.jpg';

    if ($name!="" && $email!="" && $phone!="" && $location!="" && $description!="" && $experience!="" && $subjects!="" && $password!="" && $cpassword!="" && $regno!="" && $address!="" && strlen($phone)==10) {
        if($password==$cpassword){
            $password=md5($password);
            $checkQuery = "INSERT INTO vendordetail (name, email, phone, location, description, experience, subjects, password, regno, address, image) VALUES ('".$name."', '".$email."', '".$phone."', '".$location."', '".$description."', '".$experience."', '".$subjects."', '".$password."', '".$regno."', '".$address."', '".$image."')";
            if (mysqli_query($conn, $checkQuery)) {
                echo "<script>window.alert('Teacher Added');window.location.href='addVendor.php';</script>";
            }
            else{
                echo "<script>window.alert('Please Retry');window.location.href='addVendor.php';</script>";
            }
        }
        else{
            echo "<script>window.alert('Password and Confirm password doesnot match');window.location.href='addVendor.php';</script>";
        }
        
    }
    else{
        echo "<script>window.alert('Fill all the required details');window.location.href='addVendor.php';</script>";
    }
}
?>