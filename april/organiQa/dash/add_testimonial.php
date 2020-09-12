<?php include "include/header.php";?>
	<div id="page-wrapper" style="background: white">
		<div class="main-page" style="background: white;">
			<center><h2 class="title1" style="color: red;">Add Testimonials</h2></center>
			<div class="forms">
				<form style="margin: 10px" method="post" enctype="multipart/form-data">
           <div class="form-group" style="width: 50%">
            <label for="exampleInputEmail1">Product Image</label>
              <input class="btn btn-success" name="UploadImage" type="file" value="Upload Image" style="background:#007bff" accept='image/*' required>  
          </div>
          <div class="form-group" style="width: 50%">
            <label for="exampleInputPassword1">Name</label>
            <input type="text" class="form-control" placeholder="Testimonials Name" name="name"  required>
          </div>
          <div class="form-group" style="width: 50%;">
            <label for="exampleFormControlTextarea1"> Description</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Testimonial description" name="detail"  required></textarea>
          </div>
          <button type="submit" class="btn btn-primary" style="margin: 10px;" name="addTestimonial">ADD</button>
        </form>	
			</div>
		</div>
	</div>
<?php include "include/footer.php";?>

<?php 

  if(isset($_POST['addTestimonial'])){ //check if form was submitted

    include 'conn.php';
    $name = $_POST['name'];
    $detail = $_POST['detail'];

    $rand = rand(10000, 99999);
    
    $file_name = $rand.$_FILES['UploadImage']['name'];
    $file_tem_loc = $_FILES['UploadImage']['tmp_name'];
    $file_store = "../asset/images/testimonial/".$file_name;
    $file_upload = false;

    if(move_uploaded_file($file_tem_loc, $file_store)){
        $file_upload = true;
    }
    else{
        $file_upload = false;
    }

    if ($file_upload) {
        $checkQuery = "INSERT INTO testimonial (name, detail, image) VALUES ('".$name."', '".$detail."', '".$file_name."')";

        if (mysqli_query($con, $checkQuery)) {
            echo "<script>window.alert('Testimonials Added');window.location.href='add_testimonial.php';</script>";
        }else{
            echo "<script>window.alert('Please Re Upload Image');window.location.href='add_testimonial.php';</script>";
          }

    }else{
      echo "<script>window.alert('Please Retry');window.location.href='add_testimonial.php';</script>";
      }
  }

?> 