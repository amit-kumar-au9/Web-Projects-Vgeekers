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
            <h2 class="title1" style="color: green;">Services List</h2>
            <a href="add_services.php"><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal2"><span id="b1">ADD SERVICE</span></button></td> 
        </center>
        </a>
        <table class="responstable">
            <tr style="border:5px solid #024457;">
                <th style="width: auto">S.no</th>
                <th style="width: auto">Sub Category ID</th>
                <th style="width: auto">Sub Category Name</th>
                <th style="width: 50%">Services Name</th>
                <th style="width: 10%">Price</th>
                <th style="width: 50%">Logo</th>
                <th style="width: auto">Update</th>
                <th style="width: auto">Delete</th>
            </tr>
            <?php 
                include 'include/connection.php';
                $checkCategory = "SELECT sub_category, sub_category_id, services_subcategory.price, name, services_subcategory.logo as logo, services_subcategory.id as id FROM services_subcategory JOIN sub_category ON services_subcategory.sub_category_id = sub_category.id ORDER BY sub_category.id DESC";
                $resultCategory = mysqli_query($conn, $checkCategory);
                $no = 1;
                while($row = $resultCategory -> fetch_assoc()){
                    $id = $row['id'];
                ?>
            <tr>
                <td>
                    <?php echo $no; $no++; ?>
                </td>
                <td><?php echo $row['sub_category_id']; ?></td>
                <td><?php echo $row['sub_category']; ?></td>
                <form method="post" enctype="multipart/form-data">
                    <td><input value="<?php echo $row['name']; ?>" name="name" type="text"></td>
                    <td><input value="<?php echo $row['price']; ?>" name="price" type="number" style="width:80px"></td>
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    <input type="hidden" name="logo" value="<?php echo $row['logo']; ?>">
                    <td><img src="assets/images/services/<?php echo $row['logo']; ?>" width="100px"><input name="UploadImage" type="file" value="Upload Image" accept='image/*'></td>
                    <td><button type="submit" class="btn btn-primary" name="update"><span id="b1">Update</span></button></td>
                </form>
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
        $name=$_POST['name'];
        $price=$_POST['price'];
    
       $rand = rand(10000, 99999);
       
       $file_name = preg_replace('/\s+/', '_', trim(addslashes($rand.$_FILES['UploadImage']['name'])));
       $file_tem_loc = $_FILES['UploadImage']['tmp_name'];
       $file_store = "assets/images/services/".$file_name;
       $file_upload = false;
    
       if(move_uploaded_file($file_tem_loc, $file_store)){
           $file_upload = true;
       }
       else{
           $file_upload = false;
       }
    
    
       if ($file_upload) {
           $checkQuery = "UPDATE services_subcategory SET logo = '".$file_name."', name = '".$name."', price = '".$price."' WHERE id='".$id."'";
    
           if (mysqli_query($conn, $checkQuery)) {
               $image = "assets/images/services/".$_POST['logo'];
               unlink($image);
               echo "<script>window.location.href='view_services.php';</script>";
           }
    
           else{
               echo "<script>window.alert('Please Re Upload Image');window.location.href='view_services.php';</script>";
           }
    
       }
       else{
           $checkQuery = "UPDATE services_subcategory SET name = '".$name."', price = '".$price."' WHERE id='".$id."'";
    
           if (mysqli_query($conn, $checkQuery)) {
               $image = "assets/images/services/".$_POST['logo'];
               unlink($image);
               echo "<script>window.location.href='view_services.php';</script>";
           }
       }
     }
    
    if(isset($_POST['delete'])){ //check if form was submitted
    
        $id=$_POST['id'];
    	$checkQuery = "DELETE FROM services_subcategory WHERE id='".$id."'";
    	mysqli_query($conn, $checkQuery);
    	$image = "assets/images/services/".$_POST['logo'];
        unlink($image);
    	 
           echo "<script>window.location.href='view_services.php';</script>";
       }
    ?>