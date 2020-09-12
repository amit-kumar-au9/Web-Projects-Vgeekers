<?php 
    if(!isset($_POST['set'])){
        echo"<script>window.location.href='index.php';</script>";
    }
?>
<?php include "include/header.php";?>
<div id="page-wrapper">
	<div class="main-page">
		<br>
		<center>
			<h2 class="title1" style="color: red;">Add New Penalty</h2>
		</center>
		<div class="container">
			<div class="row">
			    <form method = "post" class="col-md-12">
					<div class="form-group col-md-4">
						<label class="control-label" for="textinput">Penalty Amount<span class="star">*<span></label>  
						<div>                     
							<input id="textinput" name="penalty" type="number" min="1" placeholder="1" class="form-control input-md" required>
							<input type="hidden" name="user_id" value="<?php echo $_POST['user_id']; ?>">
							<input type="hidden" name="token" value="<?php echo $_POST['token']; ?>">
							<input type="hidden" name="wallet_id" value="<?php echo $_POST['wallet_id']; ?>">
							<input type="hidden" name="name" value="<?php echo $_POST['name']; ?>">
							<input type="hidden" name="total_balance" value="<?php echo $_POST['total_balance']; ?>">
						</div>
					</div>
					<div class="form-group col-md-4">
						<label class="control-label" for="textinput">Heading<span class="star">*<span></label>  
						<div>                     
							<input id="textinput" name="heading" type="text" placeholder="Penalty Heading" class="form-control input-md" required>
						</div>
					</div>
					<div class="form-group col-md-4">
						<label class="control-label" for="textinput">Lead ID</label>  
						<div>                     
							<input id="textinput" name="lead_id" type="number" min="1" placeholder="Lead Id" class="form-control input-md">
						</div>
					</div>
					<div class="form-group col-md-12">
						<label class="control-label" for="textinput">Reason<span class="star">*<span></label>  
						<div>                     
							<textarea id="textinput" name="reason" rows="4" type="text" placeholder="Write the Penalty Reason here" class="form-control input-md" required></textarea>
						</div>
					</div>
					<br><br>
					<div class="form-group col-md-12" align="center">
						<div style="width:30%">
							<button name="addPenalty" class="btn btn-success form-control" type="submit">ADD</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<?php include "include/footer.php"?>
<?php 
    if(isset($_POST['addPenalty'])){
        include 'include/connection.php';
        
        $body = $_POST['reason'];
        $penalty = $_POST['penalty'];
        $title = $_POST['heading'];
        $user_id = $_POST['user_id'];
        $lead_id = $_POST['lead_id'];
        $name = $_POST['name'];
        $wallet_id = $_POST['wallet_id'];
        $total_balance = $_POST['total_balance'];
        $amount = $total_balance - $penalty; 
        $updateWallet = "UPDATE wallet SET total_balance = '".$amount."' WHERE user_id = '".$user_id."'";
        mysqli_query($conn, $updateWallet);
        
        $date = date('Y/m/d');
    	$time = date("h:i:s A");
    	$desc = "Penalty for Lead".$lead_id;
    	
    	$token = array($_POST['token']);
    	$user = array($user_id);
    	include '../api/notification.php';
    	send_notification($body, $title, $token);
    	include '../api/insert_notification.php';
    	set_notification($body, $title, $user);
    	$last_id = mysqli_insert_id($conn);
    	$orderId = "P".$user_id.$last_id;
		$insertOrder = "INSERT INTO order_txn (wallet_id, amount, currency, status, description, date, type, time, order_id, name) VALUES ('".$wallet_id."', '".$penalty."', 'INR', 'Penalty', '".$desc."', '".$date."', 'penalty', '".$time."', '".$orderId."', '".$name."')";
    	mysqli_query($conn, $insertOrder);
    	
    	echo"<script>window.location.href='all_vendor.php';</script>";
    }

?>