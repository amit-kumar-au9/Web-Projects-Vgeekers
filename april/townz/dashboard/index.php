<?php include "include/header.php";?>
<body>
	<!-- main content start-->
	<div id="page-wrapper">
		<div class="main-page">
			<h3>Vendor Details</h3>
			<div class="col_3">
				<div class="col-md-3 widget widget1">
					<div class="r3_counter_box">
						<i class="pull-left fa fa-users icon-rounded"></i>
						<div class="stats">
							<?php
							    include 'include/connection.php';
								$checkQuery = "SELECT * FROM vendor_details";
								$no = mysqli_num_rows(mysqli_query($conn, $checkQuery));
								echo "<h5 style='font-size:12px'><strong>".$no."</strong></h5>";
								?>
							<h5 style="font-size:12px">
							Total Vendor
							<h5>
						</div>
					</div>
				</div>
				<div class="col-md-3 widget widget1">
					<div class="r3_counter_box">
						<i class="pull-left fa fa-users icon-rounded" style="background: green"></i>
						<div class="stats">
							<?php
								$checkQuery = "SELECT * FROM vendor_details WHERE is_approved = 1";
								$no = mysqli_num_rows(mysqli_query($conn, $checkQuery));
								echo "<h5 style='font-size:12px'><strong>".$no."</strong></h5>";
								?>
							<h5 style="font-size:12px">
							Total Approved Vendor
							<h5>
						</div>
					</div>
				</div>
				<div class="col-md-3 widget widget1">
					<div class="r3_counter_box">
						<i class="pull-left fa fa-users icon-rounded" style="background: orange "></i>
						<div class="stats">
							<?php
								$checkQuery = "SELECT * FROM vendor_details WHERE is_approved = 0";
								$no = mysqli_num_rows(mysqli_query($conn, $checkQuery));
								echo "<h5 style='font-size:12px'><strong>".$no."</strong></h5>";
								?>
							<h5 style="font-size:12px">
							Total Pending Vendor
							<h5>
						</div>
					</div>
				</div>
				<div class="col-md-3 widget widget1">
					<div class="r3_counter_box">
						<i class="pull-left fa fa-users icon-rounded" style="background: red"></i>
						<div class="stats">
							<?php
								$checkQuery = "SELECT * FROM vendor_details WHERE strike > 9";
								$no = mysqli_num_rows(mysqli_query($conn, $checkQuery));
								echo "<h5 style='font-size:12px'><strong>".$no."</strong></h5>";
								?>
							<h5 style="font-size:12px">
							Total Striked Vendor
							<h5>
						</div>
					</div>
				</div>
				<div class="col-md-3 widget">
					<div class="r3_counter_box">
						<i class="pull-left fa fa-dollar icon-rounded" style="background: blue"></i>
						<div class="stats">
							<?php
								include 'include/connection.php';
								    $checkQuery = "SELECT SUM(total_balance) FROM wallet";
								    $result = mysqli_query($conn, $checkQuery);
								    $row = $result -> fetch_assoc();
								    echo "<h5 style='font-size:12px'><strong>".$row['SUM(total_balance)']."</strong></h5>";
								?>
							<h5 style="font-size:12px">
							Total Wallet Balance
							<h5>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<br></br>
			<h3>Customer Details</h3>
			<div class="col_3">
				<div class="col-md-3 widget widget1">
					<div class="r3_counter_box">
						<i class="pull-left fa fa-users icon-rounded"></i>
						<div class="stats">
							<?php
								$checkQuery = "SELECT * FROM customer_details";
								$no = mysqli_num_rows(mysqli_query($conn, $checkQuery));
								echo "<h5 style='font-size:12px'><strong>".$no."</strong></h5>";
								?>
							<h5 style="font-size:12px">
							Total Customer
							<h5>
						</div>
					</div>
				</div>
				<div class="col-md-3 widget widget1">
					<div class="r3_counter_box">
						<i class="pull-left fa fa-users icon-rounded" style="background: red"></i>
						<div class="stats">
							<?php
								$checkQuery = "SELECT * FROM customer_details WHERE active = 0";
								$no = mysqli_num_rows(mysqli_query($conn, $checkQuery));
								echo "<h5 style='font-size:12px'><strong>".$no."</strong></h5>";
								?>
							<h5 style="font-size:12px">
							Total Blocked Customer
							<h5>
						</div>
					</div>
				</div>
				<div class="col-md-3 widget widget1">
					<div class="r3_counter_box">
						<i class="pull-left fa fa-users icon-rounded" style="background: green"></i>
						<div class="stats">
							<?php
								$checkQuery = "SELECT * FROM customer_details WHERE active = 1";
								$no = mysqli_num_rows(mysqli_query($conn, $checkQuery));
								echo "<h5 style='font-size:12px'><strong>".$no."</strong></h5>";
								?>
							<h5 style="font-size:12px">
							Total Active Customer
							<h5>
						</div>
					</div>
				</div>
				<div class="col-md-3 widget widget1">
					<div class="r3_counter_box">
						<i class="pull-left fa fa-money icon-rounded" style="background: blue"></i>
						<div class="stats">
							<?php
								$checkQuery = "SELECT SUM(total_balance) FROM customer_wallet";
								$result = mysqli_query($conn, $checkQuery);
								$row = $result -> fetch_assoc();
								echo "<h5 style='font-size:12px'><strong>".$row['SUM(total_balance)']."</strong></h5>";
								?>
							<h5 style="font-size:12px">
							Total Wallet Balance
							<h5>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<br><br>
			<h3>Booking Details</h3>
			<div class="col_3">
				<div class="col-md-3 widget widget1">
					<div class="r3_counter_box">
						<i class="pull-left fa fa-shopping-cart icon-rounded"></i>
						<div class="stats">
							<?php
								$checkQuery = "SELECT * FROM lead WHERE is_lead = 1";
								$no = mysqli_num_rows(mysqli_query($conn, $checkQuery));
								echo "<h5 style='font-size:12px'><strong>".$no."</strong></h5>";
								?>
							<h5 style="font-size:12px">
							Total Bookings
							<h5>
						</div>
					</div>
				</div>
				<div class="col-md-3 widget widget1">
					<div class="r3_counter_box">
						<i class="pull-left fa fa-shopping-cart icon-rounded" style="background: orange"></i>
						<div class="stats">
							<?php
								$checkQuery = "SELECT * FROM lead WHERE is_lead = 1 AND is_accept = 0";
								$no = mysqli_num_rows(mysqli_query($conn, $checkQuery));
								echo "<h5 style='font-size:12px'><strong>".$no."</strong></h5>";
								?>
							<h5 style="font-size:12px">
							Pending booking
							<h5>
						</div>
					</div>
				</div>
				<div class="col-md-3 widget widget1">
					<div class="r3_counter_box">
						<i class="pull-left fa fa-shopping-cart icon-rounded" style="background: pink"></i>
						<div class="stats">
							<?php
								$checkQuery = "SELECT * FROM lead WHERE is_lead = 1 AND is_accept = 1";
								$no = mysqli_num_rows(mysqli_query($conn, $checkQuery));
								echo "<h5 style='font-size:12px'><strong>".$no."</strong></h5>";
								?>
							<h5 style="font-size:12px">
							In Progress booking
							<h5>
						</div>
					</div>
				</div>
				<div class="col-md-3 widget widget1">
					<div class="r3_counter_box">
						<i class="pull-left fa fa-shopping-cart icon-rounded" style="background: green"></i>
						<div class="stats">
							<?php
								$checkQuery = "SELECT * FROM lead WHERE is_lead = 1 AND is_accept = 2";
								$no = mysqli_num_rows(mysqli_query($conn, $checkQuery));
								echo "<h5 style='font-size:12px'><strong>".$no."</strong></h5>";
								?>
							<h5 style="font-size:12px">
							Completed booking
							<h5>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<br><br>
			<h3>Query Details</h3>
			<div class="col_3">
				<div class="col-md-3 widget widget1">
					<div class="r3_counter_box">
						<i class="pull-left fa fa-question icon-rounded"></i>
						<div class="stats">
							<?php
								$checkQuery = "SELECT * FROM lead WHERE is_lead = 0";
								$no = mysqli_num_rows(mysqli_query($conn, $checkQuery));
								echo "<h5 style='font-size:12px'><strong>".$no."</strong></h5>";
								?>
							<h5 style="font-size:12px">
							Total Query
							<h5>
						</div>
					</div>
				</div>
				<div class="col-md-3 widget widget1">
					<div class="r3_counter_box">
						<i class="pull-left fa fa-question icon-rounded" style="background: orange"></i>
						<div class="stats">
							<?php
								$checkQuery = "SELECT * FROM lead WHERE is_lead = 0 AND is_accept = 0";
								$no = mysqli_num_rows(mysqli_query($conn, $checkQuery));
								echo "<h5 style='font-size:12px'><strong>".$no."</strong></h5>";
								?>
							<h5 style="font-size:12px">
							Pending Queries
							<h5>
						</div>
					</div>
				</div>
				<div class="col-md-3 widget widget1">
					<div class="r3_counter_box">
						<i class="pull-left fa fa-question icon-rounded" style="background: green"></i>
						<div class="stats">
							<?php
								$checkQuery = "SELECT * FROM lead WHERE is_lead = 0 AND is_accept = 2";
								$no = mysqli_num_rows(mysqli_query($conn, $checkQuery));
								echo "<h5 style='font-size:12px'><strong>".$no."</strong></h5>";
								?>
							<h5 style="font-size:12px">
							Completed Queries
							<h5>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<br><br>
		</div>
	</div>
	</div>
	<style type="text/css">
		.r3_counter_box
		{
		height: 100px;	
		}
	</style>
	<?php include "include/footer.php"?>