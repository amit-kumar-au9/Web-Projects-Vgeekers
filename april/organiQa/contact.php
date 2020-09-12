
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Organica</title>
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
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
    <nav class="navbar navbar-expand-lg" id="ftco-navbar">
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
              </ul>
        </div>
      </div>
    </nav>
    <div class="hero-wrap hero-bread" style="background-image: url('asset/images/getimage.svg');');background-size: cover">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Contact us</span></p>
            <h1 class="mb-0 bread" style="color: black">Contact us</h1>
          </div>
        </div>
      </div>
    </div>
    <center>
      <div class="col-md-7 heading-section ftco-animate text-center">
        <span class="subheading" style="font-size: 40px;" style="color: yellowgreen">Contact Us</span>
      </div>
      <section class="ftco-section contact-section bg-light">
        <div class="container">
          <div class="row block-9">
            <div class="col-md-6 order-md-last d-flex">
              <form method="post" class="bg-white p-5 contact-form" action="contact_us.php">
                  <div class="form-group">
                      <input type="text" class="form-control" placeholder="Your Name" name="name" required>
                  </div>
                  <div class="form-group">
                      <input type="email" class="form-control" placeholder="Your Email" name="email" required>
                  </div>
                  <div class="form-group">
                  <input type="tel" class="form-control" placeholder="Your Phone" pattern="[0-9]{10}" maxlength="10" minlength="10" name="phone" required>
                  </div>
                  <div class="form-group">
                      <input type="text" class="form-control" placeholder="Subject" name="subject" required>
                  </div>
                  <div class="form-group">
                      <textarea id="" cols="30" rows="7" class="form-control" placeholder="Message" name="detail" required></textarea>
                  </div>
                  <div class="form-group">
                      <button class="btn btn-primary py-3 px-5" type="submit" name="sendQuery">Send</button>
                  </div>
              </form>
            </div>
            <div class="col-md-6 d-flex">
            	<div id="map" class="bg-white"></div>
            </div>
          </div>
        </div>
      </section>
    </center>
    <br><br><br>
<?php include 'include/footer.php'?>
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
<style type="text/css">
  body
  {
    overflow-x: hidden;
  }
</style>

