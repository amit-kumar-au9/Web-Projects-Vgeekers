<?php include "include/header.php";?>
<?php  
    if(!isset($_POST['user_id'])){
        echo "<script>window.location.href='all_vendor.php';</script>";   
    }
    include 'include/connection.php';
    $user_id = $_POST['user_id'];
    $checkQuery = "SELECT * FROM wallet WHERE user_id = '".$user_id."'";
    $checkResult = mysqli_query($conn, $checkQuery);
    $row = $checkResult -> fetch_assoc();
    $wallet_id = $row['wallet_id'];
?>
<div id="page-wrapper">
  <div class="main-page">
    <h2 class="title1" style="color:red;" align="center"> View Wallet Balance</h2>
    <form method="post">
      <div class="container">
        <div class="row">
          <div class="col-md-2">
            <label class="control-label" for="textinput"> Wallet balance</label>  
          </div>
          <div class="col-md-2">
            <div class="form-group">
              <div>
                <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
                <input name="total_balance" type="number" placeholder="Balance" class="form-control" value="<?php echo $row['total_balance']; ?>">
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <button id="button1id" name="updateWallet" class="btn btn-success" type="submit">Update Balance</button>
            </div>    
          </div>
        </div>
      </div>
    </form>
  </div>
  <?php  
    
  ?>
  <div class="main-page">
    <br>
    <center><h2 class="title1" style="color: green;">Wallet History</h2></center>    
    <table class="responstable">
        <thead>
        <tr style="border:5px solid #024457;">
          <th data-th="Driver details" style="width:auto"><span>ID</span></th>
          <th style="width:auto">Date</th>
          <th style="width:auto">Amount</th>
          <th style="width:auto">Name</th>
          <th style="width:auto">Order_id</th>
          <th style="width:auto">Time</th>
          <th style="width:auto">Type</th>
          <th style="width:auto">Txn_id</th>
          <th style="width:auto">Contact_no</th>
          <th style="width:auto">Email_id</th>
          <th>Desc.</th>
        </tr>
        </thead>
        <tbody>
          <?php 
            include 'include/connection.php';
            $checkQuery = "SELECT * FROM order_txn WHERE wallet_id = '".$wallet_id."' ORDER BY id DESC";
            $checkResult = mysqli_query($conn, $checkQuery);
            $no = 1;
            while ($row = $checkResult -> fetch_assoc()) {
          ?>
              <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $row['date']; ?></td>
                <td><?php echo $row['amount']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['order_id']; ?></td>
                <td><?php echo $row['time']; ?></td>
                <td><?php echo $row['type']; ?></td>
                <td><?php echo $row['txn_id']; ?></td>
                <td><?php echo $row['contact_no']; ?></td>
                <td><?php echo $row['email_id']; ?></td>
                <td><?php echo $row['description']; ?></td>
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

  if(isset($_POST['updateWallet'])){

    $total_balance = $_POST['total_balance'];
    $user_id = $_POST['user_id'];

    $checkQuery = "UPDATE wallet SET total_balance = '".$total_balance."' WHERE user_id = '".$user_id."'";
    if(mysqli_query($conn, $checkQuery)){
      echo "<script>window.location.href='all_vendor.php';</script>";
    }

  }

?>

