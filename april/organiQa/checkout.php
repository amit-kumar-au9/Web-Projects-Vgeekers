<?php 
  include 'include/conn.php';
  error_reporting(0);
  session_start();
  if(!isset($_SESSION['id'])){
      echo "<script>window.location.href = 'index.php';</script>";
  }
  else{
      $query="SELECT * FROM signup WHERE id = '".$_SESSION['id']."'";
      $data= mysqli_query($con,$query);
      $total=mysqli_num_rows($data);
      $result=mysqli_fetch_assoc($data);
      $user_id=$result['id'];
      $names=$result['first_name'];
      $lnames=$result['last_name'];
      $phone=$result['phone'];
      $email=$result['email'];
      $pass=$result['password'];
      $address=$result['address'];
      $state=$result['state'];
      $pin=$result['pin'];
      $city=$result['city'];
  } 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
      <title>OrganiQa</title>
      <meta charset="utf-8">
      <link rel="apple-touch-icon" sizes="180x180" href="asset/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="asset/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="asset/images/favicon-16x16.png">
    <link rel="manifest" href="asset/images/site.webmanifest">
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes user-scalable=no">
      <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
      <link rel="stylesheet" href="asset/css/open-iconic-bootstrap.min.css">
      <link rel="stylesheet" href="asset/css/animate.css">
      <link rel="stylesheet" href="asset/css/owl.carousel.min.css">
      <link rel="stylesheet" href="asset/css/owl.theme.default.min.css">
      <link rel="stylesheet" href="asset/magnific-popup.css">
      <link rel="stylesheet" href="asset/css/aos.css">
      <link rel="stylesheet" href="asset/css/ionicons.min.css">
      <link rel="stylesheet" href="asset/css/bootstrap-datepicker.css">
      <link rel="stylesheet" href="asset/css/jquery.timepicker.css">
      <link rel="stylesheet" href="asset/css/flaticon.css">
      <link rel="stylesheet" href="asset/css/icomoon.css">
      <link rel="stylesheet" href="asset/css/style.css">
    </head>
    <body class="goto-here">
      <nav class="navbar navbar-expand-lg" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="index.php"><img src="asset/images/logo.png"  height="60"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i> Menu
            </button>
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item" style="margin:10px">
                    <span>
                      <button class="btn btn-outline-success" onclick="b()" data-toggle="tooltip" title="Home!">
                        <span><i class="fas fa-home"></i></span>
                      </button>
                    </span>
                  </li>
                  <li class="nav-item" style="margin:10px">
                      <span>
                        <button class="btn btn-outline-primary" onclick="c()" data-toggle="tooltip" title="Orders!">
                          <span><i class="fas fa-box"></i></span>
                        </button>
                      </span>
                  </li>
                  <li class="nav-item" style="margin:10px;">
                      <span>
                        <button class="btn btn-outline-danger" onclick="a()" data-toggle="tooltip" title="Logout!">
                          <span><i class="fa fa-sign-out-alt"></i></span>
                        </button>
                      </span>
                  </li>
                </ul>
            </div>
          </div>
      </nav>
      <div class="hero-wrap hero-bread" style="background-image: url('asset/images/getimage.svg');">
          <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
              <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> <span>Checkout</span></p>
                <h1 class="mb-0 bread" style="color: black">Checkout</h1>
              </div>
            </div>
        </div>
    </div>
    <!-- END nav -->
    <?php
      $query1="SELECT * FROM cart WHERE user_id='$user_id'";
      $result1= mysqli_query($con,$query1);
     if($result1->num_rows > 0){
        while($row1=$result1->fetch_assoc()){  
            $cos +=$row1["pro_cost"];
            $tots=$cos;
            $ints=(int)$tots;
          }
      }
  ?>
  <section class="ftco-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-7 ftco-animate">
          <form action="pay.php" method="post">
            <h3 class="mb-4 billing-heading">Billing Details</h3>
            <div class="row align-items-end">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="firstname">Firt Name</label>
                    <input type="text" class="form-control"  name='fname' placeholder="First Name" required value=<?php echo $names?>>
                    <input type="text" class="form-control"  name='total' style="display: none" placeholder="First Name" required value=<?php echo $ints?>>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="lastname">Last Name</label>
                    <input type="text" class="form-control"  name="lname" placeholder="Last Name" required value=<?php echo $lnames ?>>
                </div>
              </div>
              <div class="w-100"></div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleFormControlTextarea1">Complete Address</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="add" placeholder="Address" required><?php echo $address?></textarea>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="towncity">State</label>
                    <input type="text" class="form-control" placeholder="State" name="state" required value=<?php echo $state ?>>
                  </div>
                </div>
                <div class="w-100"></div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="towncity">Town / City</label>
                    <input type="text" class="form-control" placeholder="Town/City" name="city" required value=<?php echo $city ?>>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="postcodezip">Postcode / ZIP *</label>
                    <input type="text" class="form-control" placeholder="ZIP" name="zip" maxlength="6" required value=<?php echo $pin ?>>
                  </div>
                </div>
                <div class="w-100"></div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" class="form-control" placeholder="Phone Number" name="pho" maxlength="10" required value=<?php echo $phone ?>>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="emailaddress">Email Address</label>
                    <input type="text" class="form-control" placeholder="Email" name="ema" required value=<?php echo $email ?>>
                  </div>
                </div>
              <div class="w-100"></div>
            </div>
            <center>
              <button  type="submit" class="btn-outline-success btn">Procced for Payment</button>
            </center>
          </form><!-- END -->
        </div>
        <?php 
          $sql="SELECT cart.quan, cart.pro_cost, product_display.Product_name, product_display.image, cart.product_id, product_display.Product_price,cart.time FROM cart, product_display WHERE cart.product_id= product_display.id and cart.user_id='$user_id'";
          $result=$con->query($sql);
          $rowss=$result->num_rows;
        ?>  
        <div class="col-xl-5">
          <div class="row mt-5 pt-3">
            <div class="col-md-12 d-flex mb-5">
              <div class="cart-detail cart-total p-3 p-md-4">
                <h3 class="billing-heading mb-4">Cart Total</h3>
                <table>
                  <tr>
                    <th scope="col">Image</th>
                    <th scope="col">Product </th>
                    <th scope="col">Cost</th>
                    <th scope="col">Quan</th>
                  </tr>
                  <?php
                    if($result->num_rows > 0){
                      while($row=$result->fetch_assoc()){  
                        $cost=$row["pro_cost"];
                        $total += $cost;
                        $tot= $total-1;
                        $int=(int)$tot;
                        echo"<tr>
                            <td>
                              <img src='asset/images/products/".$row['image']."' width='80' height='80'>
                            </td>
                            <td>".$row['Product_name']."</td>
                            <td>Rs ".$cost."/-</td><td>".$row['quan']."</td>
                          </tr>";
                      }
                    }
                    else{
                      echo "sorry your cart is empty";
                    }
                   ?>
                </table>
                <hr>
                <p class="d-flex total-price">
                  <span></span>
                  <span>Total</span>
                  <span>Rs <?php  echo $tot."/-"?></span>
                </p>
              </div>
            </div>
          </div>
        </div> <!-- .col-md-8 -->
      </div>
    </div>
  </section> <!-- .section -->
  <br>  
<?php include 'include/footer.php'?>;
<style type="text/css">
  table
  {
    margin: 10px;
  }
  th,tr,td
  {
    padding: 10px;
    
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
  
    window.location.href = 'your_orders.php';
}

  localStorage.setItem("total", <?php echo intval($int)?>);
  var total=localStorage.getItem("total");
  console.log(total);
  
</script>
<style type="text/css">
  body
  {
    overflow-x: hidden;
  }
  .razorpay-payment-button,.razorpay-payment-button:hover
  {
    display: inline-block;
    font-weight: 400;
    text-align: center;
    color:yellowgreen;
    border: 1px solid yellowgreen; 
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    background-color: transparent;
    line-height: 1.5;
    border-radius: 0.25rem;
    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  }
  .razorpay-payment-button:hover 
  {
 
    color: #fff;
   
    background-color: yellowgreen;  
  }
</style>
