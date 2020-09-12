<?php include "include/header.php";?>
<?php include "conn.php"?>
<div id="page-wrapper" style="background: white">
  <div class="main-page" style="background: white">
    <center><h2 class="title1" style="color: red;">All Products</h2></center>
    <center>
      <table class="table" style="border:1px solid black">
        <thead class="thead-dark">
          <tr>
            <th scope="col">S.No</th>
            <th scope="col">Product Name</th>
            <th scope="col">product Code</th>
            <th scope="col">Product Cost</th>
            <th scope="col">Product Price</th>
            <th scope="col">product Discount</th>
            <th scope="col">Image</th>
            <th scope="col">Product Heading</th>
            <th scope="col">Product Description</th>
            <th scope="col">Action</th>
          </tr>
        <?php
            $sql="SELECT * FROM product_display";
            $result=$con->query($sql);
            if($result->num_rows > 0){
                $no = 0;
                while($row=$result->fetch_assoc()){ 
                    $no++;  
        ?> 
                <tr>
                    <form method="post" enctype="multipart/form-data">
                        <td><?php echo $no; ?></td>
                        <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                        <input type="hidden" name="image" value="<?php echo $row['image']; ?>">
                        <td><input type="text" name="Product_name" value="<?php echo $row["Product_name"]; ?>"  required></td>
                        <td><input type="number" name="Product_code" value="<?php echo $row["Product_code"]; ?>"  required></td>
                        <td><input type="number" name="Product_cost" value="<?php echo $row["Product_cost"]; ?>"  required></td>
                        <td><input type="number" name="Product_price" value="<?php echo $row["Product_price"]; ?>" required></td>
                        <td><input type="number" name="discount" value="<?php echo $row["discount"]; ?>"  required></td>
                        <td>
                            <img src="../asset/images/products/<?php echo $row['image']; ?>" width="100" height="100"  >
                            <input name="UploadImage" type="file" value="Upload Image" accept='image/*'>
                        </td>
                        <td><input type="text" name="heading" value="<?php echo $row["heading"]; ?>"  required></td>
                        <td><input type="text" name="description" value="<?php echo $row["description"]; ?>"  required></td>
                        <td>
                            <button type="submit" class="btn btn-success" name="updateProduct">UPDATE</button>
                            <button type="submit" class="btn btn-danger" name="deleteProduct">DELETE</button>    
                    </form>
                            <form action="view_all_images.php" method="post">
                                <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                                <button type="submit" class="btn btn-primary">View Images</button>
                            </form>
                        </td>
                </tr>
        <?php   
                }
                            
            }
        ?>
      </table>
    </center>
  </div>
</div>
<?php include "include/footer.php";?>

<?php 

  if(isset($_POST['updateProduct'])){ //check if form was submitted

    $id = $_POST['id'];
    $Product_name = addslashes($_POST['Product_name']);
    $Product_code = $_POST['Product_code'];
    $Product_cost = $_POST['Product_cost'];
    $Product_price = $_POST['Product_price'];
    $discount = $_POST['discount'];
    $heading = addslashes($_POST['heading']);
    $description = addslashes($_POST['description']);

    $rand = rand(10000, 99999);
    
    $file_name = $rand.$_FILES['UploadImage']['name'];
    $file_tem_loc = $_FILES['UploadImage']['tmp_name'];
    $file_store = "../asset/images/products/".$file_name;
    $file_upload = false;

    if(move_uploaded_file($file_tem_loc, $file_store)){
        $file_upload = true;
    }
    else{
        $file_upload = false;
    }


    if ($file_upload) {
        
        $checkQuery = "UPDATE product_display SET Product_name = '".$Product_name."', Product_code = '".$Product_code."', Product_cost = '".$Product_cost."', Product_price = '".$Product_price."', discount = '".$discount."', heading = '".$heading."',description = '".$description."', image = '".$file_name."' WHERE id = '".$id."' ";  

        if (mysqli_query($con, $checkQuery)) {
            $image = "../asset/images/gallery/".$_POST['image'];
            unlink($image);
            echo "<script>window.alert('Product Information Changed');window.location.href='view_products.php';</script>";
        }

        else{
            echo "<script>window.alert('Please Re Upload Image');window.location.href='view_products.php';</script>";
        }

    }

    else{
        $checkQuery = "UPDATE product_display SET Product_name = '".$Product_name."', Product_code = '".$Product_code."', Product_cost = '".$Product_cost."', Product_price = '".$Product_price."', discount = '".$discount."', heading = '".$heading."',description = '".$description."' WHERE id = '".$id."' ";  

        if (mysqli_query($con, $checkQuery)) {
            echo "<script>window.alert('Product Information Changed');window.location.href='view_products.php';</script>";
        }

        else{
            echo "<script>window.alert('Please Retry');window.location.href='view_products.php';</script>";
        }
    }
  }

  if(isset($_POST['deleteProduct'])){ //check if form was submitted

    $id=$_POST['id'];

    if($id!=""){
      $checkQuery = "DELETE FROM product_display WHERE id='".$id."'";
      if (mysqli_query($con, $checkQuery)) {
        $image = "../asset/images/products/".$_POST['image'];
        unlink($image);
        echo "<script>window.alert('Product Deleted');window.location.href='view_products.php';</script>";
      }
      else{
          echo "<script>window.alert('Please Retry');window.location.href='view_products.php';</script>";
      }    
    }
  }

?>