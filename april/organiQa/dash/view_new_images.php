<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link href="asset/css/bootstrap.css" rel='stylesheet' type='text/css' />
<body>

</body>
</html>
<?php 
  include "conn.php";
  error_reporting(0);
  $sql="SELECT * FROM product_display";
  $result=$con->query($sql);
  $row = $result -> fetch_assoc();
  $product_id = $row['id'];
 


?>

  <div id="page-wrapper" style="background: white;scroll-behavior: smooth;">
    <div class="main-page" style="background: white;">
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
              $sql="SELECT * FROM product_images where product_id='".$product_id."'";
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
                      <button class='btn btn-success' style='margin: 10px' name='updateProduct'>Update</button>
                        </form><button class='btn btn-danger' style='margin: 10px'>DELETE</button></td>";          
                  }                
                }
            ?>
            
          </tr>
        </tbody>  
      </table>
    </div>
  </div>

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
      
        $checkQuery = "INSERT into  product_images(image,product_id) VALUES('".$file_name."','".$last_id."')";
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


  if(isset($_POST['updateProduct']))//check if form was submitted
  { 
    include 'conn.php';
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
      $checkQuery = "UPDATE product_images SET image = '".$file_name."' WHERE id = '$last_id'";
        if (mysqli_query($con, $checkQuery)) 
        {
          echo "<script>window.alert('Head Banner updated');window.location.href='add_image.php';</script>";
        }

        else
        {
          echo "<script>window.alert('Please Re Upload Image');window.location.href='add_image.php';</script>";
        }

    }
    else
    {
      echo "<script>window.alert('Please Retry');window.location.href='add_image.php';</script>";
    }
  }
?>

