<?php include 'include/header.php'; ?>


<!-- inner page banner -->
<section class="inner_page_banner text-center pt-4">
	<h2 class="page_heading text-uppercase pt-md-5 pt-sm-4">Contact Page</h2>
	<h4 class="text-uppercase pt-2"><a href="index.php">Home</a> - Contact Page</h4>
</section>
<!-- //inner page banner -->

<!-- Contact -->
<section class="contact py-5" id="contact-us">
	<h3 class="heading text-center text-uppercase">Contact Us</h3>
	<p class="heading-bottom text-center font-italic mb-5">Foam Business</p>
		<div class="container">
			<div class="row contact-main">
				<div class="col-md-12 contact-left text-center">
					<address>
						<p><i class="fas fa-map-marker-alt" aria-hidden="true"></i> Foam Business Solutions</p>
						<p>Street Adress</p>
						<p>State, India</p>
						<p><i class="fas fa-phone" aria-hidden="true"></i>+(14) 012 345 6789</p>
						<p><i class="fas fa-envelope" aria-hidden="true"></i> <a href="mailto:info@example.com">info@examplemail.com</a></p>
					</address>
					<div class="social-icons">
						<ul>
							<li><a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fab fa-pinterest-p" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fab fa-google-plus-g" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</div>
				
				<div class="contact-wthree">
					<form method="post">
						<input type="text" name="name" placeholder="Full Name" required=""> 
						<input class="email" name="email" type="email" placeholder="Email" required="">
						<input type="number" name="phone" placeholder="Phone Number" required=""> 
						<input class="password" name="subject" type="text" placeholder="Subject" required="">
						<textarea name="message" placeholder="Message" required=""></textarea>
						<input type="submit" value="SUBMIT" name="contact">
					</form>
				</div>
			</div>
		</div>
</section>
<!-- //Contact -->

<?php include 'include/footer.php'; ?>
<?php 
if(isset($_POST['contact'])){ //check if form was submitted
	include 'dashboard/include/connection.php';
    $name = test_input($_POST['name']);
    $email = test_input($_POST['email']);
    $phone = test_input($_POST['phone']);
    $subject = test_input($_POST['subject']);
    $message = test_input($_POST['message']);

    if($name!="" && $email!="" && $phone!="" && $subject!="" && $message!=""){

    $checkQuery = "INSERT INTO contactus (name, email, phone, subject, message) VALUES ('".$name."', '".$email."', '".$phone."', '".$subject."', '".$message."')";
    $checkResult=mysqli_query($conn, $checkQuery);
    $page = $_SERVER['PHP_SELF'];
    $sec = "1";
    header("Refresh: $sec; url=$page");
    }   
    else{
        echo "<script>window.alert('Fill all the required details');window.location.href='contact.php';</script>";
    }
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>