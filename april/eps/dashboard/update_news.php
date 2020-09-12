<?php include "include/header.php";?>
<?php 
  include 'include/connection.php';
  $checkQuery = "SELECT * FROM news";
  $checkResult = mysqli_query($conn, $checkQuery);

?>
  <div id="page-wrapper">
    <div class="main-page">
      <center><h2 class="title1" style="color: red;">HOME -> NEWS & UPDATES</h2></center>
      <div class="card card-body" style="color:black;width: 100%;background: #C8F7F8">
        <h2 align="center">Add News</h2>
          <form method="post" enctype="multipart/form-data">
            <div class="row">
              <div class="form-group col-md-8">
                <label for="exampleFormControlInput1">Title</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Write Title" name="title" required>
              </div>
              <div class="form-group col-md-4">
                <label for="exampleFormControlInput1">Date</label>
                <input type="date" class="form-control" id="exampleFormControlInput1" name="dates" required>
              </div>
              <div class="form-group col-md-12">
                <label for="exampleFormControlTextarea1">Message</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" name="message" rows="5" required id="TypeHere"></textarea>
              </div>
              <div class="form-group col-md-12">
                <label>Select new image</label>
                <input class="btn btn-success" name="UploadImage" type="file" value="Upload Image" required accept='image/*'>
              </div>
              <button class= "btn btn-success" type="submit" name="addNews">ADD NEWS</button>
            </div>
          </form>
        </div>
        <br><br>
      <center><h2 class="title1" style="color: red;">All the News</h2></center>
        <?php 
          if(mysqli_num_rows($checkResult)){
            while($row = $checkResult -> fetch_assoc()){
        ?>    
              <form method="post" enctype="multipart/form-data">
                <div class="card card-body" style="color:black;width: 100%;background: #C8F7F8">
                  <div class="row">
                    
                    <div class="form-group col-md-8">
                      <label for="exampleFormControlInput1">Title</label>
                      <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Write Title" name="title" value="<?php echo $row['title']; ?>">
                    </div>
                    <div class="form-group col-md-4">
                      <label for="exampleFormControlInput1">Date</label>
                      <input type="date" class="form-control" id="exampleFormControlInput1" name="dates" value="<?php echo $row['dates']; ?>">
                    </div>
                    <div class="form-group col-md-12">
                      <label for="exampleFormControlTextarea1">Message</label>
                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="message" id="TypeHere"><?php echo $row['message']; ?></textarea>
                    </div>
                    <div class="card" style="width: 11rem;">
                      <img class="card-img-top" src="../asset/images/news/<?php echo $row['image']; ?>" alt="Card image cap" style="width: 10em">
                      <input type="hidden" name="image" value="<?php echo $row['image']; ?>">
                      <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                      <div class="card-body">
                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1">Edit Image</a>
                      </div>
                    </div>
                    <div class="form-group col-md-12">
                      <button class="btn btn-success" type="submit" name="updateNews">UPDATE NEWS</button>
                      <button class="btn btn-success" type="submit" name="deleteNews">DELETE NEWS</button>
                    </div>
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
                              <img class="card-img-top" src="../asset/images/news/<?php echo $row['image']; ?>" alt="Card image cap" style="width: 16em">
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

//news content
if(isset($_POST['addNews'])){ //check if form was submitted
  $title = addslashes($_POST['title']);
  $message = addslashes($_POST['message']);
  $dates = addslashes($_POST['dates']);

  $rand = rand(10000, 99999);
  
  $file_name = $rand.$_FILES['UploadImage']['name'];
  $file_tem_loc = $_FILES['UploadImage']['tmp_name'];
  $file_store = "../asset/images/news/".$file_name;
  $file_upload = false;

  if(move_uploaded_file($file_tem_loc, $file_store)){
      $file_upload = true;
  }
  else{
      $file_upload = false;
  }


  if ($file_upload) {
      $checkQuery = "INSERT INTO news (title, dates ,message, image) VALUES ('".$title."', '".$dates."', '".$message."', '".$file_name."')";

      if (mysqli_query($conn, $checkQuery)) {
          echo "<script>window.alert('New news Added');window.location.href='update_news.php';</script>";
      }

      else{
          echo "<script>window.alert('Please Retry');window.location.href='update_news.php';</script>";
      }

  }

  else{
      echo "<script>window.alert('Please Provide Image');window.location.href='update_news.php';</script>";
  }
}

// Update news
if(isset($_POST['updateNews'])){ //check if form was submitted
  $title = addslashes($_POST['title']);
  $message = addslashes($_POST['message']);
  $dates = addslashes($_POST['dates']);
  $id = $_POST['id'];

  $rand = rand(10000, 99999);
  
  $file_name = $rand.$_FILES['UploadImage']['name'];
  $file_tem_loc = $_FILES['UploadImage']['tmp_name'];
  $file_store = "../asset/images/news/".$file_name;
  $file_upload = false;

  if(move_uploaded_file($file_tem_loc, $file_store)){
      $file_upload = true;
  }
  else{
      $file_upload = false;
  }


  if ($file_upload) {

      $checkQuery = "UPDATE news SET title = '".$title."', dates = '".$dates."', message = '".$message."', image = '".$file_name."' WHERE id = '".$id."' ";

      if (mysqli_query($conn, $checkQuery)) {
          $image = "../asset/images/news/".$_POST['image'];
          unlink($image);
          echo "<script>window.alert('News Updated');window.location.href='update_news.php';</script>";
      }

      else{
          echo "<script>window.alert('Please Retry');window.location.href='update_news.php';</script>";
      }

  }

  else{
      $checkQuery = "UPDATE news SET title = '".$title."', dates = '".$dates."', message = '".$message."' WHERE id = '".$id."' ";

      if (mysqli_query($conn, $checkQuery)) {
          echo "<script>window.alert('News Updated');window.location.href='update_news.php';</script>";
      }

      else{
          echo "<script>window.alert('Please Retry');window.location.href='update_news.php';</script>";
      }
  }
}

// Delete news
if(isset($_POST['deleteNews'])){ //check if form was submitted
    $id = $_POST['id'];
    $checkQuery = "DELETE FROM news WHERE id='".$id."'";
    $checkResult=mysqli_query($conn, $checkQuery);
    $image = "../asset/images/news/".$_POST['image'];
    unlink($image);
    $page = $_SERVER['PHP_SELF'];
    $sec = "1";
}


?>