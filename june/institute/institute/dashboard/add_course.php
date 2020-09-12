<?php include 'include/header.php'; ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Add New Course</h1>
          </div>

          <!-- Content Row -->

          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-12 col-lg-12" id="content">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Course Details</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="chart-area" style="height: auto !important">
                    <form method="post" enctype="multipart/form-data">
                      <div class="row">

                        <div class="form-group col-md-6">
                          <label style="color: black">Class/Subject <span style="color: red">*</span></label>
                          <input type="text" name="class" class="form-control" placeholder="Enter Class or Subject Name" required>
                        </div>

                        <div class="form-group col-md-6">
                          <label style="color: black">Price per month <span style="color: red">*</span></label>
                          <input type="number" min="100" name="price" class="form-control" placeholder="Enter per month price of course" required>
                        </div>

                        <div class="form-group col-md-6">
                          <label style="color: black">Course Short Description <span style="color: red">*</span></label>
                          <textarea type="text" name="dsc" class="form-control" placeholder="Enter Course Short Description" required ></textarea>
                        </div>

                        <div class="form-group col-md-6">
                          <label style="color: black">Course Image <span style="color: red">*</span></label><br>
                          <input class="btn btn-success" name="UploadImage" type="file" value="Upload Image" accept='image/*' required>
                        </div>

                      </div>
                        <button class="btn btn-primary" type="submit" name="addCourse">Add Course</button>
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
  include 'include/connection.php';
  if(isset($_POST['addCourse'])){ //check if form was submitted

    $id = $_POST['id'];
    $class = addslashes($_POST['class']);
    $price = $_POST['price'];
    $dsc = addslashes($_POST['dsc']);


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
        $checkQuery = "INSERT INTO course (class, price, dsc, image) VALUES ('".$class."', '".$price."', '".$dsc."','".$file_name."') ";  
        mysqli_query($conn, $checkQuery);
    }
    echo "<script>window.location.href='view_course.php';</script>";    
  }

?>
