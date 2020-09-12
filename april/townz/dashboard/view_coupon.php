<?php include "include/header.php";?>
<div id="page-wrapper">
  <div class="main-page">
    <br>
    <center>
      <h2 class="title1" style="color: green;">Coupon Code</h2>
      <a href="add_coupon.php"><button type="button" class="btn btn-danger">ADD COUPON</button>
    </center>
    </a>
    <table class="responstable" >
      <tr style="width: auto;">
        <th style="width: auto;">S.no</th>
        <th style="width: auto;">Coupon Code</th>
        <th style="width: auto;">Start date</th>
        <th style="width: auto;">Expiry date</th>
        <th style="width: auto;">Discount</th>
        <th style="width: auto;">Min Amount</th>
        <th style="width: auto;">Max Discount Amount</th>
        <th style="width: 100%;">Description</th>
        <th style="width: auto;">Available</th>
        <th style="width: auto;">Used</th>
        <th style="width: auto;">View Usage</th>
        <th style="width: auto;">Action</th>
      </tr>
      <tbody>
        <?php 
          include 'include/connection.php';
          $checkQuery = "SELECT * FROM coupon_code ORDER BY id DESC";
          $checkResult = mysqli_query($conn, $checkQuery);
          $no = 1;
          while($row = $checkResult -> fetch_assoc()){
        ?>
            <tr>
                <td><?php echo $no++; ?> </td>
                <td><?php echo $row['coupon_code']; ?></td>
                <td><?php echo $row['start_date']; ?></td>
                <td><?php echo $row['end_date']; ?></td>
                <td><?php echo $row['discount']; ?></td>
                <td><?php echo $row['min_amount']; ?></td>
                <td><?php echo $row['max_discount_amount']; ?></td>
                <td><?php echo $row['dsc']; ?></td>
                <td><?php echo $row['available_no']; ?></td>
                <td><?php echo $row['used']; ?></td>
                <td>
                  <form method ="post" action="viewCouponUse.php">
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    <button type="submit" class="btn btn-primary" >View</button>
                  </form>
                </td>
                <td>
                  <form method ="post" action="editCoupon.php">
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    <button type="submit" class="btn btn-success" >Edit</button>
                  </form>
                  <br>
                  <form method ="post">
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    <?php 
                        if($row['active'] == 1){  
                    ?>
                            <button type="submit" class="btn btn-danger" name="inactive">Inactive</button>
                    <?php 
                        }
                        else{
                    ?>
                            <button type="submit" class="btn btn-success" name="active">Active</button>   
                    <?php 
                        }
                    ?>
                  </form>
                </td>
            </tr>
          <?php 
          }
          ?>
      </tbody>
    </table>
  </div>
</div>
<?php include "include/footer.php"?>
<?php 
    if(isset($_POST['inactive'])){
        $id = $_POST['id'];
        $update = "UPDATE coupon_code SET active = '0' WHERE id = '".$id."'";
        mysqli_query($conn, $update);
        echo "<script>window.location.href='view_coupon.php';</script>";
    }
    if(isset($_POST['active'])){
        $id = $_POST['id'];
        $update = "UPDATE coupon_code SET active = '1' WHERE id = '".$id."'";
        mysqli_query($conn, $update);
        echo "<script>window.location.href='view_coupon.php';</script>";
    }
?>