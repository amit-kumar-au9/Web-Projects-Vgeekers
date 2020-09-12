<?php include 'include/header.php'; ?>
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">All Site</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">View/Edit the Site</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="text-align: center;">
                  <thead>
                    <tr>
                      <th class="text-primary">S.no</th>
                      <th class="text-primary">Site Name</th>
                      <!-- <th class="text-primary">Sub Admin</th> -->
                      <th class="text-primary">Attendance</th>
                      <th class="text-primary">Out of</th>
                      <th class="text-primary">Date</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th class="text-primary">S.no</th>
                      <th class="text-primary">Site Name</th>
                      <!-- <th class="text-primary">Sub Admin</th> -->
                      <th class="text-primary">Attendance</th>
                      <th class="text-primary">Out of</th>
                      <th class="text-primary">Date</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php 
                      include 'include/connection.php';
                      $checkCourse = "SELECT project_name, today_count, total_count, date, attendance.id FROM attendance JOIN site ON site.id = attendance.site_id WHERE site.id = '".$_POST['id']."'";
                      $resultCourse = mysqli_query($conn, $checkCourse);
                      $no = 1;
                      while ($row = $resultCourse -> fetch_assoc()) {
                        $id = $row['id'];
                    ?>
                        <tr>
                          <td><?php echo $no++; ?></td>
                          <td><?php echo $row['project_name']; ?></td>
                          <!-- <td><?php echo $row['username']; ?></td> -->
                          <td><?php echo $row['today_count']; ?></td>
                          <td><?php echo $row['total_count']; ?></td>
                          <td><?php echo $row['date']; ?></td>
                        </tr>
                    <?php 
                      }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

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