<?php 
    include 'include/conn.php';
    error_reporting(0);
    session_start();
    $id = $_SESSION['id'];
    $query="SELECT * FROM signup WHERE id='$id'";
    $data= mysqli_query($con, $query);
    $total=mysqli_num_rows($data);
    $result=mysqli_fetch_assoc($data);
    $names=$result['first_name'];
?>
<?php
  $noo="<script>document.writeln(a);</script>";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>OrganiQa</title>
    <meta charset="utf-8">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="asset/css/card.css">
    <link rel="apple-touch-icon" sizes="180x180" href="asset/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="asset/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="asset/images/favicon-16x16.png">
    <link rel="manifest" href="asset/images/site.webmanifest">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes user-scalable=no">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
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
    <link rel="stylesheet" type="text/css" href="asset/css/ani.css">
    <link rel="stylesheet" type="text/css" href="https://github.com/marvinhuebner/slick-animation">
    <link rel="stylesheet" type="text/css" href="https://github.com/marvinhuebner/slick-animation">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="asset/css/card.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="asset/css/ionicons.min.css">
    <link rel="stylesheet" href="asset/css/bootstrap-datepicker.css">
    <link rel="stylesheet" type="text/css" href="asset/css/TimeCircles.css">
    <script type="text/javascript" src="asset/js/TimeCircles.js"></script>
    <link rel="stylesheet" href="asset/css/jquery.timepicker.css">
    <link rel="stylesheet" href="asset/css/flaticon.css">
    <link rel="stylesheet" href="asset/css/icomoon.css">
    <link rel="stylesheet" href="asset/css/style.css">
  </head>
  <body class="goto-here">

  <div class="chat">
    <div class="alert alert-warning alert-dismissible fade show chats" role="alert">
      <strong>Hello!</strong>Want to ask something?
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <a href="https://api.whatsapp.com/send?phone=919667774989&text=Hello!%21%20Welcome to OrganiQa!%20" class="float" target="_blank">
      <i class="fa fa-whatsapp my-float"></i>
    </a>
  </div>

  <nav class="navbar navbar-expand-lg ftco_navbar" id="ftco-navbar" style="background: white;">
    <div class="container">
      <a class="navbar-brand" href="index.php"><img src="asset/images/logo.png"  height="50" class="lo"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i> Menu
      </button>
      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto" style="list-style-type:hidden">
          <li class="nav-item" style="margin:10px;margin-top: 20px;">
            <a href="">Home</a>
          </li>
          <li class="nav-item" style="margin:10px;margin-top: 20px">
            <a href="index.php#shops">Products</a>
          </li>
          <li class="nav-item" style="margin:10px;margin-top: 20px">
            <a href="index.php#product">Buy Now</a>
          </li>
          <li class="nav-item vis" style="margin:10px;margin-top: 20px;">
            <a href="index.php#product" class="btn btn-outline-dark">Buy Now</a>
          </li>
          <li class="nav-item vis" style="margin:10px;margin-top: 20px;">
            <a href="index.php#product" class="btn btn-outline-dark">B</a>
          </li>
          <li class="nav-item" style="margin:10px;margin-top: 15px" id="logins">
            <span><button class="btn btn-outline-success" onclick="e()">Sign-Up</button></span>
          </li>
          <li class="nav-item" style="margin:10px" id="loginss" style="display: none">
            <span><button class="btn btn-outline-success" onclick="b()">Welcome <?php echo $names ?></button></span>
          </li>
          <li class="nav-item" style="margin:10px;margin-top: 15px" id="loginsss" style="display: none">
              <span><button class="btn btn-outline-danger" onclick="a()" data-toggle="tooltip" title="Logout!"><span><i class="fa fa-sign-out"></i></span></button></span>
          </li>
         
          <?php
            if(isset($_SESSION['id']))
            {
              echo "<script>
                document.getElementById('logins').style.display='none';
                 document.getElementById('loginss').style.display='block';
                  document.getElementById('loginsss').style.display='block';

                </script>";
            }
            else
            {
              echo "<script>
                document.getElementById('logins').style.display='block';
                 document.getElementById('loginss').style.display='none';
                  document.getElementById('loginsss').style.display='none';

                  </script>";
              $query="SELECT * FROM signup WHERE phone='".$_SESSION['id']."'";
              $data= mysqli_query($con,$query);
              $total=mysqli_num_rows($data);
              $result=mysqli_fetch_assoc($data);
              $names=$result['first_name'];
            }
          ?>
          <li class="nav-item cta cta-colored" style="margin:10px;margin-top: 15px">
           	<span><button class="btn btn-outline-warning" data-toggle="modal" data-target="#exampleModal" ><i class="fa fa-shopping-cart"></i></button></span>
          </li>
          <li class="nav-item cta cta-colored" style="margin:10px;margin-top: 15px">
           	<span><button class="btn btn-outline-primary" 	data-toggle="modal" data-target="#exampleModal1"><span><i class="ion-ios-heart" ></i></span></button></span>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <section class="banner__slider">
    <div class="slider stick-dots">
      <div class="slide">
        <div class="slide__img">
          <?php
            $query1 = "SELECT * FROM banner WHERE id=1";
            $result10 = mysqli_query($con,$query1);
            $row10 = mysqli_fetch_assoc($result10);
          ?>
          <img src='asset/images/banner/<?php echo $row10['image'] ?>' alt="" class="full-image animated" data-animation-in="zoomOutImage" style="width: 100%;" />
        </div>
        <!-- <div class="slide__content ">
          <div class="slide__content--headings text-center">
            <p class="animated tops" data-animation-in="fadeInUp" data-delay-in="0.3" style="color:black">Welcome to Organiqa</p>
            <h6 class="animated bottom" data-animation-in="fadeInUp" style="color:black; font-family: 'Poppins', sans-serif;font-size: 15px;">We are leader in the Indian Start up market of personal sanitory product.</h6>
            <a href="index.php#product"><button class=" button-custom animated btn btn-danger" data-animation-in="fadeInUp" style="color: white">Shop Now</button></a>
          </div>
        </div> -->
      </div>
      <div class="slide" style="background: grey">
        <div class="slide__img">
          <?php
            $query2 = "SELECT * FROM banner WHERE id=2";
            $result11 = mysqli_query($con,$query2);
            $row11 = mysqli_fetch_assoc($result11);
          ?>
          <img src='asset/images/banner/<?php echo $row11['image'] ?>' alt="" class="full-image animated" data-animation-in="zoomOutImage" style="width: 100%;background-size: contain;" />
        </div>
        <!-- <div class="slide__content slide__content__right">
          <div class="slide__content--headings text-right">
            <p class="animated tops" data-animation-in="fadeInLeft" data-delay-in="0.2" style="color: black">Welcome to Organiqa</p>
            <h6 class="animated bottom" data-animation-in="fadeInLeft" style="color:black;font-size: 15px;font-family: 'Poppins', sans-serif;">We are leader in the Indian Start up <span style="color: black">market of personal sanitory product.</span></h6>
            <a href="index.php#product"><button class=" button-custom animated btn btn-danger" data-animation-in="fadeInUp" style="color: white">Shop Now</button></a>
          </div>
        </div> -->
      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
      <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 44 44" width="44px" height="44px" id="circle" fill="none" stroke="   currentColor">
        <circle r="20" cy="22" cx="22" id="test">
      </symbol>
    </svg>
  </section>
    <br><br>
  <section class="ftco-section">
  	<div class="container">
  		<div class="row no-gutters ftco-services">
        <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services mb-md-0 mb-4">
            <div class="icon bg-color-1 active d-flex justify-content-center align-items-center mb-2">
          		<i class="fas fa-shipping-fast" style="color: white;font-size: 30px"></i>
            </div>
            <div class="media-body">
              <h3 class="heading">Free Shipping</h3>
              <span>On order over Rs499/-</span>
            </div>
          </div>      
        </div>
        <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services mb-md-0 mb-4">
            <div class="icon bg-color-2 d-flex justify-content-center align-items-center mb-2">
          	  <i class="fas fa-box" style="color: white;font-size: 30px"></i>
            </div>
            <div class="media-body">
              <h3 class="heading">Packed with care</h3>
              <span>Product well package</span>
            </div>
          </div>    
        </div>
        <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services mb-md-0 mb-4">
            <div class="icon bg-color-3 d-flex justify-content-center align-items-center mb-2">
          		<i class="fas fa-award" style="color: white;font-size: 30px"></i>
            </div>
            <div class="media-body">
              <h3 class="heading">Superior Quality</h3>
              <span>Quality Products</span>
            </div>
          </div>      
        </div>
        <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services mb-md-0 mb-4">
            <div class="icon bg-color-4 d-flex justify-content-center align-items-center mb-2" onclick="t()" style='cursor:pointer'>
          		<i class="fas fa-headset" style="color: white;font-size: 30px;cursor:pointer" ></i>
            </div>
            <div class="media-body">
              <h3 class="heading">Support</h3>
              <span>24/7 Support</span>
            </div>
          </div>      
        </div>
      </div>
  	</div>
  </section>

  <section class="ftco-section" id="product" style="margin-bottom:30px">
  	<div class="container">
  		<div class="row justify-content-center mb-3 pb-3">
        <div class="col-md-12 heading-section text-center ftco-animate">
        	<span class="subheading" style="font-size: 40px;">Featured Products</span>
          <!--<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>-->
        </div>
      </div>   		
  	</div>
  	<div class="ftco-animate" >
        <div class='row'>
    			<?php
    				$sql="SELECT * FROM product_display";
    			    $result=$con->query($sql);
    		  		while($row=$result->fetch_assoc()){  
                $pro_id=$row['id'];
    			?>
  				<div class="col-md-1 col-xs-1 col-sm-1 col-lg-1">	    
  				</div>
  				<div class="col-md-4 col-xs-4 col-sm-4 col-lg-4 product--green" style="display:inline-block;float:left;margin-top: 10px;">
  					<div class='product_inner'>
              <?php
                $sql2="SELECT * FROM product_images where product_id='$pro_id'";
                $result2=$con->query($sql2);
              ?>
              <div id="<?php echo 'carouselExampleControls'.$pro_id?>" class="carousel slide" data-ride="carousel" style="width: 280px;height: 300px">
                <div class="carousel-inner">
                    <?php
                      $no =1;
                      while($row2=$result2->fetch_assoc()){  
                    ?>
                        <div class="carousel-item <?php if($no==1){ echo "active";} ?>">
                          <img class="d-block w-100 " src='asset/images/products/<?php echo$row2['image'];?>' alt="First slide" style='width: 280px;'>
                        </div>
                     <?php
                        $no++;
                      }
                    ?>
                  <a class="carousel-control-prev" href="#<?php echo 'carouselExampleControls'.$pro_id?>" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#<?php echo 'carouselExampleControls'.$pro_id ?>" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
              </div>
  	  				<h2 align="center" style='color:black'><?php echo$row['Product_name'];?></h2>
  	  				<h5>Rs <?php echo $row['Product_price'];?>/-</h5>
              <br><br>
					    <div style='display:inline-block;cursor:pointer;float:left' class='m'>
						    <form action='cart.php' method='post' style='display:inline-block'>
        				  <input type='text' value='<?php echo $row['id'];?>' style='display:none' name='id'>
							    <input type='text' value='<?php echo $num;?>' style='display:none' name='num'>
							    <input type='text' value='<?php echo $row['Product_price'];?>' style='display:none' name='pcost'>
        					<button type='submit' style='display:inline-block'><i class='ion-ios-cart' style='color:yellow;font-size:40px;margin:10px;'></i></button>
  					    </form>	
						   <form action='wish.php' method='post' style='display:inline-block'>
							    <input type='text' value='<?php echo $row['id'];?>' style='display:none' name='id'>
					        <input type='text' value='<?php echo $num;?> ' style='display:none' name='num'>
					        <input type='text' value='<?php echo $row['Product_price'];?>' style='display:none' name='pcost'>
                  <?php
                  $sql1="SELECT * FROM wishlist WHERE product_id=$pro_id and user_id=$id";
                    $result1=$con->query($sql1);
                    if(mysqli_num_rows($result1)>0)
                    {
                      echo "<button type='submit'><i class='ion-ios-heart' style='color:red;font-size:40px;margin:10px;' ></i></button>";
                      
                    } 
                    else
                    {
                      echo "<button type='submit'><i class='ion-ios-heart' style='color:white;font-size:40px;margin:10px;' ></i></button>";
                    }
                  ?>
							   
  					    </form>
                <a href="#shops">
                  <button>
                    <i class="fas fa-info-circle" style='color:white;font-size:40px;margin:16px;'></i>
                  </button>
                </a>
					    </div>
  					</div>
            <br>
  				</div>
  				<div class="col-md-1 col-xs-1 col-sm-1 col-lg-1">	    
  				</div>
  				<?php		
  				  }
  			  ?>
  		  </div>
  	</div>	

  </section>

  <section class="ftco-section img" style="background-color: #C8F7F8">
  	<div class="container">
      <?php
        $query9 = "SELECT * FROM deal WHERE id=1";
        $result9 = mysqli_query($con,$query9);
        $row9 = mysqli_fetch_assoc($result9);
      ?>
  		<div class="row justify-content-end">
        <div class="col-md-6 ftco-animate deal-of-the-day ftco-animate">
          <img src='asset/images/products/<?php echo $row9['image'];?>' style='width: 330px;height: 300px;margin-top: 50px;' id="deal">
        </div>
        <div class="col-md-6 heading-section ftco-animate deal-of-the-day ftco-animate">
        	<span class="subheading">Best Price For You</span>
          <h2 class="mb-4">Deal of the day</h2>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
          <h3><a href="#product"><?php echo $row9['name']?></a></h3>
          <span class="price">Rs<?php echo $row9['original_price']?>/- <a href="#"> now Rs<?php echo $row9['discount_price']?>/- only</a></span>
          <div id="CountDown" data-date=" <?php echo $row9['timer']?>"> 
          </div>
        </div>
      </div>   		
  	</div>
  </section>

  <section class="ftco-section ftco-no-pb ftco-no-pt" id="shops" style="margin-top:20px">
  	<div class="container">
  		<div class="row">
        <?php
          $query="SELECT * FROM product_display JOIN product_images ON product_display.id = product_images.product_id";
          $data= mysqli_query($con,$query);
          $total=mysqli_num_rows($data);
          $result=mysqli_fetch_assoc($data);
          $description=$result['description'];
          $image=$result['image'];
          $pro_name=$result['Product_name'];         
        ?>
  			<div class="col-md-5 img img-2" style="background-image: url(asset/images/products/<?php echo $image ?>);background-size:contain">
  			</div>
  			<div class="col-md-7 wrap-about ftco-animate">
       			<div class="heading-section-bold">
        			<div class="ml-md-0">
              	<h2 class="mb-4"><?php echo $pro_name?></h2>
          		</div>
       			</div>
       			<div class="pb-md-5">
              <p>
        				<?php
                  echo $description;

                ?>
              </p>
  					 <p><a href="index.php#product" class="btn btn-primary">Shop now</a></p>
  				  </div>
  			</div>
  		</div>
  		<div class="row" >
  			<div class="col-md-7 wrap-about ftco-animate">
        	<div class="heading-section-bold">
        		<div class="ml-md-0">
              <?php
                $result=mysqli_fetch_assoc($data);
                $description=$result['description'];
                $image=$result['image'];
                $pro_name=$result['Product_name'];
              ?>
              	<h2 class="mb-4"><?php echo $pro_name?></h2>
          	</div>
        	</div>
        	<div class="pb-md-5">
        		<p><?php
                  echo $description;

                ?>
                  
            </p>
  					<p><a href="index.php#product" class="btn btn-primary">Shop now</a></p>
  				</div>
  			</div>
  			<div class="col-md-5 p-md-5 img img-2 d-flex" style="background-image: url(asset/images/products/<?php echo $image ?>);background-size:contain">
  			</div>
  		</div>
  	</div>
  </section>

  <section class="ftco-section ftco-no-pb ftco-no-pt bg-light" id="aboutus">
  	<div class="container" >
  		<div class="row justify-content-center mb-5 pb-3">
        <div class="col-md-7 heading-section ftco-animate text-center">
          <?php
            $query = "SELECT * FROM detail WHERE id=1";
            $result = mysqli_query($con,$query);
            $row1 = mysqli_fetch_assoc($result);
          ?>
        	<span class="subheading" style="font-size: 40px;">About Us</span>
        </div>
      </div>
  		<div class="row" style="margin-top: -40px">
  			<div class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url(asset/images/about/<?php echo $row1['image'] ?>);background-size: contain;margin-top:-140px">
          <a href="<?php echo $row1['video_link']; ?>" class="icon popup-vimeo d-flex justify-content-center align-items-center">
            <i class="fa fa-play" style="color: white;font-size: 20px"></i>
          </a>
        </div>
  			<div class="col-md-7 py-5 wrap-about pb-md-5 ftco-animate" style="margin-top:-100px">
          <div class="heading-section-bold mb-4 mt-md-5">
          	<div class="ml-md-0">
              <h4 class="mb-4"><?php echo $row1['heading']; ?></h4>
            </div>
          </div>
          <div class="pb-md-5">
          	<p>
              <?php echo $row1['content']; ?>
            </p>
            <br>
            <a href="#" class="btn btn-primary"  data-toggle="modal" data-target="#exampleModal2" style="margin-top:-50px">Read More</a>
    			</div>
  			</div>
  		</div>
  	</div>
  </section>

  <section class="ftco-section testimony-section" >
    <div class="container">
      <div class="row justify-content-center mb-5 pb-3">
        <div class="col-md-7 heading-section ftco-animate text-center">
        	<span class="subheading" style="font-size: 40px">Testimonial</span>
          <h2 class="mb-4">Our satisfied customer says</h2>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
        </div>
      </div>
      <div class="row ftco-animate">
        <div class="col-md-12">
          <div class="carousel-testimony owl-carousel">
            <?php
              $sql="SELECT * FROM testimonial";
              $result=$con->query($sql);
              if($result->num_rows > 0)
              {
                while($row=$result->fetch_assoc())
                {  
                  echo"<div class='item'><div class='testimony-wrap p-4 pb-5'><div class='user-img mb-5' style='background-image: url(asset/images/testimonial/".$row['image'].")'>
                    <span class='quote d-flex align-items-center justify-content-center'>
                      <i class='fas fa-quote-right'></i>
                    </span>
                    </div>
                    <div class='text text-center'>
                      <p class='mb-5 pl-4 line'>".$row['detail']."</p>
                      <p class='name'>".$row['name']."</p>
                    </div>
                    </div>
            		    </div>";
                }
              }
            ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <hr>

  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document" style="border:none">
      <div class="modal-content">
        <div class="modal-header" style="background: yellowgreen">
          <h5 class="modal-title" id="exampleModalLabel">Your Cart</h5>
          <center>
          </center>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div id="cart">
            <iframe src="cart_display.php" class="iframe" style="border:none"></iframe>
          </div>
        </div>
        <div class="modal-footer" style="background: yellowgreen">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header" style="background: skyblue">
          <h5 class="modal-title" id="exampleModalLabel">Your WishList</h5>
          <center>
          </center>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div id="cart">
            <iframe src="wish_display.php" class="iframe" style="border:none"></iframe>
          </div>
        </div>
        <div class="modal-footer" style="background: skyblue">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header" style="background: yellowgreen">
          <h5 class="modal-title" id="exampleModalLabel">About Us</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>
           <?php echo $row1['more_content']; ?>
          </p>
        </div>
        <div class="modal-footer" style="background: yellowgreen">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js"></script>
