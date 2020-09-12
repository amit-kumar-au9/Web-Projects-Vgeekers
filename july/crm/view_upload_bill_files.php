<?php include 'include/header.php'; ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">
            <div class="row">
                <?php 
                    include 'include/connection.php';
                    $checkFile = "SELECT * FROM upload_bill_file WHERE upload_bill_id = '".$_POST['id']."'";
                    $resultFile = mysqli_query($conn, $checkFile);
                    while ($row = $resultFile -> fetch_assoc()) {
                        if($row['type'] == 'image'){
                ?> 
                            <div class="col-md-4" style="background-color: grey" align="center">
                                <a href="assets/img/upload_bill/<?php echo $row['file']; ?>" target="_blank">
                                    <img src="assets/img/upload_bill/<?php echo $row['file']; ?>" width="auto" height="400px">
                                </a>
                            </div>
                <?php 
                        }
                        elseif ($row['type'] == 'pdf') {
                ?>
                            <div class="col-md-4">
                                <iframe src="assets/files/upload_bill/<?php echo $row['file']; ?>" width="100%" height = "400px" /></iframe>
                            </div>
                <?php 
                        }
                    }
                ?>
            </div>
        </div>
        <!-- /.container-fluid -->

<?php include 'include/footer.php'; ?>