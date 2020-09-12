<?php 

$date = $_POST['date']; 
$date=date('d/m/Y',strtotime($date));

if($date!=""){
    include 'include/header_student.php';
    include 'include/sidebar_student.php';

?>

        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Home Work</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                            <li class="active">Home Work</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <button type="submit" class="btn btn-success" id="sendDetails"><a href="homework.php">Change Date</a></button>
                        </div>

                        <?php
                            require 'include/connection.php';
                            require 'include/cons_student.php';
                            $checkQuery = "SELECT * FROM homework WHERE class='".$class."' AND batch='".$batch."'AND date='".$date."' ";
                            $checkResult = mysqli_query($conn, $checkQuery);
                            $no_rows=mysqli_num_rows($checkResult);;
                            if ($no_rows>0){
                                $row = $checkResult->fetch_assoc();
                                $homeworkid=$row['homeworkid'];
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
                            }
                            else{
                                echo "<script>window.alert('No Homework on this date');window.location.href='homework.php';</script>";

                            }
                        ?>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
<?php include 'include/footer.php';
}
else{
    echo "<script>window.location.href='homework.php';</script>";
}
?>
