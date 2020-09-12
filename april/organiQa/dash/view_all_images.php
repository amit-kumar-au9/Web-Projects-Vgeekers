<?php include "include/header.php";?>
<?php include "conn.php";
error_reporting(0);
  $id=$_POST['id'];
 
?>

  <div id="page-wrapper" style="background: white;scroll-behavior: smooth;">
    <div class="main-page" style="background: white;">
      <form style="margin: 10px" method="post" enctype="multipart/form-data">
          <div class="form-group" style="width: 50%">
            <label for="exampleInputEmail1">Product Image</label>
            <input type="file" class="form-control" name="UploadImage"  style="background:lightgrey">
          </div>
            <button type="submit" class="btn btn-primary" style="margin: 10px;" name="addProduct"><?php echo $id?></button>
            <a href="#view"><button type="button" class="btn btn-primary" style="margin: 10px;" id="b">VIEW ALL</button></a>
        </form> 
      <center><h2 class="title1" id="view" style="color: red;">Show Images</h2></center>
      <table class="table" style="border:1px solid black">
        <thead class="thead-dark">
          <tr>
            <th>S.No</th>
            <th scope="col">Images</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
        
            <?php
              $sql="SELECT * FROM product_images where product_id= $id";
              $result=$con->query($sql);
                if($result->num_rows > 0)
                {
                  $no = 0;
                  while($row=$result->fetch_assoc())
                  {    
                     $no++; 
                    $img=$row["image"];
                    echo"  <tr><center> <td>
                        ".$no."
                      </td><td><img src='../asset/images/products/".$img."' style='width:100px;height:100px;'>
                        
                          <input type='file' class='form-control' style='background:lightyellow;width:300px' name='UploadImage'>
                        </td>
                      <td><form method='post' enctype='multipart/form-data'>
                      <input type='hidden' name='image_id' value=".$row["id"].">
                        
                      <button class='btn btn-success' style='margin: 10px' name='updateProduct'>Update</button>
                        </form>
                          <form method='post'>
                          <input type='hidden' name='image_id' value=".$row["id"].">
                        <button class='btn btn-danger' style='margin: 10px'  name='deleteProduct'>DELETE</button></td>";           
                  }                
                }
            ?>
            
          </tr>
        </tbody>  
      </table>
    </div>
  </div>
<?php include 'header/header.php'?>;
<?php 

    if(isset($_POST['addProduct']))//check if form was submitted
  { 
    $rand = rand(10000, 99999);
    $file_name = $rand.$_FILES['UploadImage']['name'];
    $file_tem_loc = $_FILES['UploadImage']['tmp_name'];
    $file_store = "../asset/images/products/".$file_name;
    $file_upload = false;

    if(move_uploaded_file($file_tem_loc, $file_store))
    {
      $file_upload = true;
    }
    else
    {
      $file_upload = false;
    }


    if ($file_upload) 
    {
      
        $checkQuery = "INSERT into  product_images(image) values(".$file_name."') where id='$id'";
          if (mysqli_query($con, $checkQuery))
          {
            echo "<script>window.alert('Head Banner Added');";
          }
          else
          {
            echo "<script>window.alert('Please Re Upload Image');</script>";
          }
        
    }

    else
    {
      echo "<script>window.alert('Please Retry')</script>";
    }
  }

  if(isset($_POST['deleteProduct']))//check if form was submitted
  { 
    
   $id=$_POST['image_id'];
        $checkQuery = "DELETE from  product_images where id=$id";
          if (mysqli_query($con, $checkQuery))
          {
            echo "<script>alert('Image Deleted');window.location.href='view_all_images.php'";
          }
          else
          {
            echo "<script>alert('Could Not be deleted');window.location.href='view_all_images.php';</script>";
          }   
    }

    
  


  if(isset($_POST['updateProduct']))//check if form was submitted
  { 
    include 'conn.php';
    $id=$_POST['image_id'];
    $rand = rand(10000, 99999);
    $file_name = $rand.$_FILES['UploadImage']['name'];
    $file_tem_loc = $_FILES['UploadImage']['tmp_name'];
    $file_store = "../asset/images/products/".$file_name;
    $file_upload = false;
    
    if(move_uploaded_file($file_tem_loc, $file_store))
    {
        $file_upload = true;
    }
    else
    {
        $file_upload = false;
    }
    if ($file_upload) 
    {
      $image = "../asset/images/".$_POST['image'];
      unlink("../asset/images/products/".$image);
      $checkQuery = "UPDATE product_images SET image = '".$file_name."' WHERE id = '$id'";
        if (mysqli_query($con, $checkQuery)) 
        {
          echo "<script>window.alert('Head Banner updated');window.location.href='view_all_images.php';</script>";
        }

        else
        {
          echo "<script>window.alert('Please Re Upload Image');window.location.href='view_all_images.php';</script>";
        }

    }
    else
    {
      echo "<script>window.alert('Please Retry');window.location.href='view_all_images.php';</script>";
    }
  }
?>

