<?php include "include/header.php";?>

<?php  
  include 'include/connection.php';
  $checkQuery = "SELECT * FROM home";
  $checkResult = mysqli_query($conn, $checkQuery);
  $row = $checkResult -> fetch_assoc();
?>

<div id="page-wrapper">
  <div class="main-page">
  <br>
  <center><h2 class="title1" style="color: red;">HOME -> ADMISSION DETAILS</h2></center><br>
  <form method="post" enctype="multipart/form-data">
    <div class="card card-body" style="color:black;width: 100%;background: #C8F7F8">
      <div class="form-group">
        <label for="exampleFormControlInput1">Heading</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Write Name" name="admission_heading" value="<?php echo $row['admission_heading']; ?>" required>
      </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Message to Student</label>
        <textarea rows="5" class="form-control form-control-line" placeholder="Write Your text here" name="admission_details" id="TypeHere" required><?php echo $row['admission_details']; ?></textarea>
      </div>
      <div class="card" style="width: auto;">
        <img class="card-img-top" src="../asset/images/index/<?php echo $row['admission_image']; ?>" alt="admission Tour" style="width: 20em">   
        <input type="hidden" name="image" value="<?php echo $row['admission_image']; ?>">

        <div class="card-body">
          <div class="form-group">
            <label>Change image</label>
            <input class="btn btn-success" name="UploadImage" type="file" value="Upload Image" accept="image/*">
          </div>
        </div>
      </div>
      <div class="form-group">
        <button class="btn btn-success" type="submit" name="updateDirector">UPDATE</button>
      </div>
    </div>

  </form>
  </div>
</div>
<?php include "include/footer.php";?>

<?php 

  if(isset($_POST['updateDirector'])){ //check if form was submitted

    $admission_details = addslashes($_POST['admission_details']);
    $admission_heading = addslashes($_POST['admission_heading']);

    $rand = rand(10000, 99999);
    
    $file_name = $rand.$_FILES['UploadImage']['name'];
    $file_tem_loc = $_FILES['UploadImage']['tmp_name'];
    $file_store = "../asset/images/index/".$file_name;
    $file_upload = false;

    if(move_uploaded_file($file_tem_loc, $file_store)){
        $file_upload = true;
    }
    else{
        $file_upload = false;
    }


    if ($file_upload) {

        $checkQuery = "UPDATE home SET admission_heading = '".$admission_heading."', admission_details = '".$admission_details."', admission_image = '".$file_name."' WHERE id = 1 ";  

        if (mysqli_query($conn, $checkQuery)) {
            $image = "../asset/images/index/".$_POST['image'];
            unlink($image);
            echo "<script>window.alert('Admission Details Image Updated');window.location.href='update_admission_details.php';</script>";
        }

        else{
            echo "<script>window.alert('Please Re Upload Image');window.location.href='update_admission_details.php';</script>";
        }

    }

    else{
        $checkQuery = "UPDATE home SET admission_heading = '".$admission_heading."', admission_details = '".$admission_details."', WHERE id = 1 ";  


        if (mysqli_query($conn, $checkQuery)) {
            echo "<script>window.alert('Admission Details Updated');window.location.href='update_admission_details.php';</script>";
        }

        else{
            echo "<script>window.alert('Please Retry');window.location.href='update_admission_details.php';</script>";
        }
    }
}

?>
