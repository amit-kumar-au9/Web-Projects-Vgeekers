<?php 
    if(!isset($_POST['user_id'])){
        echo "<script>window.location.href='view_all_customer.php';</script>";   
    }
?>
<?php include "include/header.php";?>
<div id="page-wrapper">
	<div class="main-page">
		<br>
		<h2 class="title1" style="color: green;">Saved Address</h2>
		<table class="responstable" >
			<tr style="border:5px solid #024457;">
				<th style="width: auto">S.no.</th>
				<th >Address</th>
				<th >Location</th>
				<th style="width: auto">City</th>
				<th style="width: auto">Pin Code</th>
			</tr>
			<?php 
				include 'include/connection.php';
				$checkCategory = "SELECT * FROM customer_address WHERE customer_id = '".$_POST['user_id']."'";
				$resultCategory = mysqli_query($conn, $checkCategory);
				$no = 1;
				while($row = $resultCategory -> fetch_assoc()){
			?>
			<tr>
					<form method="post">
					    <input type="hidden" value="<?php echo $row['id']; ?>" name="id">
						<td><?php echo $no; $no++; ?></td>
						<td><?php echo $row['address']; ?></td>
						<td><?php echo $row['location']; ?></td>
						<td><?php echo $row['city']; ?></td>
						<td><?php echo $row['pin_code']; ?></td>
					</form>
			</tr>
			<?php 
				}
			?>
		</table>
	</div>
</div>
</div>
<?php include "include/footer.php"?>
