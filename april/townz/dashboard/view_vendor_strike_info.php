<?php  
    if(!isset($_POST['user_id'])){
       echo "<script>window.location.href='view_strike_vendor.php';</script>";   
    } 
?>
<?php include "include/header.php";?>
<div id="page-wrapper">
	<div class="main-page">
		<br>
		<center><h2 class="title1" style="color: green;">All Strikes</h2></center>		
		<table class="responstable">
		  	<thead>
				<tr style="border:5px solid #024457;">
					<th style="width:auto"><span>ID</span></th>
					<th style="width:auto">Customer ID</th>
					<th style="width:auto">Lead ID</th>
					<th style="width:auto">No. of Strikes</th>
					<th style="width:100%">Strike Information</th>
				    <th style="width:auto">Action</th>
				</tr>
		  	</thead>
		  	<tbody>
		  		<?php 
					include 'include/connection.php';
					$checkQuery = "SELECT * FROM vendor_details JOIN strike_info ON vendor_details.user_id = strike_info.vendor_id WHERE vendor_details.user_id = '".$_POST['user_id']."' ";
					$checkResult = mysqli_query($conn, $checkQuery);
					$no = 1;
					while ($row = $checkResult -> fetch_assoc()) {
	            ?>
						<tr>
							<td><?php echo $no++; ?></td>
							<td><?php echo $row['customer_id']; ?></td>
							<td><?php echo $row['lead_id']; ?></td>
							<td><?php echo $row['strike']; ?></td>
							<td><?php echo $row['reason']; ?></td>
							<td>
								<form method="post">
									<input type="hidden" name="user_id" value="<?php echo $_POST['user_id']; ?>">
									<input type="hidden" name="strike_id" value="<?php echo $row['id']; ?>">
									<input type="hidden" name="no" value="<?php echo $row['strike']; ?>">
									<button type="submit" class="form-control btn btn-success" name="delete">Remove</button>
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
<?php 
    if(isset($_POST['delete'])){
        $user_id = $_POST['user_id'];
        $strike_id = $_POST['strike_id'];
        $no = $_POST['no'] - 1;
        $deleteStrike = "DELETE FROM strike_info WHERE id = '".$strike_id."'";
        mysqli_query($conn, $deleteStrike);
        $updateStrike = "UPDATE vendor_details SET strike = '".$no."' WHERE user_id = '".$user_id."'";
        mysqli_query($conn, $updateStrike);
        echo "<script>window.location.href='view_strike_vendor.php';</script>";
    }
?>
