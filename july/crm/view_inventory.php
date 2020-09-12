<?php include 'include/header.php'; ?>
<?php  
    if(!isset($_POST['id'])){
        echo "<script>window.location.href='view_site.php';</script>";
    }
?>
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Inventory</h1>
          </div>

          <div class="card shadow mb-4" id="view_inventory">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">View/Edit the Inventory Stock</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th class="text-primary" style="width: 100px !important">S.no</th>
                      <th class="text-primary">Name</th>
                      <th class="text-primary">Quantity</th>
                      <?php
                        if($login_type != 'sub_admin') {
                      ?>
                      <th class="text-primary" style="width: 120px !important">Update</th>
                      <th class="text-primary" style="width: 120px !important">Delete</th>
                      <?php 
                        }
                      ?>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th class="text-primary" style="width: 100px !important">S.no</th>
                      <th class="text-primary">Name</th>
                      <th class="text-primary">Quantity</th>
                      <?php
                        if($login_type != 'sub_admin') {
                      ?>
                      <th class="text-primary" style="width: 120px !important">Update</th>
                      <th class="text-primary" style="width: 120px !important">Delete</th>
                      <?php 
                        }
                      ?>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php 
                      include 'include/connection.php';
                      $checkAdmin = "SELECT material_category, quantity, inventory.id FROM inventory JOIN  material_category_list ON inventory.material_id = material_category_list.id  WHERE inventory.site_id = '".$_POST['id']."' ORDER BY id DESC";
                      $resultAdmin = mysqli_query($conn, $checkAdmin);
                      $no = 1;
                      while ($row = $resultAdmin -> fetch_assoc()) {
                    ?>
                        <tr>
                          <td><?php echo $no++; ?></td>
                          <td><?php echo $row['material_category']; ?></td>
                          <?php
                            if($login_type != 'sub_admin') {
                          ?>
                              <form method="post">
                                  <td><input type="text" value="<?php echo $row['quantity']; ?>" name="quantity" class="form-control"></td>
                                  <td>
                                      <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                      <button class="btn btn-success" type="submit" name="updatedata">
                                        <i class="fa fa-edit"></i>
                                      </button>
                                  </td>
                              </form>
                              <td align="center">
                                <form method="post">
                                  <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                  <button class="btn btn-danger" type="submit" name="deleteMaterial">
                                    <i class="fa fa-trash"></i>
                                  </button>
                                </form>
                              </td>
                          <?php 
                            }
                          ?>
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
<?php include 'include/footer.php'; ?>

<?php

  if(isset($_POST['deleteMaterial'])){ //check if form was submitted

      $checkQuery = "DELETE FROM inventory WHERE id='".$_POST['id']."'";
      if (mysqli_query($conn, $checkQuery)) {
      }
      echo "<script>window.location.href='view_site.php';</script>";    
  }
  if(isset($_POST['updatedata'])){ //check if form was submitted

      $checkQuery = "UPDATE inventory SET quantity = '".$_POST['quantity']."' WHERE id='".$_POST['id']."'";
      if (mysqli_query($conn, $checkQuery)) {
      }
      echo "<script>window.location.href='view_site.php';</script>";    
  }

?>
