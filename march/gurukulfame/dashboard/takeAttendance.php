<?php include 'include/header_teacher.php' ?>
<?php include 'include/sidebar_teacher.php' ?>

        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Take Attendance</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="teacherDashboard.php">Dashboard</a></li>
                            <li class="active">Take Attendance</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <form class="form-horizontal form-material" id="selectForm">
                                <div class="form-group col-sm-4">
                                    <label class="col-sm-4">Select Class</label>
                                    <div class="col-sm-6">
                                        <select class="form-control form-control-line" id="std" name="class">
                                            <option>Select Class</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-sm-4">
                                    <label class="col-sm-4">Select Batch</label>
                                    <div class="col-sm-6">
                                        <select class="form-control form-control-line" id="batch" name="batch">
                                            <option>Select Batch</option>
                                            <option value="Morning">Morning</option>
                                            <option value="Afternoon">Afternoon</option>
                                            <option value="Evening">Evening</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-success" id="sendDetails">Send</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                            <div class="white-box">
                            <form class="form-horizontal form-material form-attendance">
                                <div class="table-responsive">
                                    <table class="table" id="class_pairs">
                                        <thead>
                                            <tr>
                                                <th>Roll no.</th>
                                                <th>Name</th>
                                                <th>Attendance</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        
                                        </tbody>
                                    </table>
                                </div>
                                <br>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button type='submit' class="btn btn-success">Send</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
          

<?php include 'include/footer.php' ?>

<script type="text/javascript">
  $("form#selectForm").submit(function(e) {
      e.preventDefault();
      var formdata = $(this).serialize();
      $.ajax({
        url: 'getClass.php',
        type: 'post',
        data: formdata,
        success: function(response){
            var json = JSON.parse(response);
            if(!json.error){
                // console.log(json);
                // console.log(json.message[3].id)
                var html = '';
                $.each(json.message,function(key,value){
                  html +='<tr>';
                  html +='<td>'+ json.message[key].id + '</td>';
                  html +='<td>'+ json.message[key].name + '</td>';
                  html +='<td>'+ '<input type="hidden" name="class" value="'+json.message[key].class+'" /><input type="hidden" name="batch" value="'+json.message[key].batch+'" /><input type="checkbox" name="attendance[]" value="'+json.message[key].id+'" />' + '</td>';
                  html +='</tr>';
                });
                $('table tbody').html(html);
            }
            else{
                // console.log(json.message);
            }
        }
      });
  });
  
    $('form.form-attendance').submit(function(e){
        e.preventDefault();
        var formdata = $(this).serialize();
        $.ajax({
           'data' : formdata,
           'type' : 'post',
           'url' : 'sendAttendance.php',
           success : function(response){
               var json = JSON.parse(response);
               if(!json.error){
                   console.log('done');
               }
               else{
                   console.log('error');
               }
           }
        });
    });
  
</script>