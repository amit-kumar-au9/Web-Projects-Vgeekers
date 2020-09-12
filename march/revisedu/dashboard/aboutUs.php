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
                                    <label class="col-md-12">About:- CREATION *</label>
                                    <div class="col-md-12">
                                        <textarea rows="5" class="form-control form-control-line" name="creation" id="TypeHere"><?php require'include/cons.php'; echo $creation;?></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button class="btn btn-success" name="SubmitCreation">UPDATE</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="white-box">
                            <form class="form-horizontal form-material" action="" method="post">
                                <div class="form-group">
                                    <label class="col-md-12">About:- ANALYSIS *</label>
                                    <div class="col-md-12">
                                        <textarea rows="5" class="form-control form-control-line" name="analysis" id="TypeHere2"><?php require'include/cons.php'; echo $analysis;?></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button class="btn btn-success" name="SubmitAnalysis">UPDATE</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="white-box">
                            <form class="form-horizontal form-material" action="" method="post">
                                <div class="form-group">
                                    <label class="col-md-12">About:- STRATEGY *</label>
                                    <div class="col-md-12">
                                        <textarea rows="5" class="form-control form-control-line" name="strategy" id="TypeHere3"><?php require'include/cons.php'; echo $strategy;?></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button class="btn btn-success" name="SubmitStrategy">UPDATE</button>
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
if(isset($_POST['SubmitCreation'])){
    $creation=$_POST['creation'];
    if ($creation!="") {
        $checkQuery = "UPDATE aboutus SET creation='".$creation."' WHERE id='1'";
        if (mysqli_query($conn, $checkQuery)) {
            echo "<script>window.alert('About Us Changed');window.location.href='aboutUs.php';</script>";
        }
        else{
            echo "<script>window.alert('Please Retry');window.location.href='aboutUs.php';</script>";
        }
    }
    else{
        echo "<script>window.alert('Cannot be empty');window.location.href='aboutUs.php';</script>";
    }
}
if(isset($_POST['SubmitAnalysis'])){
    $analysis=$_POST['analysis'];
    if ($analysis!="") {
        $checkQuery = "UPDATE aboutus SET analysis='".$analysis."' WHERE id='1'";
        if (mysqli_query($conn, $checkQuery)) {
            echo "<script>window.alert('About Us Changed');window.location.href='aboutUs.php';</script>";
        }
        else{
            echo "<script>window.alert('Please Retry');window.location.href='aboutUs.php';</script>";
        }
    }
    else{
        echo "<script>window.alert('Cannot be empty');window.location.href='aboutUs.php';</script>";
    }
}
if(isset($_POST['SubmitStrategy'])){
    $strategy=$_POST['strategy'];
    if ($strategy!="") {
        $checkQuery = "UPDATE aboutus SET strategy='".$strategy."' WHERE id='1'";
        if (mysqli_query($conn, $checkQuery)) {
            echo "<script>window.alert('About Us Changed');window.location.href='aboutUs.php';</script>";
        }
        else{
            echo "<script>window.alert('Please Retry');window.location.href='aboutUs.php';</script>";
        }
    }
    else{
        echo "<script>window.alert('Cannot be empty');window.location.href='aboutUs.php';</script>";
    }
}

?>