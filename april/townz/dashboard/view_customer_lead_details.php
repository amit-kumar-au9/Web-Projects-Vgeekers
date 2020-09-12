<?php 
    if(!isset($_POST['lead_id'])){
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
		<h2 class="title1" style="color: green;">List of Vendor who has accepted the Lead</h2>
		<p>
			<form method="post" action="view_customer_lead.php">
				<input type="hidden" name="user_id" value="<?php echo $_POST['user_id']; ?>">
				<button class="btn btn-primary" type="submit">Go Back to leads</button>
			</form>
		</p>
		<table class="responstable" >
			<tr style="border:5px solid #024457;">
				<th style="width: auto">S.no.</th>
				<th style="width: auto">Vendor ID</th>
				<th style="width: auto">Vendor Name</th>
				<th style="width: auto">Time Accepted</th>
				<th style="width: auto">Category of Vendor</th>
				<th style="width: auto">Rating</th>
			</tr>
			<?php 
				include 'include/connection.php';
				$checkCategory = "SELECT * FROM accepted_lead JOIN vendor_details ON vendor_details.user_id = accepted_lead.vendor_id WHERE sid = '".$_POST['lead_id']."'";
				$resultCategory = mysqli_query($conn, $checkCategory);
				$no = 1;
				while($row = $resultCategory -> fetch_assoc()){
			?>
			<tr>
				<td><?php echo $no; $no++; ?></td>
				<td><?php echo $row['vendor_id']; ?></td>
				<td><?php echo $row['name']; ?></td>
				<td><?php echo $row['time_accepted']; ?></td>
				<td><?php echo $row['rating']; ?></td>
			</tr>
			<?php 
				}
			?>
		</table>
	</div>
</div>
</div>
<?php include "include/footer.php"?>
