<?php include 'include/header.php'; ?>
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="mb-2 text-gray-800" align="center">To be made</h1>

        </div>
        <!-- /.container-fluid -->
<script src="vendor/datatables/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
<!-- Page level custom scripts -->
<script src="js/demo/datatables-demo.js"></script>

<?php include 'include/footer.php'; ?>

<?php

  if(isset($_POST['deleteImage'])){ //check if form was submitted

      $checkQuery = "DELETE FROM site WHERE id='".$_POST['id']."'";
      if (mysqli_query($conn, $checkQuery)) {
      }
      echo "<script>window.location.href='view_site.php';</script>";    
  }

?>