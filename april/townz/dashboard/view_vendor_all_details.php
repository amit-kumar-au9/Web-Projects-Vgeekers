<?php 
  if(!isset($_POST['user_id'])){
   echo "<script>window.location.href='all_vendor.php';</script>";   
  }
  $user_id = $_POST['user_id'];
  
  include 'include/connection.php';
  
  $checkQuery ="SELECT vendor_details.user_id as v_id, vendor_details.name as username,bank_details.name as account_name, phone, secondary_phone, email, country, city, location, referring_code, category, profile, id_proof, address_proof, gst, pan, account_no, ifsc  FROM ((vendor_details INNER JOIN bank_details ON vendor_details.user_id = bank_details.user_id) INNER JOIN identity ON vendor_details.user_id = identity.user_id) WHERE vendor_details.user_id = '".$user_id."'";
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
          <h2 class="title1" style="color: red;">Basic Details</h2>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Name <span style="color: red">*</span></label>
              <input type="hidden" value="<?php echo $row['v_id']; ?>" name="user_id">
              <input type="text" class="form-control" placeholder="First Name" value="<?php echo $row['username']; ?>" required name="username">
            </div>
            <div class="form-group col-md-6">
              <label for="inputEmail4">Phone <span style="color: red">*</span></label>
              <input type="number" class="form-control" placeholder="Electrician,Plumber" value="<?php echo $row['phone']; ?>" required name="phone">
            </div>
            <div class="form-group col-md-6">
              <label for="inputPassword4">Secondary Phone</label>
              <input type="number" class="form-control" placeholder="No phone number found" value="<?php echo $row['secondary_phone']; ?>" name="secondary_phone">
            </div>
            <div class="form-group col-md-6">
              <label for="inputEmail4">Email</label>
              <input type="email" class="form-control" placeholder="Email" value="<?php echo $row['email']; ?>" name="email">
            </div>
            <div class="form-group col-md-6">
              <label for="inputAddress">City <span style="color: red">*</span></label>
              <input type="text" class="form-control" id="" placeholder="Kindly Enter Correct Spelling with Case Sensitive" value="<?php echo $row['city']; ?>" required name="city">
            </div>
            <div class="form-group col-md-6">
              <label for="inputAddress">Location <span style="color: red">*</span></label>
              <input type="text" class="form-control" id="" placeholder="Kindly Enter Correct Spelling with Case Sensitive" value="<?php echo $row['location']; ?>" required name="location">
            </div>
            <div class="form-group col-md-6">
              <label for="inputCity">Refer Code</label>
              <input type="text" class="form-control" id="inputCity" value="<?php echo $row['referring_code']; ?>" required name="referring_code" readonly>
            </div>
            <div class="form-group col-md-6">
              <label for="inputCity">Category</label>
              <select class="form-control">
                    <?php 
        		        $someArray = json_decode($row['category'], true);
                        foreach($someArray as $value){
                          $category[] = $value['name'];
                          echo "<option>".$value["name"]."</option>";    
                        }
                    ?>
                </select>
            </div>
          </div>
      </div>
      <div class="container">
        <h3 class="title1" style="color: red;">Identify Document</h3>
          <div class="form-row">
            <div class="form-group col-md-4">
                <label for="inputZip">Profile</label>
                <br>
                <a target="_blank" href="<?php echo str_replace("https://townz.co.in/dashboard/","",$row['profile']); ?>"><img src="<?php echo str_replace("https://townz.co.in/dashboard/","",$row['profile']); ?>" class="card-img-top" alt="..." style="width:100px;height:100px" ></a>
                <!-- <br><label>Delete</label><input type="checkbox" name="profile" value="delete"> -->
            </div>
            <div class="form-group col-md-4">
                <label for="inputZip">Id Proof</label>
                <br>
                <a target="_blank" href="<?php echo str_replace("https://townz.co.in/dashboard/","",$row['id_proof']); ?>"><img src="<?php echo str_replace("https://townz.co.in/dashboard/","",$row['id_proof']); ?>" class="card-img-top" alt="..." style="width:100px;height:100px"></a>
                <!-- <br><label>Delete</label><input type="checkbox" name="id_proof" value="delete"> -->
            </div>
            <div class="form-group col-md-4">
                <label>Address Proof</label>
                <br>
                <a target="_blank" href="<?php echo str_replace("https://townz.co.in/dashboard/","",$row['address_proof']); ?>"><img src="<?php echo str_replace("https://townz.co.in/dashboard/","",$row['address_proof']); ?>" class="card-img-top" alt="..." style="width:100px;height:100px"></a>
                <!-- <br><label>Delete</label><input type="checkbox" name="address_proof" value="delete"> -->
            </div>
          </div>
        </div>
      <br>
      
      <br>
      <div class="container">
        <h3 class="title1" style="color: red;">Bank Details</h3>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputZip">GST NUMBER</label>
            <input type="text" class="form-control" id="GST Number" value="<?php echo $row['gst']; ?>" readonly name="gst">           
          </div>
          <div class="form-group col-md-6">
            <label for="inputZip">PAN NUMBER</label>
            <input type="text" class="form-control" id="Pan Number" value="<?php echo $row['pan']; ?>" readonly name="pan">  
          </div>
          <div class="form-group col-md-6">
            <label for="inputZip">Account Number</label>
            <input type="text" class="form-control" id="Account Number" value="<?php echo $row['account_no']; ?>" readonly name="account_no">             
          </div>
          <div class="form-group col-md-6">
            <label for="inputZip">IFSC CODE</label>
            <input type="text" class="form-control" id="IFSC" value="<?php echo $row['ifsc']; ?>" readonly name="ifsc">
          </div>
          <div class="form-group col-md-6">
            <label for="inputZip">Account Holder Name</label>
            <input type="text" class="form-control" id="Account Holder Name" value="<?php echo $row['account_name']; ?>" readonly name="account_name">         
          </div>
        </div>
      </div>
    <br>
    <div class="container">
        <div class="one_col">
            <button name="update" type="submit" class="btn btn-success">UPDATE</button>
          <!-- Button trigger modal -->
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
        
        $name = $_POST['username'];
        $phone = $_POST['phone'];
        $secondary_phone = $_POST['secondary_phone'];
        $email = $_POST['email'];
        $city = $_POST['city'];
        $referring_code = $_POST['referring_code'];
        $location = $_POST['location'];
        
        $gst = $_POST['gst'];
        $pan = $_POST['pan'];
        $account_no = $_POST['account_no'];
        $ifsc = $_POST['ifsc'];
        $account_name = $_POST['account_name'];

        $checkQuery = "UPDATE vendor_details SET name = '".$name."', phone = '".$phone."', secondary_phone = '".$secondary_phone."', email = '".$email."', city = '".$city."', referring_code = '".$referring_code."', location = '".$location."' WHERE user_id = '".$user_id."'";
        $checkResult = mysqli_query($conn, $checkQuery);
        echo "<script>window.location.href='all_vendor.php';</script>";
    }
    
?>