<script type="text/javascript" src="https://alexandrebuffet.fr/codepen/slider/slick-animation.min.js"></script>
<script type="text/javascript">
	function a()
  {
  
    window.location.href = 'logout.php';;
  }
	function b()
  {
  
    window.location.href = 'edit_profile.php';;
  }

  function e()
  {
  
    window.location.href = 'form.php';;
  }
 function t()
  {
  
    window.location.href = 'contact.php';;
  }

  $(function() 
  {

    "use strict"
    var init = "No items yet!";
    var counter = 0;
    // Initial Cart
    $(".counter").html(init);
    // Add Items To Basket
    function addToBasket() 
    {
      counter++;
      $(".counter").html(counter).animate({
        'opacity' : '0'
      },300, function() {
        $(".counter").delay(300).animate({
          'opacity' : '1'
        })
      })
    }

    // Add To Basket Animation
    $("button").on("click", function() 
    {
      addToBasket(); $(this).parent().parent().find(".product_overlay").css({
        'transform': ' translateY(0px)',
        'opacity': '1',
        'transition': 'all ease-in-out .45s'
      }).delay(1500).queue(function() {
        $(this).css({
          'transform': 'translateY(-500px)',
          'opacity': '0',
          'transition': 'all ease-in-out .45s'
        }).dequeue();
      });
    });
  });
  $('.slider').slick({
    autoplay: true,
    speed: 800,
    lazyLoad: 'progressive',
    arrows: true,
    dots: false,
    prevArrow: '<div class="slick-nav prev-arrow"><i></i><svg><use xlink:href="#circle"></svg></div>',
    nextArrow: '<div class="slick-nav next-arrow"><i></i><svg><use xlink:href="#circle"></svg></div>',
    }).slickAnimation();



  $('.slick-nav').on('click touch', function(e) 
  {
    e.preventDefault();
    var arrow = $(this);
    if(!arrow.hasClass('animate')) 
    {
      arrow.addClass('animate');
      setTimeout(() => {
          arrow.removeClass('animate');
      }, 1600);
    }

  });

  $("#CountDown").TimeCircles();
          
