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
                    <th style="width:auto">Refered from Customer ID</th>
                    <th style="width:30%">Refered from Customer Name</th>
                    <th style="width:auto">Refered from Customer ID</th>
                    <th style="width:30%">Refered from Customer Name</th>
                    <th style="width:auto">Money for Old Customer</th>
                    <th style="width:auto">Money to New Customer</th>
                    <th style="width:auto">Time</th>
                    <th style="width:auto">Date</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    include 'include/connection.php';
                    $checkReferal = "SELECT * FROM refer_earn_customer ORDER BY id DESC";
                    $resultReferal = mysqli_query($conn, $checkReferal);
                    while($row = $resultReferal -> fetch_assoc()){

                ?>
                <tr>
                    <td><?php echo ++$no; ?></td>
                    <td><?php echo $row['refered_from_customer_id'] ?></td>
                    <td><?php echo $row['refered_from_customer_name'] ?></td>
                    <td><?php echo $row['refered_to_customer_id'] ?></td>
                    <td><?php echo $row['refered_to_customer_name'] ?></td>
                    <td><?php echo $row['money_old_customer'] ?></td>
                    <td><?php echo $row['money_new_customer'] ?></td>
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