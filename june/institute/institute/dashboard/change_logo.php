<?php include 'include/header.php'; ?>
<?php 
  include 'include/connection.php';
  $checkCourse = "SELECT * FROM basic_data WHERE id = 2";
  $resultCourse = mysqli_query($conn, $checkCourse);
  $row = $resultCourse -> fetch_assoc();
?>
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Website Logo</h1>
          </div>

          <!-- Content Row -->

          <div class="row">

            <div class="col-xl-6 col-lg-6" id="image">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Change Logo</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="chart-area" style="height: auto !important">
                    <form method="post" enctype="multipart/form-data">
                      <div class="form-group">
                        <img src="../img/<?php echo $row['image']; ?>" width="200px">
                        <input type="hidden" name="image" value="<?php echo $row['image']; ?>">
                      </div>
                      <input class="btn btn-success" name="UploadImage" type="file" value="Upload Image" accept='image/*' required>
                      <button class="btn btn-primary" name="updateLogo" type="submit">Change Logo</button>
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
if(isset($_POST['updateLogo'])){ //check if form was submitted

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
        $checkQuery = "UPDATE basic_data SET image = '".$file_name."' WHERE id = '2' ";  
        if (mysqli_query($conn, $checkQuery)) {
            $image = "../img/".$_POST['image'];
            unlink($image);
        }
    }
    echo "<script>window.location.href='change_logo.php';</script>";    
  }
?>
