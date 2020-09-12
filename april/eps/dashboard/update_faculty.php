<?php include "include/header.php";?>
<div id="page-wrapper">
  <div class="main-page">
   <center><h2 class="title1" style="color: red;">All the Faculty</h2></center>
    <div class="tables">
      <div class="table-responsive bs-example widget-shadow">
        <table class="table table-bordered"> 
          <thead> 
            <tr> 
              <th>#</th> 
              <th>Teacher Name</th>
              <th>Image</th>
              <th>Address</th> 
              <th>Educational Qualification</th>
              <th>Experience</th>
              <th>DOB</th>
              <th>Blood Group</th>
              <th>Mobile No.</th>
              <th>Email ID</th>
              <th>Facebook</th>
              <th>Linkedin</th>
              <th>Twitter</th>
              <th>Edit</th> 
              <th>Delete</th> 
            </tr> 
          </thead> 
          <tbody> 
            <?php 
              include 'include/connection.php';
              $checkQuery = "SELECT * FROM faculty";
              $checkResult = mysqli_query($conn, $checkQuery);
              $no = 1;
              while ($row = $checkResult -> fetch_assoc()) {
            ?>
            <form method="post" enctype="multipart/form-data">

              <input type="hidden" name="image" value="<?php echo $row['image']; ?>">
              <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
              <tr> 
                <th scope="row"><?php echo $no; ?></th>
                <td><input type="text" name="name" value="<?php echo $row['name']; ?>" required></td>
                <td>
                  <img src="../asset/images/faculty/<?php echo $row['image']; ?>" style="max-height: 100px">
                  <input name="UploadImage" type="file" style="width:100%" accept='image/*'>
                </td> 
                <td><input type="text" name="address" value="<?php echo $row['address']; ?>" required></td>
                <td><input type="text" name="qualification" value="<?php echo $row['qualification']; ?>" required></td>
                <td><input type="text" name="experience" value="<?php echo $row['experience']; ?>"></td>
                <td><input type="text" name="DOB" value="<?php echo $row['DOB']; ?>"></td>
                <td><input type="text" name="blood_grp" value="<?php echo $row['blood_grp']; ?>"></td>
                <td><input type="text" name="phone" value="<?php echo $row['phone']; ?>" required></td>
                <td><input type="text" name="email" value="<?php echo $row['email']; ?>" required></td>
                <td><input type="text" name="facebook" value="<?php echo $row['facebook']; ?>"></td>
                <td><input type="text" name="linkedin" value="<?php echo $row['linkedin']; ?>"></td>
                <td><input type="text" name="twitter" value="<?php echo $row['twitter']; ?>"></td>
                <td><button class="btn btn-success" type="submit" name="updateTeacher">Update</button></td>
                <td><button class="btn btn-success" type="submit" name="deleteImage">Delete</button></td>
              </tr>

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

  if(isset($_POST['updateTeacher'])){ //check if form was submitted

    $id = $_POST['id'];
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
        $checkQuery = "UPDATE faculty SET name = '".$name."', qualification = '".$qualification."', experience = '".$experience."', email = '".$email."', phone = '".$phone."', address = '".$address."',DOB = '".$DOB."', blood_grp = '".$blood_grp."', facebook = '".$facebook."', twitter = '".$twitter."', linkedin = '".$linkedin."', image = '".$file_name."' WHERE id = '".$id."' ";  

        if (mysqli_query($conn, $checkQuery)) {
            $image = "../asset/images/gallery/".$_POST['image'];
            unlink($image);
            echo "<script>window.alert('Teacher Information Changed');window.location.href='update_faculty.php';</script>";
        }

        else{
            echo "<script>window.alert('Please Re Upload Image');window.location.href='update_faculty.php';</script>";
        }

    }

    else{
        $checkQuery = "UPDATE faculty SET name = '".$name."', qualification = '".$qualification."', experience = '".$experience."', email = '".$email."', phone = '".$phone."', address = '".$address."',DOB = '".$DOB."', blood_grp = '".$blood_grp."', facebook = '".$facebook."', twitter = '".$twitter."', linkedin = '".$linkedin."' WHERE id = '".$id."' ";  

        if (mysqli_query($conn, $checkQuery)) {
            echo "<script>window.alert('Teacher Information Changed');window.location.href='update_faculty.php';</script>";
        }

        else{
            echo "<script>window.alert('Please Retry');window.location.href='update_faculty.php';</script>";
        }
    }
  }

  if(isset($_POST['deleteTeacher'])){ //check if form was submitted

    $id=$_POST['id'];

    if($id!=""){
      $checkQuery = "DELETE FROM faculty WHERE id='".$id."'";
      if (mysqli_query($conn, $checkQuery)) {
        $image = "../asset/images/gallery/".$_POST['image'];
        unlink($image);
        echo "<script>window.alert('Teacher Deleted');window.location.href='update_faculty.php';</script>";
      }
      else{
          echo "<script>window.alert('Please Retry');window.location.href='update_faculty.php';</script>";
      }    
    }
  }

?>
