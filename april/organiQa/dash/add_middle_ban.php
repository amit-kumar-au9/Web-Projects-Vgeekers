<?php include "include/header.php";?>
<?php include "conn.php";?>
  <div id="page-wrapper" style="background: white;scroll-behavior: smooth;">
    <div class="main-page" style="background: white;">
      <center><h2 class="title1" style="color: red;">Add Middle Banner</h2></center>
      <div class="forms">
        <form style="margin: 10px" method="post" enctype="multipart/form-data">
          <div class="form-group" style="width: 50%">
            <label for="exampleInputEmail1">Banner Image</label>
            <input type="file" class="form-control" name="UploadImage" required style="background:lightgrey">
          </div>
            <button type="submit" class="btn btn-primary" style="margin: 10px;" name="addProduct">ADD</button>
            <a href="#view"><button type="button" class="btn btn-primary" style="margin: 10px;" id="b">VIEW ALL</button></a>
        </form> 
      </div>
      <center><h2 class="title1" id="view" style="color: red;">View Middle Banner</h2></center>
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
              $sql="SELECT * FROM banner where id=2";
              $result=$con->query($sql);
                if($result->num_rows > 0)
                {
                  while($row=$result->fetch_assoc())
                  {    
                    $img=$row["image"];
                    echo"<center><td><img src='../asset/images/banner/".$img."' style='width:100px;height:100px;'></td>";               
                  }                
                }
            ?>
            <td>
            	<form method="post" enctype="multipart/form-data">
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
    $file_store = "../asset/images/banner/".$file_name;
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
        echo "<script>alert('Banner already added kindly update the banner.')</script>";
      }
      else
      {
        $checkQuery = "INSERT into  banner(image) VALUES('".$file_name."')";
          if (mysqli_query($con, $checkQuery))
          {
            echo "<script>window.alert('Middle Banner Added');window.location.href='add_middle_ban.php';</script>";
          }
          else
          {
            echo "<script>window.alert('Please Re Upload Image');window.location.href='add_middle_ban.php';</script>";
          }
      }
    }

    else
    {
      echo "<script>window.alert('Please Retry');window.location.href='add_middle_ban.php';</script>";
    }
  }


  if(isset($_POST['updateProduct']))//check if form was submitted
  { 
    include 'conn.php';
    $rand = rand(10000, 99999);
    $file_name = $rand.$_FILES['UploadImage']['name'];
    $file_tem_loc = $_FILES['UploadImage']['tmp_name'];
    $file_store = "../asset/images/banner/".$file_name;
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
      unlink("../asset/images/banner/".$img);
      $checkQuery = "UPDATE banner SET image = '".$file_name."' WHERE id = 2";
        if (mysqli_query($con, $checkQuery)) 
        {
          echo "<script>window.alert('Middle Banner updated');window.location.href='add_middle_ban.php';</script>";
        }

        else
        {
          echo "<script>window.alert('Please Re Upload Image');window.location.href='add_middle_ban.php';</script>";
        }

    }
    else
    {
      echo "<script>window.alert('Please Retry');window.location.href='add_middle_ban.php';</script>";
    }
  }
?>

