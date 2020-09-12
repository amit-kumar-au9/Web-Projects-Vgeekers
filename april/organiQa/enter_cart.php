<?php
  include 'include/conn.php';
  session_start();
  $name=$_SESSION['Name']; 
  $num=$_SESSION['phone'];
  $id=$_POST['time'];
  $sql="SELECT * FROM wishlist WHERE product_id='$id'";
  $result=$con->query($sql);
  if($result->num_rows > 0){
    while($row=$result->fetch_assoc()){  
      $product_id= $row['product_id'];
      $user_id=$row['user_id'];
      $sql1="insert into cart(pro_name,pro_cost,image,user_name,user_num) values('$pname','$pcost','$photo','$name','$num')";     
      $result1=$con->query($sql1);
    }
  }
  if($pname!=""){
    $sql_u="SELECT * FROM wishlist";
    $result_u=$con->query($sql_u);
    if($result_u->num_rows > 0){
      while($row=$result_u->fetch_assoc()){  
	
	    }
        if(!$result){
          echo mysqli_error($con);
        }
        else{
          $query1="DELETE FROM wishlist WHERE user_num='$num'";
          $data1 =mysqli_query($con,$query1); 
          echo "<script>alert('Products Added to cart');window.location.href = 'wish_display.php';<script>";
        }
    }
  }
?>