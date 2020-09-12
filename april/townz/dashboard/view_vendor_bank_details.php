<?php 

  if(!isset($_POST['user_id'])){
   echo "<script>window.location.href='all_vendor.php';</script>";   
  }
  $user_id = $_POST['user_id'];
  
  include 'include/connection.php';
  
  $checkQuery ="SELECT * FROM bank_details WHERE user_id = '".$user_id."'";
  $checkResult = mysqli_query($conn, $checkQuery);
  $row = $checkResult -> fetch_assoc();

?>
<?php include "include/header.php";?>
<!-- main content start-->
<div id="page-wrapper">
  <div class="main-page">
    <br>
    <h2 class="title1" style="color: red;">Verify the documents</h2>
    <form method="post">
      <h3 class="title1" style="color: red;">Bank Details</h3>
      <br>
      <div class="container">
        <div class="form-row">
          <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">                     
          <div class="form-group col-md-6">
            <label for="inputZip">GST NUMBER</label>
            <input type="text" class="form-control" name="gst" id="GST Number" value="<?php echo $row['gst']; ?>"> 
          </div>
          <div class="form-group col-md-6">
            <label for="inputZip">PAN NUMBER</label>
            <input type="text" class="form-control" name ="pan" id="Pan Number" value="<?php echo $row['pan']; ?>">  
          </div>
          <div class="form-group col-md-6">
            <label for="inputZip">Account Number</label>
            <input type="text" class="form-control" name="account_no" id="Account Number" value="<?php echo $row['account_no']; ?>">             
          </div>
          <div class="form-group col-md-6">
            <label for="inputZip">IFSC CODE</label>
            <input type="text" class="form-control" name="ifsc" id="IFSC" value="<?php echo $row['ifsc']; ?>">
          </div>
          <div class="form-group col-md-6">
            <label for="inputZip">Account Holder Name</label>
            <input type="text" class="form-control" name="account_name" id="Account Holder Name" value="<?php echo $row['name']; ?>">         
          </div>
          <div class="form-group col-md-12">
            <button type="submit" class="btn btn-primary" name="updateBank">Update Bank Details</button>
          </div>
        </div>
      </div>
    </form>
    <br>
  </div>
</div>
<?php include "include/footer.php"?>
<?php 
    if(isset($_POST['updateBank'])){

        $user_id = $_POST['user_id'];
        $gst = $_POST['gst'];
        $pan = $_POST['pan'];
        $account_no = $_POST['account_no'];
        $ifsc = $_POST['ifsc'];
        $account_name = $_POST['account_name'];

        $checkQuery = "UPDATE bank_details SET gst = '".$gst."', pan = '".$pan."', account_no = '".$account_no."', ifsc = '".$ifsc."', name = '".$account_name."' WHERE user_id = '".$user_id."'";
        $checkResult = mysqli_query($conn, $checkQuery);
        echo "<script>window.alert('Bank Details Changed');window.location.href='all_vendor.php';</script>";
    }
  
?>