<?php 
include 'conn.php';
session_start();

$name=$_SESSION['Name'];
 $num=$_SESSION['phone'];
if($name=="")
  {
    echo "<script>
  alert('Kindly Login/Sign up first!');
  window.location.href = '/organika/website/form.php';
  </script>";
  }
else
  {
    $query="SELECT * FROM signup WHERE phone='$num'";
    $data= mysqli_query($con,$query);
    $total=mysqli_num_rows($data);
    $result=mysqli_fetch_assoc($data);
    $names=$result['first_name'];

}
  

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Vegefoods - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
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
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="index.html">Vegefoods</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="about.html" class="nav-link"><span style="font-size:30px;cursor:pointer;color: white;margin-right:20px;float:right;"><button class="btn btn-outline-success" onclick="b()">Welcome <?php echo $names ?></button></span></a></li>
            <li class="nav-item"><a href="blog.html" class="nav-link"><span style="font-size:30px;cursor:pointer;color: white;margin-right:20px;float: right;"><button class="btn btn-outline-danger" onclick="a()">Logout</button></span></a></li>
            <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
            <li class="nav-item cta cta-colored"><a href="cart.html" class="nav-link"><span class="icon-shopping_cart"></span>[0]</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <?php  echo "<script>
  window.location.href = '/organika/website/index.php';
  </script>";?>
    <!-- END nav -->