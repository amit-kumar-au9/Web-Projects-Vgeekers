<?php include "include/header.php";?>
<div id="page-wrapper">
	<div class="main-page">
		<br>
		<center>
			<h2 class="title1" style="color:green;">All <span id="na"></span> Notifications</h2>
        </center>
		<table class="responstable" id="cus_table" style="display:block;" >
			<tr style="border:5px solid #024457;">
			    <th style="width:auto !important">S.no.</th>
			    <th style="width:auto !important">Customer Name</th>
			    <th style="width:100%">Alert</th>
			</tr>
			<?php
			    include 'include/connection.php';
			    
    			$checkQuery = "SELECT * FROM customer_notification JOIN customer_details ON customer_details.id = customer_notification.user_id ORDER BY customer_notification.id DESC";
                $checkResult = mysqli_query($conn, $checkQuery);
                $no = 1;
                while($row = $checkResult -> fetch_assoc()){
			?>
        			<tr>
        				<center>
        				    <td class="q"><?php echo $no++; ?></td>
        				    <td class="q"><?php echo $row['name'] ?></td>
        					<td class="q"><?php echo $row['alert'] ?></td>
        				</center>
        			</tr>
			<?php 
                }
			?>
		</table>
	</div>
</div>
</div>
<?php include "include/footer.php"?>