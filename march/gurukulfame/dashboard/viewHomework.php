<?php include 'include/header_admin.php' ?>
<?php include 'include/sidebar.php' ?>

        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">View Home Work</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="admin.php">Dashboard</a></li>
                            <li class="active">View Home Work</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <form class="form-horizontal form-material form-attendance" id="selectForm">
                                <div class="form-group col-sm-4">
                                    <label class="col-sm-4">Select Class</label>
                                    <div class="col-sm-6">
                                        <select class="form-control form-control-line" id="std" name="class">
                                            <option>Select Class</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-sm-4">
                                    <label class="col-sm-4">Select Batch</label>
                                    <div class="col-sm-6">
                                        <select class="form-control form-control-line" id="batch" name="batch">
                                            <option>Select Batch</option>
                                            <option value="Morning">Morning</option>
                                            <option value="Afternoon">Afternoon</option>
                                            <option value="Evening">Evening</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-sm-4">
                                    <label class="col-sm-4">Select Date</label>
                                    <div class="col-sm-6">
                                        <input type="date" value="dd/mm/yyyy" class="form-control form-control-line" name="date">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-success" id="sendDetails">Send</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        
                        <!-- <?php
                            require 'include/connection.php';
                            require 'include/cons_student.php';
                            $date = "13/03/2020";
                            $checkQuery = "SELECT homeworkid FROM homework WHERE class='".$class."', batch='".$batch."', date='".$date."' ";//query not working
                            $checkResult = mysqli_query($conn, $checkQuery);
                            // $row = $checkResult -> fetch_row()
                            // $homeworkid=$row['homeworkid'];
                            echo $checkResult;
                            $homeworkid=1;
                            $checkQuery = "SELECT * FROM questions WHERE homeworkid='".$homeworkid."'";
                            $checkResult = mysqli_query($conn, $checkQuery);
                            $no_rows=mysqli_num_rows($checkResult);
                            for($quesno=1;$quesno<=$no_rows;$quesno++){
                                $row = $checkResult->fetch_assoc();
                        ?>
                            <div class="white-box">
                                    <?php 
                                        if($row['link']==""){
                                            echo "<h3>","Ques: ",$quesno,"</h3>" ,"<h4>",$row['question'],"</h4>","<br>";
                                        }
                                        else{
                                            echo "<h3>","Ques: ",$quesno,"</h3>";
                                    ?>
                                        <img src="<?php echo $row['link']; ?>" width="400" height="200">
                                    <?php
                                        }
                                    ?>
                            </div>
                        <?php
                            }
                        ?> -->
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
<?php include 'include/footer.php' ?>