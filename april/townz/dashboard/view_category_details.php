<?php 
  if(!isset($_POST['category_id'])){
   echo "<script>window.location.href='view_category.php';</script>";   
  }
  $category_id = $_POST['category_id'];
  
  include 'include/connection.php';
  
  $checkQuery ="SELECT * FROM category WHERE id = '".$category_id."'";
  $checkResult = mysqli_query($conn, $checkQuery);
  $row = $checkResult -> fetch_assoc();

?>
<?php include "include/header.php";?>
<!-- main content start-->
<div id="page-wrapper">
  <div class="main-page">
    <br>
    <form method="post">
      <div class="container">
        <h2 class="title1" style="color: red;">Category Details</h2>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">Name</label>
            <input type="hidden" value="<?php echo $category_id; ?>" name="category_id">
            <input type="text" class="form-control" placeholder="First Name" value="<?php echo $row['category']; ?>" name="category">
          </div>
          <div class="form-group col-md-6">
            <label for="inputEmail4">Short Description</label>
            <input type="number" class="form-control" value="<?php echo $row['dsc_short']; ?>" name="dsc_short">
          </div>
          <div class="form-group col-md-12">
            <label for="inputEmail4">Long Description</label>
            <textarea type="number" class="form-control" value="<?php echo $row['dsc']; ?>" name="dsc" rows="5"></textarea>
          </div>
        </div>
      </div>
    <br>
    <div class="container">
        <div class="one_col">
            <button name="update" type="submit" class="btn btn-success">UPDATE</button>
        </div>
    </div>
    </form>
  </div>
  <span class="clear"></span>
</div>
<?php include "include/footer.php"?>
<?php 
    if(isset($_POST['update'])){
      
        $category_id = $_POST['category_id'];
        
        $category = $_POST['category'];
        $dsc = $_POST['dsc'];
        $dsc_short = $_POST['dsc_short'];
        
        $checkQuery = "UPDATE category SET category = '".$category."', dsc = '".$dsc."', dsc_short = '".$dsc_short."' WHERE id = '".$category_id."'";
        $checkResult = mysqli_query($conn, $checkQuery);
        echo "<script>window.location.href='view_category.php';</script>";
    }
    
?>