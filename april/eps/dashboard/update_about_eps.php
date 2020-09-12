<?php include "include/header.php";?>
	<div id="page-wrapper">
		<div class="main-page">
			<center><h2 class="title1" style="color: red;">ABOUT US -> ABOUT EPS SCHOOL</h2></center>
      <?php 
        include 'include/connection.php';
        $checkQuery = "SELECT * FROM about_us";
        $checkResult = mysqli_query($conn, $checkQuery);
        $row = $checkResult -> fetch_assoc();
      ?>
			<form method="post">
        <div class="card card-body" style="color:black;width: 100%;background: #C8F7F8">
          <div class="form-group">
            <label for="exampleFormControlInput1">About EPS SCHOOL Block 1</label>
            <textarea rows="3" class="form-control form-control-line" placeholder="Write Your text here" name="about1" id="TypeHere" required><?php echo $row['about1']; ?></textarea>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">About EPS SCHOOL Block 2</label>
            <textarea rows="3" class="form-control form-control-line" placeholder="Write Your text here" name="about2" id="TypeHere1" required><?php echo $row['about2']; ?></textarea>
          </div>
          <button class="btn btn-success" type="submit" name="updateEPS">UPDATE</button>
        </div>
      </form>

		</div>
	</div>
<?php include "include/footer.php";?>

<?php 

// Update Welcome
if (isset($_POST['updateEPS'])) {

  $about1 = addslashes($_POST['about1']);
  $about2 = addslashes($_POST['about2']);

  if($about2!="" && $about1!=""){
    $checkQuery = "UPDATE about_us SET about1 = '".$about1."', about2 = '".$about2."' WHERE id = 1 ";  

    if (mysqli_query($conn, $checkQuery)) {
              echo "<script>window.alert('About EPS School Updated');window.location.href='update_about_eps.php';</script>";
    }

    else{
        echo "<script>window.alert('Please Retry');window.location.href='update_about_eps.php';</script>";
    }
  }
  else{
        echo "<script>window.alert('Cannot be empty');window.location.href='update_about_eps.php';</script>";
  }

}
?>
