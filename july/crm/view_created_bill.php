<?php include 'include/header.php'; ?>
<?php
    if($_POST['id'] == ''){
          echo "<script>window.location.href='add_created_bill.php';</script>";
    }
  ?>
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">View Created Bill</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4" id="viewBill">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">All the Created Bills Details</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th class="text-primary">S.no</th>
                      <th class="text-primary">Buyer Name</th>
                      <th class="text-primary">GST No.</th>
                      <th class="text-primary">State</th>
                      <th class="text-primary">Job Name</th>
                      <th class="text-primary">Total</th>
                      <th class="text-primary">View Bill</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th class="text-primary">S.no</th>
                      <th class="text-primary">Buyer Name</th>
                      <th class="text-primary">GST No.</th>
                      <th class="text-primary">State</th>
                      <th class="text-primary">Job Name</th>
                      <th class="text-primary">Total</th>
                      <th class="text-primary">View Bill</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php 
                      include 'include/connection.php';
                      $checkCourse = "SELECT * FROM create_bill WHERE site_id = '".$_POST['id']."' ORDER BY id DESC";
                      $resultCourse = mysqli_query($conn, $checkCourse);
                      $no = 1;
                      while ($row = $resultCourse -> fetch_assoc()) {
                        $id = $row['id'];
                    ?>
                        <tr>
                          <td><?php echo $no++; ?></td>
                          <td><?php echo $row['b_name']; ?></td>
                          <td><?php echo $row['b_gstin']; ?></td>
                          <td><?php echo $row['b_state']; ?></td>
                          <td><?php echo $row['name_of_work']; ?></td>
                          <td><?php echo $row['total_amount']; ?></td>
                          <td>
                            <a class="btn btn-primary" href="pdf.php?id=<?php echo $row['id']; ?>"><span style="color: white">Print Bill</span></a>
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