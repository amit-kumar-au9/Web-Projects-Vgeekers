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
                        <form class="form-horizontal form-material" action="" method="post" enctype="multipart/form-data">

                            <div class="white-box">
                                <div class="row">
                                    <label class="col-md-12"><h2><b>Personal Details</b></h2></label>
                                    <div class="form-group col-md-6">
                                        <label class="col-md-12">First Name *</label>
                                        <div class="col-md-12">
                                            <input type="text" value="" class="form-control form-control-line" name="fname" required>  
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="col-md-12">Last Name *</label>
                                        <div class="col-md-12">
                                            <input type="text" value="" class="form-control form-control-line" name="lname" required>  
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="col-md-12">Email *</label>
                                        <div class="col-md-12">
                                            <input type="email" value="" class="form-control form-control-line" name="email" required>  
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="col-md-12">Phone No *</label>
                                        <div class="col-md-12">
                                            <input type="number" minlength="10" maxlength="10" class="form-control form-control-line" name="phone" required="">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="col-md-12">Experience (Years)*</label>
                                        <div class="col-md-12">
                                            <input type="number" value="" class="form-control form-control-line" name="experience" required>  
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="col-md-12">Registration number *</label>
                                        <div class="col-md-12">
                                            <input type="number" value="" class="form-control form-control-line" name="regno" required>  
                                        </div>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label class="col-md-12">Description *</label>
                                        <div class="col-md-12">
                                            <textarea type="text" row="4" class="form-control form-control-line" name="description" required></textarea> 
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="white-box">
                                <div class="row">
                                    <label class="col-md-12"><h2><b>Subject Details</b></h2></label>
                                    <div class="form-group col-md-6">
                                        <label class="col-md-12">Class *</label>
                                        <div class="col-md-12">
                                            <input type="number" value="" class="form-control form-control-line" name="class" required>  
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="col-md-12">Subjects *</label>
                                        <div class="col-md-12">
                                            <input type="text" value="" class="form-control form-control-line" name="subjects" required>  
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="white-box">
                                <div class="row">
                                    <label class="col-md-12"><h2><b>Location Details</b></h2></label>
                                    <div class="form-group col-md-6">
                                        <label class="col-md-12">State *</label>
                                        <div class="col-md-12">
                                            <input type="text" value="" class="form-control form-control-line" name="state" required>  
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="col-md-12">City *</label>
                                        <div class="col-md-12">
                                            <input type="text" value="" class="form-control form-control-line" name="city" required>  
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="col-md-12">Area *</label>
                                        <div class="col-md-12">
                                            <input type="text" value="" class="form-control form-control-line" name="area" required>  
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="col-md-12">Address*</label>
                                        <div class="col-md-12">
                                            <input type="text" class="form-control form-control-line" name="address" required>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="white-box">
                                <div class="row">
                                    <label class="col-md-12"><h2><b>Set Password</b></h2></label>
                                    <div class="form-group col-md-6">
                                        <label class="col-md-12">Password *</label>
                                        <div class="col-md-12">
                                            <input type="password" class="form-control form-control-line" name="password" required>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="col-md-12">Confirm Password *</label>
                                        <div class="col-md-12">
                                            <input type="password" class="form-control form-control-line" name="cpassword" required>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="white-box">
                                <div class="row">
                                    <label class="col-md-12"><h2><b>Upload Image</b></h2></label>
                                    <div class="form-group col-md-12">
                                        <div class="col-sm-12">
                                            <input class="btn btn-success" name="UploadImage" type="file" value="Upload Image" required>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="white-box">
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success" name="SubmitButton">Add Vendor</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
<?php include 'include/footer.php' ?>

<?php 
require 'include/connection.php';
if(isset($_POST['SubmitButton'])){

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $name = $fname." ".$lname;
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $experience = $_POST['experience'];
    $regno = $_POST['regno'];
    $description = $_POST['description'];
    $class = $_POST['class'];
    $subjects = $_POST['subjects'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    $area = $_POST['area'];
    $address = $_POST['address'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    $rand = rand(10000, 99999);
    
    $file_name = $rand.$_FILES['UploadImage']['name'];
    $file_tem_loc = $_FILES['UploadImage']['tmp_name'];
    $file_store = "images/vendor/".$file_name;
    $file_upload = false;

    if(move_uploaded_file($file_tem_loc, $file_store)){
        $file_upload = true;
    }
    else{
        $file_upload = false;
    }

    if ($file_upload) {

        if($password==$cpassword){
            $password=md5($password);
            $checkQuery = "INSERT INTO vendordetail (name, email, phone,experience, regno, description, class, subjects, state, city, area, address, password, image) VALUES ('".$name."', '".$email."', '".$phone."', '".$experience."', '".$regno."', '".$description."', '".$class."', '".$subjects."', '".$state."', '".$city."', '".$area."', '".$address."', '".$password."', '".$file_name."')";
            if (mysqli_query($conn, $checkQuery)) {
                echo "<script>window.alert('Vendor Added');window.location.href='addVendor.php';</script>";
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
        echo "<script>window.alert('Please upload Image');window.location.href='addVendor.php';</script>";
    }
}
?>