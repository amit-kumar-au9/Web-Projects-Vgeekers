<?php include "include/header.php";?>
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<br>
				<div class="service">
					<h2 class="title1" style="color: red;margin-left:-30px;">PENDING APPLICATION</h2>
				</div>
				<table class="responstable">
					<thead>
						<tr style="border:5px solid #024457;">
							<th style="width:auto"><span>ID</span></th>
							<th style="width: auto">Vendor ID</th>
							<th style="width:auto">Name</th>
							<th style="width:auto">Phone Number</th>
							<th style="width:auto">Email Id</th>
							<th style="width:auto">City</th>
							<th style="width:100%">View</th>
						</tr>
					</thead>
					<tbody>
						<?php 
							include 'include/connection.php'; 
							$checkQuery = "SELECT * FROM vendor_details WHERE send_approval = '1' AND is_approved = '0'";
							$checkResult = mysqli_query($conn, $checkQuery);
							$no = 1;
							while ($row = $checkResult -> fetch_assoc()) {
			            ?>
								<tr>
									<td><?php echo $no; $no++;?></td>
									<td><?php echo $row['user_id']; ?></td>
									<td><?php echo $row['name']; ?></td>
									<td><?php echo $row['phone']; ?></td>
									<td><?php echo $row['email']; ?></td>
									<td><?php echo $row['city']; ?></td>
						  			<td>
						  				<form method="post" action="check_profile.php">
						  					<input type="hidden" name="user_id" value="<?php echo $row['user_id']; ?>">
						  					<button type="submit" class="btn btn-primary form-control" style="width: 100%">Open</button>
						  				</form>
						  			</td>
								</tr>
						<?php 
							}
						?>
					</tbody>
				</table>
			</div>
		</div>
		<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Remove</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Specify the reason for removing(optional)">
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Remove</button>
						<button type="button" class="btn btn-primary" data-dismiss="modal">Back</button>
					</div>
				</div>
			</div>
		</div>
 <style>
 
 	.btn
 	{
 		width:100%;
 	}
 	td:nth-child(8)
 	{
 		width:100%;
 	}
 	td:nth-child(4)
 	{
 		width:60%;
 	}
 </style>
<?php include "include/footer.php"?>