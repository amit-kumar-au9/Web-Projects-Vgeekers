<?php include "include/header.php";?>
<div id="page-wrapper">
  <form class="addCoupon">
    <div class="main-page">
      <br>
      <center>
        <h2 class="title1" style="color:red;"> Add Coupon Code</h2>
        <a href="view_coupon.php"><button type="button" class="btn btn-primary">View Coupons</button>
      </center>
      </a>
      <div class="container">
        <div class="row">
          <div class="form-group col-md-6">
            <label class="control-label" for="textinput">Coupon Code Name <span style="color: red">(Enter Unique coupon code)</span></label>  
            <div>                     
              <input id="textinput" name="coupon_code" type="text" placeholder=" Coupon code" class="form-control input-md" required>
            </div>
          </div>
          <div class="form-group col-md-6">
            <label class="control-label" for="textinput">Coupons Available</label>  
            <div>                     
              <input id="textinput" name="available_no" type="number" min="1" placeholder="Total number of coupons" class="form-control input-md" required>
            </div>
          </div>
          <div class="form-group col-md-6">
            <label class="control-label" for="textinput">Starts Date</label>  
            <div>                     
              <input id="start_date" name="start_date" type="date" placeholder=" Starts on" class="form-control input-md" required>
            </div>
          </div>
          <div class="form-group col-md-6">
            <label class="control-label" for="textinput"> Expiry Date</label>
            <div>                     
              <input id="expiry_date" name="end_date" type="date" placeholder=" Expiers on" class="form-control input-md" required>
              <p id="alert_time"></p>
            </div>
          </div>
          <div class="form-group col-md-6">
            <label class="control-label" for="textinput">Discount %</label>  
            <div>                     
              <input id="textinput" name="discount" type="number" min="1" placeholder="Enter discount %" class="form-control input-md" required>
            </div>
          </div>
          <div class="form-group col-md-6">
            <label class="control-label" for="textinput">Min Amount to Redeem Coupon</label>  
            <div>                     
              <input id="textinput" name="min_amount" type="number"  min="1" placeholder="Enter Min Amount to Redeemt" class="form-control input-md" required>
            </div>
          </div>
          <div class="form-group col-md-6">
            <label class="control-label" for="textinput">Max Amount can be Redeemed</label>  
            <div>                     
              <input id="textinput" name="max_discount_amount"  min="1" type="number" placeholder="Enter Max Amount" class="form-control input-md" required>
            </div>
          </div>
          <div class="form-group col-md-12">
            <label for="exampleFormControlTextarea1">Coupon Description</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" name="dsc" rows="4" required></textarea>
          </div>
          <div class="form-group col-md-12">
              <button id="addButton" name="addCoupon" class="btn btn-success" type="submit">ADD COUPON</button>
                <p id="added" style="display: none">City Added</p>
                <p id="retry" style="display: none">Please Re try</p>
          </div>
        </div>
      </div>
    </div>
  </form>
</div>
<?php include "include/footer.php"?>
<script type="text/javascript">
  $('form.addCoupon').submit(function(e){
      e.preventDefault();
      var formdata = $(this).serialize();
      $.ajax({
        'type' : 'post',
        'url' : 'insert_coupon.php',
        'data' : formdata,
        success : function(response){
          var json = JSON.parse(response);
          if(!json.error){
            $('#added').show();
            $('#added').html(json.message);
            $('#retry').hide();
          }
          else{
            $('#retry').show();   
            $('#retry').html(json.message);
            $('#added').hide();
          }
        }
      });
    });
</script>
<script>
    $(document).ready(function() {
        $('#expiry_date').change(function(){
            var start_date = $('#start_date').val(); // start time Format: '9:00 PM'
            var expiry_date = $('#expiry_date').val(); // end time   Format: '11:00 AM' 
    
            //how do i compare time
            if(Date(start_date) > Date(expiry_date))
            {
               $('#alert_time').html("Must be greater than Start Time");
               $('#addButton').prop('disabled', true);
            }
            else{
                $('#alert_time').hide();
                $('#addButton').prop('disabled', false);
            }
        });
        $('#start_date').change(function(){
            var start_date = $('#start_date').val(); // start time Format: '9:00 PM'
            var expiry_date = $('#expiry_date').val(); // end time   Format: '11:00 AM' 
    
            //how do i compare time
            if(Date(start_date) > Date(expiry_date))
            {
               $('#alert_time').html("Must be greater than Start Time");
               $('#addButton').prop('disabled', true);
            }
            else{
                $('#alert_time').hide();
                $('#addButton').prop('disabled', false);
            }
        });
    });
</script>