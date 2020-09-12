<?php include 'include/header.php'; ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Upload Bill</h1>

          <div class="row" id="uploadBill">
            <!-- Area Chart -->
            <div class="col-xl-12 col-lg-12" id="content">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Bill Upload Details</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="chart-area" style="height: auto !important">
                    <form class="uploadBill" enctype="multipart/form-data">
                      <div class="row">

                        <div class="form-group col-md-6">
                          <label style="color: black">Item Name</label>
                          <input type="text" name="item_name" class="form-control" placeholder="Enter Name" required>
                        </div>

                        <div class="form-group col-md-6">
                          <label style="color: black">Billing Amount</label>
                          <input type="number" name="billing_amount" min="1" class="form-control" placeholder="Enter Amount" required>
                        </div>

                        <div class="form-group col-md-6">
                          <label style="color: black">Photo</label>
                          <input type="file" name="UploadImage[]" value="Upload Image" class="form-control btn-success" accept="image/*" multiple>
                        </div>

                        <div class="form-group col-md-6">
                          <label style="color: black">Document .pdf</label>
                          <input type="file" name="UploadPdf[]" value="Upload Image" class="form-control btn-success" accept="application/pdf" multiple>
                        </div>

                        <div class="form-group col-md-12">
                          <label style="color: black">Description</label>
                          <textarea type="text" name="dsc" class="form-control" placeholder="Enter Description" ></textarea>
                        </div>


                      </div>
                        <button class="btn btn-primary" type="submit" id="btnSubmit1">Upload Bill</button>
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
<!-- Page level custom scripts -->

<?php include 'include/footer.php'; ?>
<script> 

  $('form.uploadBill').submit(function(e){
      $('#load').show();
    $('#btnSubmit1').hide();
    e.preventDefault();
    var formdata = new FormData(this);
    formdata.append('form', $(this).attr('class'));
    $.ajax({
      'data' : formdata,
      'url' : 'task/insert_uploaded_bill.php',
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