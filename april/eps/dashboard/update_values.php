<?php include "include/header.php";?>
	<div id="page-wrapper">
		<div class="main-page">
			<center><h2 class="title1" style="color: red;">ABOUT US -> OUR VALUES</h2></center>
      <?php 
        include 'include/connection.php';
        $checkQuery = "SELECT * FROM about_us";
        $checkResult = mysqli_query($conn, $checkQuery);
        $row = $checkResult -> fetch_assoc();
      ?>
      <form method="post" enctype="multipart/form-data">
        <div class="card card-body" style="color:black;width: 100%;background: #C8F7F8">  
          <div class="form-group">
            <label for="exampleFormControlInput1">Our Values</label>
            <textarea rows="3" class="form-control form-control-line" placeholder="Write Your text here" name="message" id="TypeHere" required><?php echo $row['our_values']; ?></textarea>
          </div>
          <div class="form-group" style="width: 11rem;">
            <img class="card-img-top" src="../asset/images/about/<?php echo $row['values_images']; ?>" alt="Our Values Image" style="width: 20em">
            <input type="hidden" name="image" value="<?php echo $row['values_images']; ?>">
            <div class="card-body">
              <input class="btn btn-success" name="UploadImage" type="file" value="Upload Image" accept='image/*'>
            </div>
          </div>
          <div class="form-group">
            <button class="btn btn-success" type="submit" name="updateValues">UPDATE VALUES</button>
          </div>
        </div>
      </form>

		</div>
	</div>
<?php include "include/footer.php";?>

<?php 

// Update Values
if(isset($_POST['updateValues'])){ //check if form was submitted

  $message = addslashes($_POST['message']);

  $rand = rand(10000, 99999);
  
  $file_name = $rand.$_FILES['UploadImage']['name'];
  $file_tem_loc = $_FILES['UploadImage']['tmp_name'];
  $file_store = "../asset/images/about/".$file_name;
  $file_upload = false;

  if(move_uploaded_file($file_tem_loc, $file_store)){
      $file_upload = true;
  }
  else{
      $file_upload = false;
  }


  if ($file_upload) {

      $checkQuery = "UPDATE about_us SET our_values = '".$message."', values_images = '".$file_name."' WHERE id = 1 ";

      if (mysqli_query($conn, $checkQuery)) {
          $image = "../asset/images/about/".$_POST['image'];
          unlink($image);
          echo "<script>window.alert('Our Values Updated');window.location.href='update_values.php';</script>";
      }

      else{
          echo "<script>window.alert('Please Retry to Upload');window.location.href='update_values.php';</script>";
      }

  }

  else{
      $checkQuery = "UPDATE about_us SET our_values = '".$message."' WHERE id = 1 ";

      if (mysqli_query($conn, $checkQuery)) {
          echo "<script>window.alert('Our Values Updated');window.location.href='update_values.php';</script>";
      }

      else{
          echo "<script>window.alert('Please Retry');window.location.href='update_values.php';</script>";
      }
  }
}
?>
