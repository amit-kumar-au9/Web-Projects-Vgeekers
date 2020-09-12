<?php include "include/header.php";?>
<div id="page-wrapper">
	<div class="main-page">
		<br>
		<center>
			<h2 class="title1" style="color:green;">All <span id="na"></span> Notifications</h2>
		</center>
		<table class="responstable" id="ven_table" style="display:block;" >
			<tr style="border:5px solid #024457;">
			    <th style="width:auto !important">S.no.</th>
			    <th style="width:auto !important">Vendor Name</th>
			    <th style="width: 100%">Alert</th>
			</tr>
			<?php
			    include 'include/connection.php';
			    
    			$checkQuery = "SELECT * FROM notification JOIN vendor_details ON vendor_details.user_id = notification.user_id ORDER BY notification.id DESC";
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