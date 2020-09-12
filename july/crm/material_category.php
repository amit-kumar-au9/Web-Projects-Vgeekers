<?php include 'include/header.php'; ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Material Category</h1>
          </div>

          <!-- Content Row -->

          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-12 col-lg-12" id="add_material">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Add Material Category</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="chart-area" style="height: auto !important">
                    <form class="addMaterial" enctype="multipart/form-data">

                      <div class="row">
                        <div class="form-group col-md-4">
                          <input type="text" name="material_category" class="form-control" placeholder="Enter Material Category Name" required>
                        </div>
                        <div class="form-group col-md-4">
                          <button class="btn btn-primary" type="submit" id="btnSubmit1">Add</button>
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
          <div class="card shadow mb-4" id="view_material">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">View/Edit the Material Category</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th class="text-primary" style="width: 100px !important">S.no</th>
                      <th class="text-primary">Name</th>
                      <th class="text-primary" style="width: 120px !important">Update</th>
                      <th class="text-primary" style="width: 120px !important">Delete</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th class="text-primary" style="width: 100px !important">S.no</th>
                      <th class="text-primary">Name</th>
                      <th class="text-primary" style="width: 120px !important">Update</th>
                      <th class="text-primary" style="width: 120px !important">Delete</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php 
                      include 'include/connection.php';
                      $checkAdmin = "SELECT * FROM material_category_list ORDER BY id DESC";
                      $resultAdmin = mysqli_query($conn, $checkAdmin);
                      $no = 1;
                      while ($row = $resultAdmin -> fetch_assoc()) {
                        $id = $row['id'];
                    ?>
                        <tr>
                          <td><?php echo $no++; ?></td>
                          <td><?php echo $row['material_category']; ?></td>
                          <td>
                            <form method="post" action="change_material_category.php">
                              <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                              <button class="btn btn-success" type="submit" name="deleteAdmin">
                                <i class="fa fa-edit"></i>
                              </button>
                            </form>
                          </td>
                          <td align="center">
                            <form method="post">
                              <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                              <button class="btn btn-danger" type="submit" name="deleteMaterial">
                                <i class="fa fa-trash"></i>
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
      'url' : 'task/insert_material_category.php',
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
