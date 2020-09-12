<?php include 'include/header.php'; ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Points</h1>
          </div>

          <!-- Content Row -->

          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-12 col-lg-12" id="add_inventory">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Update Points</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="chart-area" style="height: auto !important">
                    <form class="addMaterial" enctype="multipart/form-data">

                      <div class="row">
                          
                        <div class="form-group col-md-8">
                          <label style="color: black">Enter Reason</label>
                          <textarea type="text" name="reason" class="form-control" placeholder="Enter Reason" required></textarea>
                        </div>
                        <input type="hidden" name="admin_id" value="<?php echo $_POST['id']; ?>" required>
                        <div class="form-group col-md-4">
                          <label style="color: black">Enter Points</label>
                          <input type="number" name="points" class="form-control" min="1" placeholder="Enter Points" required>
                        </div>
                        
                        <div class="form-group col-md-4">
                            <span>
                                <input type="radio" name="type" value="Added" required>
                                <label>Add Points</label>
                            </span>
                            <br>
                            <span>
                                <input type="radio" name="type" value="Remove" required>
                                <label>Remove Points</label>
                            </span>
                        </div>
                        
                        <div class="form-group col-md-12">
                          <button class="btn btn-primary" type="submit" id="btnSubmit1">ADD</button>
                          <button class="btn btn-primary" id="load" style="display:none" disabled><i class="fa fa-spinner fa-spin"></i>Loading</button>
                        </div>

                      </div>
                    </form>
                    <span id='message1'></span>

                  </div>
                </div>
              </div>
            </div>

          </div>
          <div class="card shadow mb-4" id="view_inventory">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">View Points History</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th class="text-primary" style="width: 100px !important">S.no</th>
                      <th class="text-primary">Add Points</th>
                      <th class="text-primary">Updated Points</th>
                      <th class="text-primary">Reason</th>
                      <th class="text-primary">Type</th>
                      <th class="text-primary">Time</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th class="text-primary" style="width: 100px !important">S.no</th>
                      <th class="text-primary">Add Points</th>
                      <th class="text-primary">Updated Points</th>
                      <th class="text-primary">Reason</th>
                      <th class="text-primary">Type</th>
                      <th class="text-primary">Time</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php 
                      include 'include/connection.php';
                      $checkAdmin = "SELECT * FROM points_txn WHERE admin_id = '".$_POST['id']."' ORDER BY id DESC";
                      $resultAdmin = mysqli_query($conn, $checkAdmin);
                      $no = 1;
                      while ($row = $resultAdmin -> fetch_assoc()) {
                    ?>
                        <tr align="center">
                          <td><?php echo $no++; ?></td>
                          <td><?php echo $row['points_added']; ?></td>
                          <td><?php echo $row['points_updated']; ?></td>
                          <td><?php echo $row['reason']; ?></td>
                          <?php if($row['type'] == 'Added'){ ?>
                            <td><b><mark style="background-color: green;color: white;"><?php echo $row['type']; ?></mark></b></td>
                          <?php } ?>
                          <?php if($row['type'] == 'Remove'){ ?>
                            <td><b><mark style="background-color: red;color: white;">Removed</mark></b></td>
                          <?php } ?>
                          <td><?php echo $row['time_created']; ?></td>
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
<script> 

  $('form.addMaterial').submit(function(e){
    $('#load').show();
    $('#btnSubmit1').hide();
    e.preventDefault();
    var formdata = new FormData(this);
    formdata.append('form', $(this).attr('class'));
    $.ajax({
      'data' : formdata,
      'url' : 'task/update_admin_points.php',
      'type' : 'post',
      'contentType' : false,
      'cache' : false,
      'processData' :false,
      success : function(response){
        var json = JSON.parse(response);
       
        if(!json.error){
          $('#message1').html(json.message).css('color', 'green');
          setTimeout("location.reload(true);", 500);
        }
        else{
          $('#message1').html(json.message).css('color', 'red');
          $('#load').hide();
          $('#btnSubmit1').show();
        }
      }
    });
  });
</script> 

<?php

  if(isset($_POST['deleteMaterial'])){ //check if form was submitted

      $checkQuery = "DELETE FROM material_category_list WHERE id='".$_POST['id']."'";
      if (mysqli_query($conn, $checkQuery)) {
      }
      echo "<script>window.location.href='material_category.php';</script>";    
  }

?>
