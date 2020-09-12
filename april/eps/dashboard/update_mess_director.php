<?php include "include/header.php";?>

<?php  
  include 'include/connection.php';
  $checkQuery = "SELECT * FROM message";
  $checkResult = mysqli_query($conn, $checkQuery);
  $row = $checkResult -> fetch_assoc();
?>

<div id="page-wrapper">
  <div class="main-page">
  <br>
  <center><h2 class="title1" style="color: red;">MESSAGE -> MESSAGES FROM DIRECTOR</h2></center><br>
  <form method="post" enctype="multipart/form-data">
    <div class="card card-body" style="color:black;width: 100%;background: #C8F7F8">
      <div class="form-group">
        <label for="exampleFormControlInput1">Director Name</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" required placeholder="Write Name" name="dname" value="<?php echo $row['dname']; ?>">
      </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Message to Student</label>
        <textarea rows="5" class="form-control form-control-line" placeholder="Write Your text here" name="dstudent" id="TypeHere" required><?php echo $row['dstudent']; ?></textarea>
      </div>
     <!--  <div class="form-group">
        <label for="exampleFormControlTextarea1">Message to All</label>
        <textarea rows="5" class="form-control form-control-line" placeholder="Write Your text here" name="dmessage" id="TypeHere1" required><?php echo $row['dmessage']; ?></textarea>
      </div> -->

      <div class="card" style="width: auto;">
        <img class="card-img-top" src="../asset/images/<?php echo $row['dimage']; ?>" alt="Director Image" style="width: 10em">   
        <input type="hidden" name="image" value="<?php echo $row['dimage']; ?>">

        <div class="card-body">
          <!-- <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1">Edit Image</a> -->
          <div class="form-group">
            <label>Change image</label>
            <input class="btn btn-success" name="UploadImage" type="file" value="Upload Image" accept='image/*'>
          </div>
        </div>
      </div>
      <div class="form-group">
        <button class="btn btn-success" type="submit" name="updateDirector">UPDATE MESSAGE</button>
      </div>
    </div>

  </form>
  </div>
</div>
<?php include "include/footer.php";?>

<?php 

  if(isset($_POST['updateDirector'])){ //check if form was submitted

    $dstudent = addslashes($_POST['dstudent']);
    // $dmessage = addslashes($_POST['dmessage']);
    $dname = addslashes($_POST['dname']);

    $rand = rand(10000, 99999);
    
    $file_name = $rand.$_FILES['UploadImage']['name'];
    $file_tem_loc = $_FILES['UploadImage']['tmp_name'];
    $file_store = "../asset/images/".$file_name;
    $file_upload = false;

    if(move_uploaded_file($file_tem_loc, $file_store)){
        $file_upload = true;
    }
    else{
        $file_upload = false;
    }


    if ($file_upload) {

        $checkQuery = "UPDATE message SET dname = '".$dname."', dstudent = '".$dstudent."', dimage = '".$file_name."' WHERE id = 1 ";  

        if (mysqli_query($conn, $checkQuery)) {
            $image = "../asset/images/".$_POST['image'];
            unlink($image);
            echo "<script>window.alert('Director Message Updated');window.location.href='update_mess_director.php';</script>";
        }

        else{
            echo "<script>window.alert('Please Re Upload Image');window.location.href='update_mess_director.php';</script>";
        }

    }

    else{
        $checkQuery = "UPDATE message SET dname = '".$dname."', dstudent = '".$dstudent."'  WHERE id = 1 ";  


        if (mysqli_query($conn, $checkQuery)) {
            echo "<script>window.alert('Director Message Updated');window.location.href='update_mess_director.php';</script>";
        }

        else{
            echo "<script>window.alert('Please Retry');window.location.href='update_mess_director.php';</script>";
        }
    }
}

?>
