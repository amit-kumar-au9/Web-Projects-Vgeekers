<?php include 'include/header_admin.php' ?>
<?php include 'include/sidebar_admin.php' ?>

        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">About Us</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="admin.php">Dashboard</a></li>
                            <li class="active">About Us</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <form class="form-horizontal form-material" action="" method="post">
                                <div class="form-group">
                                    <label class="col-md-12">Privacy Policy *</label>
                                    <div class="col-md-12">
                                        <textarea rows="5" class="form-control form-control-line" name="privacy_policy" id="TypeHere2"><?php require'include/cons.php'; echo $privacy_policy;?></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button class="btn btn-success" name="SubmitPolicy">UPDATE</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="white-box">
                            <form class="form-horizontal form-material" action="" method="post">
                                <div class="form-group">
                                    <label class="col-md-12">Terms & Condition *</label>
                                    <div class="col-md-12">
                                        <textarea rows="5" class="form-control form-control-line" name="terms_and_condition" id="TypeHere3"><?php require'include/cons.php'; echo $terms;?></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button class="btn btn-success" name="SubmitTerms">UPDATE</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
<?php include 'include/footer.php' ?>

<?php 
require 'include/connection.php';
if(isset($_POST['SubmitPolicy'])){
    $privacy_policy=$_POST['privacy_policy'];
    if ($privacy_policy!="") {
        $checkQuery = "UPDATE aboutus SET privacy_policy='".$privacy_policy."' WHERE id='1'";
        if (mysqli_query($conn, $checkQuery)) {
            echo "<script>window.alert('Privacy Policy Changed');window.location.href='update_privacyAndTerms.php';</script>";
        }
        else{
            echo "<script>window.alert('Please Retry');window.location.href='update_privacyAndTerms.php';</script>";
        }
    }
    else{
        echo "<script>window.alert('Cannot be empty');window.location.href='update_privacyAndTerms.php';</script>";
    }
}
if(isset($_POST['SubmitTerms'])){
    $terms_and_condition=$_POST['terms_and_condition'];
    if ($terms_and_condition!="") {
        $checkQuery = "UPDATE aboutus SET terms_and_condition='".$terms_and_condition."' WHERE id='1'";
        if (mysqli_query($conn, $checkQuery)) {
            echo "<script>window.alert('Terms and Condition Changed');window.location.href='update_privacyAndTerms.php';</script>";
        }
        else{
            echo "<script>window.alert('Please Retry');window.location.href='update_privacyAndTerms.php';</script>";
        }
    }
    else{
        echo "<script>window.alert('Cannot be empty');window.location.href='update_privacyAndTerms.php';</script>";
    }
}

?>