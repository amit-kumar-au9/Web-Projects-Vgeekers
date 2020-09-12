<?php include "include/header.php";?>
<?php include "conn.php"?>
<div id="page-wrapper" style="background: white" >
  <div class="main-page" style="background: white">
    <?php
      $id=$_POST['id'];
      $sql1="select *,GROUP_CONCAT(product_display.Product_name SEPARATOR '<br><br>') as Product_name from orders, signup, order_product, product_display where orders.id= $id and orders.user_id=signup.id and order_product.order_id=$id and order_product.product_id=product_display.id";
        $result1=$con->query($sql1);
        if($result1->num_rows > 0)
        {
          while($row1=$result1->fetch_assoc())
          {   
           $status=$row1['payment_status'];
           $cost=$row1['total'];
           $pay_id=$row1['payment_id'];
           $address=$row1['address'];
           $fname=$row1['first_name'];
           $lname=$row1['last_name'];
           $email=$row1['email'];
           $phone=$row1['phone'];
           $pro=$row1['Product_name'];       
          }                      
        }
    ?>
    <center>
      <a href="view_order.php" style="text-decoration: none;float: left">
        <button class="btn btn-success">Back</button>
      </a>
      <h2 class="title1" style="color: red;">View Bill</h2>
    </center>
    <br>
    <div class="container">
      <div class="card">
        <div class="card-header">
        Order #
        <strong><?php echo $id?></strong> 
        <span class="float-right" style="float: right"><p><strong>Payment # :</strong> <?php echo $pay_id ?> </p> <strong>Status:</strong> <?php echo $status ?></span>
       <br>
       <br>
    </div>
    <div class="card-body">
      <div class="row mb-7">
        <div class="col-sm-7">
          <h6 class="mb-3">From:</h6>
          <div>
            <strong>OrganiQa</strong>
          </div>
        </div>
        <div class="col-sm-5">
          <h6 class="mb-3">To:</h6>
          <div>
            <strong><?php echo $fname ." ". $lname ?></strong>
          </div>
          <div><?php echo $address ?></div>
          <div></div>
          <div>Email: <?php echo $email ?></div>
          <div>Phone: <?php echo $phone ?></div>
        </div>
      </div>

    <div class="table-responsive-sm">
    <table class="table table-striped">
    <thead>
    <tr>
    <th class="center">#</th>
    <th class="">Item</th>
    <th class="">Unit Cost</th>
      <th class="">Qty</th>
    </tr>
    </thead>
    <tbody>
      <?php
      $id=$_POST['id'];
      $sql2="select * from orders, signup, order_product, product_display where orders.id= $id and orders.user_id=signup.id and order_product.order_id=$id and order_product.product_id=product_display.id order by product_display.id asc";
        $result2=$con->query($sql2);
        if($result2->num_rows > 0)
        {
          while($row2=$result2->fetch_assoc())
          {   
                echo "<tr>
                        <td class=''>".$row2['product_id']."</td>
                        <td class=''>".$row2['Product_name']."</td>
                        <td class=''>".$row2['Product_price']."</td>
                        <td class='r'>".$row2['quantity']."</td>
                      </tr>";
          }                      
        }
    ?>
    

    
    </tbody>
    </table>
    </div>
    <div class="card-header">
        
        <strong>Total</strong> 
        <span class="float-right"><strong>Rs </strong> <?php echo $cost ?>/-</span>
       
    </div>

    </div>

    </div>
</div>
<style type="text/css">
  .card
  {
    width: 70%;
  }
  .card-header
  {
    padding: 30px;

  }
  @media only screen and (max-width: 1200px) {
  .card {
   width: 100%;
  }
   .card-header
  {
    padding-top:1px;
    padding: 18px;
    padding-bottom: 40px;

  }

}
</style>