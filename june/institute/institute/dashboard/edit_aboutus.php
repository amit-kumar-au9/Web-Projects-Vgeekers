<?php include 'include/header.php'; ?>
<?php 
  include 'include/connection.php';
  $checkCourse = "SELECT * FROM basic_data WHERE id = 1";
  $resultCourse = mysqli_query($conn, $checkCourse);
  $row = $resultCourse -> fetch_assoc();
?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit About Us</h1>
          </div>

          <!-- Content Row -->

          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-12 col-lg-12" id="content">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">About Us Content</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="chart-area" style="height: auto !important">
                    <form method="post">
                      <div class="form-group">
                        <textarea name="about_us" type="email" id="editor1" class="form-control" placeholder="Enter About us..." rows="7"><?php echo $row['content'] ?></textarea>
                        <script>CKEDITOR.replace( 'about_us' );</script>
                      </div>
                      <button class="btn btn-primary" type="submit" name="change_content">Update About Us</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-6 col-lg-6" id="image">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">About Us Image</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="chart-area" style="height: auto !important">
                    <form method="post" enctype="multipart/form-data">
                      <div class="form-group">
                        <img src="../img/<?php echo $row['image']; ?>" height="300px">
                        <input type="hidden" name="image" value="<?php echo $row['image']; ?>">
                      </div>
                      <input class="btn btn-success" name="UploadImage" type="file" value="Upload Image" accept='image/*'>    
                      <button class="btn btn-primary" type="submit" name="change_image">Change Image</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
        <!-- /.container-fluid -->
<?php include 'include/footer.php'; ?>

<?php 
  if(isset($_POST['change_image'])){ //check if form was submitted

    $id = $_POST['id'];

    $rand = rand(10000, 99999);
    
    $file_name = preg_replace('/\s+/', '_', trim(addslashes($rand.$_FILES['UploadImage']['name'])));
    $file_tem_loc = $_FILES['UploadImage']['tmp_name'];
    $file_store = "../img/".$file_name;
    $file_upload = false;

    if(move_uploaded_file($file_tem_loc, $file_store)){
        $file_upload = true;
    }
    else{
        $file_upload = false;
    }

    if ($file_upload) {
        $checkQuery = "UPDATE basic_data SET image = '".$file_name."' WHERE id = '1' ";  
        if (mysqli_query($conn, $checkQuery)) {
            $image = "../img/".$_POST['image'];
            unlink($image);
        }
    }
    echo "<script>window.location.href='edit_aboutus.php';</script>";    
  }

  if(isset($_POST['change_content'])){ //check if form was submitted

    $content = $_POST['about_us'];
    $checkQuery = "UPDATE basic_data SET content = '".$content."' WHERE id = '1' ";  
    if (mysqli_query($conn, $checkQuery)) {
        $image = "../img/".$_POST['image'];
        unlink($image);
    }
    echo "<script>window.location.href='edit_aboutus.php';</script>";    
  }
?>
