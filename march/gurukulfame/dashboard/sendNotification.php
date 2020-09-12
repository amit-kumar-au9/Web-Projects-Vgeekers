<?php include 'include/header_admin.php' ?>
<?php include 'include/sidebar.php' ?>

        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Send Notification</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="admin.php">Dashboard</a></li>
                            <li class="active">Send Notification</li>
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
                                    <label class="col-md-12">Notification *</label>
                                    <div class="col-md-12">
                                        <textarea rows="5" class="form-control form-control-line" name="notification"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button class="btn btn-success" name="SubmitButton">Send</button>
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
if(isset($_POST['SubmitButton'])){
    $notification=$_POST['notification'];
    if ($notification!="") {
        $checkQuery = "INSERT INTO notification (notification) VALUES ('".$notification."')";
        if (mysqli_query($conn, $checkQuery)) {
            echo "<script>window.alert('Notification Sent');window.location.href='admin.php';</script>";
        }
        else{
            echo "<script>window.alert('Please Retry');window.location.href='sendNotification.php';</script>";
        }
    }
    else{
        echo "<script>window.alert('Fill all the required details');window.location.href='sendNotificationx.php';</script>";
    }
}
?>