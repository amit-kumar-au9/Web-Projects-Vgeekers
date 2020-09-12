<?php include 'include/header.php'; ?>
<?php 
  include 'include/connection.php';
  $checkCourse = "SELECT * FROM course WHERE id = '".$_POST['id']."'";
  $resultCourse = mysqli_query($conn, $checkCourse);
  $row = $resultCourse -> fetch_assoc();
?>
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Course</h1>
          </div>

          <!-- Content Row -->

          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-12 col-lg-12" id="content">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Change Course Details</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="chart-area" style="height: auto !important">
                    <form method="post" enctype="multipart/form-data">
                      <div class="row">
                        
                        <input type="hidden" name="id" value="<?php echo $_POST['id']; ?>">
                        <input type="hidden" name="image" value="<?php echo $row['image']; ?>">

                        <div class="form-group col-md-6">
                          <label style="color: black">Class/Subject <span style="color: red">*</span></label>
                          <input type="text" name="class" class="form-control" placeholder="Enter Class or Subject Name" value="<?php echo $row['class']; ?>" required>
                        </div>

                        <div class="form-group col-md-6">
                          <label style="color: black">Price per month <span style="color: red">*</span></label>
                          <input type="number" min="100" name="price" class="form-control" placeholder="Enter per month price of course" value="<?php echo $row['price']; ?>" required>
                        </div>

                        <div class="form-group col-md-6">
                          <label style="color: black">Course Image <span style="color: red">*</span></label><br>
                          <img src="../img/course/<?php echo $row['image']; ?>" width="100%" height="280px"><br><br>
                          <input class="btn btn-success" name="UploadImage" type="file" value="Upload Image" accept='image/*'>
                        </div>

                        <div class="form-group col-md-6">
                          <label style="color: black">Course Short Description <span style="color: red">*</span></label>
                          <textarea type="text" name="dsc" class="form-control" placeholder="Enter Course Short Description" required ><?php echo $row['dsc']; ?></textarea>
                          <button class="btn btn-primary" name="updateCourse" type="submit" style="margin-top: 30px">Edit Course</button>
                        </div>

                      </div>
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
if(isset($_POST['updateCourse'])){ //check if form was submitted

    $id = $_POST['id'];
    $class = $_POST['class'];
    $price = $_POST['price'];
    $dsc = $_POST['dsc'];

    $rand = rand(10000, 99999);
    
    $file_name = preg_replace('/\s+/', '_', trim(addslashes($rand.$_FILES['UploadImage']['name'])));
    $file_tem_loc = $_FILES['UploadImage']['tmp_name'];
    $file_store = "../img/course/".$file_name;
    $file_upload = false;

    if(move_uploaded_file($file_tem_loc, $file_store)){
        $file_upload = true;
    }
    else{
        $file_upload = false;
    }

    if ($file_upload) {
        $checkQuery = "UPDATE course SET class = '".$class."', price = '".$price."', dsc = '".$dsc."', image = '".$file_name."' WHERE id = '".$id."' ";  
        if (mysqli_query($conn, $checkQuery)) {
            $image = "../img/course/".$_POST['image'];
            unlink($image);
        }
    }
    else{
        $checkQuery = "UPDATE course SET class = '".$class."', price = '".$price."', dsc = '".$dsc."' WHERE id = '".$id."' ";  
        mysqli_query($conn, $checkQuery);
    }
    echo "<script>window.location.href='view_course.php';</script>";    
  }
?>