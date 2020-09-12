<?php include "include/header.php";?>
<?php include "conn.php"?>
<div id="page-wrapper" style="background: white" >
  <div class="main-page" style="background: white">
    <center><h2 class="title1" style="color: red;">View Order</h2></center>
    <center>
      <table class="table" style="border:1px solid black">
        <thead class="thead-dark">
          <tr>
            <th scope="col">S.No</th>
            <th scope="col">Date Of Order</th>
            <th scope="col">Product Name</th>
            <th scope="col">User Name</th>
            <th scope="col">Address of User</th>
            <th scope="col">Bill</th>
          </tr>
        </thead>
        <tbody>
          <?php
            $sql="SELECT orders.total,orders.status,product_display.Product_name,order_product.quantity, product_display.image, product_display.Product_price,orders.time,orders.id,signup.address,signup.first_name,order_product.order_id,GROUP_CONCAT(product_display.Product_name SEPARATOR '<br><br>') as Product_name FROM orders, product_display, signup, order_product WHERE  order_product.product_id= product_display.id and orders.id= order_product.order_id and orders.user_id=signup.id GROUP BY orders.id desc";
                $result=$con->query($sql);
                    if($result->num_rows > 0)
                    {
                        while($row=$result->fetch_assoc())
                        {    
                            $ok=$row["id"];
                            echo"<center><tr><td>".$ok."</td><td>".$row["time"]."</td><td>".$row['Product_name']."</td></center><td>".$row["first_name"]."</td><td>".$row["address"]."</td><form action='view_bill.php' method='post'><input type='number' value=".$ok." name='id' style='display:none'><td><button type='submit' class='btn btn-success'>Bill</button></form></td></tr>";        
                        }        
                    }
        ?>
        </tbody>
      </table>
    </center>
  </div>
</div>

<?php include "include/footer.php";?>
