<?php
  include 'include/conn.php';
  session_start();
  if(!isset($_SESSION['id'])){
    echo "<script>window.location.href = 'form.php';</script>";
  }
  else{
    $product_id=$_POST['id'];
    $product_cost=$_POST['pcost'];
    $user_phone=$_POST['num'];
    $query1="SELECT * FROM signup WHERE id='".$_SESSION['id']."'";
    $data1 =mysqli_query($con,$query1);
    $total1= mysqli_num_rows($data1);
    $result1=mysqli_fetch_assoc($data1);
    $user_id=$result1['id'];
    $query="SELECT * FROM product_display WHERE id='$product_id'";
    $data =mysqli_query($con,$query);
    $total= mysqli_num_rows($data);
    $result=mysqli_fetch_assoc($data);
    $pro_id=$result['id'];
    $initial_quan=1;
    $sql="SELECT * FROM wishlist where product_id='$pro_id' and user_id='$user_id'";
    $result1=$con->query($sql);
    $rowss=$result1->num_rows;      
    if($rowss<1){
        $sql1="insert into wishlist(user_id, product_id) values('$user_id', '$pro_id' )";
        $result=$con->query($sql1);
        if(!$result){
          echo mysqli_error($con);
        }
        else{
          echo "<script>window.location.href = 'index.php';</script>";
        }
    }
    else{
          echo "<script>alert('Item already added');window.location.href = 'index.php';</script>";
        }
  }

?>