<?php

	error_reporting(0);
	
	$token = base64_decode($_GET['token']);

	if($token == ''){
		echo "<script>
				window.location.href='index.php';
			</script>";
	}

	$token = explode('&', $token);
	$name = explode('=', $token[0]);
	$name = $name[1];
	$class = explode('=', $token[1]);
	$class = $class[1];
	$mobile = explode('=', $token[2]);
	$mobile = $mobile[1];

	include 'connection.php';

	$checkQuery = "SELECT * FROM student_reg WHERE student_phone = '$mobile' ";
	$checkResult = mysqli_query($conn, $checkQuery);

	if(mysqli_num_rows($checkResult) < 1){
		echo "<script>
				window.location.href='index.php';
			</script>";
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Swastik</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container registration_form">
		<h2 align="center">Registration Form</h2>
		<form class="form-phase3">
			<h4 class="red">Personal Details</h4>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label class="fw_600" for="student_name"><span class="red">*</span> Student Name:</label>
						<input type="text" class="form-control" placeholder="Student Name" name="student_name" value="<?php echo $name; ?>" readonly required>
					</div>
				</div>
			  	<!--  col-md-6   -->

				<div class="col-md-6">
					<div class="form-group">
						<label class="fw_600" for="student_email"><span class="red">*</span> Email:</label>
						<input type="email" class="form-control" placeholder="Email Id" id="email" name="student_email" required>
					</div>
				</div>
				<!--  col-md-6   -->
				
				<div class="col-md-6">
					<div class="form-group">
						<label class="fw_600" for="student_re_email"><span class="red">*</span> Retype Email:</label>
						<input type="email" class="form-control" placeholder="Retype Email Id" id="confirm_email" name="student_re_email" required>
						<span id='message'></span>
					</div>
				</div>
			  	<!--  col-md-6   -->

			  	<div class="col-md-6">
			    	<div class="form-group">
			      		<label class="fw_600" for="student_phone"><span class="red">*</span> Mobile Number</label>
			      		<input type="tel" class="form-control" pattern="[0-9]{10}" maxlength="10" minlength="10" name="student_phone" placeholder="Mobile Number" value="<?php echo $mobile; ?>" readonly required>
			    	</div>
			  	</div>
			  	<!--  col-md-6   -->
			  	
			  	<div class="col-md-6">
			    	<div class="form-group">
			      		<label class="fw_600" for="student_dob"><span class="red">*</span> DOB</label>
			      		<input type="date" class="form-control" name="student_dob" placeholder="DOB" required>
			    	</div>
			  	</div>
			  	<!--  col-md-6   -->

				<div class="col-md-6">
					<div class="form-group">
						<label class="fw_600" for="student_gender"><span class="red">*</span> Gender</label>
						<div class="form-control">
							<label class="checkbox-inline">
						      	<input type="radio" name="student_gender" value="male" checked>Male
						    </label>
						    <label class="checkbox-inline">
						      	<input type="radio" name="student_gender" value="Female">Female
						    </label>
						</div>
					</div>
				</div>
			  	<!--  col-md-6   -->
				<div class="col-md-6">
					<div class="form-group">
						<label class="fw_600" for="student_class"><span class="red">*</span> Student's Class in the Academic Year 2020-21</label>
						<select class="form-control" name="class" readonly>
							<option value="<?php echo $class; ?>"><?php echo $class; ?>th</option>
						</select>
					</div>
				</div>
			</div>
			<h4 class="red">Address Details</h4>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label class="fw_600" for="address1"><span class="red">*</span> Address Line 1:</label>
						<input type="text" class="form-control" placeholder="Address Line 1" name="address1" required>
					</div>
				</div>
			  	<!--  col-md-6   -->

				<div class="col-md-6">
					<div class="form-group">
						<label class="fw_600" for="address2"><span class="red">*</span> Address Line 2:</label>
						<input type="text" class="form-control" placeholder="Address Line 2" name="address2" required>
					</div>
				</div>
				<!--  col-md-6   -->
				
				<div class="col-md-6">
					<div class="form-group">
						<label class="fw_600" for="country">Country:</label>
						<input type="text" class="form-control" placeholder="Country" name="country">
					</div>
				</div>
			  	<!--  col-md-6   -->

			  	<div class="col-md-6">
			    	<div class="form-group">
			      		<label class="fw_600" for="state">State:</label>
			      		<input type="text" class="form-control" placeholder="State" name="state">
			    	</div>
			  	</div>
			  	<!--  col-md-6   -->
			  	
			  	<div class="col-md-6">
			    	<div class="form-group">
			      		<label class="fw_600" for="district">District:</label>
			      		<input type="text" class="form-control" placeholder="District" name="district">
			    	</div>
			  	</div>
			  	<!--  col-md-6   -->

			  	<div class="col-md-6">
			    	<div class="form-group">
			      		<label class="fw_600" for="city">City:</label>
			      		<input type="text" class="form-control" placeholder="City" name="city">
			    	</div>
			  	</div>
			  	<!--  col-md-6   -->

			  	<div class="col-md-6">
			    	<div class="form-group">
			      		<label class="fw_600" for="pincode">Pin Code:</label>
			      		<input type="tel" class="form-control" pattern="[0-9]{6}" maxlength="6" minlength="6" name="pincode" placeholder="Pin Code">
			    	</div>
			  	</div>
			  	<!--  col-md-6   -->
			</div>
			<h4 class="red">Exam Details</h4>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label class="fw_600" for="test_date">Test Date:</label>
						<input type="date" class="form-control" placeholder="Test Date" name="test_date" value="2020-05-23" readonly required>
					</div>
				</div>
			  	<!--  col-md-6   -->

				<div class="col-md-6">
					<div class="form-group">
						<label class="fw_600" for="test_type">Test Type:</label>
						<input type="text" class="form-control" placeholder="Test Type" name="test_type" value="Online" readonly required>
					</div>
				</div>
				<!--  col-md-6   -->
			</div>
			<h4 class="red">School Details</h4>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label class="fw_600" for="test_date">School Name:</label>
						<input type="text" class="form-control" placeholder="School Name" name="school_name">
					</div>
				</div>
			  	<!--  col-md-6   -->

				<div class="col-md-6">
					<div class="form-group">
						<label class="fw_600" for="test_type">School Address:</label>
						<input type="text" class="form-control" placeholder="School Address" name="school_address">
					</div>
				</div>
				<!--  col-md-6   -->
			</div>
			<h4 class="red">Other Details</h4>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label class="fw_600" for="test_date"><span class="red">*</span> Father's Phone Number:</label>
						<input type="tel" class="form-control" placeholder="Father Number" pattern="[0-9]{10}" maxlength="10" minlength="10" name="father_phone_no" required>
					</div>
				</div>
			  	<!--  col-md-6   -->

				<div class="col-md-6">
					<div class="form-group">
						<label class="fw_600" for="test_type">Mother's Phone Number:</label>
						<input type="tel" class="form-control" placeholder="Mother Number" pattern="[0-9]{10}" maxlength="10" minlength="10" name="mother_phone_no">
					</div>
				</div>
				<!--  col-md-6   -->

				<div class="col-md-6">
					<div class="form-group">
						<label class="fw_600" for="test_type">Father's Email:</label>
						<input type="email" class="form-control" placeholder="Father Email" name="father_email">
					</div>
				</div>
				<!--  col-md-6   -->
			</div>
			<h4 class="red"><span class="red">*</span> Where did you get to know about us</h4>
			<div class="row">
				<div class="col-md-12">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Write it here" name="where_did_you" required>
					</div>
				</div>
			  	<!--  col-md-6   -->
			</div>
			<center>
				<button type="submit" class="btn btn-primary form-control btn_submit" name="submitPhase" id="btnSubmit1">Submit</button>
			</center>
			<div class="e-msg-submit"></div>
		</form>
	</div>

</body>
</html>
<script type="text/javascript">
	
	$('#email, #confirm_email').on('keyup', function () {

	    if ($('#email').val() == $('#confirm_email').val()) {
	      
	      $('#message').html('Matching').css('color', 'green');
	      $("#btnSubmit1").attr("disabled", false);
	    
	    } 
	    else {
	      $("#btnSubmit1").attr("disabled", true);
	      $('#message').html('Not Matching').css('color', 'red');
	    }
  	});

  	$('form.form-phase3').submit(function(e){
		e.preventDefault();
		var formdata = $(this).serialize();
		$.ajax({
			'type' : 'post',
			'url' : 'insert-phase3.php',
			'data' : formdata,
			success : function(response){
				var json = JSON.parse(response);
				if(!json.error){
					$('div.e-msg-submit').addClass('success').removeClass('error').text(json.message);
				}
				else{
					$('div.e-msg-submit').addClass('error').removeClass('success').text(json.message);
				}
			}
		});
	});

</script>