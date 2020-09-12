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
            <h2 class="title1" style="color: green;">Category List</h2>
            <a href="add_category.php"><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal2"><span id="b1">ADD CATEGORY</span></button></td> 
        </center>
        </a>
        <table class="responstable">
            <tr style="border:5px solid #024457;">
                <th style="width: auto">S.no</th>
                <th style="width: auto">Category ID</th>
                <th style="width: 30%">Category Name</th>
                <th style="width: 30%">Logo</th>
                <th style="width:auto">Show (Only 2)</th>
                <th style="width: auto">Update</th>
                <th style="width: auto">Images</th>
                <th style="width: auto">Edit</th>
                <th style="width: auto">Delete</th>
            </tr>
            <?php 
                include 'include/connection.php';
                $checkCategory = "SELECT * FROM category";
                $resultCategory = mysqli_query($conn, $checkCategory);
                $no = 1;
                while($row = $resultCategory -> fetch_assoc()){
                    $id = $row['id'];
                ?>
            <tr>
                <td>
                    <?php echo $no; $no++; ?>
                </td>
                <td><?php echo $row['id']; ?></td>
                <form method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    <input type="hidden" name="logo" value="<?php echo $row['logo']; ?>">
                    <td><?php echo $row['category']; ?></td>
                    <td><img src="assets/images/category/<?php echo $row['logo']; ?>" width="100px"><input name="UploadImage" type="file" value="Upload Image" accept='image/*'></td>
                    <td>
                        <label class="switch">
                        <input type="checkbox" name="is_show" <?php if($row['is_show'] == '1'){ echo "checked";} ?> onclick="change_is_show(<?php echo $id; ?>)">
                        <span class="slider round"></span>
                        </label>
                    </td>
                    <td><button type="submit" class="btn btn-primary" name="update"><span id="b1">Update</span></button></td>
                </form>
                <td>
                    <form method="post" action="view_category_images.php">
                        <input type="hidden" name="category_id" value="<?php echo $row['id']; ?>">
                        <button type="submit" class="btn btn-primary"><span id="b1">View</span></button>
                    </form>
                </td>
                <td>
                    <form method="post" action="view_category_details.php">
                        <input type="hidden" name="category_id" value="<?php echo $row['id']; ?>">
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
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Accepting</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Are you Sure?
            </div>
            <div class="modal-footer">
                <form class="categoryShow">
                    <input type="hidden" id="is_show" name="category_id" value="">
                    <button type="submit" class="btn btn-primary">Yes</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="no_change()">No</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    function change_is_show(category_id){
        $("#exampleModal1").modal('show');
        $('#is_show').val(category_id);
    }
    function no_change(){
       location.reload(true);
    }
    $('form.categoryShow').submit(function(e){
        e.preventDefault();
        var formdata = $(this).serialize();
        $.ajax({
            'type' : 'post',
            'url' : 'update_category_status.php',
            'data' : formdata,
            success : function(response){
            	location.reload(true);
            }
        });
    });
</script>
<?php include "include/footer.php"?>
<?php
    if(isset($_POST['update'])){ //check if form was submitted
    
        $id=$_POST['id'];
    
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
           $checkQuery = "UPDATE category SET logo = '".$file_name."' WHERE id='".$id."'";
    
           if (mysqli_query($conn, $checkQuery)) {
               $image = "assets/images/category/".$_POST['image'];
               unlink($image);
               echo "<script>window.location.href='view_category.php';</script>";
           }
    
           else{
               echo "<script>window.alert('Please Re Upload Image');window.location.href='view_category.php';</script>";
           }
    
       }
     }
    
    if(isset($_POST['delete'])){ //check if form was submitted
    
        $id=$_POST['id'];
    	$checkQuery = "DELETE FROM category WHERE id='".$id."'";
    	mysqli_query($conn, $checkQuery);
    	$checkQuery = "DELETE FROM sub_category WHERE category_id='".$id."'";
    	mysqli_query($conn, $checkQuery);
    	$checkQuery = "DELETE FROM services_subcategory WHERE category_id='".$id."'";
    	mysqli_query($conn, $checkQuery);
    	$image = "assets/images/sub_category/".$_POST['image'];
        unlink($image);
    	 
           echo "<script>window.location.href='view_category.php';</script>";
       }
    ?>