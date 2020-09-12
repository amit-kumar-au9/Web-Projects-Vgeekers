<?php
  include 'include/conn.php';
  error_reporting(0);
  session_start();
  $query1="SELECT * FROM signup WHERE id='".$_SESSION['id']."'";
  $data2 =mysqli_query($con,$query1);
  $total1= mysqli_num_rows($data2);
  $result1=mysqli_fetch_assoc($data2);
  $ad= $result1['address'];
  $id= $result1['id'];
  $sql="SELECT * FROM cart WHERE user_id='$id'";
  $result=$con->query($sql);
  if($result->num_rows > 0){
		while($row=$result->fetch_assoc()){  
      $user_id= $row['user_id'];
      $product_id=$row['product_id'];
      $quan=$row['quan'];
      $pro_cost= $row['pro_cost'];
      $total1+= $pro_cost;
      $tot= $total1-1;
      $ran_id=uniqid('UID');
    }
    echo "<pre>";
    $sql10="insert into payments(user_id,payment_id,order_id,signature_hash) values('$user_id','".$_POST['razorpay_payment_id']."', '".$_POST['razorpay_order_id']."','".$_POST['razorpay_signature']."')";
    $result10=$con->query($sql10);
    $sql101="SELECT * from payments where user_id='$user_id' Order By user_id desc";
    $result101=$con->query($sql101);
    if($result101->num_rows > 0){
      while($row101=$result101->fetch_assoc()){  
        $user_id= $row101['user_id'];
        $payment_id=$row101['payment_id'];
        $pay_id= (int)$payment_id ;
        $razorpay_order_id=$row101['order_id'];
        $razor_order_id=(int)$razorpay_order_id;
      }

      $secretKey="jnGO4QKhHKoDIWSfEVLACgKS";
      $secret=intval($secretKey);
      $generated_signature = hash_hmac('sha256', $razor_order_id + "|" + $pay_id,"fpK7BDRTRD0b0mcOjgEY5zfY$secret");  
      if ($generated_signature == (int)$row101['signature_hash']){   
        $sql30="insert into orders(user_id,total,payment_status,payment_id) values('$user_id','$tot','success' ,'$payment_id')";
        $result20=$con->query($sql30);
      
      }
      else
      {
        $sql30="insert into orders(user_id,total,payment_status,payment_id) values('$user_id','$tot','failure' ,'$payment_id')";
        $result20=$con->query($sql30);
      }
    }
    $query10="SELECT * FROM orders WHERE user_id='$id' Order By id desc";
    $data2 =mysqli_query($con,$query10);
    $result11=mysqli_fetch_assoc($data2);
    $order_id= $result11['id'];
    $sql="SELECT * FROM cart WHERE user_id='$id'";
    $result=$con->query($sql);
    if($result->num_rows > 0){
      while($row=$result->fetch_assoc()){  
        $user_id= $row['user_id'];
        $product_id=$row['product_id'];
        $quan=$row['quan'];
        $pro_cost= $row['pro_cost'];
        $sql3="insert into order_product(order_id,user_id,product_id,quantity) values('$order_id','$id','$product_id' ,'$quan')";
        $result2=$con->query($sql3);
      }
    }
    if($id!=""){
      $sql_u="SELECT * FROM cart";
      $result_u=$con->query($sql_u);
      if($result_u->num_rows > 0){
        while($row=$result_u->fetch_assoc()){  
        }
        if(!$result){
          echo mysqli_error($con);
        }
        else{
          $query1="DELETE FROM cart WHERE user_id='$id'";
          $data1 =mysqli_query($con,$query1); 
          echo "<script>window.location.href = 'your_orders.php';</script>";
        }
      }
    }
  }   
?>