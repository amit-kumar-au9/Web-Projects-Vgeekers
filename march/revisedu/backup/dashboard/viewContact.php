<?php include 'include/header_admin.php' ?>
<?php include 'include/sidebar_admin.php' ?>

        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">View Contacted Message</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="admin.php">Dashboard</a></li>
                            <li class="active">View Contact</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /row -->
                <div class="row">
                    <div class="col-sm-12">
                        <?php
                            require 'include/connection.php'; 
                            $checkQuery = "SELECT * FROM contactus ORDER BY id DESC";
                            $checkResult = mysqli_query($conn, $checkQuery);
                            while( $row = $checkResult -> fetch_assoc() ){
                        ?>
                            <div class="white-box">
                        <?php       
                                echo "<h4> <b>Name: </b>",$row['name'],"</h4>","<br>";
                                echo "<h4> <b>Email Id: </b>",$row['email'],"</h4>","<br>";
                                echo "<h4> <b>Phone No.: </b>",$row['phone'],"</h4>","<br>";
                                echo "<h4> <b>Organization No.: </b>",$row['organization'],"</h4>","<br>";
                                echo "<h4> <b>Message: </b>",$row['message'],"</h4>","<br>";
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