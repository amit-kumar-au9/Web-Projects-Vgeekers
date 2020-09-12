<?php include "include/header.php";?>
	<div id="page-wrapper">
		<div class="main-page">
			<center><h2 class="title1" style="color: red;">ACADEMICS -> LIBRARY & FACILITY</h2></center>
      <?php 
        include 'include/connection.php';
        $checkQuery = "SELECT * FROM academics";
        $checkResult = mysqli_query($conn, $checkQuery);
        $row = $checkResult -> fetch_assoc();
      ?>

      <form method="post">
        <div class="card card-body" style="color:black;width: 100%;background: #C8F7F8">
          <h2 align="center">Change Library & Facility Details</h2>
          <div class="form-group">
            <label for="exampleFormControlInput1">Library</label>
            <textarea rows="3" class="form-control form-control-line" placeholder="Write Your text here" name="library" id="TypeHere1" required><?php echo $row['library']; ?></textarea>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Facility</label>
            <textarea rows="3" class="form-control form-control-line" placeholder="Write Your text here" name="facility" id="TypeHere2" required><?php echo $row['facility']; ?></textarea>
          </div>
          <button class="btn btn-success" type="submit" name="updateLib">UPDATE</button>
        </div>
      </form>

		</div>
	</div>
<?php include "include/footer.php";?>

<?php 

  // Update Welcome
if (isset($_POST['updateLib'])) {

  $library = addslashes($_POST['library']);
  $facility = addslashes($_POST['facility']);

  if($facility!="" && $library!=""){
    $checkQuery = "UPDATE academics SET library = '".$library."', facility = '".$facility."' WHERE id = 1 ";  

    if (mysqli_query($conn, $checkQuery)) {
              echo "<script>window.alert('Library & Facility Updated');window.location.href='update_library.php';</script>";
    }

    else{
        echo "<script>window.alert('Please Retry');window.location.href='update_library.php';</script>";
    }
  }
  else{
        echo "<script>window.alert('Cannot be empty');window.location.href='update_library.php';</script>";
    }

  }

?>
