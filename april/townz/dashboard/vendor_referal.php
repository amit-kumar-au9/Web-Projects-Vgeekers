<?php include "include/header.php";?>
<div id="page-wrapper">
    <div class="main-page">
        <center>
            <h2 class="title1" style="color:green;">ALl REFERALS</h2>
        </center>
        <table class="responstable" id="cus_table">
            <thead>
                <tr style="border:5px solid #024457;">
                    <th style="width:auto"><span>S.No</span></th>
                    <th style="width:auto">Refered from Vendor ID</th>
                    <th style="width:30%">Refered from Vendor Name</th>
                    <th style="width:auto">Refered from Vendor ID</th>
                    <th style="width:30%">Refered from Vendor Name</th>
                    <th style="width:auto">Money for Old Vendor</th>
                    <th style="width:auto">Money to New Vendor</th>
                    <th style="width:auto">Time</th>
                    <th style="width:auto">Date</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    include 'include/connection.php';
                    $checkReferal = "SELECT * FROM refer_earn_vendor ORDER BY id DESC";
                    $resultReferal = mysqli_query($conn, $checkReferal);
                    $no = 1;
                    while($row = $resultReferal -> fetch_assoc()){

                ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $row['refered_from_vendor_id'] ?></td>
                    <td><?php echo $row['refered_from_vendor_name'] ?></td>
                    <td><?php echo $row['refered_to_vendor_id'] ?></td>
                    <td><?php echo $row['refered_to_vendor_name'] ?></td>
                    <td><?php echo $row['money_old_vendor'] ?></td>
                    <td><?php echo $row['money_new_vendor'] ?></td>
                    <td><?php echo $row['time'] ?></td>
                    <td><?php echo $row['date'] ?></td>
                </tr>
                <?php 
                    }
                ?>
            </tbody>
        </table>
    </div>
    <br>
</div>
</div>
<?php include "include/footer.php"?>