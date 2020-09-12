<?php include "include/header.php";?>
<div id="page-wrapper">
	<div class="main-page">
		<br>
		<center>
			<h2 class="title1" style="color: red;">Add New Lead</h2>
		</center>
		<div class="container">
			<div class="row">
				<!--<div class="col-xs-12 col-sm-12 col-md-8 col-lg-6  column col-sm-offset-0 col-md-offset-2 col-lg-offset-3">-->
					<!--<div class="form-horizontal">-->
					    <form method = "post">
							<!-- Form Name -->
							<!-- Select Basic -->
							<!-- Text input-->
							<div class="form-group col-md-6">
								<label class="control-label" for="exampleFormControlSelect1">Lead Type<span class="star">*<span></label>
								<select class="form-control" name="is_lead" required>
								    <option value="lead">Select Lead Type</option>
									<option value="0">Lead</option>
									<option value="1">Commission</option>
								</select>
							</div>
							<div class="form-group col-md-6">
								<label class="control-label" for="exampleFormControlSelect1">Category Type<span class="star">*<span></label>
								<select class="form-control" name="category" required>
								    <?php 
                                		include 'include/connection.php';
                                		$checkCategory = "SELECT * FROM category";
                                		$resultCategory = mysqli_query($conn, $checkCategory);
                                		while($row = $resultCategory -> fetch_assoc()){
                                	?>
    								        <option value="<?php echo $row['category']; ?>"><?php echo $row['category']; ?></option>
    								<?php 
                                		}
    								?>
								</select>
							</div>
							<div class="form-group col-md-6">
								<label class="control-label" for="textinput"> Lead Name<span class="star">*<span></label>  
								<div>                     
									<input id="textinput" name="name" type="text" placeholder=" Lead Name" class="form-control input-md" required>
								</div>
							</div>
							<div class="form-group col-md-6">
								<label class="control-label" for="textinput"> Customer Name<span class="star">*<span></label>  
								<div>                     
									<input id="textinput" name="customerName" type="text" placeholder=" Customer Name" class="form-control input-md" required>
								</div>
							</div>
							<div class="form-group col-md-6">
								<label class="control-label" for="textinput"> Customer Id<span class="star">*<span></label>  
								<div>                     
									<input id="textinput" name="customer_id" type="number" min="1" placeholder=" Customer Id" class="form-control input-md" required>
								</div>
							</div>
							<div class="form-group col-md-6">
								<label class="control-label" for="exampleFormControlSelect1">City<span class="star">*<span></label>
								<select class="form-control" id="city" name="city" required>
								    <option value="city">Select City</option>
								    <?php 
                                		include 'include/connection.php';
                                		$checkCategory = "SELECT * FROM city";
                                		$resultCategory = mysqli_query($conn, $checkCategory);
                                		while($row = $resultCategory -> fetch_assoc()){
                                	?>
    								        <option value="<?php echo $row['name']; ?>"><?php echo $row['name']; ?></option>
    								<?php 
                                		}
    								?>
								</select>
							</div>
							<div class="form-group col-md-6">
								<label class="control-label" for="textinput"> Location<span class="star">*<span></label>  
								<select id="location" class="form-control" name="location" required>
                                    <option value="location">-- Select Location--</option>
                                </select>
							</div>
							<div class="form-group col-md-6">
								<label class="control-label" for="textinput"> Date<span class="star">*<span></label>  
								<div>                     
									<input id="textinput" name="date" type="date" class="form-control input-md" required>
								</div>
							</div>
							<div class="form-group col-md-6">
								<label class="control-label" for="textinput"> Time<span class="star">*<span></label>  
								<div>                     
									<input id="textinput" name="time" type="time" placeholder="5:30 PM" class="form-control input-md" required>
								</div>
							</div>
							<div class="form-group col-md-6">
								<label class="control-label" for="textinput"> Price<span class="star">*<span></label>  
								<div>                     
									<input id="textinput" name="price" type="number" min="1" placeholder="Price" class="form-control input-md" required>
								</div>
							</div>
							<div class="form-group col-md-6">
								<label class="control-label" for="textinput"> Upper Price<span class="star">*<span></label>  
								<div>                     
									<input id="textinput" name="upperPrice" type="number" min="1" placeholder="Upper Price" class="form-control input-md" required>
								</div>
							</div>
							<div class="form-group col-md-6">
								<label class="control-label" for="textinput"> Lower Price<span class="star">*<span></label>  
								<div>                     
									<input id="textinput" name="lowerPrice" type="number" min="1" placeholder="Lower Price" class="form-control input-md" required>
								</div>
							</div>
							<div class="form-group col-md-6">
								<label class="control-label" for="textinput"> Phone<span class="star">*<span></label>  
								<div>                     
									<input id="textinput" name="phone" type="tel" pattern="[0-9]{10}" placeholder="Phone" maxlength ="10" class="form-control input-md" required>
								</div>
							</div>
							<div class="form-group col-md-6">
								<label class="control-label" for="textinput"> Address<span class="star">*<span></label>  
								<div>                     
									<input id="textinput" name="address" type="text" placeholder="Address" class="form-control input-md" required>
								</div>
							</div>
							<div class="form-group col-md-12">
								<label class="control-label" for="textinput"> Description<span class="star">*<span></label>  
								<div>                     
									<textarea id="textinput" name="dsc" rows= "3" type="text" placeholder="Enter Your Lead Description here" class="form-control input-md" required></textarea>
								</div>
							</div>
							<div class="form-group col-md-12" align="center">
								<div style="width:30%">
									<button id="button1id" name="add" class="btn btn-success form-control">ADD</button>
								</div>
							</div>
						</form>
					<!--</div>-->
				<!--</div>-->
			</div>
		</div>
	</div>
