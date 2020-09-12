<?php include "include/header.php";?>
<div id="page-wrapper">
  <div class="main-page">
  <br>
  <h2 class="title1" align="center" style="color: red;">EPS CONTACT DETAILS</h2>
  <br>
  <?php 
  include 'include/connection.php';
  $checkQuery = "SELECT * FROM contact_us";
  $checkResult = mysqli_query($conn, $checkQuery);
  $row = $checkResult -> fetch_assoc();
  ?>
  <form method="post">
    <div class="row">
      <div class="form-group col-md-3">
        <label for="exampleFormControlInput1">Mobile No. 1</label>
        <input type="tel" class="form-control" id="exampleFormControlInput1" name="phone1" pattern="[0-9]{10}" maxlength="10" minlength="10" value="<?php echo $row['phone1']; ?>" required>
      </div>
      <div class="form-group col-md-3">
        <label for="exampleFormControlInput1">Mobile No. 2</label>
        <input type="tel" class="form-control" id="exampleFormControlInput1" name="phone2" pattern="[0-9]{10}" maxlength="10" minlength="10" value="<?php echo $row['phone2']; ?>" required>
      </div>
      <div class="form-group col-md-3">
        <label for="exampleFormControlInput1">Email Id 1</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" name="email1" placeholder="abc@gmail.com" value="<?php echo $row['email1']; ?>" required>
      </div>
      <div class="form-group col-md-3">
        <label for="exampleFormControlInput1">Email Id 2</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" name="email2" placeholder="abc@gmail.com" value="<?php echo $row['email2']; ?>">
      </div>
    </div>
    <button class="btn btn-success" type="submit" name="updateContact">Update</button>
  </form>
  </div>
</div>    
<?php include "include/footer.php";?>
<?php 
// Update Contact Details
if (isset($_POST['updateContact'])) {

  $phone1 = $_POST['phone1'];
  $phone2 = $_POST['phone2'];
  $email1 = addslashes($_POST['email1']);
  $email2 = addslashes($_POST['email2']);


  if($phone1!="" && $phone2!="" && $email1!=""){
    if (strlen($phone1)==10 && strlen($phone2)==10) {

      $checkQuery = "UPDATE contact_us SET phone1 = '".$phone1."', phone2 = '".$phone2."', email1 = '".$email1."', email2 = '".$email2."' WHERE id = 1 ";  

      if (mysqli_query($conn, $checkQuery)) {
                echo "<script>window.alert('Content Updated');window.location.href='update_contact_details.php';</script>";
      }

      else{
          echo "<script>window.alert('Please Retry');window.location.href='update_contact_details.php';</script>";
      }
    }
    else{
        echo "<script>window.alert('Phone No. should be of lenght 10 only');window.location.href='update_contact_details.php';</script>";
    }
  }
  else{
        echo "<script>window.alert('Cannot be empty');window.location.href='update_contact_details.php';</script>";
  }

}
?>





