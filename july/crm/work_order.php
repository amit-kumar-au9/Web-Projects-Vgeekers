<?php include 'include/header.php'; ?>
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  <style>
    .switch {
    position: relative;
    display: inline-block;
    width: 60px;
    height: 34px;
    }
    .switch input { 
    opacity: 0;
    width: 0;
    height: 0;
    }
    .slider {
    position: absolute;
    cursor: pointer;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: #ccc;
    -webkit-transition: .4s;
    transition: .4s;
    }
    .slider:before {
    position: absolute;
    content: "";
    height: 26px;
    width: 26px;
    left: 4px;
    bottom: 4px;
    background-color: white;
    -webkit-transition: .4s;
    transition: .4s;
    }
    input:checked + .slider {
    background-color: #2196F3;
    }
    input:focus + .slider {
    box-shadow: 0 0 1px #2196F3;
    }
    input:checked + .slider:before {
    -webkit-transform: translateX(26px);
    -ms-transform: translateX(26px);
    transform: translateX(26px);
    }
    /* Rounded sliders */
    .slider.round {
    border-radius: 34px;
    }
    .slider.round:before {
    border-radius: 50%;
    }
</style>


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