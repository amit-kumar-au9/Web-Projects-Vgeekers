<?php include 'include/header_teacher.php' ?>
<?php include 'include/sidebar_teacher.php' ?>

        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Give Homework</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="teacherDashboard.php">Dashboard</a></li>
                            <li class="active">Give Homework</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <form class="form-horizontal form-material" id="selectForm" method="post" action="takeHomework.php">
                                <div class="form-group col-sm-6">
                                    <label class="col-sm-4">Select Class</label>
                                    <div class="col-sm-6">
                                        <select class="form-control form-control-line" id="std" name="std">
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
                                <div class="form-group col-sm-6">
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
                                <div id='TextBoxesGroup'>
                                    <div class="form-group col-sm-12" id="TextBoxDiv1">
                                        <label class="col-md-12">Question #1*</label>
                                        <div class="col-md-12">
                                            <textarea rows="5" class="form-control form-control-line" name="question[]" id="question1"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-sm-12">
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-success" id="sendDetails">Send</button>
                                        <input type='button' class="btn btn-success" value='Add Question' id='addButton'>
                                         <input type='button' class="btn btn-success" value='Remove Last Question' id='removeButton'>
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

$(document).ready(function(){

    var counter = 2;

    $("#addButton").click(function () {

    var newTextBoxDiv = $(document.createElement('div')).attr("id", 'TextBoxDiv' + counter);

    newTextBoxDiv.after().html('<label>Question #'+ counter + ' : </label>' +'<textarea row="5" class="form-control form-control-line" name="question[]' + counter + '" id="question' + counter + '" value="" >');

    newTextBoxDiv.appendTo("#TextBoxesGroup");


    counter++;
     });

     $("#removeButton").click(function () {
    if(counter==1){
          alert("No more textbox to remove");
          return false;
        }   

    counter--;

        $("#TextBoxDiv" + counter).remove();

     });

  });
</script>