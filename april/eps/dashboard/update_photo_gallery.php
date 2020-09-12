<?php include "include/header.php";?>
<div id="page-wrapper">
  <div class="main-page">
   <center><h2 class="title1" style="color: red;">PHOTO GALLERY</h2></center>
    <div class="card card-body" style="color:black;width: 100%;background: #C8F7F8">
      <h4>ADD Image</h4>
      <form method="post" enctype="multipart/form-data">
        <div class="form-group">
            <input class="btn btn-success" name="UploadImage" type="file" value="Upload Image" accept='image/*' required>
        </div>
        <button class="btn btn-success" type="submit" name="addImage">ADD</button>
      </form>
    </div>
    <br><br>
    <div class="tables">
      <h2 class="title1" align="center">All the Photo </h2>

      <div class="table-responsive bs-example widget-shadow">
        <table class="table table-bordered"> 
          <thead> 
            <tr> 
              <th>#</th> 
              <th>Image</th> 
              <th>Edit</th> 
              <th>Delete</th> 
            </tr> 
          </thead> 
          <tbody> 
            <?php 
              include 'include/connection.php';
              $checkQuery = "SELECT * FROM gallery";
              $checkResult = mysqli_query($conn, $checkQuery);
              $no = 1;
              while ($row = $checkResult -> fetch_assoc()) {
            ?>
            <form method="post" enctype="multipart/form-data">
              <tr> 
                <th scope="row"><?php echo $no; ?></th>
                <input type="hidden" name="image" value="<?php echo $row['image']; ?>">
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                <td><img src="../asset/images/gallery/<?php echo $row['image']; ?>" style="max-height: 300px"></td> 
                <td><a href="#" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1">Change Photo</a></td> 
                <td><button class="btn btn-success" type="submit" name="deleteImage">Delete</button></td> 
              </tr>

              <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Change image</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <center>
                        <img class="card-img-top" src="../asset/images/gallery/<?php echo $row['image']; ?>" alt="Card image cap" style="width: 16em">
                      </center>
                      <div class="form-group">
                        <label>Select new image</label>
                        <input class="btn btn-success" name="UploadImage" type="file" value="Upload Image">
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary" name="UpdateImage">Save changes</button>
                    </div>
                  </div>
                </div>
              </div>

            </form>
            <?php 
              $no++;
              }
            ?>
          </tbody> 
        </table> 
      </div>

    </div>
  </div>
</div>

<?php include "include/footer.php";?>

<?php 

  if(isset($_POST['UpdateImage'])){ //check if form was submitted

    $id = $_POST['id'];

    $rand = rand(10000, 99999);
    
    $file_name = $rand.$_FILES['UploadImage']['name'];
    $file_tem_loc = $_FILES['UploadImage']['tmp_name'];
    $file_store = "../asset/images/gallery/".$file_name;
    $file_upload = false;

    if(move_uploaded_file($file_tem_loc, $file_store)){
        $file_upload = true;
    }
    else{
        $file_upload = false;
    }


    if ($file_upload) {

        $checkQuery = "UPDATE gallery SET image = '".$file_name."' WHERE id = '".$id."' ";  

        if (mysqli_query($conn, $checkQuery)) {
            $image = "../asset/images/gallery/".$_POST['image'];
            unlink($image);
            echo "<script>window.alert('Image Changed Updated');window.location.href='update_photo_gallery.php';</script>";
        }

        else{
            echo "<script>window.alert('Please Re Upload Image');window.location.href='update_photo_gallery.php';</script>";
        }

    }

    else{
            echo "<script>window.alert('Please Retry');window.location.href='update_photo_gallery.php';</script>";
    }
  }


  if(isset($_POST['addImage'])){ //check if form was submitted

    $rand = rand(10000, 99999);
    
    $file_name = $rand.$_FILES['UploadImage']['name'];
    $file_tem_loc = $_FILES['UploadImage']['tmp_name'];
    $file_store = "../asset/images/gallery/".$file_name;
    $file_upload = false;

    if(move_uploaded_file($file_tem_loc, $file_store)){
        $file_upload = true;
    }
    else{
        $file_upload = false;
    }


    if ($file_upload) {

        $checkQuery = "INSERT INTO gallery (image) VALUES ('".$file_name."')";

        if (mysqli_query($conn, $checkQuery)) {
            echo "<script>window.alert('Image Added');window.location.href='update_photo_gallery.php';</script>";
        }

        else{
            echo "<script>window.alert('Please Re Upload Image');window.location.href='update_photo_gallery.php';</script>";
        }

    }

    else{
            echo "<script>window.alert('Please Retry');window.location.href='update_photo_gallery.php';</script>";
    }
  }

  if(isset($_POST['deleteImage'])){ //check if form was submitted

    $id=$_POST['id'];

    if($id!=""){
      $checkQuery = "DELETE FROM gallery WHERE id='".$id."'";
      if (mysqli_query($conn, $checkQuery)) {
        $image = "../asset/images/gallery/".$_POST['image'];
        unlink($image);
        echo "<script>window.alert('Photo Deleted');window.location.href='update_photo_gallery.php';</script>";
      }
      else{
          echo "<script>window.alert('Please Retry');window.location.href='update_photo_gallery.php';</script>";
      }    
    }
  }

?>
