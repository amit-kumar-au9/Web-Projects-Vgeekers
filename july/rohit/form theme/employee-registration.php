<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

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
										<input type="text" class="form-control" name="lname" placeholder="Last Name" required>
									</div><!--form-group-->
								</div><!--col-sm-4-->
								<div class="col-sm-4">
									<div class="form-group">
										<label>Primary Email ID<sup>*</sup></label>
										<input type="email" class="form-control" id="email" name="email" onchange="checkEmail()" placeholder="Primary Email ID"  required>
										<span class="check-email-error"></span>
									</div><!--form-group-->
								</div><!--col-sm-4-->
							</div><!--row-->
							<div class="row">
							</div><!--row-->
							<div class="row">
								<div class="col-sm-4">
									<div class="form-group">
										<label>Mobile No.<sup>*</sup></label>
										<input type="text" onkeypress="return (event.charCode == 8 || event.charCode == 0 || event.charCode == 13) ? null : event.charCode >= 48 && event.charCode <= 57 || event.charCode==43 || event.charCode==45" class="form-control" name="mobno" placeholder="Mobile No."  required>
									</div><!--form-group-->
								</div><!--col-sm-3-->
							</div>
							<br>
							<h2 class="form_title">Kindly Share your Requirements<sup>*</sup></h2>
							<div class="row">
								<div class="col-sm-4">
									<div class="form-group">
										<label>Number of position available<sup>*</sup></label>
										<input type="number" class="form-control" name="vacancy" placeholder="How Many Positions are available"  required>
									</div><!--form-group-->
								</div><!--col-sm-3-->
								<div class="col-sm-4">
									<div class="form-group">
										<label>Location<sup>*</sup></label>
										<input type="text" class="form-control" name="location" placeholder="Job Location"  required>
									</div><!--form-group-->
								</div><!--col-sm-3-->
								<div class="col-sm-4">
									<div class="form-group">
										<label>Minimum Experience Required<sup>*</sup></label>
										<input type="number" class="form-control" name="experience" placeholder="Experience (in years)"  required>
									</div><!--form-group-->
								</div><!--col-sm-3-->
								<div class="col-sm-4">
									<div class="form-group">
										<label>English Communication Level required<sup>*</sup></label>
										<select class="form-control" name="communication">
											<option disabled="true" selected="true">Choose Your Option</option>
											<option value="basic">Basic</option>
											<option value="intermediate">Intermediate</option>
											<option value="proficient">Proficient</option>
										</select>
									</div><!--form-group-->
								</div><!--col-sm-3-->
								<div class="col-sm-4">
									<div class="form-group">
										<label>Salaries Offered<sup>*</sup></label>
										<input type="text" class="form-control" name="salary" placeholder="Salary Offered"  required>
									</div><!--form-group-->
								</div><!--col-sm-3-->
								<div class="col-sm-4">
									<div class="form-group">
										<label>Expected Timelines to join<sup>*</sup></label>
										<input type="text" class="form-control" name="timelines" placeholder="Expected Timelines to Join"  required>
									</div><!--form-group-->
								</div><!--col-sm-3-->
								<div class="col-sm-6">
									<div class="form-group">
										<label>Other Benefits Offered<sup>*</sup></label>
										<textarea class="form-control" name="benefits" placeholder="Benefits for Employee" row="4" required></textarea>
									</div><!--form-group-->
								</div><!--col-sm-3-->
							</div><!--row-->  
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