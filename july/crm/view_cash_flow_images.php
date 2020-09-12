<?php include 'include/header.php'; ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">
            <div class="row">
                <?php 
                    include 'include/connection.php';
                    $checkFile = "SELECT * FROM cash_flow_image WHERE cash_flow_id = '".$_POST['id']."'";
                    $resultFile = mysqli_query($conn, $checkFile);
                    while ($row = $resultFile -> fetch_assoc()) {
                ?> 
                        <div class="col-md-4 mt-4">
                            <img src="assets/img/cash_flow/<?php echo $row['image']; ?>" width="100%" height="100%">
                        </div>
                <?php 
                    }
                ?>
            </div>
        </div>
        <!-- /.container-fluid -->

<?php include 'include/footer.php'; ?>