<?php include "include/header.php";?>
<style>
    .switch {
      position: relative;
      display: inline-block;
      width: 60px;
      height: 34px;
    }
    
    .switch input { 
      opacity: 0;
      width: 0;
      height: 0;
    }
    
    .slider {
      position: absolute;
      cursor: pointer;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-color: #ccc;
      -webkit-transition: .4s;
      transition: .4s;
    }
    
    .slider:before {
      position: absolute;
      content: "";
      height: 26px;
      width: 26px;
      left: 4px;
      bottom: 4px;
      background-color: white;
      -webkit-transition: .4s;
      transition: .4s;
    }
    
    input:checked + .slider {
      background-color: #2196F3;
    }
    
    input:focus + .slider {
      box-shadow: 0 0 1px #2196F3;
    }
    
    input:checked + .slider:before {
      -webkit-transform: translateX(26px);
      -ms-transform: translateX(26px);
      transform: translateX(26px);
    }
    
    /* Rounded sliders */
    .slider.round {
      border-radius: 34px;
    }
    
    .slider.round:before {
      border-radius: 50%;
    }
</style>
<div id="page-wrapper">
	<div class="main-page">
		<br>
		<center><h2 class="title1" style="color: green;">All customers</h2></center>		
		<table class="responstable">
		  	<thead>
				<tr style="border:5px solid #024457;">
					<th data-th="Driver details" style="width:auto"><span>ID</span></th>
					<th style="width: auto">Customer ID</th>
					<th style="width:auto">Name</th>
					<th style="width:auto">Phone Number</th>
					<th style="width:auto">Email Id</th>
					<th style="width:auto">Send Notification</th>
					<th style="width:auto">View Booking Leads</th>
					<th style="width:auto">View Booking Commission</th>
					<th style="width:auto">All Address</th>
					<th style="width:auto">Wallet</th>
					<th style="width:auto">Customer Information</th>
					<!--<th style="width:auto">Unblock/Block</th>-->
					<th style="width:auto">Delete customer</th>
					<th style="width:auto">Time Created</th>
				</tr>
		  	</thead>
		  	<tbody>
		  		<?php 
					include 'include/connection.php';
					$checkQuery = "SELECT * FROM customer_details JOIN customer_wallet ON customer_details.id = customer_wallet.user_id ORDER BY id DESC";
					$checkResult = mysqli_query($conn, $checkQuery);
					$no = 1;
					while ($row = $checkResult -> fetch_assoc()) {
						$id = $row['user_id'];
	            ?>
						<tr>
							<td><?php echo $no++; ?></td>
							<td><?php echo $row['user_id']; ?></td>
							<td><?php echo $row['name']; ?></td>
							<td><?php echo $row['phone']; ?></td>
							<td><?php echo $row['email']; ?></td>
							<td>
				  				<form method="post" action="send_notification_customer.php">
				  					<input type="hidden" name="user_id" value="<?php echo $row['user_id']; ?>">
				  					<input type="hidden" name="token" value="<?php echo $row['token']; ?>">
				  					<button type="submit" class="btn btn-success form-control">Send</button>
				  				</form>
				  			</td>
				  			<td>
				  				<form method="post" action="view_customer_lead.php">
				  					<input type="hidden" name="user_id" value="<?php echo $row['user_id']; ?>">
				  					<button type="submit" class="btn btn-success form-control">View</button>
				  				</form>
				  			</td>
				  			<td>
				  				<form method="post" action="view_customer_commission.php">
				  					<input type="hidden" name="user_id" value="<?php echo $row['user_id']; ?>">
				  					<button type="submit" class="btn btn-success form-control">View</button>
				  				</form>
				  			</td>
							<td>
								<form action="view_customer_address.php" method="post">
									<input type="hidden" name="user_id" value="<?php echo $row['user_id']; ?>">
									<button type="submit" class="form-control btn btn-success" >View</button>
								</form>
							</td>
							<td>
								<form action="view_customer_wallet.php" method="post">
									<input type="hidden" name="user_id" value="<?php echo $row['user_id']; ?>">
									<button type="submit" class="form-control btn btn-success" >View</button>
								</form>
							</td>
							<td>
								<form action="view_customer_details.php" method="post">
									<input type="hidden" name="user_id" value="<?php echo $row['user_id']; ?>">
									<button type="submit" class="form-control btn btn-success" >View</button>
								</form>
							</td>
							<!--<td>-->
							<!--    <label class="switch">-->
       <!--                           <input type="checkbox" name="active" <?php if($row['active'] == '0'){ echo "checked";} ?> onclick="change_active(<?php echo $id; ?>)">-->
       <!--                           <span class="slider round"></span>-->
       <!--                         </label>-->
       <!--                     </td>-->
							<td>
								<button type="submit" class="form-control btn btn-danger" name="delete" id="deletecustomer" onclick="delete_customer(<?php echo $id; ?>)">Delete</button>
							</td>
							<td><?php echo $row['time_created'] ?></td>
						</tr>
				<?php
					}
				?>
		  	</tbody>
		</table>
	</div>
	
    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    	<div class="modal-dialog" role="document">
    		<div class="modal-content">
    			<div class="modal-header">
    				<h5 class="modal-title" id="exampleModalLabel">Accepting</h5>
    				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
    				    <span aria-hidden="true">&times;</span>
    				</button>
    			</div>
    			<div class="modal-body">
    				Are you Sure?
    			</div>
    			<div class="modal-footer">
    				<form class="customerActive">
    			        <input type="hidden" id = "cactive" name="user_id" value="">
    					<button type="submit" class="btn btn-primary">Yes</button>
    					<button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="no_change()">No</button>
    				</form>
    			</div>
    		</div>
    	</div>
    </div>
    
    <div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    	<div class="modal-dialog" role="document">
    		<div class="modal-content">
    			<div class="modal-header">
    				<h5 class="modal-title" id="exampleModalLabel">Accepting</h5>
    				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
    				    <span aria-hidden="true">&times;</span>
    				</button>
    			</div>
    			<div class="modal-body">
    				Are you Sure?
    			</div>
    			<div class="modal-footer">
    			    <form class="customerDelete">
    					<input type="hidden" id= "cdelete" name="user_id" value="">
    					<button type="submit" class="btn btn-primary" name="delete">Yes</button>
    					<button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
    				</form>
    			</div>
    		</div>
    	</div>
    </div>
    
<?php include "include/footer.php"?>

<script>
    function change_active(user_id){
        $("#exampleModal1").modal('show');
        $('#cactive').val(user_id);
    }
    function delete_customer(user_id){
        $("#exampleModal4").modal('show');
        $('#cdelete').val(user_id);
    }
    function no_change(){
        location.reload(true);
    }
    
    $('form.customerActive').submit(function(e){
		e.preventDefault();
		var formdata = $(this).serialize();
		$.ajax({
			'type' : 'post',
			'url' : 'update_customer_active.php',
			'data' : formdata,
			success : function(response){
				location.reload(true);
			}
		});
	});
	
	$('form.customerDelete').submit(function(e){
		e.preventDefault();
		var formdata = $(this).serialize();
		$.ajax({
			'type' : 'post',
			'url' : 'delete_customer.php',
			'data' : formdata,
			success : function(response){
				location.reload(true);
			}
		});
	});
		
</script>