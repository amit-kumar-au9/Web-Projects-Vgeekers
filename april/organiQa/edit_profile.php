<?php 

  include 'include/conn.php';
  session_start();
  if(!isset($_SESSION['id'])){
    echo "<script>
    window.location.href = 'form.php';
    </script>";
  }

  else{
    $query="SELECT * FROM signup WHERE id='".$_SESSION['id']."'";
    $data= mysqli_query($con,$query);
    $total=mysqli_num_rows($data);
    $result=mysqli_fetch_assoc($data);
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
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes user-scalable=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="asset/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="asset/css/animate.css">
    <link rel="stylesheet" href="asset/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assset/css/owl.theme.default.min.css">
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
            <p class="breadcrumbs" style="color: black"><span class="mr-2"><a href="index.php">Home</a></span> <span>Profile</span></p>
            <h1 class="mb-0 bread" style="color: black">Edit Profile</h1>
          </div>
        </div>
      </div>
    </div>
    <div class="form">
      <center>
        <div class="col-md-7 heading-section ftco-animate text-center">
          <span class="subheading" style="font-size: 40px;">Edit Your Profile</span>
        </div>
        <form  action="update_profile.php" method="post" style="width: 50%;">
          <div class="form-group">
            <label for="exampleInputEmail1">First Name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="First Name" name="fname" value=<?php echo $names?>>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Last Name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Last Name" name="lname"  value=<?php echo $lnames?>>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Phone</label>
            <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Phone" name="phone" value=<?php echo $phone?> readonly>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email" value=<?php echo $email?>>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password" name="pass" value=<?php echo $pass?>>
          </div>
          <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>
      </center>
    </div>
    <br><br><br><br>
<?php include 'include/footer.php'?>;
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