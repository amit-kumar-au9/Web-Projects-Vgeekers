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
		<center><h2 class="title1" style="color: green;">All Vendors</h2></center>		
		<table class="responstable">
		  	<thead>
				<tr style="border:5px solid #024457;">
					<th data-th="Driver details" style="width:auto"><span>ID</span></th>
					<th style="width: auto">Vendor ID</th>
					<th style="width:auto">Name</th>
					<th style="width:auto">Phone Number</th>
					<th style="width:auto">Email Id</th>
					<th style="width:auto">City</th>
					<th style="width:auto">Category</th>
					<th style="width:auto">Rating</th>
					<th style="width:auto">No. of Strike</th>
					<th style="width:auto">Strike Information</th>
					<th style="width:auto">Active</th>
					<th style="width:auto">Approved</th>
					<th style="width:auto">Unblock/Block</th>
					<th style="width:auto">Notification</th>
					<th style="width:auto">Penalty</th>
					<th style="width:auto">Wallet</th>
                    <th style="width:auto">Change Category</th>
					<th style="width:auto">Vendor Information</th>
					<th style="width:auto">Delete Vendor</th>
				</tr>
		  	</thead>
		  	<tbody>
		  		<?php 
					include 'include/connection.php';
					$checkQuery = "SELECT * FROM vendor_details JOIN wallet ON vendor_details.user_id = wallet.user_id WHERE send_approval = '1' AND is_approved != '0' ORDER BY vendor_details.user_id DESC";
					$checkResult = mysqli_query($conn, $checkQuery);
					$no = 1;
					while ($row = $checkResult -> fetch_assoc()) {
	            ?>
						<tr>
							<td><?php echo $no++; ?></td>
							<td><?php echo $row['user_id']; ?></td>
							<td><?php echo $row['name']; ?></td>
							<td><?php echo $row['phone']; ?></td>
							<td><?php echo $row['email']; ?></td>
							<td><?php echo $row['city']; ?></td>
							<td>
							    <?php 
            				        $someArray = json_decode($row['category'], true);
                                    foreach($someArray as $value){
                                        echo $value["name"]."<br>";    
                                    }
                                    $user_id = $row['user_id'];
                                ?>
							</td>
							<td><?php echo $row['rating']; ?></td>
							<td><span <?php if($row['strike'] >9){ echo "style='color:white;background-color:red'";} ?> ><?php echo $row['strike']; ?></span></td>
							<td>
								<form action="view_vendor_strike_info.php" method="post">
									<input type="hidden" name="user_id" value="<?php echo $row['user_id']; ?>">
									<button type="submit" class="form-control btn btn-success" >View</button>
								</form>
							</td>
							<input type="hidden" id="my_userId" value="<?php echo $row['user_id']; ?>">
							<td>
							    <label class="switch">
                                    <input type="checkbox" name="active" <?php if($row['active'] == '1'){ echo "checked";} ?> onclick="change_active(<?php echo $user_id; ?>)">
                                    <span class="slider round"></span>
                                </label>
                            </td>
                            <td>
                                <label class="switch">
                                    <input type="checkbox" <?php if($row['is_approved'] != '0'){ echo "checked";} ?> onclick="change_approve(<?php echo $user_id; ?>)">
                                    <span class="slider round"></span>
                                </label>
                            </td>
                            <td>
                                <label class="switch">
	                                <input type="checkbox" <?php if($row['is_approved'] == '2'){ echo "checked";} ?> onclick="change_block(<?php echo $user_id; ?>)">
	                                <span class="slider round"></span>
                                </label>
							</td>
							<td>
				  				<form method="post" action="send_notification.php">
				  					<input type="hidden" name="user_id" value="<?php echo $row['user_id']; ?>">
				  					<input type="hidden" name="token" value="<?php echo $row['token']; ?>">
				  					<button type="submit" class="btn btn-primary form-control" style="width: 100%">Send</button>
				  				</form>
				  			</td>
				  			<td>
				  				<form method="post" action="add_vendor_penalty.php">
				  					<input type="hidden" name="user_id" value="<?php echo $row['user_id']; ?>">
				  					<input type="hidden" name="token" value="<?php echo $row['token']; ?>">
				  					<input type="hidden" name="total_balance" value="<?php echo $row['total_balance']; ?>">
				  					<input type="hidden" name="wallet_id" value="<?php echo $row['wallet_id']; ?>">
				  					<input type="hidden" name="name" value="<?php echo $row['name']; ?>">
				  					<input type="hidden" name="set" value="1">
				  					<button type="submit" class="btn btn-primary form-control" style="width: 100%">Deduct</button>
				  				</form>
				  			</td>
							<td>
								<form action="view_vendor_wallet.php" method="post">
									<input type="hidden" name="user_id" value="<?php echo $row['user_id']; ?>">
									<button type="submit" class="form-control btn btn-success" >View</button>
								</form>
							</td>
                            <td>
                                <form action="change_category.php" method="post">
                                    <input type="hidden" name="user_id" value="<?php echo $row['user_id']; ?>">
                                    <button type="submit" class="form-control btn btn-success" >View</button>
                                </form>
                            </td>
							<td>
								<form action="view_vendor_all_details.php" method="post">
									<input type="hidden" name="user_id" value="<?php echo $row['user_id']; ?>">
									<button type="submit" class="form-control btn btn-success" >View</button>
								</form>
							</td>
							<td>
								<button type="submit" class="form-control btn btn-danger" name="delete" id="deleteVendor" onclick="delete_vendor(<?php echo $user_id; ?>)">Delete</button>
							</td>
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
    				<form class="vendorActive">
    			        <input type="hidden" id = "vactive" name="user_id" value="">
    					<button type="submit" class="btn btn-primary">Yes</button>
    					<button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="no_change()">No</button>
    				</form>
    			</div>
    		</div>
    	</div>
    </div>
    
    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
    			    <form class="vendorApprove">
    			        <input type="hidden" id = "vapprove" name="user_id" value="">
    					<button type="submit" class="btn btn-primary">Yes</button>
    					<button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="no_change()">No</button>
    				</form>
    			</div>
    		</div>
    	</div>
    </div>
    
    <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
    			    <form class="vendorBlock">
    			        <input type="hidden" id="vblock" name="user_id" value="">
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
    			    <form method="post">
    					<input type="hidden" id= "vdelete" name="user_id" value="">
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
            $('#vactive').val(user_id);
        }
        function change_approve(user_id){
            $("#exampleModal2").modal('show');
            $('#vapprove').val(user_id);
        }
        function change_block(user_id){
            $("#exampleModal3").modal('show');
            $('#vblock').val(user_id);
        }
        function delete_vendor(user_id){
            $("#exampleModal4").modal('show');
            $('#vdelete').val(user_id);
        }
        function no_change(){
            location.reload(true);
        }
        
        $('form.vendorActive').submit(function(e){
			e.preventDefault();
			var formdata = $(this).serialize();
			$.ajax({
				'type' : 'post',
				'url' : 'update_vendor_active.php',
				'data' : formdata,
				success : function(response){
					location.reload(true);
				}
			});
		});
		
		$('form.vendorApprove').submit(function(e){
			e.preventDefault();
			var formdata = $(this).serialize();
			$.ajax({
				'type' : 'post',
				'url' : 'update_vendor_approved.php',
				'data' : formdata,
				success : function(response){
					location.reload(true);
				}
			});
		});
		
		$('form.vendorBlock').submit(function(e){
			e.preventDefault();
			var formdata = $(this).serialize();
			$.ajax({
				'type' : 'post',
				'url' : 'update_vendor_block.php',
				'data' : formdata,
				success : function(response){
					location.reload(true);
				}
			});
		});
		
		$('form.vendorDelete').submit(function(e){
			e.preventDefault();
			var formdata = $(this).serialize();
			$.ajax({
				'type' : 'post',
				'url' : 'delete_vendor.php',
				'data' : formdata,
				success : function(response){
					location.reload(true);
				}
			});
		});
		
</script>
<?php
    if(isset($_POST['delete'])){ //check if form was submitted
    
        $id=$_POST['user_id'];
    
        if($id!=""){
          $checkQuery = "DELETE FROM vendor_details WHERE user_id='".$id."'";
          if (mysqli_query($conn, $checkQuery)) {
            echo "<script>window.location.href='all_vendor.php';</script>";
          }
        }
      }
?>