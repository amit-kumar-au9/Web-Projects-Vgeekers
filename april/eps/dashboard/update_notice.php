<?php include "include/header.php";?>
<?php 
  include 'include/connection.php';
  $checkQuery = "SELECT * FROM notice";
  $checkResult = mysqli_query($conn, $checkQuery);

?>
	<div id="page-wrapper">
		<div class="main-page">
      <center><h2 class="title1" style="color: red;">HOME -> NOTICE</h2></center>
      <div class="card card-body" style="color:black;width: 100%;background: #C8F7F8">
          <form method="post" enctype="multipart/form-data">
            <div class="form-group">
			       <center><h2>Add Notice</h2></center>
              <label for="exampleFormControlInput1">Title</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Write Title" name="title" required>
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Message</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" name="message" rows="3" required id="TypeHere"></textarea>
            </div>
            <div class="form-group">
              <label>Select new image</label>
              <input class="btn btn-success" name="UploadImage" type="file" value="Upload Image" required accept='image/*'>
            </div>
            <button class="btn btn-success" type="submit" name="addNotice">ADD</button>
          </form>
        </div>
        <br><br>
      <center><h2 class="title1" style="color: red;">All the Notice</h2></center>
			  <?php 
          if(mysqli_num_rows($checkResult)){
            while($row = $checkResult -> fetch_assoc()){
        ?>    
              <form method="post" enctype="multipart/form-data">
                <div class="card card-body" style="color:black;width: 100%;background: #C8F7F8">
                  <div class="form-group">
                    <label for="exampleFormControlInput1">Title</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Write Title" name="title" value="<?php echo $row['title']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlTextarea1">Message</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="message" id="TypeHere"><?php echo $row['message']; ?></textarea>
                  </div>
                  <div class="card" style="width: 11rem;">
                    <img class="card-img-top" src="../asset/images/notice/<?php echo $row['image']; ?>" alt="Card image cap" style="width: 10em">
                    <input type="hidden" name="image" value="<?php echo $row['image']; ?>">
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

                    <div class="card-body">
                      <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1">Edit Image</a>
                      <!-- <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal1">Delete</a> -->
                    </div>
                  </div>
                  <div class="form-group">
                    <button class="btn btn-success" type="submit" name="updateNotice">UPDATE NOTICE</button>
                    <button class="btn btn-success" type="submit" name="deleteNotice">DELETE NOTICE</button>
                  </div>
                </div>
                <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit image</h5>
                        <button type="submit" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                         <center>
                              <img class="card-img-top" src="../asset/images/notice/<?php echo $row['image']; ?>" alt="Card image cap" style="width: 16em">
                         </center>
                        <div class="form-group">
                          <label>Select new image</label>
                          <input class="btn btn-success" name="UploadImage" type="file" value="Upload Image" accept='image/*'>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="submit" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
        <?php 
            }
          }
        ?>
      </div>
	</div>


<?php include "include/footer.php";?>

<?php 

//notice content
if(isset($_POST['addNotice'])){ //check if form was submitted
  $title = addslashes($_POST['title']);
  $message = addslashes($_POST['message']);

  $rand = rand(10000, 99999);
  
  $file_name = $rand.$_FILES['UploadImage']['name'];
  $file_tem_loc = $_FILES['UploadImage']['tmp_name'];
  $file_store = "../asset/images/notice/".$file_name;
  $file_upload = false;

  if(move_uploaded_file($file_tem_loc, $file_store)){
      $file_upload = true;
  }
  else{
      $file_upload = false;
  }


  if ($file_upload) {
      $checkQuery = "INSERT INTO notice (title, message, image) VALUES ('".$title."', '".$message."', '".$file_name."')";

      if (mysqli_query($conn, $checkQuery)) {
          echo "<script>window.alert('New Notice Added');window.location.href='update_notice.php';</script>";
      }

      else{
          echo "<script>window.alert('Please Retry');window.location.href='update_notice.php';</script>";
      }

  }

  else{
      echo "<script>window.alert('Please Provide Image');window.location.href='update_notice.php';</script>";
  }
}

// Update Notice
if(isset($_POST['updateNotice'])){ //check if form was submitted
  $title = addslashes($_POST['title']);
  $message = addslashes($_POST['message']);
  $id = $_POST['id'];


  $rand = rand(10000, 99999);
  
  $file_name = $rand.$_FILES['UploadImage']['name'];
  $file_tem_loc = $_FILES['UploadImage']['tmp_name'];
  $file_store = "../asset/images/notice/".$file_name;
  $file_upload = false;

  if(move_uploaded_file($file_tem_loc, $file_store)){
      $file_upload = true;
  }
  else{
      $file_upload = false;
  }


  if ($file_upload) {

      $checkQuery = "UPDATE notice SET title = '".$title."', message = '".$message."', image = '".$file_name."' WHERE id = '".$id."' ";

      if (mysqli_query($conn, $checkQuery)) {
          $image = "../asset/images/notice/".$_POST['image'];
          unlink($image);
          echo "<script>window.alert('Notice Updated');window.location.href='update_notice.php';</script>";
      }

      else{
          echo "<script>window.alert('Please Retry');window.location.href='update_notice.php';</script>";
      }

  }

  else{
      $checkQuery = "UPDATE notice SET title = '".$title."', message = '".$message."' WHERE id = '".$id."' ";

      if (mysqli_query($conn, $checkQuery)) {
          echo "<script>window.alert('Notice Updated');window.location.href='update_notice.php';</script>";
      }

      else{
          echo "<script>window.alert('Please Retry');window.location.href='update_notice.php';</script>";
      }
  }
}

// Delete Notice
if(isset($_POST['deleteNotice'])){ //check if form was submitted
    $id = $_POST['id'];
    $checkQuery = "DELETE FROM notice WHERE id='".$id."'";
    $checkResult=mysqli_query($conn, $checkQuery);
    $image = "../asset/images/notice/".$_POST['image'];
    unlink($image);
    $page = $_SERVER['PHP_SELF'];
    $sec = "1";
}


?>