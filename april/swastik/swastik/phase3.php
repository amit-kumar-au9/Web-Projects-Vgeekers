<?php  
    session_start();
    // if(!isset($_SESSION['islogin']) && !isset($_SESSION['id'])){
    //     echo "<script>window.alert('Session Expired!!! Please Login');window.location.href='login.php';</script>";
    // }
    $_SESSION['id'] = 1;
    $_SESSION['name'] = "Amit Kumar";
    $_SESSION['phone'] = 8218512255;
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
		<form method="post">
			<h4 class="red">Personal Details</h4>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label class="fw_600" for="student_name"><span class="red">*</span> Student Name:</label>
						<input type="text" class="form-control" placeholder="Student Name" name="student_name" value="<?php echo $_SESSION['name']; ?>" readonly required>
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
			      		<input type="tel" class="form-control" pattern="[0-9]{10}" maxlength="10" minlength="10" name="student_phone" placeholder="Mobile Number" value="<?php echo $_SESSION['phone']; ?>" readonly required>
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
						<div class="form-control">
							<label class="checkbox-inline">
						      	<input type="radio" name="student_class" value="9" checked>9th
						    </label>
						    <label class="checkbox-inline">
						      	<input type="radio" name="student_class" value="10">10th
						    </label>
						    <label class="checkbox-inline">
						      	<input type="radio" name="student_class" value="11">11th
						    </label>
						    <label class="checkbox-inline">
						      	<input type="radio" name="student_class" value="12">12th
						    </label>
						</div>
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
						<input type="text" class="form-control" placeholder="Test Date" name="test_date" value="23rd May 2020" readonly required>
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
				<input type="hidden" name="id" value="<?php echo $_SESSION['id']; ?>">
				<button type="submit" class="btn btn-primary form-control btn_submit" name="submitPhase" id="btnSubmit1">Submit</button>
			</center>
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

</script>
<?php 
	if (isset($_POST['submitPhase'])) {

		include 'dashboard/include/connection.php';

		$id = $_SESSION['id'];
		$student_email = $_POST['student_email'];
		$student_re_email = $_POST['student_re_email'];
		$student_dob = $_POST['student_dob'];
		$student_gender = $_POST['student_gender'];
		$student_class = $_POST['student_class'];
		$address1 = $_POST['address1'];
		$address2 = $_POST['address2'];
		$country = $_POST['country'];
		$state = $_POST['state'];
		$district = $_POST['district'];
		$city = $_POST['city'];
		$pincode = $_POST['pincode'];
		$test_date = $_POST['test_date'];
		$test_type = $_POST['test_type'];
		$school_name = $_POST['student_name'];
		$school_address = $_POST['school_address'];
		$father_phone_no = $_POST['father_phone_no'];
		$mother_phone_no = $_POST['student_name'];
		$father_email = $_POST['father_email'];
		$where_did_you = $_POST['where_did_you'];

		if ($student_email == $student_re_email) {

			$checkQuery = "UPDATE student_reg SET student_email = '".$student_email."', student_dob = '".$student_dob."', student_gender = '".$student_gender."', student_class = '".$student_class."', address1 = '".$address1."', address2 = '".$address2."', country = '".$country."', state = '".$state."', district = '".$district."', city = '".$city."', pincode = '".$pincode."', test_date = '".$test_date."', test_type = '".$test_type."', school_name = '".$school_name."', school_address = '".$school_address."', father_phone_no = '".$father_phone_no."', mother_phone_no = '".$mother_phone_no."', father_email = '".$father_email."', where_did_you = '".$where_did_you."',phase_flag = 3 WHERE id = '".$id."' ";
			
			if(mysqli_query($conn, $checkQuery)){
        		echo "<script>window.alert('Form Submitted');window.location.href='phase3.php';</script>";
			}

		}else{
            echo "<script>window.alert('Please Enter same email in re type email');window.location.href='phase3.php';</script>";
		}
	}
?>