<?php include 'include/header.php'; ?>
<?php 
  if($_POST['id'] == ''){
    echo "<script>window.location.href='view_site.php';</script>";
  }
  include 'include/connection.php';
  $checkCourse = "SELECT * FROM site WHERE id = '".$_POST['id']."'";
  $resultCourse = mysqli_query($conn, $checkCourse);
  $row = $resultCourse -> fetch_assoc();
?>
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Site</h1>
          </div>

          <!-- Content Row -->

          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-12 col-lg-12" id="content">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Site Details</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="chart-area" style="height: auto !important">
                    <form class="addSite">
                      <div class="row">
                        <input type="hidden" name="id" value="<?php echo $_POST['id']; ?>">
                        <div class="form-group col-md-6">
                          <label style="color: black">Project Name <span style="color: red">*</span></label>
                          <input type="text" name="project_name" class="form-control" placeholder="Enter Project Name" value="<?php echo $row['project_name']; ?>" required>
                        </div>

                        <div class="form-group col-md-6">
                          <label style="color: black">Project Location <span style="color: red">*</span></label>
                          <input type="text" name="location" class="form-control" placeholder="Enter Location" value="<?php echo $row['location']; ?>" required >
                        </div>

                        <div class="form-group col-md-6">
                          <label style="color: black">Cost of the Project<span style="color: red">*</span></label>
                          <input type="number" name="cost" class="form-control" min="1" placeholder="Enter Cost" value="<?php echo $row['cost']; ?>" required>
                        </div>

                        <div class="form-group col-md-6">
                          <label style="color: black">Assign to Admin<span style="color: red"> * &nbsp;Choose from Dropdown list</span></label>
                          <select class="form-control" name="assign">
                          <?php 
                            include 'include/connection.php';
                            $checkSite = "SELECT username, id FROM user_details WHERE type = 'admin'";
                            $checkResult = mysqli_query($conn, $checkSite);
                            while($admin = $checkResult -> fetch_assoc()){
                          ?>
                              <option value="<?php echo $admin['username']; ?>" <?php if($row['assign'] == $admin['username']){ echo "selected"; } ?>><?php echo $admin['username'] ?></option>
                          <?php 
                            }
                          ?>
                          </select>
                        </div>

                        <div class="form-group col-md-12">
                          <label style="color: black">Site Plan <span style="color: red">*</span></label>
                          <textarea type="text" name="site_plan" class="form-control" placeholder="Enter Site Plan" required rows="8"><?php echo $row['site_plan']; ?></textarea>
                          <!-- <script>CKEDITOR.replace( 'site_plan' );</script> -->
                        </div>

                      </div>
                        <button class="btn btn-primary" type="submit" id="btnSubmit1" name="addSite">Edit Site</button>
                        <button class="btn btn-primary" id="load" style="display:none" disabled><i class="fa fa-spinner fa-spin"></i>Loading</button>
                    </form>
                    <span id='message1'></span>

                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
        <!-- /.container-fluid -->
<?php include 'include/footer.php'; ?>
<script> 

  $('form.addSite').submit(function(e){
      $('#load').show();
    $('#btnSubmit1').hide();
    e.preventDefault();
    var formdata = new FormData(this);
    formdata.append('form', $(this).attr('class'));
    $.ajax({
      'data' : formdata,
      'url' : 'task/update_site.php',
      'type' : 'post',
      'contentType' : false,
      'cache' : false,
      'processData' :false,
      success : function(response){
        window.location = 'view_site.php';
      }
    });
  });
</script> 
