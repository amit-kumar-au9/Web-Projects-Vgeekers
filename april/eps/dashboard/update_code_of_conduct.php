<?php include "include/header.php";?>
  <div id="page-wrapper">
    <div class="main-page">
      <center><h2 class="title1" style="color: red;">ADMISSION -> CODE OF CONDUCT</h2></center>
      <?php 
        include 'include/connection.php';
        $checkQuery = "SELECT * FROM admission";
        $checkResult = mysqli_query($conn, $checkQuery);
        $row = $checkResult -> fetch_assoc();
      ?>
      <form method="post">
        <div class="card card-body" style="color:black;width: 100%;background: #C8F7F8">
          <h2 align="center">Change Code of Conduct Information</h2>
          <div class="form-group">
            <label for="exampleFormControlInput1">Instruction for Student</label>
            <textarea rows="3" class="form-control form-control-line" placeholder="Write Your text here" name="instruction_student" id="TypeHere" required><?php echo $row['instruction_student']; ?></textarea>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Instruction for Parents</label>
            <textarea rows="3" class="form-control form-control-line" placeholder="Write Your text here" name="instruction_parent" id="TypeHere1" required><?php echo $row['instruction_parent']; ?></textarea>
          </div>
          <button class="btn btn-success" type="submit" name="updateAdmission">UPDATE</button>
        </div>
      </form>

    </div>
  </div>
<?php include "include/footer.php";?>

<?php 

// Update Welcome
if (isset($_POST['updateAdmission'])) {

  $instruction_student = addslashes($_POST['instruction_student']);
  $instruction_parent = addslashes($_POST['instruction_parent']);

  if($instruction_parent!="" && $instruction_student!=""){
    $checkQuery = "UPDATE admission SET instruction_student = '".$instruction_student."', instruction_parent = '".$instruction_parent."' WHERE id = 1 ";  

    if (mysqli_query($conn, $checkQuery)) {
              echo "<script>window.alert('Admission Details Updated');window.location.href='update_admission_info.php';</script>";
    }

    else{
        echo "<script>window.alert('Please Retry');window.location.href='update_admission_info.php';</script>";
    }
  }
  else{
        echo "<script>window.alert('Cannot be empty');window.location.href='update_admission_info.php';</script>";
  }

}

?>
