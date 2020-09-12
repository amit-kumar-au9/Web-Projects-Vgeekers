<?php include "include/header.php";?>
<?php 
  include 'include/connection.php';
  $checkQuery = "SELECT * FROM home";
  $checkResult = mysqli_query($conn, $checkQuery);
  $row = $checkResult -> fetch_assoc();
?>
<div id="page-wrapper">
  <div class="main-page">
   <center><h2 class="title1" style="color: red;">HOME -> VIDEO TOUR</h2></center>
    <div class="card card-body" style="color:black;width: 100%;background: #C8F7F8">
      <h4>Update Video</h4>
      <form method="post" enctype="multipart/form-data">
        <video style="width: 16em" controls class="card-img-top" >
          <source src="../asset/images/<?php echo $row['video_tour']; ?>" type="video/mp4">
        </video>
        <div class="form-group">
            <input class="btn btn-success" name="UploadVideo" type="file" value="Upload Video" accept='video/*'>
            <input type="hidden" name="video" value="<?php echo $row['video_tour']; ?>">
        </div>
        <button class="btn btn-success" type="submit" name="UpdateImage">UPLOAD NEW VIDEO</button>
      </form>
    </div>
    <br><br>
  </div>
</div>

<?php include "include/footer.php";?>

<?php 
  include 'include/connection.php';
  if(isset($_POST['UpdateImage'])){ //check if form was submitted

    $id = $_POST['id'];

    $rand = rand(10000, 99999);
    
    $file_name = $rand.$_FILES['UploadVideo']['name'];
    $file_tem_loc = $_FILES['UploadVideo']['tmp_name'];
    $file_store = "../asset/images/".$file_name;
    $file_upload = false;

    if(move_uploaded_file($file_tem_loc, $file_store)){
        $file_upload = true;
    }
    else{
        $file_upload = false;
    }


    if ($file_upload) {

        $checkQuery = "UPDATE home SET video_tour = '".$file_name."' WHERE id = 1 ";  

        if (mysqli_query($conn, $checkQuery)) {
            $video = "../asset/images/".$_POST['video'];
            unlink($video);
            echo "<script>window.alert('Video Changed');window.location.href='update_video_tour.php';</script>";
        }

        else{
            echo "<script>window.alert('Please Re Upload Video');window.location.href='update_video_tour.php';</script>";
        }

    }

    else{
            echo "<script>window.alert('Please Retry');window.location.href='update_video_tour.php';</script>";
    }
  }


?>
