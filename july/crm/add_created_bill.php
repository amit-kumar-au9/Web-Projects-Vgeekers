<?php include 'include/header.php'; ?>
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
<?php 
  $year = date("Y");
  $previous = $year - 1;
  include 'include/connection.php';
  $select = "SELECT * FROM create_bill ORDER BY id DESC";
  $result = mysqli_query($conn, $select);
  $row = $result -> fetch_assoc();
  $bill_id = $row['id'] + 1;
?>
        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Page Heading -->
          <form class="addBill" enctype="multipart/form-data">
            <h1 class="h3 mb-2 text-gray-800">Company Details</h1>

            <div class="row" id="addBill">

              <!-- Area Chart -->
              <div class="col-xl-12 col-lg-12" id="content">
                <div class="card shadow mb-4">
                  <!-- Card Header - Dropdown -->
                  <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Company Details</h6>
                  </div>
                  <!-- Card Body -->
                  <div class="card-body">
                    <div class="chart-area" style="height: auto !important">
                        <div class="row">

                          <div class="form-group col-md-3">
                            <label style="color: black">Company Name <span style="color: red">*</span></label>
                            <input type="text" name="pc_name" class="form-control" placeholder="Enter Company Name" required value="Pashupati Construction">
                          </div>

                          <div class="form-group col-md-3">
                            <label style="color: black">GSTIN <span style="color: red">*</span></label>
                            <input type="text" name="pc_gstin" class="form-control" required value="07AALFP6024C1ZG">
                            <span id='message'></span>
                          </div>

                          <div class="form-group col-md-3">
                            <label style="color: black">S.no. of Invoice <span style="color: red">*</span></label>
                            <input type="text" name="invoice_no" class="form-control" required value="PC/Site <?php echo $site_id.'/BS-/'.$previous.'-'.$year.'/'.$bill_id; ?>" readonly>
                            <span id='message'></span>
                          </div>

                          <div class="form-group col-md-3">
                            <label style="color: black">Date of Invoice <span style="color: red">*</span></label>
                            <input type="text" name="invoice_date" class="form-control" required readonly value="<?php echo date('d/m/Y'); ?>">
                            <span id='message'></span>
                          </div>

                          <div class="form-group col-md-12">
                            <label style="color: black">Address <span style="color: red">*</span></label>
                            <textarea type="text" name="pc_address" class="form-control" placeholder="Enter Address" required>705, Somdatt Chamber-II, Bhikaji Cama Place, New Delhi 110066</textarea>
                          </div>

                        </div>
                          <!-- <button class="btn btn-primary" type="submit" id="btnSubmit1">Add Bill</button>
                          <button class="btn btn-primary" id="load" style="display:none" disabled><i class="fa fa-spinner fa-spin"></i>Loading</button> -->
                      

                    </div>
                  </div>
                </div>
              </div>

            </div>

            <h1 class="h3 mb-2 text-gray-800">Details of Reciever (Billed to)</h1>

            <div class="row" id="addBill">

              <!-- Area Chart -->
              <div class="col-xl-12 col-lg-12" id="content">
                <div class="card shadow mb-4">
                  <!-- Card Header - Dropdown -->
                  <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Details of Receiver</h6>
                  </div>
                  <!-- Card Body -->
                  <div class="card-body">
                    <div class="chart-area" style="height: auto !important">
                        <div class="row">

                          <div class="form-group col-md-3">
                            <label style="color: black">Name <span style="color: red">*</span></label>
                            <input type="text" name="b_name" class="form-control" placeholder="Enter Company Name" required>
                          </div>

                          <div class="form-group col-md-3">
                            <label style="color: black">GstIN <span style="color: red">*</span></label>
                            <input type="text" name="b_gstin" class="form-control" placeholder="Enter GST No." required >
                          </div>

                          <div class="form-group col-md-3">
                            <label style="color: black">State <span style="color: red">*</span></label>
                            <input type="text" name="b_state" class="form-control" placeholder="Enter State" required >
                          </div>

                          <div class="form-group col-md-3">
                            <label style="color: black">State Code <span style="color: red">*</span></label>
                            <input type="text" name="b_state_code" class="form-control" placeholder="Enter State Code" required >
                            <span id='message'></span>
                          </div>
                          <div class="form-group col-md-12">
                            <label style="color: black">Address <span style="color: red">*</span></label>
                            <textarea type="text" name="b_address" class="form-control" placeholder="Enter Address" required ></textarea> 
                            <span id='message'></span>
                          </div>

                        </div>
                          <!-- <button class="btn btn-primary" type="submit" id="btnSubmit1">Add Bill</button>
                          <button class="btn btn-primary" id="load" style="display:none" disabled><i class="fa fa-spinner fa-spin"></i>Loading</button> -->
                      

                    </div>
                  </div>
                </div>
              </div>

            </div>

            <h1 class="h3 mb-2 text-gray-800">Details of Consignee (Shipped to)</h1>

            <div class="row" id="addBill">

              <!-- Area Chart -->
              <div class="col-xl-12 col-lg-12" id="content">
                <div class="card shadow mb-4">
                  <!-- Card Header - Dropdown -->
                  <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Details of Shipped to</h6>
                  </div>
                  <!-- Card Body -->
                  <div class="card-body">
                    <div class="chart-area" style="height: auto !important">
                        <div class="row">

                          <div class="form-group col-md-3">
                            <label style="color: black">Name <span style="color: red">*</span></label>
                            <input type="text" name="s_name" class="form-control" placeholder="Enter Company Name" required>
                          </div>
                          <div class="form-group col-md-3">
                            <label style="color: black">GstIN <span style="color: red">*</span></label>
                            <input type="text" name="s_gstin" class="form-control" placeholder="Enter GST No." required >
                          </div>
                          <div class="form-group col-md-3">
                            <label style="color: black">State <span style="color: red">*</span></label>
                            <input type="text" name="s_state" class="form-control" placeholder="Enter State" required >
                          </div>
                          <div class="form-group col-md-3">
                            <label style="color: black">State Code <span style="color: red">*</span></label>
                            <input type="text" name="s_state_code" class="form-control" placeholder="Enter State Code" required >
                            <span id='message'></span>
                          </div>
                          <div class="form-group col-md-12">
                            <label style="color: black">Address <span style="color: red">*</span></label>
                            <textarea type="text" name="s_address" class="form-control" placeholder="Enter Address" required ></textarea> 
                            <span id='message'></span>
                          </div>                          

                        </div>

                    </div>
                  </div>
                </div>
              </div>

            </div>

            <h1 class="h3 mb-2 text-gray-800">Job Info</h1>

            <div class="row" id="addBill">

              <!-- Area Chart -->
              <div class="col-xl-12 col-lg-12" id="content">
                <div class="card shadow mb-4">
                  <!-- Card Header - Dropdown -->
                  <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Job Details</h6>
                  </div>
                  <!-- Card Body -->
                  <div class="card-body">
                    <div class="chart-area" style="height: auto !important">
                        <div class="row">

                          <div class="form-group col-md-6">
                            <label style="color: black">Name of Work <span style="color: red">*</span></label>
                            <input type="text" name="name_of_work" class="form-control" placeholder="Enter Name of Work" required>
                          </div>

                          <div class="form-group col-md-6">
                            <label style="color: black">Job  no <span style="color: red">*</span></label>
                            <input type="text" name="job_no" class="form-control" placeholder="Enter Job No." required >
                          </div>

                        </div>
                          <!-- <button class="btn btn-primary" type="submit" id="btnSubmit1">Add Bill</button>
                          <button class="btn btn-primary" id="load" style="display:none" disabled><i class="fa fa-spinner fa-spin"></i>Loading</button> -->
                      

                    </div>
                  </div>
                </div>
              </div>

            </div>

            <h1 class="h3 mb-2 text-gray-800">Bank Details</h1>

            <div class="row" id="addBill">

              <!-- Area Chart -->
              <div class="col-xl-12 col-lg-12" id="content">
                <div class="card shadow mb-4">
                  <!-- Card Header - Dropdown -->
                  <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Bank Details</h6>
                  </div>
                  <!-- Card Body -->
                  <div class="card-body">
                    <div class="chart-area" style="height: auto !important">
                        <div class="row">

                          <div class="form-group col-md-3">
                            <label style="color: black">Bank Name <span style="color: red">*</span></label>
                            <input type="text" name="bank_name" class="form-control" placeholder="Enter Company Name" required>
                          </div>

                          <div class="form-group col-md-3">
                            <label style="color: black">Account No. <span style="color: red">*</span></label>
                            <input type="text" name="ac_no" class="form-control" placeholder="Enter Account No." required >
                          </div>

                          <div class="form-group col-md-3">
                            <label style="color: black">IFSC Code <span style="color: red">*</span></label>
                            <input type="text" name="ifsc" class="form-control" placeholder="Enter IFSC Code" required >
                          </div>

                          <div class="form-group col-md-3">
                            <label style="color: black">Branch <span style="color: red">*</span></label>
                            <input type="text" name="branch" class="form-control" placeholder="Enter Branch" required >
                            <span id='message'></span>
                          </div>

                        </div>
                          <button class="btn btn-primary" type="submit" id="btnSubmit1">Proceed</button>
                          <button class="btn btn-primary" id="load" style="display:none" disabled><i class="fa fa-spinner fa-spin"></i>Loading</button>
                      <span id='message1'></span>

                    </div>
                  </div>
                </div>
              </div>

            </div>
          </form>

        </div>
        <!-- /.container-fluid -->
<script src="vendor/datatables/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
<!-- Page level custom scripts -->
<script src="js/demo/datatables-demo.js"></script>

<?php include 'include/footer.php'; ?>
<script> 

  $('form.addBill').submit(function(e){
      $('#load').show();
    $('#btnSubmit1').hide();
    e.preventDefault();
    var formdata = new FormData(this);
    formdata.append('form', $(this).attr('class'));
    $.ajax({
      'data' : formdata,
      'url' : 'task/insert_created_bill.php',
      'type' : 'post',
      'contentType' : false,
      'cache' : false,
      'processData' :false,
      success : function(response){
        var json = JSON.parse(response);
       
        if(!json.error){
          $('#message1').html(json.message).css('color', 'green');
          window.location.href = "create_bill_item.php?id="+json.id;
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