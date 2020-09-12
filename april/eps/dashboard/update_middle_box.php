<?php include "include/header.php";?>
	<div id="page-wrapper">
		<div class="main-page">
			<center><h2 class="title1" style="color: red;">ABOUT US</h2></center>
      <?php 
        include 'include/connection.php';
        $checkQuery = "SELECT * FROM about_us";
        $checkResult = mysqli_query($conn, $checkQuery);
        $row = $checkResult -> fetch_assoc();
      ?>

      <form method="post">
        <div class="card card-body" style="color:black;width: 100%;background: #C8F7F8">
          <h2 align="center">Change Content of Middle Box</h2>
          <div class="form-group">
            <label for="exampleFormControlInput1">Our Philosophy</label>
            <textarea rows="3" class="form-control form-control-line" placeholder="Write Your text here" name="philosophy" id="TypeHere2" required><?php echo $row['philosophy']; ?></textarea>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">School's Principle</label>
            <textarea rows="3" class="form-control form-control-line" placeholder="Write Your text here" name="school_principle" id="TypeHere3" required><?php echo $row['school_principle']; ?></textarea>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Key Of Success</label>
            <textarea rows="3" class="form-control form-control-line" placeholder="Write Your text here" name="key_of_success" id="TypeHere4" required><?php echo $row['key_of_success']; ?></textarea>
          </div>
          <button class="btn btn-success" type="submit" name="updateMiddle">UPDATE</button>
        </div>
      </form>

		</div>
	</div>
<?php include "include/footer.php";?>

<?php 

// Update Middle Box
if (isset($_POST['updateMiddle'])) {

  $philosophy = addslashes($_POST['philosophy']);
  $school_principle = addslashes($_POST['school_principle']);
  $key_of_success = addslashes($_POST['key_of_success']);


  if($school_principle!="" && $philosophy!="" && $key_of_success!=""){
    $checkQuery = "UPDATE about_us SET philosophy = '".$philosophy."', school_principle = '".$school_principle."', key_of_success = '".$key_of_success."' WHERE id = 1 ";  

    if (mysqli_query($conn, $checkQuery)) {
              echo "<script>window.alert('Middle Box Details Updated');window.location.href='update_middle_box.php';</script>";
    }

    else{
        echo "<script>window.alert('Please Retry');window.location.href='update_middle_box.php';</script>";
    }
  }
  else{
        echo "<script>window.alert('Cannot be empty');window.location.href='update_middle_box.php';</script>";
  }

}

?>
