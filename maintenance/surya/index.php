<?php  
    session_start();
    if(isset($_SESSION['islogin']) && isset($_SESSION['id'])){
        echo "<script>window.alert('Already Login');window.location.href='admin.php';</script>";
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="plugins/images/favicon.png">
    <title>Foam</title>
    <!-- Bootstrap Core CSS -->
    <link href="dashboard/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="dashboard/css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="dashboard/css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="dashboard/css/colors/default.css" id="theme" rel="stylesheet">
</head>

<body class="fix-header">
    <div id="wrapper">
            <div class="container-fluid">
                <!-- /.row -->
                <!-- .row -->
                <div class="row" style="padding-top: 200px">
                    <div class="col-md-4"></div>
                    <div class="col-md-4 col-xs-4">
                        <div class="white-box">
                            <form class="form-horizontal form-material" action="dashboard/query/loginPage.php" method="post">
                                <div class="form-group">
                                    <label class="col-md-12">Username</label>
                                    <div class="col-md-12">
                                        <input type="text" class="form-control form-control-line" name="username"> 
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Password</label>
                                    <div class="col-md-12">
                                        <input type="password" class="form-control form-control-line" name="password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button class="btn btn-success">Login</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-4"></div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"><p class="text-capitalize">Copyright 2020 Revised. All rights reserved | Design by <a href="http://Vgeekers.com/">Vgeekers</a></p></footer>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="dashboard/js/waves.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="dashboard/js/custom.min.js"></script>
</body>

</html>