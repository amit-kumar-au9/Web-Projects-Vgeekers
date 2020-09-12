<?php 
  if(!isset($_POST['user_id'])){
   echo "<script>window.location.href='pending_vendor.php';</script>";   
  }
  $user_id = $_POST['user_id'];
  
  include 'include/connection.php';
  
  $checkQuery ="SELECT vendor_details.name as username,bank_details.name as account_name, phone, secondary_phone, email, token, country, city, referring_code, category, profile, id_proof, address_proof, gst, pan, account_no, ifsc  FROM ((vendor_details INNER JOIN bank_details ON vendor_details.user_id = bank_details.user_id) INNER JOIN identity ON vendor_details.user_id = identity.user_id) WHERE vendor_details.user_id = '".$user_id."'";
  $checkResult = mysqli_query($conn, $checkQuery);
  $row = $checkResult -> fetch_assoc();

?>
<?php include "include/header.php";?>
<!-- main content start-->
<div id="page-wrapper">
  <div class="main-page">
    <br>
    <h2 class="title1" style="color: red;">Verify the documents</h2>
    <form>
      <div class="container">
          <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Name</label>
                <input type="text" class="form-control" placeholder="First Name" value="<?php echo $row['username']; ?>" readonly>
            </div>
            <div class="form-group col-md-6">
                <label for="inputEmail4">Phone</label>
                <input type="number" class="form-control" placeholder="Electrician,Plumber" value="<?php echo $row['phone']; ?>" readonly>
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">Secondary Phone</label>
                <input type="number" class="form-control" placeholder="No phone number found" value="<?php echo $row['secondary_phone']; ?>" readonly>
            </div>
            <div class="form-group col-md-6">
              <label for="inputEmail4">Email</label>
              <input type="email" class="form-control" placeholder="Email" value="<?php echo $row['email']; ?>" readonly>
            </div>
            <div class="form-group col-md-6">
              <label for="inputPassword4">Country</label>
              <input type="text" class="form-control" placeholder="Country" value="<?php echo $row['country']; ?>" readonly>
            </div>
            <div class="form-group col-md-6">
              <label for="inputAddress">City</label>
              <input type="text" class="form-control" id="" placeholder="City" value="<?php echo $row['city']; ?>" readonly>
            </div>
            <div class="form-group col-md-6">
              <label for="inputAddress">City</label>
              <input type="text" class="form-control" id="" placeholder="City" value="<?php echo $row['city']; ?>" readonly>
            </div>
            <div class="form-group col-md-6">
              <label for="inputCity">Refer Code</label>
              <input type="text" class="form-control" id="inputCity" value="<?php echo $row['referring_code']; ?>" readonly>
            </div>
            <div class="form-group col-md-6">
              <label for="inputCity">Category</label>
              <select class="form-control" readonly>
                  <option>View Category</option>
                    <?php 
        		        $someArray = json_decode($row['category'], true);
                        foreach($someArray as $value){
                            echo "<option>".$value["name"]."</option>";    
                        }
                    ?>
                </select>
            </div>
          </div>
      </div>
      <h3 class="title1" style="color: red;">Documents Details</h3>
      <div class="form-row">
        <div class="form-group col-md-4">
            <label for="inputZip">Document1</label>
            <br>
            <a target="_blank" href="<?php echo str_replace("https://townz.co.in/dashboard/","",$row['profile']); ?>"><img src="<?php echo str_replace("https://townz.co.in/dashboard/","",$row['profile']); ?>" class="card-img-top" alt="..." style="width:100px;height:100px" ></a>
        </div>
        <div class="form-group col-md-4">
            <label for="inputZip">Document2</label>
            <br>
            <a target="_blank" href="<?php echo str_replace("https://townz.co.in/dashboard/","",$row['id_proof']); ?>"><img src="<?php echo str_replace("https://townz.co.in/dashboard/","",$row['id_proof']); ?>" class="card-img-top" alt="..." style="width:100px;height:100px"></a>
        </div>
        <div class="form-group col-md-4">
            <label for="inputZip">Document3</label>
            <br>
            <a target="_blank" href="<?php echo str_replace("https://townz.co.in/dashboard/","",$row['address_proof']); ?>"><img src="<?php echo str_replace("https://townz.co.in/dashboard/","",$row['address_proof']); ?>" class="card-img-top" alt="..." style="width:100px;height:100px"></a>
        </div>
      </div>
      <br>
      <h3 class="title1" style="color: red;">Bank Details</h3>
      <br>
      <div class="container">
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputZip">GST NUMBER</label>
            <input type="text" class="form-control" id="GST Number" value="<?php echo $row['gst']; ?>" readonly>           
          </div>
          <div class="form-group col-md-6">
            <label for="inputZip">PAN NUMBER</label>
            <input type="text" class="form-control" id="Pan Number" value="<?php echo $row['pan']; ?>" readonly>  
          </div>
          <div class="form-group col-md-6">
            <label for="inputZip">Account Number</label>
            <input type="text" class="form-control" id="Account Number" value="<?php echo $row['account_no']; ?>" readonly>             
          </div>
          <div class="form-group col-md-6">
            <label for="inputZip">IFSC CODE</label>
            <input type="text" class="form-control" id="IFSC" value="<?php echo $row['ifsc']; ?>" readonly>
          </div>
          <div class="form-group col-md-6">
            <label for="inputZip">Account Holder Name</label>
            <input type="text" class="form-control" id="Account Holder Name" value="<?php echo $row['account_name']; ?>" readonly>         
          </div>
        </div>
      </div>
      <!-- <h3 class="title1" style="color: red;">Awards and Certificates</h3>
      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="inputZip">Award1</label>
          <div class="card" style="width: 10rem;">
            <img src="images/man.png" class="card-img-top" alt="..." style="width:100px;height:100px"  >
          </div>
        </div>
        <div class="form-group col-md-4">
          <label for="inputZip">Award2</label>
          <div class="card" style="width: 10rem;">
            <img src="images/man.png" class="card-img-top" alt="..." style="width:100px;height:100px" data-toggle="modal" >
          </div>
        </div>
        <div class="form-group col-md-4">
          <label for="inputZip">Certificate</label>
          <div class="card" style="width: 10rem;">
            <img src="images/man.png" class="card-img-top" alt="..." style="width:100px;height:100px" data-toggle="modal" >
          </div>
        </div>
      </div -->
    </form>
    <br>
    <div class="container">
        <div class="one_col">
          <input id="submit" type="button" value="Accept"  class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="background: green;" />
          <input id="submit" type="button" value="Reject" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal1"  style="background: red;"/>
          <!-- Button trigger modal -->
        </div>
    </div>
    </center>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Accepting</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Are you sure you want to accept this application?
          </div>
          <div class="modal-footer">
                <form method="post">
                    <input type="hidden" value="<?php echo $user_id; ?>" name="user_id">
                    <input type="hidden" value="<?php echo $row['token']; ?>" name="token">
                    <button type="submit" class="btn btn-primary" name="accept">Yes</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                </form>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Rejecting</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <!--<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Specify the reason for rejecting(optional)">-->
          </div>
          <div class="modal-footer">
            <form method="post">
                <input type="hidden" value="<?php echo $user_id; ?>" name="user_id">
                <input type="hidden" value="<?php echo $row['token']; ?>" name="token">
                <input type="hidden" value="<?php echo $row['address_proof']; ?>" name="address_proof">
                <input type="hidden" value="<?php echo $row['id_proof']; ?>" name="id_proof">
                <input type="hidden" value="<?php echo $row['profile']; ?>" name="profile">
                <button type="submit" class="btn btn-danger" name="reject" >Reject</button>
                <button type="button" class="btn btn-primary">Back</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <span class="clear"></span>
  </form>
