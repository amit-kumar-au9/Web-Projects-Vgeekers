<?php include "include/header.php";?>
<div id="page-wrapper">
	<div class="main-page">
		<br>
			<h2 class="title1" style="color: green;" align="center">Category List</h2>
            <form method="post" style="background-color:#E1E6EA;padding:20px" enctype="multipart/form-data">
                <h3>Add new Image</h3>
                <div class="form-group">
                    <input type="hidden" name="category_id" value="<?php echo $_POST['category_id']; ?>">
                    <div>                     
                      <input name="UploadImage" type="file" value="Upload Image" accept='image/*' required></td>
                    </div>
                </div>
			    <button type="submit" class="btn btn-primary" name="add"><span id="b1">Add</span></button>
            </form> 
		</a>
		<table class="responstable" >
			<tr style="border:5px solid #024457;">
				<th style="width: auto">S.no</th>
				<th ><span>Image</span></th>
				<th style="width: auto">Update</th>
				<th style="width: auto">Delete</th>
			</tr>
			<?php 
				include 'include/connection.php';
				$checkCategoryImage = "SELECT * FROM category_image WHERE category_id = '".$_POST['category_id']."'";
				$resultCategoryImage = mysqli_query($conn, $checkCategoryImage);
				$total_rows = mysqli_num_rows($resultCategoryImage);
				$no = 1;
				while($row = $resultCategoryImage -> fetch_assoc()){
				?>
			<tr>
				<td><?php echo $no; $no++; ?></td>
				<form method="post" enctype="multipart/form-data">
					<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
					<input type="hidden" name="image" value="<?php echo $row['image']; ?>">
					<td><img src="assets/images/category/<?php echo $row['image']; ?>" width="100px"><input name="UploadImage" type="file" value="Upload Image" accept='image/*'></td>
    				<td><button type="submit" class="btn btn-primary" name="update"><span id="b1">Update</span></button></td>
    				<td><button type="submit" class="btn btn-danger" name="delete" <?php if($total_rows == 1){ echo "disabled";} ?> ><span id="b1">Delete</span></button></td>
				</form>
			</tr>
			<?php 
				}
				?>
		</table>
	</div>
</div>
</div>
<?php include "include/footer.php"?>
<?php
	if(isset($_POST['update'])){ //check if form was submitted
	
       $id=$_POST['id'];
	
	   $rand = rand(10000, 99999);
	   
	   $file_name = $rand.$_FILES['UploadImage']['name'];
	   $file_tem_loc = $_FILES['UploadImage']['tmp_name'];
	   $file_store = "assets/images/category/".$file_name;
	   $file_upload = false;
	
	   if(move_uploaded_file($file_tem_loc, $file_store)){
	       $file_upload = true;
	   }
	   else{
	       $file_upload = false;
	   }
	   
	   if ($file_upload) {
	       $checkQuery = "UPDATE category_image SET image = '".$file_name."' WHERE id='".$id."'";
	       if (mysqli_query($conn, $checkQuery)) {
	           $image = "assets/images/category/".$_POST['image'];
	           unlink($image);
	           echo "<script>window.location.href='view_category.php';</script>";
	       }
	       else{
	           echo "<script>window.alert('Please Re Upload Image');window.location.href='view_category.php';</script>";
	       }
	   }
	   else{
	       echo "<script>window.location.href='view_category.php';</script>";
	   }
	 }
	 
	 if(isset($_POST['add'])){ //check if form was submitted
	
       $category_id=$_POST['category_id'];
	
	   $rand = rand(10000, 99999);
	   
	   $file_name = preg_replace('/\s+/', '_', trim(addslashes($rand.$_FILES['UploadImage']['name'])));
	   $file_tem_loc = $_FILES['UploadImage']['tmp_name'];
	   $file_store = "assets/images/category/".$file_name;
	   $file_upload = false;
	
	   if(move_uploaded_file($file_tem_loc, $file_store)){
	       $file_upload = true;
	   }
	   else{
	       $file_upload = false;
	   }
	   
	   if ($file_upload) {
	       $checkQuery = "INSERT INTO category_image (category_id, image) VALUES('".$category_id."', '".$file_name."')";
	       if (mysqli_query($conn, $checkQuery)) {
	           echo "<script>window.location.href='view_category.php';</script>";
	       }
	       else{
	           echo "<script>window.alert('Please Re Upload Image');window.location.href='view_category.php';</script>";
	       }
	   }else{
	       echo "<script>window.location.href='view_category.php';</script>";
	   }
	 }
	
	if(isset($_POST['delete'])){ //check if form was submitted
	
	    $id=$_POST['id'];
		$checkQuery = "DELETE FROM category_image WHERE id='".$id."'";
		mysqli_query($conn, $checkQuery);  
		$image = "assets/images/category/".$_POST['image'];
        unlink($image);     
	    echo "<script>window.location.href='view_category.php';</script>";
	}
	?>