<?php include "include/header.php";?>
<div id="page-wrapper">
  <div class="main-page">
    <center><h2 class="title1" style="color: red;">ADD FACULTY</h2></center>
      <div class="card card-body" style="color:black;width: 100%;background: #C8F7F8">
        <form method="post" enctype="multipart/form-data">
          <div class="container">
            <div class="row">
              <div class="form-group col-md-4">
                <label>Teacher Name</label>
                <input class="form-control" type="text" placeholder="Enter faculty name" name="name" required>
              </div>
              <div class="form-group col-md-4">
                <label>Educational Qualification</label>
                <input class="form-control" type="text" placeholder="Enter Educational Qualification" name="qualification" required>
              </div>
              <div class="form-group col-md-4">
                <label>Experience</label>
                <input class="form-control" type="number" min="0" max="50" placeholder="Enter Experience In Years" name="experience">
              </div>
              <div class="form-group col-md-4">
                <label>Date Of Birth</label>
                <input class="form-control" type="date" placeholder="Enter Date Of Birth" name="DOB" required>
              </div>
              <div class="form-group col-md-4">
                <label>Blood Group</label>
                <input class="form-control" type="text" placeholder="Enter Blood Group" name="blood_grp">
              </div>
              <div class="form-group col-md-4">
                <label>Mobile No.</label>
                <input class="form-control" type="tel" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" placeholder="Enter Mobile No." name="phone" required>
              </div>
              <div class="form-group col-md-4">
                <label>Email ID</label>
                <input class="form-control" type="emal" placeholder="Enter Email ID" name="emal" required>
              </div>
              <div class="form-group col-md-4">
                <label>Facebook</label>
                <input class="form-control" type="text" placeholder="Enter Facebook ID" name="facebook">
              </div>
              <div class="form-group col-md-4">
                <label>LinkedIn</label>
                <input class="form-control" type="text" placeholder="Enter LinkedIn ID" name="linkedin">
              </div>
              <div class="form-group col-md-4">
                <label>Twitter</label>
                <input class="form-control" type="text" placeholder="Enter Twitter ID" name="twitter">
              </div>
              <div class="form-group col-md-4">
                <label>Upload Image</label>
                <input class="btn btn-success" name="UploadImage" type="file" value="Upload Image" accept='image/*' required>
              </div>
              <div class="form-group col-md-12">
                <label>Address</label>
                <textarea rows="5" class="form-control form-control-line" placeholder="Write Your Address here" name="address" required></textarea>
              </div>
            </div>
          </div>
          <button class="btn btn-success" type="submit" name="addTeacher">ADD TEACHER</button>
      </form>
      </div>
  </div>
</div>

<?php include "include/footer.php";?><th>Teacher Name</th>

<?php 

  if(isset($_POST['addTeacher'])){ //check if form was submitted

    include 'include/connection.php';
    $name = $_POST['name'];
    $qualification = $_POST['qualification'];
    $experience = $_POST['experience'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $DOB = $_POST['DOB'];
    $blood_grp = $_POST['blood_grp'];
    $facebook = $_POST['facebook'];
    $twitter = $_POST['twitter'];
    $linkedin = $_POST['linkedin'];

    $rand = rand(10000, 99999);
    
    $file_name = $rand.$_FILES['UploadImage']['name'];
    $file_tem_loc = $_FILES['UploadImage']['tmp_name'];
    $file_store = "../asset/images/faculty/".$file_name;
    $file_upload = false;

    if(move_uploaded_file($file_tem_loc, $file_store)){
        $file_upload = true;
    }
    else{
        $file_upload = false;
    }


    if ($file_upload) {
        $checkQuery = "INSERT INTO faculty (name, qualification, experience, email, phone, address, DOB, blood_grp, facebook, twitter, linkedin ,image) VALUES ('".$name."', '".$qualification."', '".$experience."', '".$email."', '".$phone."', '".$address."', '".$DOB."', '".$blood_grp."', '".$facebook."', '".$twitter."', '".$linkedin."' ,'".$file_name."')";

        if (mysqli_query($conn, $checkQuery)) {
            echo "<script>window.alert('Faculty Added');window.location.href='add_faculty.php';</script>";
        }

        else{
            echo "<script>window.alert('Please Re Upload Image');window.location.href='add_faculty.php';</script>";
        }

    }

    else{
            echo "<script>window.alert('Please Retry');window.location.href='add_faculty.php';</script>";
    }
  }

?>