<?php include 'include/header.php'; ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">View Uploaded Bill</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4" id="viewBill">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">All the Uploaded Bills Details</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th class="text-primary">S.no</th>
                      <th class="text-primary">Item Name</th>
                      <th class="text-primary">Billing Amount</th>
                      <th class="text-primary">Description</th>
                      <th class="text-primary" style="width: 200px !important">View Images/Pdf</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th class="text-primary">S.no</th>
                      <th class="text-primary">Item Name</th>
                      <th class="text-primary">Billing Amount</th>
                      <th class="text-primary">Description</th>
                      <th class="text-primary" style="width: 200px !important">View Images/Pdf</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php 
                      include 'include/connection.php';
                      $checkCourse = "SELECT * FROM upload_bill WHERE site_id = '".$_POST['id']."' ORDER BY id DESC";
                      $resultCourse = mysqli_query($conn, $checkCourse);
                      $no = 1;
                      while ($row = $resultCourse -> fetch_assoc()) {
                        $id = $row['id'];
                    ?>
                        <tr>
                          <td><?php echo $no++; ?></td>
                          <td><?php echo $row['item_name']; ?></td>
                          <td><?php echo $row['billing_amount']; ?></td>
                          <td><?php echo $row['dsc']; ?></td>
                          <td align="center">
                            <form action="view_upload_bill_files.php" method="post">
                              <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                              <button class="btn btn-success" type="submit">View</button>
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
<!-- Page level custom scripts -->

<?php include 'include/footer.php'; ?>
