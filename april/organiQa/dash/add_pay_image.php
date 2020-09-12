<?php include "include/header.php";?>
<?php include "conn.php";?>
  <div id="page-wrapper" style="background: white;scroll-behavior: smooth;">
    <div class="main-page" style="background: white;">
      <center><h2 class="title1" style="color: red;">Add Payment Gateway Image</h2></center>
      <div class="forms">
        <form style="margin: 10px" method="post" enctype="multipart/form-data">
          <div class="form-group" style="width: 50%">
            <label for="exampleInputEmail1">Image</label>
            <input type="file" class="form-control" name="UploadImage" required style="background:lightgrey">
          </div>
            <button type="submit" class="btn btn-primary" style="margin: 10px;" name="addProduct">ADD</button>
            <a href="#view"><button type="button" class="btn btn-primary" style="margin: 10px;" id="b">VIEW ALL</button></a>
        </form> 
      </div>
      <center><h2 class="title1" id="view" style="color: red;">View Payment Gateway Image</h2></center>
      <table class="table" style="border:1px solid black">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Images</th>
            <th scope="col">Update</th>
            <th scope="col">Delete</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <?php
              $sql="SELECT * FROM detail where id=5";
              $result=$con->query($sql);
                if($result->num_rows > 0)
                {
                  while($row=$result->fetch_assoc())
                  {    
                    $img=$row["image"];
                    echo"<center><td><img src='../asset/images/".$img."' style='width:100px;height:100px;'></td>";       
                  }                
                }
            ?>
            <td>
            	<form method="post" enctype="multipart/form-data">
                  <input type="hidden" name="image" value="<?php echo $row['image']; ?>">
                	<input type="file" class="form-control" style="background:lightyellow" name="UploadImage"><button class="btn btn-success" style="margin: 10px" name="updateProduct">Update</button>
              	</form>
            </td>
            <td><button class="btn btn-danger" style="margin: 10px" disabled>DELETE</button></td>
          </tr>
        </tbody>  
      </table>
    </div>
  </div>
<?php include "include/footer.php";?>
<?php 
  if(isset($_POST['addProduct']))//check if form was submitted
  { 
    include 'conn.php';
    $rand = rand(10000, 99999);
    $file_name = $rand.$_FILES['UploadImage']['name'];
    $file_tem_loc = $_FILES['UploadImage']['tmp_name'];
    $file_store = "../asset/images/".$file_name;
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
      if($result->num_rows > 0)
      {
        echo "<script>alert('Image already added kindly update the image.')</script>";
      }
      else
      {
        $checkQuery = "INSERT into  detail(image) VALUES('".$file_name."') where id=5";
          if (mysqli_query($con, $checkQuery))
          {
            echo "<script>window.location.href='add_pay_image.php';</script>";
          }
          else
          {
            echo "<script>window.location.href='add_pay_image.php';</script>";
          }
      }
    }

    else
    {
      echo "<script>window.location.href='add_pay_image.php';</script>";
    }
  }


  if(isset($_POST['updateProduct']))//check if form was submitted
  { 
    include 'conn.php';
    $rand = rand(10000, 99999);
    $file_name = $rand.$_FILES['UploadImage']['name'];
    $file_tem_loc = $_FILES['UploadImage']['tmp_name'];
    $file_store = "../asset/images/".$file_name;
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
      unlink("../asset/images/".$image);
      $checkQuery = "UPDATE detail SET image = '".$file_name."' WHERE id = 5";
        if (mysqli_query($con, $checkQuery)) 
        {
          echo "<script>window.location.href='add_pay_image.php';</script>";
        }

        else
        {
          echo "<script>window.location.href='add_pay_image.php';</script>";
        }

    }
    else
    {
      echo "<scriptwindow.location.href='add_pay_image.php';</script>";
    }
  }
?>