</script>
<style type="text/css">
  html,body
  {
    scroll-behavior: smooth;
    overflow-x: hidden;
  }
  .product--green 
  {
  background: linear-gradient(-45deg, #82ae46 50%, #fff 50%);
  }
	.o:hover
	{
		transform: scale(1.2);
	}
	.m:hover
	{
		transform: scale(1.2);
	}
	.n:hover
	{
		transform: scale(1.2);
	}
	.iframe
	{
		width: 450px;
		height: 350px;
	}
  .tops
  {
    font-size: 20px;
  }
  .bottom
  {
    font-size: 20px;
  }
  .lo
  {
    margin-left: -70px;
  }
  .vis
  {
    visibility: hidden;
  }
  #deal
  {
    margin-left: 100px;
  }
	@media (max-width: 900px)
	{
     #deal
    {
      margin-left: 0px;
    }
    .vis
    {
      display: none;
    }
    .lo
    {
      margin-left: 0px; 
    }
		.iframe
		{
			width: 300px;
			height: 250px;
		}

    body
    {
      overflow-x: hidden;
    }
    .tops
    {
      
      font-size: 15px;
    }
    .bottom
    {
      font-size: 20px
    }
	}

  ul li
  {
    list-style-type: none;
  }

  .chats
  {
  
    height:60px;
    bottom:85px;
    right:10px;
    position:fixed;
    z-index: 100;
    opacity: 0;
    -webkit-animation: cssAnimation 5s forwards; 
    animation: cssAnimation 5s forwards;
  }

  .float
  {
    position:fixed;
    width:60px;
    height:60px;
    bottom:40px;
    right:10px;
    background-color:#25d366;
    color:#FFF;
    border-radius:50px;
    text-align:center;
    font-size:30px;
    box-shadow: 2px 2px 3px #999;
    z-index:100;
    opacity:0;
    -webkit-animation: cssAnimation 5s forwards; 
    animation: cssAnimation 5s forwards;
    -webkit-animation: cssAnimation 5s forwards; 
    animation: cssAnimation 5s forwards;
  }
  @keyframes cssAnimation 
  {
    0%   {opacity: 0;}
    90%  {opacity: 1;}
    100% {opacity: 1;}
  }
  @-webkit-keyframes cssAnimation 
  {
    0%   {opacity: 0;}
    90%  {opacity: 1;}
    100% {opacity: 1;}
  }

  .my-float
  {
    margin-top:16px;
  }
</style>
<?php include 'include/footer.php'?>
