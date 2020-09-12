<?php include 'include/header_student.php' ?>
<?php include 'include/sidebar_student.php' ?>

        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Query/Suggestion</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="studentDashboard.php">Dashboard</a></li>
                            <li class="active">Query/Suggestion</li>
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
                                    <label class="col-md-12">Name *</label>
                                    <div class="col-md-12">
                                        <input type="email" value="<?php require 'include/connection.php'; require 'include/cons_student.php'; echo $name;?> "
                                            class="form-control form-control-line" name="name">  
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Email *</label>
                                    <div class="col-md-12">
                                        <input type="email" value="<?php require 'include/connection.php'; require 'include/cons_student.php'; echo $email;?> "
                                            class="form-control form-control-line" name="email"
                                            id="example-email">  
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Phone No *</label>
                                    <div class="col-md-12">
                                        <input type="number" minlength="10" maxlength="10"class="form-control form-control-line" name="phone">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Query/Suggestion *</label>
                                    <div class="col-md-12">
                                        <textarea rows="5" class="form-control form-control-line" name="query"></textarea>
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
if(isset($_POST['SubmitButton'])){ //check if form was submitted
    require 'include/connection.php';
    require 'include/cons_student.php';
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $query=$_POST['query'];
    if ($name!="" && $phone!="" && $email!="" && $query!="" && strlen($phone)==10) {
        $checkQuery = "INSERT INTO query (email, phone, query,studentid) VALUES ('".$email."', '".$phone."', '".$query."','".$id."')";
        if (mysqli_query($conn, $checkQuery)) {
            echo "<script>window.alert('Thank for sending Query/Suggestion');window.location.href='query.php';</script>";
        }
        else{
            echo "<script>window.alert('Please Retry');window.location.href='query.php';</script>";
        }
    }
    else{
        echo "<script>window.alert('Fill all the required details');window.location.href='query.php';</script>";
    }
}    
?>