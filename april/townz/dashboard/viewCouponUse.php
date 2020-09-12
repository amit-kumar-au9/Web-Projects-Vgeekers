<?php include "include/header.php";?>
<div id="page-wrapper">
  <div class="main-page">
    <br>
    <center>
      <h2 class="title1" style="color: green;">Coupon Code</h2>
    </center>
    </a>
    <table class="responstable" >
      <tr style="width: auto;">
        <th style="width: auto;">S.no</th>
        <th>Coupon Code</th>
        <th style="width: auto;">Lead Id</th>
        <th style="width: auto;">Before Coupon Amoun</th>
        <th style="width: auto;">After Coupon Amount</th>
      </tr>
      <tbody>
        <?php 
          include 'include/connection.php';
          $checkQuery = "SELECT coupon_code, lead.id as lead_id, orderAmount, netPayAmount FROM coupon_code JOIN lead ON coupon_code.id = lead.couponId WHERE couponId = '".$_POST['id']."' ORDER BY lead.id DESC";
          $checkResult = mysqli_query($conn, $checkQuery);
          $no = 1;
          while($row = $checkResult -> fetch_assoc()){
        ?>
            <tr>
                <td><?php echo $no++; ?> </td>
                <td><?php echo $row['coupon_code']; ?></td>
                <td><?php echo $row['lead_id']; ?></td>
                <td><?php echo $row['orderAmount']; ?></td>
                <td><?php echo $row['netPayAmount']; ?></td>
                
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