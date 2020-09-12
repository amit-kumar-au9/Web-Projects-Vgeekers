<?php include "include/header.php";?>
    <div id="page-wrapper">
        <div class="main-page">
            <center><h2 class="title1" style="color: red;">ACADEMICS -> CURRICULUM</h2></center>
      <?php 
        include 'include/connection.php';
        $checkQuery = "SELECT * FROM academics";
        $checkResult = mysqli_query($conn, $checkQuery);
        $row = $checkResult -> fetch_assoc();
      ?>
            <form method="post">
        <div class="card card-body" style="color:black;width: 100%;background: #C8F7F8">
          <h2 align="center">Change Curriculum Details</h2>
          <div class="form-group">
            <label for="exampleFormControlInput1">Curriculum Content</label>
            <textarea rows="3" class="form-control form-control-line" placeholder="Write Your text here" name="curr" id="TypeHere" required><?php echo $row['curr']; ?></textarea>
          </div>
          <button class="btn btn-success" type="submit" name="updateCurr">UPDATE CURRICULUM</button>
        </div>
      </form>

        </div>
    </div>
<?php include "include/footer.php";?>

<?php 

// Update Welcome
if (isset($_POST['updateCurr'])) {

  $curr = addslashes($_POST['curr']);

  if($curr!=""){
    $checkQuery = "UPDATE academics SET curr = '".$curr."' WHERE id = 1 ";  

    if (mysqli_query($conn, $checkQuery)) {
              echo "<script>window.alert('Curriculum Updated');window.location.href='update_curriculum.php';</script>";
    }

    else{
        echo "<script>window.alert('Please Retry');window.location.href='update_curriculum.php';</script>";
    }
  }
  else{
        echo "<script>window.alert('Cannot be empty');window.location.href='update_curriculum.php';</script>";
    }

  }

?>
