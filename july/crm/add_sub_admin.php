<?php include 'include/header.php'; ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Add New Sub Admin</h1>
          </div>

          <!-- Content Row -->

          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-12 col-lg-12" id="content">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Sub Admin Details</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="chart-area" style="height: auto !important">
                    <form class="addSubAdmin" enctype="multipart/form-data">
                      <div class="row">

                        <div class="form-group col-md-6">
                          <label style="color: black">Name <span style="color: red">*</span></label>
                          <input type="text" name="username" class="form-control" placeholder="Enter Full Name" required>
                        </div>

                        <div class="form-group col-md-6">
                          <label style="color: black">Select Site <span style="color: red"><b>(Choose from dropdown)</b></span> <span style="color: red">*</span></label>
                          <select class="form-control" name="site_id">
                            <?php  
                              include 'include/connection.php';
                              $checkSite = "SELECT * FROM site ORDER BY id DESC";
                              $resultSite = mysqli_query($conn, $checkSite);
                              while($row = $resultSite -> fetch_assoc()){
                            ?>
                                <option value="<?php echo $row['id']; ?>"><?php echo $row['project_name']; ?></option>
                            <?php 
                              }
                            ?>
                          </select>
                        </div>

                        <div class="form-group col-md-6">
                          <label style="color: black">Password <span style="color: red">*</span></label>
                          <input type="text" name="password" id="password" class="form-control" placeholder="Enter Correct Password" required >
                        </div>

                        <div class="form-group col-md-6">
                          <label style="color: black">Confirm Password <span style="color: red">*</span></label>
                          <input type="text" name="cpassword" id="confirm_password" class="form-control" placeholder="Enter Correct Password" required >
                          <span id='message'></span>
                        </div>

                      </div>
                      <button class="btn btn-primary" type="submit" id="btnSubmit1">Add Sub Admin</button>
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
  $('#password, #confirm_password').on('keyup', function () {

    if ($('#password').val() == $('#confirm_password').val()) {
      
      $('#message').html('Matching').css('color', 'green');
      $("#btnSubmit1").attr("disabled", false);
    
    } 
    else {
      $("#btnSubmit1").attr("disabled", true);
      $('#message').html('Not Matching').css('color', 'red');
    }
  });
  
  $('#username, #confirm_username').on('keyup', function () {

    if ($('#username').val() == $('#confirm_username').val()) {

      $("#btnSubmit").attr("disabled", false);
      $('#message').html('Matching').css('color', 'green');
    
    } 
    else {
      $("#btnSubmit").attr("disabled", true);
      $('#message').html('Not Matching').css('color', 'red');
    }

  });

  $('form.addSubAdmin').submit(function(e){
      $('#load').show();
    $('#btnSubmit1').hide();
    e.preventDefault();
    var formdata = new FormData(this);
    formdata.append('form', $(this).attr('class'));
    $.ajax({
      'data' : formdata,
      'url' : 'task/insert_sub_admin.php',
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
