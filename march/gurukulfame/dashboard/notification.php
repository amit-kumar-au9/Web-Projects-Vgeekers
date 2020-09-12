<?php include 'include/header_student.php' ?>
<?php include 'include/sidebar_student.php' ?>

        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Notification</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="studentDashboard.php">Dashboard</a></li>
                            <li class="active">Notification</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /row -->
                <div class="row">
                    <div class="col-sm-12">
                        <?php
                            require 'include/connection.php'; 
                            $checkQuery = "SELECT * FROM notification ORDER BY id DESC LIMIT 10";
                            $checkResult = mysqli_query($conn, $checkQuery);
                            while( $row = $checkResult -> fetch_assoc() ){
                        ?>  
                        <div class="white-box">
                        <?php       
                                echo "<h4>",$row['notification'],"</h4>","<br>";
                        ?>
                        </div>
                        <?php
                            }
                        ?>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
<?php include 'include/footer.php' ?>