<?php include 'include/header_student.php' ?>
<?php include 'include/sidebar_student.php' ?>
        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Attendance Table</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="studentDashboard.php">Dashboard</a></li>
                            <li class="active">Attendance</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Sno.</th>
                                            <th>Date</th>
                                            <th>Attendance</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                        require 'include/connection.php';
                                        require 'include/cons_student.php';
                                        $checkQuery = "SELECT * FROM attendance WHERE studentid='".$id."'";
                                        $checkResult = mysqli_query($conn, $checkQuery);
                                        $no_rows=mysqli_num_rows($checkResult);
                                        for($sno=1;$sno<=$no_rows;$sno++){
                                            $row = $checkResult->fetch_assoc();
                                            echo "<tr>","<td> ", $sno, "</td>";
                                            echo "<td>", $row['date'], "</td>";
                                            if($row['attendance']=="0"){
                                                echo "<td> Absent </td>","</tr>";
                                            }
                                            elseif ($row['attendance']=="1") {
                                                echo "<td> Present </td>","</tr>";
                                            }
                                        }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
<?php include 'include/footer.php' ?>