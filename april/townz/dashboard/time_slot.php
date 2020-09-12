<?php include "include/header.php";?>
<div id="page-wrapper">
  <div class="main-page">
    <center><h2 class="title1" style="color: red;">ADD Time Slot</h2></center>
      <div class="card card-body" style="color:black;width: 100%;background: #C8F7F8">
        <form method="post">
          <div class="container">
            <div class="row">
              <div class="form-group col-md-4">
                <label>Start Time</label>
                <input class="form-control" type="time" name="start_time" required id="st">
              </div>
              <div class="form-group col-md-4">
                <label>End Time</label>
                <input class="form-control" type="time" name="end_time" required id="et">
                <p id="alert_time"></p>
              </div>
            </div>
            <button class="btn btn-success" type="submit" name="add" id="addButton">ADD</button>
          </div>
        </form>
      </div>
  </div>
  <div class="main-page">
    <br>
    <center>
      <h2 class="title1" style="color: green;">All Time Slot</h2>
    </center>
    <table class="responstable" >
      <tr style="border:5px solid #024457;">
        <th style="width: auto">S.no</th>
        <th style="width:40%"><span>Start Time</span></th>
        <th style="width:40%"><span>End Time</span></th>
        <th>Update</th>
        <th>Delete</th>
      </tr>
      <?php 
        include 'include/connection.php';
        $checkCategory = "SELECT * FROM time_slot";
        $resultCategory = mysqli_query($conn, $checkCategory);
        $no = 1;
        while($row = $resultCategory -> fetch_assoc()){
        ?>
      <tr>
        <td><?php echo $no++; ?></td>
        <form method="post">
          <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
          <td><input type="time" name="start_time" value="<?php echo $row['start_time']; ?>" id="stupdate" class="form-control"></td>
          <td>
              <input type="time" name="end_time" value="<?php echo $row['end_time']; ?>" id="etupdate" class="form-control">
              <p id="alert_time_update"></p>
          </td>
          <td><button type="submit" class="btn btn-primary" name="update" id="updateButton">Update</button></td>
          <td><button type="submit" class="btn btn-danger" name="delete">Delete</button></td>
        </form>
      </tr>
      <?php 
        }
        ?>
    </table>
  </div>
</div> 
<?php include "include/footer.php"?>
<script>
    $(document).ready(function() {
        $('#et').change(function(){
            var st = $('#st').val(); // start time Format: '9:00 PM'
            var et = $('#et').val(); // end time   Format: '11:00 AM' 
    
            //how do i compare time
            if(st > et)
            {
               $('#alert_time').html("Must be greater than Start Time");
               $('#addButton').prop('disabled', true);
            }
            else{
                $('#alert_time').hide();
                $('#addButton').prop('disabled', false);
            }
        });
        $('#st').change(function(){
            var st = $('#st').val(); // start time Format: '9:00 PM'
            var et = $('#et').val(); // end time   Format: '11:00 AM' 
    
            //how do i compare time
            if(st > et)
            {
               $('#alert_time').html("Must be greater than Start Time");
               $('#addButton').prop('disabled', true);
            }
            else{
                $('#alert_time').hide();
                $('#addButton').prop('disabled', false);
            }
        });

        $('#etupdate').change(function(){
            var stupdate = $('#stupdate').val(); // start time Format: '9:00 PM'
            var etupdate = $('#etupdate').val(); // end time   Format: '11:00 AM' 
    
            //how do i compare time
            if(stupdate > etupdate)
            {
               $('#alert_time_update').html("Must be greater than Start Time");
               $('#updateButton').prop('disabled', true);
            }
            else{
                $('#alert_time_update').hide();
                $('#updateButton').prop('disabled', false);
            }
        });
        $('#stupdate').change(function(){
            var stupdate = $('#stupdate').val(); // start time Format: '9:00 PM'
            var etupdate = $('#etupdate').val(); // end time   Format: '11:00 AM' 
    
            //how do i compare time
            if(stupdate > etupdate)
            {
               $('#alert_time_update').html("Must be greater than Start Time");
               $('#updateButton').prop('disabled', true);
            }
            else{
                $('#alert_time_update').hide();
                $('#updateButton').prop('disabled', false);
            }
        });
    });
</script>
<?php
  if(isset($_POST['update'])){

    $start_time=$_POST['start_time'];
    $end_time=$_POST['end_time'];
    $id=$_POST['id'];

    $checkQuery = "UPDATE time_slot SET start_time='".$start_time."', end_time = '".$end_time."' WHERE id='".$id."'";
    mysqli_query($conn, $checkQuery);

    echo "<script>window.location.href='time_slot.php';</script>";
  }
  
  if(isset($_POST['add'])){

    $start_time=$_POST['start_time'];
    $end_time=$_POST['end_time'];

    $checkQuery = "INSERT INTO time_slot (start_time, end_time) VALUES('".$start_time."', '".$end_time."')";
    mysqli_query($conn, $checkQuery);

    echo "<script>window.location.href='time_slot.php';</script>";
  }

  if(isset($_POST['delete'])){ //check if form was submitted
    
    $id=$_POST['id'];
    
    $checkQuery = "DELETE FROM time_slot WHERE id='".$id."'";
    mysqli_query($conn, $checkQuery); 
    
    echo "<script>window.location.href='time_slot.php';</script>";
  
  }
?>


