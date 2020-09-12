<?php
   include 'include/conn.php';
   $m=$_POST['time'];
   $product_id=$_POST['name'];
   $product_price=$_POST['price'];
   
   $sql="SELECT * FROM cart where product_id='$product_id'";
   $result1=$con->query($sql);
   $rowss=$result1->num_rows;
   $row2=$result1->fetch_assoc();
   $quan=$row2['quan'];
   $pro_money=$row2['pro_cost'];
   if($row2['product_id']=='$product_id'){
   	$a=$quan+1;
   	$aa=$pro_money+$product_price;
   	$query="UPDATE cart SET quan='$a', pro_cost='$aa' WHERE product_id='$product_id'";
      $data= mysqli_query($con,$query);
      echo "<script>window.location.href = 'cart_display.php';</script>";
   }
   else{
   	$a=$quan+1;
   	$aa=$pro_money+$product_price;
   	$query="UPDATE cart SET quan='$a', pro_cost='$aa' WHERE product_id='$product_id'";
      $data= mysqli_query($con,$query);
      echo "<script>window.location.href = 'cart_display.php';</script>";
   }
?>