<?php include "include/header.php";?>
	<div id="page-wrapper" style="background: white;">
		<div class="main-page" style="background: white;">
			<center><h2 class="title1" style="color: red;">Change Home Page Details</h2></center>
			<div class="forms">
				<?php 
		            include 'conn.php';
		            $checkUsers = "SELECT * FROM home_page_details WHERE id = 1;";
		            $resultUsers = mysqli_query($con, $checkUsers);
		            $row = $resultUsers -> fetch_assoc();
		          ?>
				<form style="margin: 10px" method="post">
					<div class="form-group" style="width: 80%;">
			            <label for="exampleFormControlTextarea1" style="color: red">Address</label>
			            <input class="form-control"  rows="8" placeholder="Write Your Address" name="address" type="text" value="<?php echo $row['address']; ?>" required></input>
		          	</div>
		          	<div class="form-group" style="width: 80%;">
			            <label for="exampleFormControlTextarea1" style="color: red">Email Id</label>
			            <input class="form-control"  rows="8" placeholder="Write Your Email" name="email" type="email" value="<?php echo $row['email']; ?>"  required></input>
		          	</div>
		          	<div class="form-group" style="width: 80%;">
			            <label for="exampleFormControlTextarea1" style="color: red">Phone No.</label>
			            <input class="form-control"  rows="8" placeholder="Write your phone number" name="phone" type="tel" pattern="[0-9]{10}" maxlength="10" minlength="10" value="<?php echo $row['phone']; ?>"  required></input>
		          	</div>
		          	<button type="submit" class="btn btn-primary" style="margin: 10px;" name="updateInfo">Update</button>
		        </form>	
			</div>
		</div>
	</div>
    <br><br><br>
<?php include "include/footer.php";?>

<?php 
    // Update Home Page Details

    if(isset($_POST['updateInfo'])){ //check if form was submitted
    
        $email = $_POST['email'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        
        $checkQuery = "UPDATE home_page_details SET phone = '".$phone."', email = '".$email."', address = '".$address."' WHERE id = 1 ";  
    
        if (mysqli_query($con, $checkQuery)) {
            echo "<script>window.location.href='update_address_email_phone.php';</script>";
        }
    
        else{
            echo "<script>window.location.href='update_address_email_phone.php';</script>";
        }

    }
?>