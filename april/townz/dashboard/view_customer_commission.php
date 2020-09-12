<?php 
    if(!isset($_POST['user_id'])){
        echo "<script>window.location.href='view_all_customer.php';</script>";   
    }
?>
<?php include "include/header.php";?>
<style>
    .pending_dot {
      height: 15px;
      width: 15px;
      background-color: #33C9F7;
      border-radius: 50%;
      display: inline-block;
    }
    .progress_dot {
      height: 15px;
      width: 15px;
      background-color: #AF7AC5;
      border-radius: 50%;
      display: inline-block;
    }
    .completed_dot {
      height: 15px;
      width: 15px;
      background-color: #C7F25F;
      border-radius: 50%;
      display: inline-block;
    }
    .not_started_dot {
      height: 15px;
      width: 15px;
      background-color: #EB984E;
      border-radius: 50%;
      display: inline-block;
    }
    .failed_dot {
      height: 15px;
      width: 15px;
      background-color: #E74C3C;
      border-radius: 50%;
      display: inline-block;
    }
</style>
<div id="page-wrapper">
	<div class="main-page">
		<br>
		<h2 class="title1" style="color: green;">ALL Commission</h2>
		<p>
			<b>Note:</b> 
			Pending: <span class="pending_dot"></span> || 
			In Progress: <span class="progress_dot"></span> || 
			Completed: <span class="completed_dot"></span> || 
			Not Started : <span class="not_started_dot"></span> || 
			Failed: <span class="failed_dot"></span>
		</p>
		<table class="responstable" >
			<tr style="border:5px solid #024457;">
				<th style="width: auto">S.no.</th>
				<th style="width: auto">Category</th>
				<th style="width: auto">City</th>
				<th style="width: auto">Location</th>
				<th style="width: auto">Vendor Id</th>
				<th style="width: auto">Date Created</th>
				<th style="width: auto">Time Created</th>
				<th style="width: auto">Price</th>
				<th style="width: auto">Status</th>
				<th style="width: auto">Description</th>
				<th style="width: auto">Phone</th>
				<th style="width: auto">Address</th>
				<th style="width: auto">Accepted ?</th>
				<th style="width: auto">Mode of Transaction</th>
				<th style="width: auto">Time Slot</th>
				<th style="width: auto">Order Amount</th>
				<th style="width: auto">Net Pay Amount</th>
				<th style="width: auto">Coupon Code</th>
				<th style="width: auto">Payment Status</th>
			</tr>
			<?php 
				include 'include/connection.php';
				$checkCategory = "SELECT * FROM lead WHERE customer_id = '".$_POST['user_id']."'";
				$resultCategory = mysqli_query($conn, $checkCategory);
				$no = 1;
				while($row = $resultCategory -> fetch_assoc()){
					if($row['status'] == 'Pending'){
						$color = "#33C9F7";
					}
					elseif($row['status'] == 'In Progress'){
						$color = '#AF7AC5 ';
					}
					elseif($row['status'] == 'Completed'){
						$color = '#C7F25F';
					}
					elseif($row['status'] == 'Not Started'){
						$color = '#EB984E';
					}
					else{
					    $color = '#E74C3C';
					}
			?>
			<tr style="background-color: <?php echo $color; ?>">
			    <input type="hidden" value="<?php echo $row['id']; ?>" name="id">
				<td><?php echo $no; $no++; ?></td>
				<td><?php echo $row['category']; ?></td>
				<td><?php echo $row['city']; ?></td>
				<td><?php echo $row['location']; ?></td>
				<td><?php echo $row['user_id']; ?></td>
				<td><?php echo $row['date']; ?></td>
				<td><?php echo $row['time']; ?></td>
				<td><?php echo $row['price']; ?></td>
				<td><?php echo $row['status']; ?></td>
				<td><?php echo $row['dsc']; ?></td>
				<td><?php echo $row['phone']; ?></td>
				<td><?php echo $row['address']; ?></td>
				<td><?php if($row['is_accept'] == 1){ echo "Accepted";} else{ echo "Not Accepted";} ?></td>
				<td><?php if($row['transactionType'] == 1){echo "Wallet";} else{ echo "Online Payment";} ?></td>
				<td><?php echo $row['timeSlot']; ?></td>
				<td><?php echo $row['orderAmount']; ?></td>
				<td><?php echo $row['netPayAmount']; ?></td>
				<td><?php echo $row['couponCode']; ?></td>
				<td><?php echo $row['payment_status']; ?></td>
			</tr>
			<?php 
				}
			?>
		</table>
	</div>
</div>
</div>
<?php include "include/footer.php"?>
