  <!DOCTYPE HTML>
  <html>
  <head>
    <?php 
        include 'conn.php';
        session_start();
        
        if(!isset($_SESSION['id'])){
            echo "<script>window.location.href = 'form.php';</script>";
        }
        else{
            $query="SELECT * FROM signup WHERE id=".$_SESSION['id']."";
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
    <title>OrganiQa DASHBOARD</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="asset/images/favicon.ico">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Glance Design Dashboard Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
    SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href="asset/css/status.css" rel='stylesheet' type='text/css' />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link href="asset/css/bootstrap.css" rel='stylesheet' type='text/css' />
    <style>
        .responstable 
        {
            margin: 1em 0;
            width: 100%;
            top:30%;
            overflow: hidden;
            background: white;
            color: #024457;
            border-radius: 10px;
        }
        .btn
        {
            margin:100px;
        }
        .responstable tr 
        {
            border: 1px solid #D9E4E6;
        }
        .responstable tr:nth-child(odd) 
        {
            background-color: #EAF3F3;
        }
        .responstable th 
        {
            display: none;
            border: 1px solid black;
            background-color: #167F92;
            color: #FFF;
            padding: 1em;
        }
        .responstable th:first-child 
        {
            display: table-cell;
            text-align: center;
        }
        .responstable th:nth-child(2) 
        {
            display: table-cell;
        }
        .responstable th:nth-child(3) 
        {
            display: table-cell;
        }
        .responstable th:nth-child(4) 
        {
            display: table-cell;
        }
        .responstable th:nth-child(5) 
        {
            display: table-cell;
        }
        .responstable th:nth-child(6) 
        {
            display: table-cell;
        }
        .responstable th:nth-child(7) 
        {
            display: table-cell;
        }
        .responstable th:nth-child(8) 
        {
            display: table-cell;
        }
        .responstable th:nth-child(9) 
        {
            display: table-cell;
        }
        .responstable th:nth-child(10) 
        {
            display: table-cell;
        }
        .responstable th:nth-child(2) span 
        {
            display: block;
        }
        .responstable th:nth-child(2) span 
        {
            display: block;
        }
        
        
        @media (min-width: 280px) and (max-width:900px) 
        {
            #page-wrapper
            {
                max-width:100%;
                overflow:scroll;
            }
            .responstable 
            {
                margin: 6em 0;
                width: 100%;
                top:30%;
                overflow: scroll;
                background: white;
                color: #024457;
                border-radius: 10px;
            }
            .sidebar-left
            {
                background-color: red;
            }
        }
  </style>
  <link href="asset/css/style.css" rel='stylesheet' type='text/css' />
  <link href="asset/css/font-awesome.css" rel="stylesheet"> 
  <link href='asset/css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css'/>
  <script src="asset/js/jquery-1.11.1.min.js"></script>
  <script src="asset/js/modernizr.custom.js"></script>
  <link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
  <script src="asset/js/index.js"></script>
  <script src="asset/js/metisMenu.min.js"></script>
  <script src="asset/js/custom.js"></script>
  <link href="asset/css/custom.css" rel="stylesheet">
  <link href="asset/css/owl.carousel.css" rel="stylesheet">
  <script src="asset/js/owl.carousel.js"></script>
  <script src="asset/js/subject.js"></script>
  <script>
    $(document).ready(function() 
    {
        $("#owl-demo").owlCarousel({
            items : 3,
            lazyLoad : true,
            autoPlay : true,
            pagination : true,
            nav:true,
        });
    });
  </script>
  </head> 
  <body class="cbp-spmenu-push" style="width: 100%;">
  	<div class="main-content" style="width: 100%;">
     <div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">  
      <aside class="sidebar-left" style="overflow-y:scroll;">
        <nav class="navbar navbar-inverse">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".collapse" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <h6 style="padding-left:1px"><a class="navbar-brand" href="index.php" style="margin:5px;"></span>OrganiQa<span class="dashboard_text">Dashboard</span></a></h6>
          </div>
          <div class="collapse navbar-collapse active" id="bs-example-navbar-collapse-1">
            <ul class="sidebar-menu">
              <li class="header">MAIN NAVIGATION</li>
              <li class="treeview">
                <a href="index.php">
                  <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
                <li class="treeview">
                  <a href="home.php">
                    <i class="fa fa-home"></i> <span>Home Page</span>
                    <i class="fa fa-angle-left pull-right"></i>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="add_head_ban.php"><i class="fa fa-angle-right"></i>Add Heading Banner</a></li>
                    <li><a href="add_middle_ban.php"><i class="fa fa-angle-right"></i>Add Middle Banner</a></li>
                    <li><a href="add_bot_banner.php"><i class="fa fa-angle-right"></i>Add Lower Banner</a></li>
                    <li><a href="add_head_ban.php#view"><i class="fa fa-angle-right"></i>View Heading Banner</a></li>
                    <li><a href="add_middle_ban.php#view"><i class="fa fa-angle-right"></i> View Middle Banner</a></li>
                    <li><a href="add_bot_banner.php#view"><i class="fa fa-angle-right"></i>View Lower Banner</a></li>
                    <li><a href="update_info.php"><i class="fa fa-angle-right"></i>About Content</a></li>
                    <li><a href="update_address_email_phone.php"><i class="fa fa-angle-right"></i>Change Address,Email,Phone No.</a></li>
                  </ul>
                </li>

                <li class="treeview">
                  <a href="home.php">
                      <i class="fa fa-user"></i> <span>Testimonial</span>
                      <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                      <li><a href="add_testimonial.php"><i class="fa fa-angle-right"></i>Add Testimonial</a></li>
                      <li><a href="view_testimonial.php"><i class="fa fa-angle-right"></i>View Testimonial</a></li>
                    </ul>
                  </li>
                 <li>
                  <a href="view_query.php">
                    <i class="fa fa-question"></i>
                    <span>View Query</span>
                  </a>
                </li>
               
                <li>
                  <a href="view_order.php">
                    <i class="fa fa-money"></i>
                    <span>Total Orders</span>
                  </a>
                </li>
                <li class="treeview">
                    <a href="home.php">
                      <i class="fas fa-box"></i> <span>Products</span>
                      <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                      <li><a href="add_product.php"><i class="fa fa-angle-right"></i>Add products</a></li>
                      <li><a href="view_products.php"><i class="fa fa-angle-right"></i>View Products</a></li>
                    </ul>
                </li>
                <li>
                  <a href="view_user.php">
                    <i class="fa fa-users"></i>
                    <span>Total Users</span>
                  </a>
                </li>
                 <li>
                  <a href="deal.php">
                    <i class="fa fa-money"></i>
                    <span>Deal Of the Day</span>
                  </a>
                </li>
                <li>
                  <a href="update_terms.php">
                    <i class="fa fa-money"></i>
                    <span>Terms & Condition</span>
                  </a>
                </li>
                <li>
                  <a href="update_privacy.php">
                    <i class="fa fa-money"></i>
                    <span>Privacy Policy</span>
                  </a>
                </li>
  		          <li>
                  <a href="update_faq.php">
                    <i class="fa fa-question"></i>
                    <span>FAQs</span>
                  </a>
                </li>
                <li>
                  <a href="add_pay_image.php">
                    <i class="fa fa-photo"></i>
                    <span>Payment Image</span>
                  </a>
                </li>

          </nav>
        </aside>
      </div>
          <div class="sticky-header header-section " style="background: lightgrey;overflow: hidden">
           <div class="header-left" style="scroll-behavior: none">
            <button id="showLeftPush" style="margin-left: 12px"><i class="fa fa-bars" ></i></button>
            <div class="profile_details_left">
             <ul class="nofitications-dropdown">
              <li class="dropdown head-dpdn">
              </li>	
            </ul>
            
          </div>
          <div class="clearfix"> </div>
        </div>
        <div class="header-right">

      <div class="profile_details">		
       <ul>
        <li class="dropdown profile_details_drop" >
        
          <div class="profile_img">	
           <span class="prfil-im" style="float: right">
            <form action="logout.php">
              <button class="btn btn-danger">Logout</button>
            </form> 
          </span>
          <span class="prfil-im" style="float: right">
             <form action="edit_profile.php">
              <button class="btn btn-success">Edit</button>
            </form> 
            
          </span>
             
          </span> 
           <div class="user-name" >
            <p>Welcome</p>
            <span>Administrator</span>
            
          </div>
          
          <div class="clearfix"></div>	
        </div>	
      </a>
      <ul class="dropdown-menu drp-mnu">
        <li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li> 
        <li> <a href="#"><i class="fa fa-user"></i> My Account</a> </li> 
        <li> <a href="#"><i class="fa fa-suitcase"></i> Profile</a> </li> 
        <li> <a href="#"><i class="fa fa-sign-out"></i> Logout</a> </li>
      </ul>
    </li>
  </ul>
  </div>
  <div class="clearfix"> </div>				
  </div>
  <div class="clearfix"> </div>	
  </div>

  <!-- //header-ends -->
  <script src='asset/js/SidebarNav.min.js' type='text/javascript'></script>
  <script>
    $('.sidebar-menu').SidebarNav()
  </script>
  <!-- //side nav js -->

  <!-- Classie --><!-- for toggle left push menu script -->
  <script src="asset/js/classie.js"></script>
  <script>
    var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
    showLeftPush = document.getElementById( 'showLeftPush' ),
    body = document.body;
    showLeftPush.onclick = function() 
    {
      classie.toggle( this, 'active' );
      classie.toggle( body, 'cbp-spmenu-push-toright' );
      classie.toggle( menuLeft, 'cbp-spmenu-open' );
      disableOther( 'showLeftPush' );
    };
    function disableOther( button ) 
    {
      if( button !== 'showLeftPush' ) 
      {
        classie.toggle( showLeftPush, 'disabled' );
      }


    }
    function ya()
    {

      document.getElementById('b').style.backgroundColor="green";
      document.getElementById('b2').style.backgroundColor="blue";
      document.getElementById('na').innerHTML="Top";
      document.getElementById('cus_table').style.display="block";
      document.getElementById('ven_table').style.display="none";
    }
    function na()
    {

      document.getElementById('b2').style.backgroundColor="green";
      document.getElementById('na').innerHTML="Bottom";
      document.getElementById('b').style.backgroundColor="blue";
      document.getElementById('ven_table').style.display="block";
      document.getElementById('cus_table').style.display="none";
    }
  </script>
  <!-- //Classie --><!-- //for toggle left push menu script -->

  <!--scrolling js-->

  <!--//scrolling js-->

  <!-- Bootstrap Core JavaScript -->
  <script src="asset/js/bootstrap.js"> </script>
  <style>
    .logo
    {
      width:60px;
      height:60px;
      float:left;
      top:0;
      margin-top:-10px;
      margin-left:-40px;
      border:1px solid white;
    }
    .card
    {
      display: inline-block;
      margin: 3px;
      align-items: center;
    }
    
    .card-img-top
    {
      width: 6em;
      margin: 2px;  
    }
    .dropdown .profile_details_drop
    {

    }
    @media only screen and (max-width: 1200px) {
   .profile_img
    {
        margin-top: -40px;
    }
    .sidebar-left
    {
    
       height: 100%;

    }
    .navbar-collapse
    {
       height: 100%;
    }
    }

  }
  </style>
