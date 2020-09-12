<?php include "include/header.php";?>
  <div id="page-wrapper">
    <div class="main-page">
      <center><h2 class="title1" style="color: red;">ADMISSION -> ADMISSION INFORMATION</h2></center>
      <?php 
        include 'include/connection.php';
        $checkQuery = "SELECT * FROM admission";
        $checkResult = mysqli_query($conn, $checkQuery);
        $row = $checkResult -> fetch_assoc();
      ?>

      <form method="post">
        <div class="card card-body" style="color:black;width: 100%;background: #C8F7F8">
          <h2 align="center">Change Admission Info</h2>
          <div class="form-group">
            <label for="exampleFormControlInput1">Admission Info</label>
            <textarea rows="3" class="form-control form-control-line" name="code_of_conduct" placeholder="Write Your text here" id="TypeHere2" required><?php echo $row['code_of_conduct']; ?></textarea>
          </div>
          <button class="btn btn-success" type="submit" name="updateCode">UPDATE</button>
        </div>
      </form>

    </div>
  </div>
<?php include "include/footer.php";?>

<?php 

  // Update Code
if (isset($_POST['updateCode'])) {

  $code_of_conduct = addslashes($_POST['code_of_conduct']);

  if($code_of_conduct!=""){
    $checkQuery = "UPDATE admission SET code_of_conduct = '".$code_of_conduct."' WHERE id = 1 ";  

    if (mysqli_query($conn, $checkQuery)) {
              echo "<script>window.alert('Code of Conduct Details Updated');window.location.href='update_code_of_conduct.php';</script>";
    }

    else{
        echo "<script>window.alert('Please Retry');window.location.href='update_code_of_conduct.php';</script>";
    }
  }
  else{
        echo "<script>window.alert('Cannot be empty');window.location.href='update_code_of_conduct.php';</script>";
  }

}

?>