</div>

<?php include "include/footer.php"?>
<script>
    $(document).ready(function(){
        var city = '';
        $('#city').on('change', function(){
            city = $(this).val();
            // console.log(classID);
            if(city){
                $.ajax({
                    type:'POST',
                    url:'getLocation.php',
                    data:'city='+city,
                    success:function(html){
                        $('select#location').html(html);
                    }
                }); 
            }
            else{
                $('#subjectNames').append('<option value=" " >Select subject first</option>');
            }
        });
    });
</script>
<?php 
    if(isset($_POST['add'])){
        include 'include/connection.php';
        $is_lead = $_POST['is_lead'];
        $dsc = $_POST['dsc'];
        $customerName = $_POST['customerName'];
        $customer_id = $_POST['is_lead'];
        $name = $_POST['name'];
        $city = $_POST['city'];
        $location = $_POST['location'];
        $date = $_POST['date'];
        $time = $_POST['time'];
        $price = $_POST['price'];
        $upperPrice = $_POST['upperPrice'];
        $lowerPrice = $_POST['lowerPrice'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $category = $_POST['category'];
        if($is_lead != "lead"){
            if($location != "location"){
                if($city != "city"){
                    $checkQuery = "INSERT INTO lead (city, location, is_lead, customer_id, customerName, name, date, time, price, upperPrice, lowerPrice, phone, address, status, is_accept, category, dsc) VALUES ('".$city."', '".$location."', '".$is_lead."', '".$customer_id."', '".$customerName."', '".$name."', '".$date."', '".$time."', '".$price."', '".$upperPrice."', '".$lowerPrice."', '".$phone."', '".$address."', 'Pending', '0', '".$category."', '".$dsc."')";
                    if(mysqli_query($conn, $checkQuery)){
                        $sendLead = "SELECT * FROM vendor_details WHERE active = '1' AND is_approved = '1'";
                        $resultLead = mysqli_query($conn, $sendLead);
                        while($row = $resultLead -> fetch_assoc()){
                            $someArray = json_decode($row['category'], true);
                            $cat = array();
                            foreach($someArray as $value){
                                $cat[] = $value['name'];   
                            }
                            if(in_array($category, $cat)){
                                $user[] = $row['user_id'];
                                $token[] = $row['token'];
                            }
                        }
                        $title = 'Townz';
                        $body = 'New Lead Added for you';
                        include '../api/notification.php';
                      	send_notification($body, $title, $token);
                      	include '../api/insert_notification.php';
                      	set_notification($body, $title, $user);
                        echo "<script>window.alert('New Lead Is Added');window.location.href='add_lead.php';</script>";    
                    }else{
                        echo "<script>window.alert('Retry');window.location.href='add_lead.php';</script>";
                        }
                }
                else{
                    echo "<script>window.alert('Choose City');window.location.href='add_lead.php';</script>";
                    }
            }else{
                echo "<script>window.alert('Choose Location');window.location.href='add_lead.php';</script>";
                }
        }else{
                echo "<script>window.alert('Choose Lead Type');window.location.href='add_lead.php';</script>";
            }
        
    }

?>