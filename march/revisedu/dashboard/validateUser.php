<?php include 'include/header_admin.php' ?>
<?php include 'include/sidebar_admin.php' ?>
        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Validate Users</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="admin.php">Dashboard</a></li>
                            <li class="active">Validate Users</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                                    <?php 
                                        require 'include/connection.php';
                                        $checkQuery = "SELECT * FROM userdetail ORDER BY name ASC";
                                        $checkResult = mysqli_query($conn, $checkQuery);
                                        $no_rows=mysqli_num_rows($checkResult);
                                        if ($no_rows>0) {
                                    ?>
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>Sno.</th>
                                                            <th>Student Name</th>
                                                            <th>Phone</th>
                                                            <th>Email</th>
                                                            <th>Class</th>
                                                            <th>Batch</th>
                                                            <th>Add</th>
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
                                                                echo "<td>", $row['name'], "</td>";
                                                                echo "<td>", $row['phone'], "</td>";
                                                                echo "<td>", $row['email'], "</td>";
                                                                echo "<td>", $row['class'], "</td>";
                                                                echo "<td>", $row['batch'], "</td>";
                                                            ?>
                                                                <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                                                            <?php 
                                                                if ($row['validate']=='0') {
                                                            ?>
                                                                <td>
                                                                    <button class="btn btn-success" name="Validate">Validate</button>
                                                                </td>
                                                            <?php

                                                                }
                                                                elseif ($row['validate']=='1') {
                                                            ?>
                                                                <td>
                                                                    <button class="btn btn-success" name="Block">Block</button>
                                                                </td>
                                                            <?php 
                                                                
                                                                }
                                                                elseif ($row['validate']=='2') {
                                                            ?>
                                                                <td>
                                                                    <button class="btn btn-success" name="Unblock">Unblock</button>
                                                                </td>
                                                            <?php 
                                                                
                                                                }
                                                            ?>
                                                                </tr>
                                                            </form>
                                                            <?php
                                                        }
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
if(isset($_POST['Validate'])){ //check if form was submitted
    $id = $_POST['id'];
    $checkQuery= "UPDATE userdetail SET validate='1' WHERE id='".$id."'";
    $checkResult=mysqli_query($conn, $checkQuery);
    $page = $_SERVER['PHP_SELF'];
    $sec = "1";
    header("Refresh: $sec; url=$page");
}
if(isset($_POST['Block'])){ //check if form was submitted
    $id = $_POST['id'];
    $checkQuery= "UPDATE userdetail SET validate='2' WHERE id='".$id."'";
    $checkResult=mysqli_query($conn, $checkQuery);
    $page = $_SERVER['PHP_SELF'];
    $sec = "1";
    header("Refresh: $sec; url=$page");
}
if(isset($_POST['Unblock'])){ //check if form was submitted
    $id = $_POST['id'];
    $checkQuery= "UPDATE userdetail SET validate='1' WHERE id='".$id."'";
    $checkResult=mysqli_query($conn, $checkQuery);
    $page = $_SERVER['PHP_SELF'];
    $sec = "1";
    header("Refresh: $sec; url=$page");
}    
?>