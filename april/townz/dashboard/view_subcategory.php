<?php include "include/header.php";?>
<style>
    .switch {
    position: relative;
    display: inline-block;
    width: 60px;
    height: 34px;
    }
    .switch input { 
    opacity: 0;
    width: 0;
    height: 0;
    }
    .slider {
    position: absolute;
    cursor: pointer;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: #ccc;
    -webkit-transition: .4s;
    transition: .4s;
    }
    .slider:before {
    position: absolute;
    content: "";
    height: 26px;
    width: 26px;
    left: 4px;
    bottom: 4px;
    background-color: white;
    -webkit-transition: .4s;
    transition: .4s;
    }
    input:checked + .slider {
    background-color: #2196F3;
    }
    input:focus + .slider {
    box-shadow: 0 0 1px #2196F3;
    }
    input:checked + .slider:before {
    -webkit-transform: translateX(26px);
    -ms-transform: translateX(26px);
    transform: translateX(26px);
    }
    /* Rounded sliders */
    .slider.round {
    border-radius: 34px;
    }
    .slider.round:before {
    border-radius: 50%;
    }
</style>
<div id="page-wrapper">
    <div class="main-page">
        <br>
        <center>
            <h2 class="title1" style="color: green;">Sub Category List</h2>
            <a href="add_subcategory.php"><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal2"><span id="b1">ADD SUB CATEGORY</span></button></td> 
        </center>
        </a>
        <table class="responstable">
            <tr style="border:5px solid #024457;">
                <th style="width: auto">S.no</th>
                <th style="width: auto">Category ID</th>
                <th style="width: 30%">Category Name</th>
                <th style="width: auto">Sub Category ID</th>
                <th style="width: 30%">Sub Category Name</th>
                <th style="width: 30%">Logo</th>
                <th style="width: auto">Update</th>
                <th style="width: auto">Edit</th>
                <th style="width: auto">Delete</th>
            </tr>
            <?php 
                include 'include/connection.php';
                $checkCategory = "SELECT sub_category.id, category_id, category, sub_category, sub_category.logo as logo FROM sub_category JOIN category ON sub_category.category_id = category.id ORDER BY category.id DESC";
                $resultCategory = mysqli_query($conn, $checkCategory);
                $no = 1;
                while($row = $resultCategory -> fetch_assoc()){
                    $id = $row['id'];
                ?>
            <tr>
                <td>
                    <?php echo $no; $no++; ?>
                </td>
                <td><?php echo $row['category_id']; ?></td>
                <td><?php echo $row['category']; ?></td>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['sub_category']; ?></td>
                <form method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    <input type="hidden" name="logo" value="<?php echo $row['logo']; ?>">
                    <td><img src="assets/images/sub_category/<?php echo $row['logo']; ?>" width="100px"><input name="UploadImage" type="file" value="Upload Image" accept='image/*'></td>
                    <td><button type="submit" class="btn btn-primary" name="update"><span id="b1">Update</span></button></td>
                </form>
                <td>
                    <form method="post" action="view_subcategory_details.php">
                        <input type="hidden" name="subcategory_id" value="<?php echo $row['id']; ?>">
                        <button type="submit" class="btn btn-primary"><span id="b1">Edit</span></button>
                    </form>
                </td>
                <form method="post">
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    <input type="hidden" name="logo" value="<?php echo $row['logo']; ?>">
                    <td><button type="submit" class="btn btn-danger" name="delete"><span id="b1">Delete</span></button></td>
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
       
       $file_name = preg_replace('/\s+/', '_', trim(addslashes($rand.$_FILES['UploadImage']['name'])));
       $file_tem_loc = $_FILES['UploadImage']['tmp_name'];
       $file_store = "assets/images/sub_category/".$file_name;
       $file_upload = false;
    
       if(move_uploaded_file($file_tem_loc, $file_store)){
           $file_upload = true;
       }
       else{
           $file_upload = false;
       }
    
    
       if ($file_upload) {
           $checkQuery = "UPDATE sub_category SET logo = '".$file_name."' WHERE id='".$id."'";
    
           if (mysqli_query($conn, $checkQuery)) {
               $image = "assets/images/sub_category/".$_POST['image'];
               unlink($image);
               echo "<script>window.location.href='view_subcategory.php';</script>";
           }
    
           else{
               echo "<script>window.alert('Please Re Upload Image');window.location.href='view_subcategory.php';</script>";
           }
    
       }
     }
    
    if(isset($_POST['delete'])){ //check if form was submitted
    
        $id=$_POST['id'];
    	$checkQuery = "DELETE FROM sub_category WHERE id='".$id."'";
    	mysqli_query($conn, $checkQuery);
    	$checkQuery = "DELETE FROM services_subcategory WHERE sub_category_id='".$id."'";
    	mysqli_query($conn, $checkQuery);
    	$image = "assets/images/sub_category/".$_POST['image'];
        unlink($image);         
           echo "<script>window.location.href='view_subcategory.php';</script>";
       }
    ?>