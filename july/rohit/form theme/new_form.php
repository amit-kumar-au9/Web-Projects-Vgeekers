<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>
<style type="text/css">
	.secondary_text{
		font-size: 10px;
	}
</style>
<link rel="stylesheet" type="text/css" href="form.css">
	
	<section class="jumbotron content-section" style="padding-top: 100px; margin-bottom: 0px;">
  		<div class="container">
      		<div class="row">
            	<div class="col-sm-12">
					<form class="form_section employee-registration" autocomplete="off">
						<h2 class="form_title">Personal Information<sup>*</sup></h2>
						<div class="form_border">
							<div class="row">
								<div class="col-sm-4">
									<div class="form-group">
										<label>First Name<sup>*</sup></label>
										<input type="text" class="form-control" name="fname" placeholder="First Name" autocomplete="off"  required>
										<asp:textbox autocomplete="off">
									</div><!--form-group-->
								</div><!--col-sm-8-->
								<div class="col-sm-4">
									<div class="form-group">
										<label>Last Name<sup>*</sup></label>
										<input type="text" class="form-control" name="lname" placeholder="Enter here" required>
									</div><!--form-group-->
								</div><!--col-sm-4-->
								<div class="col-sm-4">
									<div class="form-group">
										<label>Company Name<sup>*</sup></label>
										<input type="text" class="form-control" name="cname" placeholder="Enter here" required>
									</div><!--form-group-->
								</div><!--col-sm-4-->
								<div class="col-sm-4">
									<div class="form-group">
										<label>Gstin Number<sup>*</sup></label>
										<input type="text" class="form-control" name="gst" placeholder="Enter here" required>
									</div><!--form-group-->
								</div><!--col-sm-4-->
								<div class="col-sm-4">
									<div class="form-group">
										<label>Primary Email ID<sup>*</sup></label>
										<input type="email" class="form-control" id="email" name="email" onchange="checkEmail()" placeholder="Primary Email ID"  required>
										<span class="check-email-error"></span>
									</div><!--form-group-->
								</div><!--col-sm-4-->
								<div class="col-sm-4">
									<div class="form-group">
										<label>Mobile No.<sup>*</sup></label>
										<input type="text" onkeypress="return (event.charCode == 8 || event.charCode == 0 || event.charCode == 13) ? null : event.charCode >= 48 && event.charCode <= 57 || event.charCode==43 || event.charCode==45" class="form-control" name="mobno" placeholder="Mobile No." maxlength="10" minlength="10"  required>
									</div><!--form-group-->
								</div><!--col-sm-3-->
								<div class="col-sm-4">
									<div class="form-group">
										<label>Second Mobile No.<sup>*</sup></label>
										<input type="text" onkeypress="return (event.charCode == 8 || event.charCode == 0 || event.charCode == 13) ? null : event.charCode >= 48 && event.charCode <= 57 || event.charCode==43 || event.charCode==45" class="form-control" name="secmobno" placeholder="Mobile No." maxlength="10" minlength="10"  required>
									</div><!--form-group-->
								</div><!--col-sm-3-->
							</div>
							<br>
							<h2 class="form_title">Address<sup>*</sup></h2>
							<div class="row">
								<div class="col-sm-4">
									<div class="form-group">
										<label>Street Address<sup>*</sup></label>
										<input type="text" class="form-control" name="street_address" placeholder="Enter here" required>
									</div><!--form-group-->
								</div><!--col-sm-4-->
								<div class="col-sm-4">
									<div class="form-group">
										<label>Adddress Line 2<sup>*</sup></label>
										<input type="text" class="form-control" name="address_line2" placeholder="Enter here" required>
									</div><!--form-group-->
								</div><!--col-sm-4-->
								<div class="col-sm-4">
									<div class="form-group">
										<label>City<sup>*</sup></label>
										<input type="text" class="form-control" name="city" placeholder="Enter here" required>
									</div><!--form-group-->
								</div><!--col-sm-4-->
								<div class="col-sm-4">
									<div class="form-group">
										<label>State/Region/Province<sup>*</sup></label>
										<input type="text" class="form-control" name="state" placeholder="Enter here" required>
									</div><!--form-group-->
								</div><!--col-sm-4-->
								<div class="col-sm-4">
									<div class="form-group">
										<label>Postal/Zip Code<sup>*</sup></label>
										<input type="text" class="form-control" name="postal_code" placeholder="Enter here" required>
									</div><!--form-group-->
								</div><!--col-sm-4-->
								<div class="col-sm-4">
									<div class="form-group">
										<label>Country<sup>*</sup></label>
										<select class="form-control" name="country">
											<option disabled="true" selected="true">Choose Your Option</option>
											<option value="basic">Basic</option>
											<option value="intermediate">Intermediate</option>
											<option value="proficient">Proficient</option>
										</select>
									</div><!--form-group-->
								</div><!--col-sm-3-->
							</div>
							<br>
							<h2 class="form_title">Media Information<sup>*</sup></h2>
							<div class="row">
								<div class="col-sm-8">
									<div class="form-group">
										<label>Media Type<sup>*</sup></label>
										<br>
										<input type="checkbox" class="checkBoxType" id="Hard Disk" name="gender" value="Hard Disk">
  										<label for="Hard Disk">Hard Disk</label>
  										<input type="checkbox" class="checkBoxType" id="Pendrive" name="gender" value="Pen drive">
  										<label for="Pen drive">Pen drive</label>
  										<input type="checkbox" class="checkBoxType" id="MemoryCard" name="gender" value="Memory Card">
  										<label for="Memory Card">Memory Card</label>
  										<input type="checkbox" class="checkBoxType" id="SSD" name="gender" value="SSD">
  										<label for="SSD">SSD</label>
  										<input type="checkbox" class="checkBoxType" id="NAS" name="gender" value="NAS">
  										<label for="NAS">NAS</label>
  										<input type="checkbox" class="checkBoxType" id="SAS" name="gender" value="SAS">
  										<label for="SAS">SAS</label>
  										<input type="checkbox" class="checkBoxType" id="MobilePhone" name="gender" value="MobilePhone">
  										<label for="MobilePhone">Mobile Phone</label>
  										<input type="checkbox" class="checkBoxType" id="Camera" name="gender" value="Camera">
  										<label for="Camera">Camera</label>
									</div><!--form-group-->
								</div><!--col-sm-4-->
								<div class="col-sm-4">
									<div class="form-group">
										<label>Media Company<sup>*</sup></label>
										<input type="text" class="form-control" name="media_company" placeholder="Enter here" required>
									</div><!--form-group-->
								</div><!--col-sm-4-->
								<div class="col-sm-4">
									<div class="form-group">
										<label>Media Condition<sup>*</sup></label>
										<select class="form-control" name="media_condition">
											<option disabled="true" selected="true">Choose Your Option</option>
											<option value="basic">Basic</option>
											<option value="intermediate">Intermediate</option>
											<option value="proficient">Proficient</option>
										</select>
									</div><!--form-group-->
								</div><!--col-sm-4-->
								<div class="col-sm-4">
									<div class="form-group">
										<label>Physical Condition<sup>*</sup></label>
										<select class="form-control" name="physical_condition">
											<option disabled="true" selected="true">Choose Your Option</option>
											<option value="basic">Basic</option>
											<option value="intermediate">Intermediate</option>
											<option value="proficient">Proficient</option>
										</select>
									</div><!--form-group-->
								</div><!--col-sm-4-->
								<div class="col-sm-4">
									<div class="form-group">
										<label>Any Physical Damage</label>
										<select class="form-control" name="physical_damage">
											<option disabled="true" selected="true">Choose Your Option</option>
											<option value="basic">Basic</option>
											<option value="intermediate">Intermediate</option>
											<option value="proficient">Proficient</option>
										</select>
									</div><!--form-group-->
								</div><!--col-sm-4-->
								<div class="col-sm-4">
									<div class="form-group">
										<label>Explain Condition in brief</label>
										<input type="text" class="form-control" name="brief_info" required>
									</div><!--form-group-->
								</div><!--col-sm-4-->
								<div class="col-sm-4">
									<div class="form-group">
										<label>Media Photo <span class="secondary_text">(Only in jpg)</span></label>
										<input type="file" class="form-control" name="media_photo" accept="image/*">
									</div><!--form-group-->
								</div><!--col-sm-4-->
								<div class="col-sm-4">
									<div class="form-group">
										<label>Media Size in Gb</label>
										<input type="text" class="form-control" name="media_size" required>
									</div><!--form-group-->
								</div><!--col-sm-4-->
							</div><!--row-->
							<br>
							<h2 class="form_title">Proof Image<sup>*</sup></h2>
							<div class="row">
								<div class="col-sm-4">
									<div class="form-group">
										<label>Signature Image <span class="secondary_text">(Please upload the image of your signature.)</span></label>
										<input type="file" class="form-control" name="sig_image" accept="image/*">
									</div><!--form-group-->
								</div><!--col-sm-4-->
								<div class="col-sm-4">
									<div class="form-group">
										<label>ID Proof <span class="secondary_text">(Please upload image of your adhar card.)</span></label>
										<input type="file" class="form-control" name="id_proof" accept="image/*">
									</div><!--form-group-->
								</div><!--col-sm-4-->
							</div>
						</div> <!-- form-border -->

						<div class="form_border">
							<div class="row">
								<div class="col-sm-12 col-md-12">
									<div align="center">
										<button type="submit" name="submit" id="submit-button" class="btn btn-primary">Submit</button>
									</div>
								</div><!--col-sm-6-->
							</div><!--row-->
						</div><!--form-border-->
					</form>
					<div class="e-msg"></div>

					<div class="loading">
						<div class='loader' id='loader'>
							<div class="bg"></div>
							<div class='circle'></div>
							<div class='circle'></div>
							<div class='circle'></div>
							<div class='circle'></div>
							<div class='circle'></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<h6 align="center">Do not submit confidential information such as credit card details and account passwords</h6>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	
	<script type="text/javascript">

	  $('.loading').hide();
	  
	  $('form.employee-registration').submit(function(e) {
	    $('.loading').show();
	    e.preventDefault();
	    var formData = $(this).serialize();
	    $.ajax({
	      'data' : formData+'&action=employeereg',
	      'url' : 'insert-form-details.php',
	      'type' : 'post',
	      'success' : function(response) { 
	        var json = JSON.parse(response);
	        if(!json.error) {
	          $('div.e-msg').addClass('success').removeClass('error').text(json.message);
	          var access_token = btoa(json.nominee_id);
	          setTimeout(function(){
		        window.location.href = "employee-registration.php";
	          }, 5000);
	        }
	        else {
	          $('div.e-msg').addClass('error').removeClass('success').text(json.message);
	        }
	        $('.loading').hide();         
	      }
	    });
	  });

	</script>



<?php include 'includes/footer.php'; ?>