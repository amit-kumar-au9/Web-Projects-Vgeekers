<?php include 'include/header_admin.php' ?>
<?php include 'include/sidebar_admin.php' ?>

        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Blog</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="studentDashboard.php">Dashboard</a></li>
                            <li class="active">Blog</li>
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
                                    <label class="col-md-12">Heading *</label>
                                    <div class="col-md-12">
                                        <textarea rows="5" class="form-control form-control-line" name="heading" id="TypeHere"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Brief Content *</label>
                                    <div class="col-md-12">
                                        <textarea rows="5" class="form-control form-control-line" name="content" id="TypeHere2"></textarea>  
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button class="btn btn-success" name="SubmitButton">Send</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="white-box">
                            <h2 class="page-title">All the Blogs</h2>

                                    <?php 
                                        require 'include/connection.php';
                                        $checkQuery = "SELECT * FROM blogs";
                                        $checkResult = mysqli_query($conn, $checkQuery);
                                        $no_rows=mysqli_num_rows($checkResult);
                                        if ($no_rows>0) {
                                    ?>
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>Sno.</th>
                                                            <th>Heading</th>
                                                            <th>Content</th>
                                                            <th>Delete</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        for($sno=1;$sno<=$no_rows;$sno++){
                                                        ?>
                                                            <form class="form-horizontal form-material" action="" method="post">
                                                            <?php
                                                                $row = $checkResult->fetch_assoc();
                                                                echo "<tr>","<td> ", $sno, "</td>";
                                                                echo "<td>", $row['heading'], "</td>";
                                                                echo "<td>", $row['content'], "</td>";
                                                            ?>
                                                                <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                                                                <td>
                                                                    <button class="btn btn-success" name="delete">Delete</button>
                                                                </td>
                                                            <?php 
                                                                }
                                                            ?>
                                                                </tr>
                                                            </form>
                                                            <?php
                                                        }
                                                    echo"</tbody>
                                                </table>";  
                                                            ?>
                                            </div>
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
    require 'include/cons.php';
    $heading=$_POST['heading'];
    $content=$_POST['content'];
    if ($heading!="" && $content!="") {
        $checkQuery = "INSERT INTO blogs (heading, content) VALUES ('".$heading."', '".$content."')";
        if (mysqli_query($conn, $checkQuery)) {
            echo "<script>window.alert('Blog Added');window.location.href='blog.php';</script>";
        }
        else{
            echo "<script>window.alert('Please Retry');window.location.href='blog.php';</script>";
        }
    }
    else{
        echo "<script>window.alert('Fill all the required details');window.location.href='blog.php';</script>"; 
    }
} 
if(isset($_POST['delete'])){ //check if form was submitted
    $id = $_POST['id'];
    $checkQuery = "DELETE FROM blogs WHERE id='".$id."'";
    $checkResult=mysqli_query($conn, $checkQuery);
    $page = $_SERVER['PHP_SELF'];
    $sec = "1";
    header("Refresh: $sec; url=$page");
}   
?>