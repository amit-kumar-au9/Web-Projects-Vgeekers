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
            <h1 class="h3 mb-0 text-gray-800">All Money Transfer</h1>
          </div>

          <!-- Content Row -->

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
                      $checkAdmin = "SELECT * FROM money_transfer_txn ORDER BY id DESC" ;
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

