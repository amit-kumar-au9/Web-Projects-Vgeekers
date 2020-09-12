<?php include 'include/header.php'; ?>
<?php 
  if($_POST['id'] == ''){
    echo "<script>window.location.href='view_sub_admin.php';</script>";
  }
  include 'include/connection.php';
  $checkCourse = "SELECT * FROM user_details WHERE id = '".$_POST['id']."'";
  $resultCourse = mysqli_query($conn, $checkCourse);
  $row = $resultCourse -> fetch_assoc();
?>
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Sub Admin Details</h1>
          </div>

          <!-- Content Row -->

          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-12 col-lg-12" id="content">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Change Sub Admin Details</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="chart-area" style="height: auto !important">
                    <form class="updateAdmin" enctype="multipart/form-data">
                      <div class="row">
                        
                        <input type="hidden" name="id" value="<?php echo $_POST['id']; ?>">
                        <input type="hidden" name="image" value="<?php echo $row['image']; ?>">
                        <div class="form-group col-md-4">
                          <label style="color: black">User Name <span style="color: red">*</span></label>
                          <input type="text" name="username" class="form-control" placeholder="Enter Class or Subject Name" value="<?php echo $row['username']; ?>" required>
                        </div>

                        <div class="form-group col-md-4">
                          <label style="color: black">Change Password <span style="color: red">*</span></label>
                          <input type="text" name="password" class="form-control" placeholder="Enter new Password">
                        </div>

                        <div class="form-group col-md-4">
                          <label style="color: black">Select Site <span style="color: red"><b>(Choose from dropdown)</b></span> <span style="color: red">*</span></label>
                          <select class="form-control" name="site_id">
                            <?php  
                              include 'include/connection.php';
                              $checkSite = "SELECT * FROM site";
                              $resultSite = mysqli_query($conn, $checkSite);
                              while($siteRow = $resultSite -> fetch_assoc()){
                            ?>
                                <option value="<?php echo $siteRow['id']; ?>" <?php if($siteRow['id'] == $row['site_id']){ echo "selected";} ?>><?php echo $siteRow['project_name']; ?></option>
                            <?php 
                              }
                            ?>
                          </select>
                        </div>

                        <div class="form-group col-md-12">
                            <button class="btn btn-primary" type="submit" style="margin-top: 30px" id="btnSubmit1">Edit Sub Admin Details</button>
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
<script type="text/javascript">
  $('form.updateAdmin').submit(function(e){
      $('#load').show();
    $('#btnSubmit1').hide();
    e.preventDefault();
    var formdata = new FormData(this);
    formdata.append('form', $(this).attr('class'));
    $.ajax({
      'data' : formdata,
      'url' : 'task/update_sub_admin_details.php',
      'type' : 'post',
      'contentType' : false,
      'cache' : false,
      'processData' :false,
      success : function(response){
        
        var json = JSON.parse(response);
       
        if(!json.error){
          window.location = 'view_sub_admin.php';
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