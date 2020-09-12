<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<link rel="stylesheet" type="text/css" href="form.css">
	
	<section class="jumbotron content-section" style="padding-top: 100px; margin-bottom: 0px;">
  		<div class="container">
      		<div class="row">
            	<div class="col-sm-12">
					<form class="form_section basic-requirements" autocomplete="off">
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
										<input type="email" class="form-control" id="email" name="email" placeholder="Primary Email ID"  required>
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
							<h2 class="form_title">Please Share Your Additional Information<sup>*</sup></h2>
							<div class="row">
								<div class="col-sm-4">
									<div class="form-group">
										<label>Interested Location<sup>*</sup></label>
										<input type="text" class="form-control" name="intloc" placeholder="Interested Location"  required>
									</div><!--form-group-->
								</div><!--col-sm-3-->
								<div class="col-sm-4">
									<div class="form-group">
										<label>Interested in Shifts<sup>*</sup></label>
										<select class="form-control" name="shifting">
											<option disabled="true" selected="true">Choose Your Option</option>
											<option value="yes">Yes</option>
											<option value="no">No</option>
										</select>
									</div><!--form-group-->
								</div><!--col-sm-3-->
								<div class="col-sm-4">
									<div class="form-group">
										<label>Willing to Relocate?<sup>*</sup></label>
										<select class="form-control" name="relocation">
											<option disabled="true" selected="true">Choose Your Option</option>
											<option value="yes">Yes</option>
											<option value="no">No</option>
										</select>
									</div><!--form-group-->
								</div><!--col-sm-3-->
								<div class="col-sm-4">
									<div class="form-group">
										<label>Upload Your CV<sup>*</sup></label>
										<input type="file" name="usercv" class="form-control" accept="application/pdf" required>
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
	  
	  $('form.basic-requirements').submit(function(e) {
	    $('.loading').show();
	    e.preventDefault();
	    // var start = Date.now();
	    var formdata = new FormData(this);
	    // var formData = $(this).serialize();
	    formdata.append('action', 'basic');
	    $.ajax({
	      'data' : formdata,
	      'url' : 'insert-form-details.php',
	      'type' : 'post',
		  'contentType' : false,
		  'cache' : false,
		  'processData' :false,
	      'success' : function(response) { 
	        var json = JSON.parse(response);
	        if(!json.error) {
	          $('div.e-msg').addClass('success').removeClass('error').text(json.message);
	          setTimeout(function(){
		        window.location.href = "job-seeker.php";
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