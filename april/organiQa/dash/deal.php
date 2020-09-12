<?php include "include/header.php";?>
<?php include "conn.php";?>
  <div id="page-wrapper" style="background: white;scroll-behavior: smooth;">
    <div class="main-page" style="background: white;">
      <center><h2 class="title1" style="color: red;">Deal Of the Day</h2></center>
      <div class="forms">
        <form style="margin: 10px" method="post" enctype="multipart/form-data">
          <center><label for="exampleInputEmail1">Select product</label></center>
          <div class="form-group" style="display: inline-block;width: 80%;">
            <?php
              $sql="SELECT * FROM product_display";
              $result=$con->query($sql);
                if($result->num_rows > 0)
                {
                  while($row=$result->fetch_assoc())
                  {    
                    echo"<div class='theme' style='display: inline-block;margin: 10px;'><input type='radio' name='theme' value='"   .$row['Product_code']."' id='theme'  required>
                          <div class='card' style='width: 12rem;display: inline-block;'>
                            <img class='card-img-top' src='../asset/images/products/".$row['image']."' alt='Card image cap' name='theme' style='width:11.4rem'>
                            <div class='card-body'>
                              <h5 class='card-title'>".$row['Product_name']."</h5>
                            </div>
                          </div>";               
                  }                
                }
            ?>
          </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Special Price</label>
              <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Enter Special Price" name="disPrice"  required>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">End Time</label>
              <input type="datetime-local" class="form-control" id="exampleInputPassword1"  name="EndTime"  required>
            </div>
            <button type="submit" class="btn btn-primary" style="margin: 10px;" name="addProduct">Update</button>
        </form> 
      </div>
      <center><h2 class="title1" id="view" style="color: red;">Current Deal of the day</h2></center>
      <table class="table" style="border:1px solid black">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Images</th>
            <th scope="col">Name</th>
            <th scope="col">Special Price</th>
            <th scope="col">Time Left</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <?php
              $sql="SELECT * FROM deal where id=1";
              $result=$con->query($sql);
                if($result->num_rows > 0)
                {
                  while($row=$result->fetch_assoc())
                  {    
                    echo"<td>
                            <img src='../asset/images/products/".$row["image"]."'style='width:100px;height:100px;'>
                          </td>
                          <td>".$row['name']."</td>
                          <td>".$row['discount_price']."</td>
                          <td>".$row['timer']."</td>
                          <td>
                            <form method='post'>
                              <button class='btn btn-danger' disabled>Delete</button>
                            </form>
                          </td>";                
                  }                
                }
            ?>
          </tr>
        </tbody>  
      </table>
    </div>
  </div>
<?php include "include/footer.php";?>
<?php 
  if(isset($_POST['addProduct']))//check if form was submitted
  { 
    $code=$_POST['theme'];
    $end=$_POST['EndTime'];
    $dis_price=$_POST['disPrice'];
    $query1="SELECT * FROM product_display WHERE Product_code='$code'";
    $data1 =mysqli_query($con,$query1);
    $result1=mysqli_fetch_assoc($data1);
    $photo= $result1['image'];
    $name=$result1['Product_name'];
    $original_price=$result1['Product_price'];

    if($name!="" && $photo!="" && $dis_price!="")
    {

    $sql="UPDATE deal SET name='".$name."', image='".$photo."' , discount_price='".$dis_price."' , original_price='".$original_price."' ,timer='".$end."' where id= 1";

    $results=$con->query($sql);
    echo "<script>window.alert('Deal updated');window.location.href='deal.php';</script>";
    }
    else
    {
      
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
      $checkQuery = "UPDATE banner SET image = '".$file_name."' WHERE id = 3";
        if (mysqli_query($con, $checkQuery)) 
        {
          echo "<script>window.alert('Middle Banner updated');window.location.href='add_bot_banner.php';</script>";
        }

        else
        {
          echo "<script>window.alert('Please Re Upload Image');window.location.href='add_bot_banner.php';</script>";
        }

    }
    else
    {
      echo "<script>window.alert('Please Retry');window.location.href='add_bot_banner.php';</script>";
    }
  }
?>

