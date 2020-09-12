<?php include "include/header.php";?>
<?php 
  include 'include/connection.php'; 
  $checkQuery = "SELECT * FROM banner WHERE id = 1";
  $checkResult = mysqli_query($conn, $checkQuery);
  $row = $checkResult -> fetch_assoc();

?>

<div id="page-wrapper">
  <div class="main-page">
    <form method="post" enctype="multipart/form-data">
      <br>
      <h2 class="title1" align="center" style="color:red;">Update Vendor App Banner</h2>
      <div class="form-group" align="left">
        <img src="assets/images/banner/<?php echo $row['name'];?>" style="max-height : 300px;">
        <input type="hidden" name="image" value="<?php echo $row['name'] ?>">
        <br>
        <input class="btn btn-success" name="UploadImage" type="file" value="Upload Image" accept='image/*' required>
        <br>
        <button id="button1id" class="btn btn-success" type="submit" name="update">Update</button>
      </div>
    </form>
  </div>
</div>
<?php include "include/footer.php"?>

<?php 

  if(isset($_POST['update'])){ //check if form was submitted

    $rand = rand(10000, 99999);
    
    $file_name = $rand.$_FILES['UploadImage']['name'];
    $file_tem_loc = $_FILES['UploadImage']['tmp_name'];
    $file_store = "assets/images/banner/".$file_name;
    $file_upload = false;

    if(move_uploaded_file($file_tem_loc, $file_store)){
      $file_upload = true;
    }
    else{
      $file_upload = false;
    }
    if ($file_upload) {
      $image = "assets/images/banner/".$_POST['image'];
      unlink($image);
      $checkQuery = "UPDATE banner SET name = '".$file_name."'";
      mysqli_query($conn, $checkQuery);
      echo "<script>window.location.href='update_vendor_banner.php';</script>";
    }
  }

?>

