<?php include 'include/header_admin.php' ?>
<?php include 'include/sidebar_admin.php' ?>

        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Subject Names</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="studentDashboard.php">Dashboard</a></li>
                            <li class="active">Subject Names</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box row">
                            <h2 class="page-title">UPDATE SUBJECT NAME</h2>
                            <br>
                            <?php 
                                require 'include/connection.php';
                                $checkQuery = "SELECT * FROM subject_name WHERE id=1";
                                $checkResult = mysqli_query($conn, $checkQuery);
                                $row = $checkResult -> fetch_assoc();
                            ?>
                            <form class="form-horizontal form-material" action="" method="post" enctype="multipart/form-data">
                                <div class="form-group col-md-6">
                                    <label class="col-md-12">Subject 1st*</label>
                                    <div class="col-md-12">
                                        <input type="text" class="form-control form-control-line" name="subject1" value="<?php echo $row['subject1']; ?>" required>  
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="col-md-12">Subject 2nd*</label>
                                    <div class="col-md-12">
                                        <input type="text" class="form-control form-control-line" name="subject2" value="<?php echo $row['subject2']; ?>" required>  
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="col-md-12">Subject 3rd*</label>
                                    <div class="col-md-12">
                                        <input type="text" class="form-control form-control-line" name="subject3" value="<?php echo $row['subject3']; ?>" required>  
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="col-md-12">Subject 4th*</label>
                                    <div class="col-md-12">
                                        <input type="text" class="form-control form-control-line" name="subject4" value="<?php echo $row['subject4']; ?>" required>  
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="col-md-12">Subject 5th*</label>
                                    <div class="col-md-12">
                                        <input type="text" class="form-control form-control-line" name="subject5" value="<?php echo $row['subject5']; ?>" required>  
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="col-md-12">Subject 6th*</label>
                                    <div class="col-md-12">
                                        <input type="text" class="form-control form-control-line" name="subject6" value="<?php echo $row['subject6']; ?>" required>  
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <div class="col-sm-12">
                                        <button class="btn btn-success" name="SubmitButton">UPDATE</button>
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

if(isset($_POST['SubmitButton'])){
    
    $subject1 = $_POST['subject1'];
    $subject2 = $_POST['subject2'];
    $subject3 = $_POST['subject3'];
    $subject4 = $_POST['subject4'];
    $subject5 = $_POST['subject5'];
    $subject6 = $_POST['subject6'];

    if($subject1 !="" && $subject2 !="" && $subject3 !="" && $subject4 !="" && $subject5 !="" && $subject6 !="" )
    $checkQuery= "UPDATE subject_name SET subject1='".$subject1."', subject2='".$subject2."', subject3='".$subject3."', subject4='".$subject4."', subject5='".$subject5."', subject6='".$subject6."' WHERE id = 1 ";
    $checkResult=mysqli_query($conn, $checkQuery);
    $page = $_SERVER['PHP_SELF'];
    $sec = "1";
} 
?>