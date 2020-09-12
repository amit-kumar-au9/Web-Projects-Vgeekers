<?php include 'include/header.php'; ?>
<?php 
    if(!isset($_POST['id'])){
        echo "<script>window.location.href='view_site.php';</script>";
    }
  include 'include/connection.php';
  $checkCourse = "SELECT * FROM material_category_list WHERE id = '".$_POST['id']."'";
  $resultCourse = mysqli_query($conn, $checkCourse);
  $row = $resultCourse -> fetch_assoc();
?>

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
                  <h6 class="m-0 font-weight-bold text-primary">Update Material Category</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="chart-area" style="height: auto !important">
                    <form class="updateMaterial">
                      <div class="row">

                        <div class="form-group col-md-4">
                          <input type="hidden" name="id" value="<?php echo $_POST['id']; ?>">
                          <input type="text" name="material_category" class="form-control" placeholder="Enter Material Category Name" value="<?php echo $row['material_category']; ?>" required>
                        </div>

                        <div class="form-group col-md-4">
                          <button class="btn btn-primary" type="submit" id="btnSubmit1">Update</button>
                          <button class="btn btn-primary" id="load" style="display:none" disabled><i class="fa fa-spinner fa-spin"></i>Loading</button>
                        </div>
                        <span id='message1'></span>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
        <!-- /.container-fluid -->
<?php include 'include/footer.php'; ?>
<script> 

  $('form.updateMaterial').submit(function(e){
      $('#load').show();
    $('#btnSubmit1').hide();
    e.preventDefault();
    var formdata = new FormData(this);
    formdata.append('form', $(this).attr('class'));
    $.ajax({
      'data' : formdata,
      'url' : 'task/update_material_category.php',
      'type' : 'post',
      'contentType' : false,
      'cache' : false,
      'processData' :false,
      success : function(response){
        var json = JSON.parse(response);
        if(!json.error){
          window.location = 'material_category.php';
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
