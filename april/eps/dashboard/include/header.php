<?php  
    session_start();
    if(!isset($_SESSION['islogin']) && !isset($_SESSION['id'])){
        echo "<script>window.alert('Session Expired!!! Please Login');window.location.href='login.php';</script>";
    }
?>
<!DOCTYPE HTML>
<html>
<head>
  <title>EPS DASHBOARD</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="../asset/images/logo1.png" type="image/png" sizes="16x16">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
  <link href="css/status.css" rel='stylesheet' type='text/css' />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
  <style>

    .responstable {
      margin: 1em 0;
      width: 100%;
      top:30%;
      overflow: hidden;
      background: white;
      color: #024457;
      border-radius: 10px;

    }
    .btn{
      margin:100px;s
    }
    .responstable tr {
      border: 1px solid #D9E4E6;
    }
    .responstable tr:nth-child(odd) {
      background-color: #EAF3F3;
    }
    .responstable th {
      display: none;
      border: 1px solid black;
      background-color: #167F92;
      color: #FFF;
      padding: 1em;
    }
    .responstable th:first-child {
      display: table-cell;
      text-align: center;
    }
    .responstable th:nth-child(2) {
      display: table-cell;
    }
    .responstable th:nth-child(3) {
      display: table-cell;
    }
    .responstable th:nth-child(4) {
      display: table-cell;
    }
    .responstable th:nth-child(5) {
      display: table-cell;
    }
    .responstable th:nth-child(6) {
      display: table-cell;
    }
    .responstable th:nth-child(7) {
      display: table-cell;
    }
    .responstable th:nth-child(8) {
      display: table-cell;
    }
    .responstable th:nth-child(9) {
      display: table-cell;
    }
    .responstable th:nth-child(10) {
      display: table-cell;
    }
    .responstable th:nth-child(2) span {
      display: block;
    }
    .responstable th:nth-child(2) span {
      display: block;
    }


    @media (min-width: 280px) and (max-width:900px) {
     #page-wrapper{

       max-width:100%;

       overflow:scroll;
     }
     .responstable {
      margin: 6em 0;
      width: 100%;
      top:30%;
      overflow: scroll;

      background: white;
      color: #024457;
      border-radius: 10px;

    }
    .sidebar-left{

      position: relative;
      overflow-y: scroll;


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
 $(document).ready(function() {
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
<body class="cbp-spmenu-push">
	<div class="main-content">
   <div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">  
    <aside class="sidebar-left" style="overflow-y:scroll">
      <nav class="navbar navbar-inverse">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".collapse" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <h6 style="padding-left:10px"><a class="navbar-brand" href="admin.php" style="margin:5px;"><span><img src="../asset/images/logo1.png" class="logo"></span>&mdash;EPS&mdash;<span class="dashboard_text" style="margin-left:13px;">Dashboard</span></a></h6>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">
              <a href="admin.php">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
              </a>

              <li class="treeview">
                <a href="#">
                  <i class="fa fa-envelope"></i>
                  <span>Home</span>
                  <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  <li><a href="update_eps_glance.php"><i class="fa fa-angle-right"></i>EPS at Glance</a></li>
                  <li><a href="update_upcoming_infra.php"><i class="fa fa-angle-right"></i>Upcoming Infrastructure</a></li>
                  <li><a href="update_welcome.php"><i class="fa fa-angle-right"></i>Welcome to EPS Pakur</a></li>
                  <li><a href="update_notice.php"><i class="fa fa-angle-right"></i>Notice Content</a></li>
                  <li><a href="update_news.php"><i class="fa fa-angle-right"></i>News & Updates</a></li>
                  <li><a href="update_video_tour.php"><i class="fa fa-angle-right"></i>Video Tour</a></li>
                  <li><a href="update_admission_details.php"><i class="fa fa-angle-right"></i>Admission Details</a></li>
                  <li><a href="update_educational_tour.php"><i class="fa fa-angle-right"></i>Educational Tour</a></li>
                </ul>
              </li>

              <li class="treeview">
                <a href="#">
                  <i class="fa fa-envelope"></i>
                  <span>Messages</span>
                  <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  <li><a href="update_mess_director.php"><i class="fa fa-angle-right"></i>From Director</a></li>
                  <li><a href="update_mess_principle.php"><i class="fa fa-angle-right"></i>From Principle</a></li>
                </ul>
              </li>
              <li class="treeview">
                <a href="#">
                  <i class="fa fa-envelope"></i>
                  <span>About Us</span>
                  <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  <li><a href="update_about_eps.php"><i class="fa fa-angle-right"></i>About EPS School</a></li>
                  <li><a href="update_middle_box.php"><i class="fa fa-angle-right"></i>Our philosophy(Middle Box)</a></li>
                  <li><a href="update_vision.php"><i class="fa fa-angle-right"></i>Our Vision</a></li>
                  <li><a href="update_values.php"><i class="fa fa-angle-right"></i>Our Values</a></li>
                  <li><a href="update_aims.php"><i class="fa fa-angle-right"></i>Aims & Objective</a></li>
                </ul>
              </li>
              <li class="treeview">
                <a href="#">
                  <i class="fa fa-envelope"></i>
                  <span>Academics</span>
                  <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  <li><a href="update_curriculum.php"><i class="fa fa-angle-right"></i>Curriculm</a></li>
                  <li><a href="update_library.php"><i class="fa fa-angle-right"></i>Library & Facility</a></li>
                </ul>
              </li>
              <li class="treeview">
                <a href="#">
                  <i class="fa fa-envelope"></i>
                  <span>Admissions</span>
                  <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  <li><a href="update_admission_info.php"><i class="fa fa-angle-right"></i>Admission Information</a></li>
                  <li><a href="update_code_of_conduct.php"><i class="fa fa-angle-right"></i>Code of Conduct</a></li>
                </ul>
              </li>
              <li class="treeview">
                <a href="#">
                  <i class="fas fa-images"></i>
                  <span>Gallery</span>
                  <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  <li><a href="update_photo_gallery.php"><i class="fa fa-angle-right"></i>Photo Gallery</a></li>
                  <li><a href="update_video_gallery.php"><i class="fa fa-angle-right"></i>Video Gallery</a></li>
                </ul>
              </li>
              <li class="treeview">
                <a href="#">
                  <i class="fas fa-chalkboard-teacher"></i>
                  <span>Our Faculty</span>
                  <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  <li><a href="add_faculty.php"><i class="fa fa-angle-right"></i>Add Faculty</a></li>
                  <li><a href="update_faculty.php"><i class="fa fa-angle-right"></i>Existing Faculty</a></li>
                </ul>
              </li>
              <li>
                <a href="update_facility.php">
                  <i class="fas fa-phone-square-alt"></i> <span>Facilities & Attraction</span>

                </a>
              </li>
              <li>
                <a href="update_contact_details.php">
                  <i class="fas fa-phone-square-alt"></i> <span>Contact Details</span>

                </a>
              </li>
              <li>
                <a href="view_contacted.php">
                  <i class="fas fa-futbol"></i> <span>View Contacted Messages</span>
                </a>
              </li>
              <li >
                <a href="logout.php">
                  <i class="fas fa-photo-video"></i> <span>Log Out</span>

                </a>
              </li>
        </nav>
      </aside>
    </div>
        <div class="sticky-header header-section ">
         <div class="header-left">
          <button id="showLeftPush" style="margin-left: 12px"><i class="fa fa-bars" ></i></button>
          <div class="profile_details_left">
           <ul class="nofitications-dropdown">
            <li class="dropdown head-dpdn">
            </li>	
          </ul>
          <div class="clearfix"> </div>
        </div>
        <div class="clearfix"> </div>
      </div>
      <div class="header-right">

    <div class="profile_details">		
    <ul>
      <li class="dropdown profile_details_drop">
       <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
        <div class="profile_img">	
         <span class="prfil-img"><img src="images/2.jpg" alt=""> </span> 
         <div class="user-name">
          <p>Admin</p>
        </div>
        <i class="fa fa-angle-down lnr"></i>
        <i class="fa fa-angle-up lnr"></i>
        <div class="clearfix"></div>	
      </div>	
    </a>
    <ul class="dropdown-menu drp-mnu">
      <li> <a href="update_login.php"><i class="fa fa-user"></i> Change Username/Password</a> </li>
      <li> <a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a> </li>
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
</style>
