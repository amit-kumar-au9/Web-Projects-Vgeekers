<?php include 'include/header.php'; ?>
<?php 
  include 'include/connection.php';
  $selectPoints = "SELECT points FROM user_details WHERE id = '".$login_id."'";
  $result = mysqli_query($conn, $selectPoints);
  $row = $result -> fetch_assoc();
  $points = $row['points'];
?>
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Money Transfer</h1>
          </div>

          <!-- Content Row -->

          <?php
            if($login_type == 'admin') {
          ?>
            <div class="row">
              <!-- Area Chart -->
              <div class="col-xl-12 col-lg-12" id="add_inventory">
                <div class="card shadow mb-4">
                  <!-- Card Header - Dropdown -->
                  <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Add Money Transfer</h6>
                  </div>
                  <!-- Card Body -->
                  <div class="card-body">
                    <div class="chart-area" style="height: auto !important">
                      <form class="addMaterial" enctype="multipart/form-data">

                        <div class="row">

                          <div class="form-group col-md-6">
                            <label style="color: black">Select Admin <span style="color: red"><b>(Choose from dropdown)</b></span> <span style="color: red">*</span></label>

                            <select class="form-control" name="to_admin_id" required>
                              <option disabled="true" selected="true">Select your Option</option>
                              <?php  
                                include 'include/connection.php';
                                $checkSite = "SELECT * FROM user_details WHERE type = 'admin' ORDER BY id DESC";
                                $resultSite = mysqli_query($conn, $checkSite);
                                while($row = $resultSite -> fetch_assoc()){
                              ?>
                                  <option value="<?php echo $row['id']; ?>"><?php echo $row['username']; ?></option>
                              <?php 
                                }
                              ?>
                            </select>
                          </div>

                          <div class="form-group col-md-6">
                            <label style="color: black">Enter Money </label>
                            <input type="number" name="amount" min="1" class="form-control" placeholder="Enter Amount" required>
                          </div>

                          <div class="form-group col-md-12">
                            <label style="color: black">Enter Reason</label>
                            <textarea type="text" name="reason" class="form-control" required></textarea>
                          </div>

                          <div class="form-group col-md-12">
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
          <?php 
            }
          ?>
          <div class="card shadow mb-4" id="view_inventory">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">View/Edit the Money Transfer</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th class="text-primary" style="width: 100px !important">S.no</th>
                      <th class="text-primary" style="width: 150px !important">From Admin Id</th>
                      <th class="text-primary" style="width: 150px !important">To Admin Id</th>
                      <th class="text-primary" style="width: 150px !important">Amount</th>
                      <th class="text-primary">Reason</th>
                      <th class="text-primary" style="width: 120px !important">Time Created</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th class="text-primary" style="width: 100px !important">S.no</th>
                      <th class="text-primary" style="width: 150px !important">From Admin Id</th>
                      <th class="text-primary" style="width: 150px !important">To Admin Id</th>
                      <th class="text-primary" style="width: 150px !important">Amount</th>
                      <th class="text-primary">Reason</th>
                      <th class="text-primary" style="width: 200px !important">Time Created</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php 
                      include 'include/connection.php';
                      $checkAdmin = "SELECT * FROM money_transfer_txn WHERE from_admin_id = '".$login_id."' ORDER BY id DESC" ;
                      $resultAdmin = mysqli_query($conn, $checkAdmin);
                      $no = 1;
                      while ($row = $resultAdmin -> fetch_assoc()) {
                    ?>
                        <tr>
                          <td><?php echo $no++; ?></td>
                          <td><?php echo $row['from_admin_id']; ?></td>
                          <td><?php echo $row['to_admin_id']; ?></td>
                          <td><?php echo $row['amount']; ?></td>
                          <td><?php echo $row['reason']; ?></td>
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
      'url' : 'task/insert_money_transfer.php',
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

