<?php include 'include/header_student.php' ?>
<?php include 'include/sidebar_student.php' ?>

        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Live Classes</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="studentDashboard.php">Dashboard</a></li>
                            <li class="active">Live Classes</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /row -->
                <div class="row">
                    <div class="col-sm-12">
 
                        <div class="white-box">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-9" style="max-height: : 400px">
                                        <iframe src="https://www.youtube.com/embed/live_stream?channel=UC_p85uOnt5cX-sglkgCRT4SQ" width="100%" height="70%" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/Xv0DlKncjBI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                                    </div>
                                    <br>
                                    <div class="col-md-3">
                                        <div class="row">
                                            <div class="col-md-12" style="border-style: solid;border-width: 3px;border-color: #000;" align="center">
                                                <h1 style="background-color:orange">Webinar Details</h1>
                                                <h4>Welcome to Live Webinar</h4>
                                                <h4>
                                                    <?php 
                                                        $date = "28th April 2020";
                                                        $time = "03:45 PM";
                                                        echo $date.' : '.$time;
                                                    ?>
                                                </h4>
                                            </div>
                                            <div class="col-md-12" style="border-style: solid;border-width: 3px;border-color: #000;margin-top:20px;padding:10px">
                                                <form class="form-horizontal form-material" action="" method="post">
                                                    <div class="form-group">
                                                        <label class="col-md-12">Ask Question*</label>
                                                        <div class="col-md-12">
                                                            <textarea rows="10" class="form-control form-control-line" placeholder="Write Your text here" name="about1" id="TypeHere" required></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-sm-12">
                                                            <button class="btn btn-success" name="SubmitButton">Submit Question</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
<?php include 'include/footer.php' ?>