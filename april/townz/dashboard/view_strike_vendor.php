<?php include "include/header.php";?>
<div id="page-wrapper">
	<div class="main-page">
		<br>
		<center><h2 class="title1" style="color: green;">All Vendors</h2></center>		
		<table class="responstable">
		  	<thead>
				<tr style="border:5px solid #024457;">
					<th data-th="Driver details" style="width:auto"><span>ID</span></th>
					<th style="width:auto">Vendor ID</th>
					<th style="width:20%">Name</th>
					<th style="width:auto">Phone Number</th>
					<th style="width:auto">Email Id</th>
					<th style="width:auto">No. of Strikes</th>
					<th style="width:50%">Strike Information</th>
				</tr>
		  	</thead>
		  	<tbody>
		  		<?php 
					include 'include/connection.php';
					$checkQuery = "SELECT * FROM vendor_details WHERE strike >9 ";
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
							<td><?php echo $row['strike']; ?></td>
							<td>
								<form action="view_vendor_strike_info.php" method="post">
									<input type="hidden" name="user_id" value="<?php echo $row['user_id']; ?>">
									<button type="submit" class="form-control btn btn-success" >View</button>
								</form>
							</td>
						</tr>
				<?php 
					}
				?>
		  	</tbody>
		</table>
	</div>
	
<?php include "include/footer.php"?>
