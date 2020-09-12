<?php include 'include/header.php'; ?>
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  <?php
    if($_GET['id'] == ''){
          echo "<script>window.location.href='add_created_bill.php';</script>";
    }
  ?>
        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Page Heading -->
          <form class="addBill" enctype="multipart/form-data">
            <h1 class="h3 mb-2 text-gray-800">Item Details</h1>

            <div class="row" id="addBill">

              <!-- Area Chart -->
              <div class="col-xl-12 col-lg-12" id="content">
                <div class="card shadow mb-4">
                  <!-- Card Header - Dropdown -->
                  <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Item Details</h6>
                  </div>
                  <!-- Card Body -->
                  <div class="card-body">
                    <div class="chart-area" style="height: auto !important">
                        <div class="row">

                          <div class="form-group col-md-4">
                            <label style="color: black">Description/Name <span style="color: red">*</span></label>
                            <input type="text" name="name" class="form-control" required >
                          </div>

                          <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">

                          <div class="form-group col-md-4">
                            <label style="color: black">HSN <span style="color: red">*</span></label>
                            <input type="number" min="0" name="hsn" class="form-control" required >
                          </div>

                          <div class="form-group col-md-4">
                            <label style="color: black">Qty <span style="color: red">*</span></label>
                            <input type="number" min="1" name="qty" class="form-control" required >
                          </div>

                          <div class="form-group col-md-4">
                            <label style="color: black">Unit <span style="color: red">*</span></label>
                            <input type="text" name="unit" class="form-control" required >
                          </div>

                          <div class="form-group col-md-4">
                            <label style="color: black">Rate <span style="color: red">*</span></label>
                            <input type="number" min="1" name="rate" class="form-control" required >
                          </div>

                          <div class="form-group col-md-4">
                            <label style="color: black">Igst Rate <span style="color: red">*</span></label>
                            <input type="number" min="0" name="igst_rate" class="form-control" required >
                          </div>

                        </div>
                          <button class="btn btn-primary" type="submit" id="btnSubmit1">Add Item</button>
                          <button class="btn btn-primary" id="load" style="display:none" disabled><i class="fa fa-spinner fa-spin"></i>Loading</button>
                      <span id='message1'></span>

                    </div>
                  </div>
                </div>
              </div>

          </form>
              <div class="col-xl-12 col-lg-12" id="content">
                <div class="card shadow mb-4">
                  <!-- Card Body -->
                  <div class="card-body">
                    <div class="chart-area" style="height: auto !important">
                      <h4 style="color: red">Click on Print pdf when all the items are added.</h4>
                      <a class="btn btn-primary" href="pdf.php?id=<?php echo $_GET['id']; ?>"><span style="color: white">Print Bill</span></a>
                    </div>
                  </div>
                </div>
              </div>

            </div>

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
      'url' : 'task/insert_bill_item.php',
      'type' : 'post',
      'contentType' : false,
      'cache' : false,
      'processData' :false,
      success : function(response){
        var json = JSON.parse(response);
       
        if(!json.error){
          $('#message1').html(json.message).css('color', 'green');
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