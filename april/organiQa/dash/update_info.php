<?php include "include/header.php";?>
	<div id="page-wrapper" style="background: white;">
		<div class="main-page" style="background: white;">
			<center><h2 class="title1" style="color: red;">Add About</h2></center>
			<div class="forms">
				<?php 
		            include 'conn.php';
		            $checkUsers = "SELECT * FROM detail WHERE id = 1;";
		            if(mysqli_num_rows($resultUsers = mysqli_query($con, $checkUsers))>0){
		              $row = $resultUsers -> fetch_assoc();
		          ?>
				<form style="margin: 10px" method="post" enctype="multipart/form-data">
					<div class="form-group" style="width: 80%;">
			            <label for="exampleFormControlTextarea1" style="color: red">Heading</label>
			            <input class="form-control"  rows="8" placeholder="heading" name="heading" type="text" value="<?php echo $row['heading']; ?>"  required></input>
		          	</div>
					<div class="form-group" style="width: 80%;">
						<label for="exampleFormControlTextarea1" style="color: red">About Main Content</label>
						<textarea class="form-control" id="TypeHere"  required rows="4" placeholder="About description" name="content"><?php echo $row['content']; ?></textarea>
					</div>
		         	<div class="form-group" style="width: 80%;">
		            	<label for="exampleFormControlTextarea1" style="color: red">About More Content</label>
		            	<textarea class="form-control" id="TypeHere1" rows="4"  required placeholder="About more description" name="more_content"><?php echo $row['more_content']; ?></textarea>
			        </div>
			        <div class="form-group" style="width: 80%;">
			            <label for="exampleFormControlTextarea1" style="color: red">Video Link</label>
			            <input class="form-control"  rows="8"  required placeholder="Video Link" name="video_link" type="text" value="<?php echo $row['video_link']; ?>"></input>
		          	</div>
		           	<div class="form-group col-md-6" style="width: 50%">
                		<label for="exampleInputEmail1" style="color: red">About Image</label>
                		<img src="../asset/images/about/<?php echo $row['image']; ?>" style="width:200px">
                		<input class="btn btn-success" name="UploadImage" type="file" value="Upload Image" accept='image/*'  required>
        		    </div>
		          	<button type="submit" class="btn btn-primary" style="margin: 10px;" name="updateInfo">Update</button>
		        </form>	
		        <?php 
		        	}
		        ?>
			</div>
		</div>
	</div>
    <br><br><br>
<?php include "include/footer.php";?>

<?php 
include 'conn.php';
// Update About

if(isset($_POST['updateInfo'])){ //check if form was submitted

    $heading = addslashes($_POST['heading']);
    $content = addslashes($_POST['content']);
    $more_content = addslashes($_POST['more_content']);
    $video_link = addslashes($_POST['video_link']);

    $rand = rand(10000, 99999);
    
    $file_name = $rand.$_FILES['UploadImage']['name'];
    $file_tem_loc = $_FILES['UploadImage']['tmp_name'];
    $file_store = "../asset/images/about/".$file_name;
    $file_upload = false;

    if(move_uploaded_file($file_tem_loc, $file_store)){
        $file_upload = true;
    }
    else{
        $file_upload = false;
    }


    if ($file_upload) {
        $checkQuery = "UPDATE detail SET heading = '".$heading."', content = '".$content."', more_content = '".$more_content."',video_link = '".$video_link."', image = '".$file_name."' WHERE id = 1 ";  

        if (mysqli_query($con, $checkQuery)) {
            $image = "../asset/images/about/".$_POST['image'];
            unlink($image);
            echo "<script>window.alert('About us Information Changed');window.location.href='update_info.php';</script>";
        }

        else{
            echo "<script>window.alert('Please Re Upload Image');window.location.href='update_info.php';</script>";
        }

    }

    else{
        $checkQuery = "UPDATE detail SET heading = '".$heading."', content = '".$content."', video_link = '".$video_link."',more_content = '".$more_content."' WHERE id = 1 ";  

        if (mysqli_query($con, $checkQuery)) {
            echo "<script>window.alert('About us Information Changed');window.location.href='update_info.php';</script>";
        }

        else{
            echo "<script>window.alert('Please Retry');window.location.href='update_info.php';</script>";
        }
    }
  }
?>