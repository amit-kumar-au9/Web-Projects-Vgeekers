<?php include "include/header.php";?>
	<div id="page-wrapper">
		<div class="main-page">
			<center><h2 class="title1" style="color: red;">HOME -> EPS AT GLANCE</h2></center>
			<?php 
                include 'include/connection.php';
                $checkHomeIntro = "SELECT * FROM home";
                $resultHomeIntro = mysqli_query($conn, $checkHomeIntro);
                $row = $resultHomeIntro -> fetch_assoc();
            ?>
          <div class="card card-body" style="color:black;width: 100%;background: #C8F7F8">
            <div class="form-group">
              <form method="post">
                <label for="exampleFormControlInput1">Glance</label>
                <textarea rows="5" class="form-control form-control-line" placeholder="Write Your text here" name="glance" id="TypeHere" required><?php echo $row['glance']; ?></textarea>
                <button class="btn btn-success" name="updateGlance" type="submit">UPDATE</button>
              </form>
            </div>
          </div>
		</div>
        <div class="main-page">
            <center><h2 class="title1" style="color: red;">Images</h2></center>
            <div class="card card-body" style="color:black;width: 100%;background: #C8F7F8">
                <div class="row">
                    <form method="post" enctype="multipart/form-data">
                        <div class="form-group col-md-3">
                            <img src="../asset/images/home/<?php echo $row['glance_image1']; ?>" style="width:400px"><br>
                            <label>Change Image</label>
                            <input class="btn btn-success" name="UploadImage" type="file" value="Upload Image" accept='image/*'>
                            <input type="hidden" name="typeimage" value="1">
                            <input type="hidden" name="image" value="<?php echo $row['glance_image1']; ?>">
                            <div class="form-group">
                                <button class="btn btn-success" type="submit" name="updateImage">UPDATE IMAGE</button>
                            </div>
                        </div>
                    </form>
                    <form method="post" enctype="multipart/form-data">
                        <div class="form-group col-md-3">
                            <img src="../asset/images/home/<?php echo $row['glance_image2']; ?>" style="width:400px"><br>
                            <label>Change Image</label>
                            <input class="btn btn-success" name="UploadImage" type="file" value="Upload Image" accept='image/*'>
                            <input type="hidden" name="typeimage" value="2">
                            <input type="hidden" name="image" value="<?php echo $row['glance_image2']; ?>">
                            <div class="form-group">
                                <button class="btn btn-success" type="submit" name="updateImage">UPDATE IMAGE</button>
                            </div>
                        </div>
                    </form>
                    <form method="post" enctype="multipart/form-data">
                        <div class="form-group col-md-3">
                            <img src="../asset/images/home/<?php echo $row['glance_image3']; ?>" style="width:400px"><br>
                            <label>Change Image</label>
                            <input class="btn btn-success" name="UploadImage" type="file" value="Upload Image" accept='image/*'>
                            <input type="hidden" name="typeimage" value="3">
                            <input type="hidden" name="image" value="<?php echo $row['glance_image3']; ?>">
                            <div class="form-group">
                                <button class="btn btn-success" type="submit" name="updateImage">UPDATE IMAGE</button>
                            </div>
                        </div>
                    </form>
                    <form method="post" enctype="multipart/form-data">
                        <div class="form-group col-md-3">
                            <img src="../asset/images/home/<?php echo $row['glance_image4']; ?>" style="width:400px"><br>
                            <label>Change Image</label>
                            <input class="btn btn-success" name="UploadImage" type="file" value="Upload Image" accept='image/*'>
                            <input type="hidden" name="typeimage" value="4">
                            <input type="hidden" name="image" value="<?php echo $row['glance_image4']; ?>">
                            <div class="form-group">
                                <button class="btn btn-success" type="submit" name="updateImage">UPDATE IMAGE</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
	</div>
<?php include "include/footer.php";?>

<?php 

if(isset($_POST['updateGlance'])){

    $glance=addslashes($_POST['glance']);

    if ($glance!="") {
        $checkQuery = "UPDATE home SET glance='".$glance."' WHERE id='1'";

        if (mysqli_query($conn, $checkQuery)) {
            echo "<script>window.alert('Home Glance Changed');window.location.href='update_eps_glance.php';</script>";
        }
        else{
            echo "<script>window.alert('Please Retry');window.location.href='update_eps_glance.php';</script>";
        }
    }
    else{
        echo "<script>window.alert('Cannot be empty');window.location.href='update_eps_glance.php';</script>";
    }
}

// Update Values
if(isset($_POST['updateImage'])){ //check if form was submitted

    $typeimage = addslashes($_POST['typeimage']);

    $rand = rand(10000, 99999);

    $file_name = $rand.$_FILES['UploadImage']['name'];
    $file_tem_loc = $_FILES['UploadImage']['tmp_name'];
    $file_store = "../asset/images/home/".$file_name;
    $file_upload = false;

    if(move_uploaded_file($file_tem_loc, $file_store)){
      $file_upload = true;
    }
    else{
      $file_upload = false;
    }


    if ($file_upload) {

        if($typeimage == 1){
            $checkQuery = "UPDATE home SET glance_image1 = '".$file_name."' WHERE id = 1 ";
        }
        elseif ($typeimage == 2) {
            $checkQuery = "UPDATE home SET glance_image2 = '".$file_name."' WHERE id = 1 ";
        }
        elseif ($typeimage == 3) {
            $checkQuery = "UPDATE home SET glance_image3 = '".$file_name."' WHERE id = 1 ";
        }        
        elseif ($typeimage == 4) {
            $checkQuery = "UPDATE home SET glance_image4 = '".$file_name."' WHERE id = 1 ";
        }

        if (mysqli_query($conn, $checkQuery)) {
          $image = "../asset/images/home/".$_POST['image'];
          unlink($image);
          echo "<script>window.alert('Image Updated');window.location.href='update_eps_glance.php';</script>";
        }

        else{
          echo "<script>window.alert('Please Retry to Upload 1');window.location.href='update_eps_glance.php';</script>";
}

    }
    else{
          echo "<script>window.alert('Please Retry to Upload');window.location.href='update_eps_glance.php';</script>";
    }
}


?>
