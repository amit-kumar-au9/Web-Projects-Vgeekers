<?php

    include 'include/conn.php';
    include 'session.php';
    
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
    echo $pro;
    $initial_quan=1;
    $sql="SELECT * FROM cart where product_id='$pro_id' and user_id='$user_id'";
    $result1=$con->query($sql);
    $rowss=$result1->num_rows;
    $row2=$result1->fetch_assoc();
    $quan=$row2['quan'];
    $pro_money=$row2['pro_cost'];       
    if($rowss>0){
        $initial_quan+=$quan;
    	if($row2['product_id']=='$pro_id'){
    		$aa=$pro_money+$product_cost;
    	}
    	else{
    		$aa=$pro_money+$product_cost;
    	}
        $query="UPDATE cart SET quan='$initial_quan', pro_cost='$aa' WHERE product_id='$pro_id' and user_id='$user_id'";
        $data= mysqli_query($con,$query);
        echo "<script>window.location.href = 'index.php';</script>";
    }
    else{
        $sql1="insert into cart(user_id, product_id, quan, pro_cost) values('$user_id', '$pro_id', '$initial_quan', '$product_cost')";
    	$result=$con->query($sql1);
      	if(!$result){
          echo mysqli_error($con);
        }
        else if($result){
            echo "<script>window.location.href = 'index.php';</script>";
        }
        else{
          	echo "<script>alert('could not be added');window.location.href = 'index.php';</script>";
        }
    }

?>