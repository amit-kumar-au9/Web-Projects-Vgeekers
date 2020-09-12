<?php include "include/header.php";?>
<div id="page-wrapper">
  <form method="post">
    <div class="main-page">
      <br>
      <center>
        <h2 class="title1" style="color:red;"> Update Coupon Code</h2>
        <a href="view_coupon.php"><button type="button" class="btn btn-primary">View Coupons</button>
      </center>
      </a>
      <?php 
        include 'include/connection.php';
        $coupon = "SELECT * FROM coupon_code WHERE id = '".$_POST['id']."'";
        $result = mysqli_query($conn, $coupon);
        $row = $result -> fetch_assoc();
      ?>
      <div class="container">
        <div class="row">
          <div class="form-group col-md-6">
            <input type="hidden" name="id" value="<?php echo $_POST['id']; ?>">
            <label class="control-label" for="textinput">Coupon Code Name <span style="color: red">(Enter Unique coupon code)</span></label>  
            <div>                     
              <input id="textinput" name="coupon_code" type="text" placeholder=" Coupon code" class="form-control input-md" value="<?php echo $row['coupon_code']; ?>" required>
            </div>
          </div>
          <div class="form-group col-md-6">
            <label class="control-label" for="textinput">Coupons Available</label>  
            <div>                     
              <input id="textinput" name="available_no" type="number" min="1" placeholder="Total number of coupons" value="<?php echo $row['available_no']; ?>" class="form-control input-md" required>
            </div>
          </div>
          <div class="form-group col-md-6">
            <label class="control-label" for="textinput">Starts Date</label>  
            <div>                     
              <input id="start_date" name="start_date" type="date" placeholder=" Starts on" value="<?php echo $row['start_date']; ?>" class="form-control input-md" required>
            </div>
          </div>
          <div class="form-group col-md-6">
            <label class="control-label" for="textinput"> Expiry Date</label>
            <div>                     
              <input id="expiry_date" name="end_date" type="date" placeholder=" Expiers on" value="<?php echo $row['end_date']; ?>" class="form-control input-md" required>
              <p id="alert_time"></p>
            </div>
          </div>
          <div class="form-group col-md-6">
            <label class="control-label" for="textinput">Discount %</label>  
            <div>                     
              <input id="textinput" name="discount" type="number" min="1" placeholder="Enter discount %" value="<?php echo $row['discount']; ?>" class="form-control input-md" required>
            </div>
          </div>
          <div class="form-group col-md-6">
            <label class="control-label" for="textinput">Min Amount to Redeem Coupon</label>  
            <div>                     
              <input id="textinput" name="min_amount" type="number"  min="1" placeholder="Enter Min Amount to Redeemt" value="<?php echo $row['min_amount']; ?>" class="form-control input-md" required>
            </div>
          </div>
          <div class="form-group col-md-6">
            <label class="control-label" for="textinput">Max Amount can be Redeemed</label>  
            <div>                     
              <input id="textinput" name="max_discount_amount"  min="1" type="number" placeholder="Enter Max Amount" value="<?php echo $row['max_discount_amount']; ?>" class="form-control input-md" required>
            </div>
          </div>
          <div class="form-group col-md-12">
            <label for="exampleFormControlTextarea1">Coupon Description</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" name="dsc" rows="4" required><?php echo $row['dsc']; ?></textarea>
          </div>
          <div class="form-group col-md-12">
              <button id="addButton" name="update" class="btn btn-success" type="submit">UPDATE COUPON</button>
          </div>
        </div>
      </div>
    </div>
  </form>
</div>
<?php include "include/footer.php"?>
<?php

  if(isset($_POST['update'])){
    $coupon_code = $_POST['coupon_code'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    $discount = $_POST['discount'];
    $min_amount = $_POST['min_amount'];
    $max_discount_amount = $_POST['max_discount_amount'];
    $available_no = $_POST['available_no'];
    $dsc = $_POST['dsc'];
    $id = $_POST['id'];

    $updateCoupon = "UPDATE coupon_code SET coupon_code = '".$coupon_code."', start_date = '".$start_date."', end_date = '".$end_date."', discount = '".$discount."', min_amount = '".$min_amount."', max_discount_amount = '".$max_discount_amount."', available_no = '".$available_no."', dsc = '".$dsc."' WHERE id = '".$id."'";
    mysqli_query($conn, $updateCoupon);
    echo "<script>window.location.href='view_coupon.php';</script>";
  }


?>