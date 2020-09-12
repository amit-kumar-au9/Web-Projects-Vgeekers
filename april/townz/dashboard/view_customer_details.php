<?php 
  if(!isset($_POST['user_id'])){
   echo "<script>window.location.href='view_all_customer.php';</script>";   
  }
  $user_id = $_POST['user_id'];
  
  include 'include/connection.php';
  
  $checkQuery ="SELECT * FROM customer_details WHERE id = '".$user_id."'";
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
        <h3 class="title1" style="color: red;">Identify Document</h3>
        <div class="form-row">
          <div class="form-group col-md-4">
              <label for="inputZip">Profile</label>
              <br>
              <a target="_blank" href="<?php echo $row['profile_image']; ?>"><img src="<?php echo $row['profile_image']; ?>" class="card-img-top" alt="..." style="width:100px;height:100px" ></a>
          </div>
        </div>
      </div>
      <div class="container">
        <h2 class="title1" style="color: red;">Basic Details</h2>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">Name</label>
            <input type="hidden" value="<?php echo $row['v_id']; ?>" name="user_id">
            <input type="text" class="form-control" placeholder="First Name" value="<?php echo $row['name']; ?>" name="name">
          </div>
          <div class="form-group col-md-6">
            <label for="inputEmail4">Phone</label>
            <input type="number" class="form-control" value="<?php echo $row['phone']; ?>" name="phone">
          </div>
          <div class="form-group col-md-6">
            <label for="inputEmail4">Secondary Phone</label>
            <input type="number" class="form-control" value="<?php echo $row['sphone']; ?>" name="sphone">
          </div>
          <div class="form-group col-md-6">
            <label for="inputEmail4">Email</label>
            <input type="email" class="form-control" placeholder="Email" value="<?php echo $row['email']; ?>" name="email">
          </div>
          <div class="form-group col-md-6">
            <label for="inputCity">Refer Code</label>
            <input type="text" class="form-control" id="inputCity" value="<?php echo $row['referrer_code']; ?>" name="referrer_code" readonly>
          </div>
          <div class="form-group col-md-6">
            <label for="inputCity">Refer Code Used</label>
            <input type="text" class="form-control" id="inputCity" value="<?php echo $row['referrer_code_used']; ?>" name="referrer_code_used" readonly>
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
      
        $user_id = $_POST['user_id'];
        
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $sphone = $_POST['sphone'];
        $email = $_POST['email'];
        
        $checkQuery = "UPDATE customer_details SET name = '".$name."', phone = '".$phone."', sphone = '".$sphone."', email = '".$email."' WHERE user_id = '".$user_id."'";
        $checkResult = mysqli_query($conn, $checkQuery);
        echo "<script>window.location.href='view_all_customer.php';</script>";
    }
    
?>