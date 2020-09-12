<?php include 'include/header.php'; include 'include/connection.php'; ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Add Today Attendance</h1>
          <!-- Content Row -->

          <div class="row">
            <?php 
                include 'include/connection.php';
                $date = date("Y-m-d");
                $selectAttendance = "SELECT * FROM attendance WHERE sub_admin_id = '".$_SESSION['id']."' ORDER BY id DESC";
                $flag = 0;
                $checkResult = mysqli_query($conn, $selectAttendance);
                $row = $checkResult -> fetch_assoc();
                $today = $row['date'];
                if($today === $date){
                    $flag = 1;
                    $today_count = $row['today_count'];
                    $total_count = $row['total_count'];
                }
            ?>
            <!-- Area Chart -->
            <div class="col-xl-12 col-lg-12" id="content">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Add Attendance of <?php echo date("d/m/Y"); ?></h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <?php if($flag == 1){ ?>
                    <div class="chart-area" style="height: auto !important">
                        
                      <div class="row">

                        <div class="form-group col-md-3">
                          <label style="color: black">Today Attendance :</label> <b style="color:red"><?php echo $today_count; ?>/<?php echo $total_count ?></b>
                        </div>

                      </div>
    
                  </div>
                  <?php 
                    }
                    elseif($flag == 0){ 
                  ?>
                  <div class="chart-area" style="height: auto !important">
                    <form class="addAttendance" enctype="multipart/form-data">
                      <div class="row">
                        <div class="form-group col-md-4">
                          <label style="color: black">Total People<span style="color: red">*</span></label>
                          <input type="number" name="total_count" id="total_count" min="0" class="form-control" placeholder="Enter Overall People" required>
                          <span id='message'></span>

                        </div>

                        <div class="form-group col-md-4">
                          <label style="color: black">Attendance Count <span style="color: red">*</span></label>
                          <input type="number" name="today_count" id="today_count"  min="0" class="form-control" placeholder="Enter Today's Count" required>
                        </div>
                        <input type="hidden" name="sub_admin_id" value="<?php echo $_SESSION['id']; ?>">

                      </div>
                        <button class="btn btn-primary" type="submit" id="btnSubmit1" <?php if($flag == 1) {echo "disabled"; } ?>>Add Attendance</button>
                        <button class="btn btn-primary" id="load" style="display:none" disabled><i class="fa fa-spinner fa-spin"></i>Loading</button>
                    </form>
                    <span id='message1'></span>

                  </div>
                  <?php } ?>
                </div>
              </div>
            </div>

          </div>
        </div>
        <!-- /.container-fluid -->
<?php include 'include/footer.php'; ?>
<script> 

    $('#total_count, #today_count').on('keyup', function () {
    
        if (parseInt($('#total_count').val()) >= parseInt($('#today_count').val()) && parseInt($('#total_count').val()) >0 && parseInt($('#today_count').val()) > 0) {
    
            $("#btnSubmit").attr("disabled", false);
            $('#message').html('').css('color', 'green');
        } 
        else {
            $("#btnSubmit").attr("disabled", true);
            $('#message').html('Total Should be greater than attendance').css('color', 'red');
        }
    
    });

  $('form.addAttendance').submit(function(e){
      $('#load').show();
    $('#btnSubmit1').hide();
    e.preventDefault();
    var formdata = new FormData(this);
    formdata.append('form', $(this).attr('class'));
    $.ajax({
      'data' : formdata,
      'url' : 'task/insert_attendance.php',
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
