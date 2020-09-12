
<?php include "include/header.php";?>

<div id="page-wrapper" style="background: white;">

 <div class="main-page" style="background: white;">
    <center>
    <center><h2 class="title1" style="color: red;">ORGANICA DASHBOARD</h2></center>
      <a href="view_user.php" style="text-decoration: none">
        <div class="card" style="width: 15rem;display: inline-block;margin: 10px;padding:10px">
          <i class="fa fa-users" style="font-size: 7rem"></i><br><br>
          <div class="card-title" style="font-size: 2rem">
            Total Users
          </div>
          <div class="card-title" style="width: 100%;border-radius: 50%;background: crimson;color: white;padding: 50px;">
            <?php
              $sql="SELECT * from signup";
              $result=$con->query($sql);
              $rowss=$result->num_rows;
            ?>
            <center><span style="font-size: 2rem;"><?php echo $rowss?></span></center>
          </div>
        </div>
      </a>
      <a href="view_order.php" style="text-decoration: none">
        <div class="card" style="width: 15rem;display: inline-block;margin: 10px;padding:10px">
          <i class="fa fa-money" style="font-size: 7rem"></i><br><br>
          <div class="card-title" style="font-size: 2rem">
          Total Revenue
          </div>
          <?php
            error_reporting(0);
            $sql1="SELECT * from orders where status='' and payment_status='success'";
            $result1=$con->query($sql1);
            if($result1->num_rows > 0){
              while($row1=$result1->fetch_assoc()){
                $cost += $row1['total'];

              }
            }
          ?>
          <div class="card-title" style="width: 100%;border-radius: 70%;background: crimson;color: white;padding: 65px;">
            <center><span style="font-size: 1.2rem;">Rs <?php echo $cost."" ?></span>/-</center>
          </div>
        </div>
      </a>
      <a href="view_order.php" style="text-decoration: none">
        <div class="card" style="width: 15rem;display: inline-block;margin: 10px;padding:10px">
          <i class="fas fa-box" style="font-size: 7rem"></i><br><br>
          <div class="card-title" style="font-size: 2rem">
            Total Orders
          </div>
          <?php
            $sql2="SELECT * from orders";
            $result2=$con->query($sql2);
            $rowss2=$result2->num_rows;
          ?>
          <div class="card-title" style="width: 100%;border-radius: 50%;background: crimson;color: white;padding: 50px;">
            <center><span style="font-size: 2rem;"><?php echo $rowss2?></span></center>
          </div>
        </div>
      </a>
      <a href="view_products.php">
        <div class="card" style="width:   15rem;display: inline-block;margin: 10px;padding:10px">
          <i class="fas fa-box" style="font-size: 7rem"></i><br><br>
          <div class="card-title" style="font-size: 2rem">
            Total Products
          </div>
          <?php
            $sql3="SELECT * from product_display";
            $result3=$con->query($sql3);
            $rowss3=$result3->num_rows;
          ?>
          <div class="card-title" style="width: 100%;border-radius: 50%;background: crimson;color: white;padding: 50px;">
            <center><span style="font-size: 2rem;"><?php echo $rowss3?></span></center>
          </div>
        </div>
      </a>
    </center>
  </div>
</div>
 <?php include "include/footer.php";?>




