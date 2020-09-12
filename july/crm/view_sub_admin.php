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
          <h1 class="h3 mb-2 text-gray-800">All Sub Admin</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">View/Edit the Admin Details</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" align="center">
                  <thead align="center">
                    <tr>
                      <th class="text-primary">S.no</th>
                      <th class="text-primary">Sub Admin id</th>
                      <th class="text-primary">Name</th>
                      <th class="text-primary">Site Name</th>
                      <th class="text-primary">Site id</th>
                      <th class="text-primary">Block/Unblock</th>
                      <th class="text-primary">Action</th>
                    </tr>
                  </thead>
                  <tfoot align="center">
                    <tr>
                      <th class="text-primary">S.no</th>
                      <th class="text-primary">Sub Admin id</th>
                      <th class="text-primary">Name</th>
                      <th class="text-primary">Site Name</th>
                      <th class="text-primary">Site id</th>
                      <th class="text-primary">Block/Unblock</th>
                      <th class="text-primary">Action</th>
                    </tr>
                  </tfoot>
                  <tbody align="center">
                    <?php 
                      include 'include/connection.php';
                      $checkAdmin = "SELECT user_details.id, project_name, username, is_block, site_id FROM user_details JOIN site ON user_details.site_id = site.id WHERE type = 'sub_admin' ORDER BY user_details.id DESC";
                      $resultAdmin = mysqli_query($conn, $checkAdmin);
                      $no = 1;
                      while ($row = $resultAdmin -> fetch_assoc()) {
                        $id = $row['id'];
                    ?>
                        <tr>
                          <td><?php echo $no++; ?></td>
                          <td>Sub Admin <?php echo $row['id']; ?></td>
                          <td><?php echo $row['username']; ?></td>
                          <td><?php echo $row['project_name']; ?></td>
                          <td><?php echo $row['site_id']; ?></td>
                          <td>
                            <label class="switch" id="btnSubmit<?php echo $id; ?>">
                                <input type="checkbox" name="is_block" <?php if($row['is_block'] == '1'){ echo "checked";} ?> onclick="change_is_block(<?php echo $id; ?>)">
                                <span class="slider round"></span>
                            </label>
                            <button class="btn btn-primary" id="load<?php echo $id; ?>" style="display:none" disabled><i class="fa fa-spinner fa-spin"></i></button>
                          </td>
                          <td align="center">
                            <form action="change_sub_admin_details.php" method="post">
                              <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                              <button class="btn btn-warning btn-circle" type="submit">
                                <i class="fa fa-edit"></i>
                              </button>
                            </form>
                            <form method="post">
                              <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                              <input type="hidden" name="image" value="<?php echo $row['image']; ?>">
                              <button class="btn btn-danger btn-circle" type="submit" name="deleteSubAdmin">
                                <i class="fas fa-trash"></i>
                              </button>
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

<script>
  function change_is_block(sub_admin_id){
      $('#load'+sub_admin_id).show();
        $('#btnSubmit'+sub_admin_id).hide();
    $.ajax({
        'type' : 'post',
        'data' : 'sub_admin_id='+sub_admin_id,
        'url' : 'task/update_sub_admin_is_block.php',
        success : function(response){
           location.reload(true);
        }
    });
  }
</script>

<?php include 'include/footer.php'; ?>

<?php

  if(isset($_POST['deleteSubAdmin'])){ //check if form was submitted

      $checkQuery = "DELETE FROM user_details WHERE id='".$_POST['id']."'";
      if (mysqli_query($conn, $checkQuery)) {
        $image = "assets/img/sub_admin/".$_POST['image'];
        unlink($image);
      }
      echo "<script>window.location.href='view_sub_admin.php';</script>";    
  }

?>