</div>
<?php include "include/footer.php"?>

<?php 
    
    if(isset($_POST['reject'])){
        $user_id = $_POST['user_id'];
        $address_proof = str_replace("https://townz.co.in/dashboard/","",$_POST['address_proof']);
        $id_proof = str_replace("https://townz.co.in/dashboard/","",$_POST['id_proof']);
        $profile = str_replace("https://townz.co.in/dashboard/","",$_POST['profile']);
        $token = array($_POST['token']);
        $user = array($user_id);
        unlink($address_proof);
        unlink($id_proof);
        unlink($profile);
        $checkQuery = "UPDATE bank_details SET gst = '', pan = '', account_no = '', ifsc = '', name = '' WHERE user_id = '".$user_id."'";
        mysqli_query($conn, $checkQuery);
        $checkQuery = "UPDATE identity SET profile = '', id_proof = '', address_proof = '' WHERE user_id = '".$user_id."'";
        mysqli_query($conn, $checkQuery);
        $checkQuery = "UPDATE vendor_details SET active = '0', send_approval = '0', isIdentityCompleted = '0', isBankCompleted = '0' WHERE user_id = '".$user_id."'";
        mysqli_query($conn, $checkQuery);
        
        $title = 'Townz';
        $body = 'Sorry your Approval Request is Rejected /n Kindly re upload Document Images and Bank Details';
        include '../api/notification.php';
      	send_notification($body, $title, $token);
      	include '../api/insert_notification.php';
      	set_notification($body, $title, $user);
    
        echo "<script>window.location.href='index.php';</script>";
    }
    if(isset($_POST['accept'])){
        $user_id = $_POST['user_id'];
        $token = array($_POST['token']);
        $user = array($user_id);
        
        $checkQuery = "UPDATE vendor_details SET is_approved = '1' WHERE user_id = '".$user_id."'";
        $checkResult = mysqli_query($conn, $checkQuery);
        
        $title = 'Townz';
        $body = 'Your Approval Request is Accepted';
        include '../api/notification.php';
      	send_notification($body, $title, $token);
      	include '../api/insert_notification.php';
      	set_notification($body, $title, $user);
    
        echo "<script>window.location.href='index.php';</script>";
    }
    
?>