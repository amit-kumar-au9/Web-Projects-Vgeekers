<?php 
  include 'include/conn.php';
  session_start();
  if(!isset($_SESSION['id']))
  {
    echo "<script> window.location.href = 'form.php';</script>";
  }
  else
  {
    $query="SELECT * FROM signup WHERE id = '".$_SESSION['id']."'";
    $data= mysqli_query($con,$query);
    $total=mysqli_num_rows($data);
    $result=mysqli_fetch_assoc($data);
    $user_id=$result['id'];
    $names=$result['first_name'];
    $lnames=$result['last_name'];
    $phone=$result['phone'];
  }


    
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Organiqa</title>
    <meta charset="utf-8">
    <link rel="apple-touch-icon" sizes="180x180" href="asset/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="asset/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="asset/images/favicon-16x16.png">
    <link rel="manifest" href="asset/images/site.webmanifest">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes user-scalable=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="asset/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="asset/css/animate.css">
    <link rel="stylesheet" href="asset/css/owl.carousel.min.css">
    <link rel="stylesheet" href="asset/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="asset/css/magnific-popup.css">
    <link rel="stylesheet" href="asset/css/aos.css">
    <link rel="stylesheet" href="asset/css/ionicons.min.css">
    <link rel="stylesheet" href="asset/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="asset/css/jquery.timepicker.css">
    <link rel="stylesheet" href="asset/css/flaticon.css">
    <link rel="stylesheet" href="asset/css/icomoon.css">
    <link rel="stylesheet" href="asset/css/style.css">
  </head>
  <body class="goto-here">
    <nav class="navbar navbar-expand-lg ftco_navbar" id="ftco-navbar">
      <div class="container">
       <a class="navbar-brand" href="index.php"><img src="asset/images/logo.png"  height="60"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
         <i class="fas fa-bars"></i> Menu
        </button>
         <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item" style="margin:10px">
              <span><button class="btn btn-outline-success" onclick="b()" data-toggle="tooltip" title="Home!"><span><i class="fas fa-home"></i></span></button></span>
            </li>
             <li class="nav-item" style="margin:10px">
              <span><button class="btn btn-outline-primary" onclick="c()" data-toggle="tooltip" title="Orders!"><span><i class="fas fa-box"></i></span></button></span>
            </li>
             <li class="nav-item" style="margin:10px;">
              <span><button class="btn btn-outline-danger" onclick="a()" data-toggle="tooltip" title="Logout!"><span><i class="fa fa-sign-out-alt"></i></span></button></span>
            </li>
          </ul>
        </div>
      </div>
    </nav>
   <div class="hero-wrap hero-bread" style="background-image: url('asset/images/getimage.svg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <p class="breadcrumbs" style="color: black" ><span class="mr-2" style="color: black"><a href="index.php">Home</a></span> <span>Orders</span></p>
            <h1 class="mb-0 bread" style="color: black">Your Orders</h1>
          </div>  
        </div>
      </div>
    </div>
    <center>
      <div class="col-md-7 heading-section ftco-animate text-center">
        <span class="subheading" style="font-size: 40px;">Your Orders</span>
      </div>
    </center>
    <?php
      $sql="SELECT orders.total,orders.status,product_display.Product_name,order_product.quantity, product_display.image, product_display.Product_price,orders.time,orders.id,signup.address,order_product.order_id,GROUP_CONCAT(product_display.Product_name SEPARATOR '<br><br>') as Product_name FROM orders, product_display, signup, order_product WHERE  order_product.product_id= product_display.id and orders.user_id='$user_id' and signup.id='$user_id' and orders.id= order_product.order_id GROUP BY orders.id desc";
        $result=$con->query($sql);
        $rowss=$result->num_rows;
    ?> 
    <center>  
      <div class="book1">
        <div class="heading">
          <center>
            <table id="aa">
              <thead>
                <tr>
                  <th>Order Id</th>
                  <th scope="col">Products</th>
                  <th scope="col">Total Bill</th>
                  <th scope="col">Status</th>
                  <th scope="col">Delivery Address</th>
                </tr>
              </thead>
              <tbody class="tbody">
                <?php       
                  if($result->num_rows > 0){
                    while($row=$result->fetch_assoc()){
                      if($row["status"]!="cancled"){

                        echo"<center><tr><td>".$row['order_id']."</td><td>".$row['Product_name']."</td><td>Rs".$row["total"] . "/-</td></center><td><button class='btn btn-outline-success' type='submit'>Yet to be delivered</button><form action='delete_orders.php' method='post'><input type='text' value='".$row['time']."' name='time' style='display:none'><button class='btn btn-outline-danger' type='submit'>Cancel order</button></form></td><td>".$row["address"]."</td></tr>";
                      }
                      else{
                        echo"<center><tr><td>".$row['order_id']."</td><td>".$row['Product_name']."</td><td>Rs".$row["total"] ."/-</td></center><td><button class='btn btn-outline-danger' type='submit'>Cancelled</button></td><td>".$row["address"]."</td></tr>";
                      }                     
                    }
                  }
                  else{
                    echo "<br><span style='color:black;'>NO ORDERS PLACED!</span><br>";
                    echo"<script>document.getElementById('aa').style.display='none';</script>";
                  }
                ?>
              </tbody>
            </table>
          </center>
        </div>
      </div>
    </center>
    <br><br><br>
<?php include 'include/footer.php'?>;
<style type="text/css">
  table
    {
     width: 100%;
     background: lightyellow;
     margin-left: 0px;
    }
    th,td,tr
    {
     padding: 20px;
     border-bottom:1px solid black;
    }
    .btn
    {
      margin: 4px;
    }
    tr,td
    {
      width: 400px;
    }
    @media (max-width: 1200px)
    {
      body
      {
        overflow-x: hidden;
      }
      table
      {
       
        width: 50%;
        
      }
      th,td,tr
      {
        padding: 10px;
        width: 50%;
      
      }

    }
   
</style>
<script type="text/javascript">
    function a()
  {
    window.location.href = 'logout.php';;
  }
  function b()
  {
    window.location.href = 'index.php';;
  }
  function c()
  {
    window.location.href = 'your_orders.php';;
  }
  
</script>