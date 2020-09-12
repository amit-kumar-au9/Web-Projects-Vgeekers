<?php include 'include/header.php'; ?>

<?php 
  if($_POST['id'] == ''){
    echo "<script>window.location.href='view_site.php';</script>";
  }
?>
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Create/View Report</h1>
          </div>

          <!-- Content Row -->

          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-12 col-lg-12" id="content">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Choose type of Report</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="chart-area" style="height: auto !important">
                    <form class="fetch_report">
                      <div class="row">
                        <input type="hidden" name="site_id" value="<?php echo $_POST['id'] ?>">
                        <div class="form-group col-md-3">
                          <label style="color: black">Select Duration <span style="color: red">*</span></label>
                          <select class="form-control" name="duration">
                            <option value="daily">Today</option>
                            <option value="weekly">Weekly</option>
                            <option value="monthly">Monthly</option>
                            <option value="all">All</option>
                          </select>
                        </div>

                        <div class="form-group col-md-3">
                          <label style="color: black">Select Report Type <span style="color: red">*</span></label>
                          <select class="form-control" name="report_type">
                            <option value="attendance">Attendance</option>
                            <option value="created_bill">Created Bill</option>
                            <option value="uploaded_bill">Uploaded Bill</option>
                            <option value="inventory">View Inventory</option>
                          </select>
                        </div>

                        <div class="form-group col-md-3">
                          <label style="color: black">&nbsp;</label>
                          <br>
                          <button class="btn btn-primary" type="submit" id="btnSubmit1">View</button>
                          <button class="btn btn-primary" id="load" style="display:none" disabled><i class="fa fa-spinner fa-spin"></i>Loading</button>
                        </div>
                      </div>
                    </form>
                    <span id='message1'></span>

                  </div>
                </div>
                <div class="card-body" id="data_show">
                </div>
              </div>
            </div>

          </div>
        </div>
        <!-- /.container-fluid -->
<?php include 'include/footer.php'; ?>

<!-- <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js"></script>

<script>
  $(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ]
    } );
  } );
</script> -->

<script> 

  $('form.fetch_report').submit(function(e){
    $('#load').show();
    $('#btnSubmit1').hide();
    e.preventDefault();
    var formdata = new FormData(this);
    formdata.append('form', $(this).attr('class'));
    $.ajax({
      'data' : formdata,
      'url' : 'task/fetch_report_data.php',
      'type' : 'post',
      'contentType' : false,
      'cache' : false,
      'processData' :false,
      success : function(response){
        var json = JSON.parse(response);
       
        if(!json.error){
          $('#message1').html(json.message).css('color', 'green');
          $('#data_show').html(json.data);
          $('#load').hide();
          $('#btnSubmit1').show();
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