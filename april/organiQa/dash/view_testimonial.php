<?php include "include/header.php";?>
<div id="page-wrapper" style="background: white">
  <div class="main-page" style="background: white">
    <center><h2 class="title1" style="color: red;">View Testimonial</h2></center>
    <center>
      <table class="table" style="border:1px solid black">
        <thead class="thead-dark">
          <tr>
            <th scope="col">S.no</th>
            <th scope="col">Image</th>
            <th scope="col">Name</th>
            <th scope="col">Details</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php 
            include 'conn.php';
            $checkUsers = "SELECT * FROM testimonial";
            if(mysqli_num_rows($resultUsers = mysqli_query($con, $checkUsers))>0){
              $no = 0;
              while($row = $resultUsers -> fetch_assoc()){
                $no++;
          ?>
          <tr>
            <form method="post" enctype="multipart/form-data" >
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                <input type="hidden" name="image" value="<?php echo $row['image']; ?>">
                <td><?php echo $no; ?></td>
                <td scope="row"><img src="../asset/images/testimonial/<?php echo $row['image']; ?>" width="150px;" height="150px"><br><br> <input name="img" type="file" value="Upload Image" /  required></td>
                <td><input type="text" name="name" value="<?php echo $row["name"]; ?>"  required></td>
                <td><textarea name="detail" rows="10" cols="30"  required><?php echo $row["detail"]; ?></textarea></td>
                <td>
                  <button type="submit" class="btn btn-success" name="updateTest">UPDATE</button>
                  <button class="btn btn-danger" style="margin: 10px" type="submit" name="deleteImage">DELETE</button>
                </td>
            </form>
          </tr>
          <?php 
              }
            }
          ?>
        </tbody>
      </table>
    </center>
  </div>
</div>
<?php include "include/footer.php";?>

<?php 
include 'conn.php';
if(isset($_POST['updateTest'])){ //check if form was submitted
    $id= $_POST['id'];
    $name = $_POST['name'];
    $details = $_POST['detail'];

    $rand = rand(10000, 99999);
    
    $file_name = $rand.$_FILES['img']['name'];
    $file_tem_loc = $_FILES['img']['tmp_name'];
    $file_store = "../asset/images/testimonial/".$file_name;    
    $file_upload = false;

    if(move_uploaded_file($file_tem_loc, $file_store)){
        $file_upload = true;
    }
    else{
        $file_upload = false;
    }


    if ($file_upload) {
        $image = "../asset/images/testimonial/".$_POST['image'];
        unlink($image);
        $checkQuery = "UPDATE testimonial SET name = '".$name."', detail = '".$details."', image= '".$file_name."' WHERE id = '".$id."' ";  

        if (mysqli_query($con, $checkQuery)) {
            $image = "../asset/images/testimonial/".$_POST['image'];
            unlink($image);
            echo "<script>window.alert('Testimonial Updated');window.location.href='view_testimonial.php';</script>";
        }

        else{
            echo "<script>window.alert('Please Re Upload Image');window.location.href='view_testimonial.php';</script>";
        }

    }

    else{
          $checkQuery = "UPDATE testimonial SET name = '".$name."', detail = '".$details."' WHERE id = '".$id."' ";  

        if (mysqli_query($con, $checkQuery)) {
            echo "<script>window.alert('Testimonial Information Changed');window.location.href='view_testimonial.php';</script>";
        }

        else{
            echo "<script>window.alert('Please Retry');window.location.href='view_testimonial.php';</script>";
        }
    }
  }
if(isset($_POST['deleteImage'])){ //check if form was submitted

    $id=$_POST['id'];

    if($id!=""){
      $checkQuery = "DELETE FROM testimonial WHERE id='".$id."'";
      if (mysqli_query($con, $checkQuery)) {
        $image = "../asset/images/testimonial/".$_POST['image'];
        unlink($image);
        echo "<script>window.alert('Testimonial Deleted');window.location.href='view_testimonial.php';</script>";
      }
      else{
          echo "<script>window.alert('Please Retry');window.location.href='view_testimonial.php';</script>";
      }    
    }
  }

?>