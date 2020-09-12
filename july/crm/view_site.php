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
                      <th class="text-primary">Site ID</th>
                      <th class="text-primary">Project Name</th>
                      <th class="text-primary">Cost</th>
                      <th class="text-primary">Location</th>
                      <th class="text-primary">Assign</th>
                      <th class="text-primary">View Attendance</th>
                      <th class="text-primary">View Inventory</th>
                      <th class="text-primary">View Cash Flow</th>
                      <!-- <th class="text-primary">Upload Material</th> -->
                      <!-- <th class="text-primary">Upload Work Order</th> -->
                      <th class="text-primary">Created Bill</th>
                      <th class="text-primary">Uploaded Bill</th>
                      <th class="text-primary">View Report</th>
                      <th class="text-primary">Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th class="text-primary">S.no</th>
                      <th class="text-primary">Site ID</th>
                      <th class="text-primary">Project Name</th>
                      <th class="text-primary">Cost</th>
                      <th class="text-primary">Location</th>
                      <th class="text-primary">Assign</th>
                      <th class="text-primary">View Attendance</th>
                      <th class="text-primary">View Inventory</th>
                      <th class="text-primary">View Cash Flow</th>
                      <!-- <th class="text-primary">Upload Material</th> -->
                      <!-- <th class="text-primary">Upload Work Order</th> -->
                      <th class="text-primary">Created Bill</th>
                      <th class="text-primary">Uploaded Bill</th>
                      <th class="text-primary">View Report</th>
                      <th class="text-primary">Action</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php 
                      include 'include/connection.php';
                      $checkCourse = "SELECT * FROM site";
                      $resultCourse = mysqli_query($conn, $checkCourse);
                      $no = 1;
                      while ($row = $resultCourse -> fetch_assoc()) {
                        $id = $row['id'];
                    ?>
                        <tr>
                          <td><?php echo $no++; ?></td>
                          <td>Site <?php echo $row['id']; ?></td>
                          <td><?php echo $row['project_name']; ?></td>
                          <td><?php echo $row['cost']; ?></td>
                          <td><?php echo $row['location']; ?></td>
                          <td><?php echo $row['assign']; ?></td>
                          <td align="center">
                            <form action="view_attendance.php" method="post">
                              <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                              <button class="btn btn-success" type="submit">View</button>
                            </form>
                          </td>
                          <td align="center">
                            <form action="view_inventory.php" method="post">
                              <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                              <button class="btn btn-success" type="submit">View</button>
                            </form>
                          </td>
                          <td align="center">
                            <form action="view_cash_flow.php" method="post">
                              <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                              <button class="btn btn-success" type="submit">View</button>
                            </form>
                          </td>
                          <!-- <td align="center">
                            <form action="material_category_wise.php" method="post">
                              <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                              <button class="btn btn-success" type="submit">Upload / Edit</button>
                            </form>
                          </td> -->
                          <!-- <td align="center">
                            <form action="work_order.php" method="post">
                              <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                              <button class="btn btn-success" type="submit">Upload / Edit</button>
                            </form>
                          </td> -->
                          <td align="center">
                            <form action="view_created_bill.php" method="post">
                              <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                              <button class="btn btn-success" type="submit">View</button>
                            </form>
                          </td>
                          <td align="center">
                            <form action="view_uploaded_bill.php" method="post">
                              <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                              <button class="btn btn-success" type="submit">View</button>
                            </form>
                          </td>
                          <td align="center">
                            <form action="view_report.php" method="post">
                              <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                              <button class="btn btn-success" type="submit">View</button>
                            </form>
                          </td>
                          <td align="center">
                            <form action="change_site_details.php" method="post">
                              <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                              <button class="btn btn-warning btn-circle" type="submit"><i class="fa fa-edit"></i></button>
                            </form>
                            <form method="post">
                              <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                              <input type="hidden" name="image" value="<?php echo $row['image']; ?>">
                              <button class="btn btn-danger btn-circle" type="submit" name="deleteImage"><i class="fas fa-trash"></i></button>
                            </form>
                          </td>
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