<!-- <?php  
	session_start();
	if(!isset($_SESSION['islogin']) && !isset($_SESSION['id'])){
	    echo "<script>window.alert('Session Expired!!! Please Login');window.location.href='../index.php';</script>";
	}
	?> -->
<!DOCTYPE HTML>
<html>
	<head>
		<title>TOWNZ DASHBOARD</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" type="image/png" href="assets/images/logname.png">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Glance Design Dashboard Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
			SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<link href="assets/css/status.css" rel='stylesheet' type='text/css' />
		<!-- Bootstrap Core CSS -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
		<link href="assets/css/bootstrap.css" rel='stylesheet' type='text/css' />
		<!-- Custom CSS -->
		<link href="assets/css/style.css" rel='stylesheet' type='text/css' />
		<!-- font-awesome icons CSS -->
		<link href="assets/css/font-awesome.css" rel="stylesheet">
		<!-- //font-awesome icons CSS-->
		<!-- side nav css file -->
		<link href='assets/css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css'/>
		<!-- //side nav css file -->
		<!-- js-->
		<script src="assets/js/jquery-1.11.1.min.js"></script>
		<script src="assets/js/modernizr.custom.js"></script>
		<!--webfonts-->
		<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
		<!--//webfonts--> 
		<!-- chart -->
		<script src="assets/js/index.js"></script>
		<!-- //chart -->
		<!-- Metis Menu -->
		<script src="assets/js/metisMenu.min.js"></script>
		<script src="assets/js/custom.js"></script>
		<link href="assets/css/custom.css" rel="stylesheet">
		<!--//Metis Menu -->
		<style>
		</style>
		<!-- requried-jsfiles-for owl -->
		<link href="assets/css/owl.carousel.css" rel="stylesheet">
		<script src="assets/js/owl.carousel.js"></script>
		<script src="assets/js/subject.js"></script>
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
		<!-- //requried-jsfiles-for owl -->
	</head>
	<body class="cbp-spmenu-push">
		<div class="main-content">
		<div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
			<!--left-fixed -navigation-->
			<aside class="sidebar-left" style="overflow-y:scroll">
				<nav class="navbar navbar-inverse">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".collapse" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						</button>
						<h1 style="padding-left:10px"><a class="navbar-brand" href="index.php" style="margin:5px;"><span><img src="assets/images/logname.png" class="logos"></span>&mdash;TOWNZ&mdash;<span class="dashboard_text" style="margin-left:13px;">Dashboard</span></a></h1>
					</div>
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="sidebar-menu">
							<li class="header">MAIN NAVIGATION</li>
							<li class="treeview">
								<a href="index.php">
								<i class="fa fa-dashboard"></i> <span>Dashboard</span>
								</a>
							</li>
							<li class="treeview"><span style="color:white">Vendor Dashboard</span></li>
							<li class="treeview">
								<a href="#">
								<i class="fa fa-user"></i>
								<span>Vendors</span>
								<i class="fa fa-angle-left pull-right"></i>
								</a>
								<ul class="treeview-menu">
									<li><a href="pending_vendor.php"><i class="fa fa-angle-right"></i>Pending Vendor</a></li>
									<li><a href="approved_vendor.php"><i class="fa fa-angle-right"></i>Approved Vendor</a></li>
									<li><a href="view_strike_vendor.php"><i class="fa fa-angle-right"></i>Striked Vendor</a></li>
									<li><a href="all_vendor.php"><i class="fa fa-angle-right"></i>All Vendor</a></li>
								</ul>
							</li>
							<!--<li class="treeview">-->
							<!--  <a href="#">-->
							<!--  <i class="fa fa-user"></i>-->
							<!--  <span>Sub Admins</span>-->
							<!--  <i class="fa fa-angle-left pull-right"></i>-->
							<!--  </a>-->
							<!--  <ul class="treeview-menu">-->
							<!--    <li><a href="add_sub.php"><i class="fa fa-angle-right"></i>Add Sub-Admin</a></li>-->
							<!--    <li><a href="view_sub.php"><i class="fa fa-angle-right"></i>View Sub-Admin</a></li>-->
							<!--  </ul>-->
							<!--</li>-->
							<li class="treeview">
								<a href="#">
								<i class="fa fa-user"></i>
								<span>Leads & Query</span>
								<i class="fa fa-angle-left pull-right"></i>
								</a>
								<ul class="treeview-menu">
									<li><a href="add_lead.php"><i class="fa fa-angle-right"></i>Add Leads or Query</a></li>
									<li><a href="all_lead.php"><i class="fa fa-angle-right"></i>All Leads</a></li>
									<li><a href="all_query.php"><i class="fa fa-angle-right"></i>All Query</a></li>
								</ul>
							</li>
							<li class="treeview">
								<a href="#">
								<i class="fa fa-user"></i>
								<span>City & Location</span>
								<i class="fa fa-angle-left pull-right"></i>
								</a>
								<ul class="treeview-menu">
									<li><a href="add_city.php"><i class="fa fa-angle-right"></i>Add City</a></li>
									<li><a href="all_city.php"><i class="fa fa-angle-right"></i>All City</a></li>
									<li><a href="add_location.php"><i class="fa fa-angle-right"></i>Add Location</a></li>
									<li><a href="all_city_location.php"><i class="fa fa-angle-right"></i>All City and Location</a></li>
								</ul>
							</li>
							<li>
							</li>
							<li class="treeview">
								<a href="#">
								<i class="fa fa-edit"></i> <span>Category</span>
								<i class="fa fa-angle-left pull-right"></i>
								</a>
								<ul class="treeview-menu">
									<li><a href="add_category.php"><i class="fa fa-angle-right"></i> Add Category</a></li>
									<li><a href="view_category.php"><i class="fa fa-angle-right"></i>View Category</a></li>
								</ul>
							</li>
							<li class="treeview">
								<a href="#">
								<i class="fa fa-edit"></i> <span>Sub Category</span>
								<i class="fa fa-angle-left pull-right"></i>
								</a>
								<ul class="treeview-menu">
									<li><a href="add_subcategory.php"><i class="fa fa-angle-right"></i> Add Sub-Category</a></li>
									<li><a href="view_subcategory.php"><i class="fa fa-angle-right"></i>View Sub-Category</a></li>
								</ul>
							</li>
							<li class="treeview">
								<a href="#">
								<i class="fa fa-edit"></i> <span>Services</span>
								<i class="fa fa-angle-left pull-right"></i>
								</a>
								<ul class="treeview-menu">
									<li><a href="add_services.php"><i class="fa fa-angle-right"></i> Add Service</a></li>
									<li><a href="view_services.php"><i class="fa fa-angle-right"></i>View Service</a></li>
								</ul>
							</li>
							<!-- <li class="treeview">
								<a href="#">
								<i class="fa fa-table"></i> <span>Querries</span>
								<i class="fa fa-angle-left pull-right"></i>
								</a>
								<ul class="treeview-menu">
								  <li><a href="pending_query.php"><i class="fa fa-angle-right"></i>Pending Querries</a></li>
								  <li><a href="all_query.php"><i class="fa fa-angle-right"></i>All Queries</a></li>
								</ul>
								</li> -->
							<li class="treeview">
								<a href="#">
								<i class="fa fa-envelope"></i> <span>Refer And Earn</span>
								<i class="fa fa-angle-left pull-right"></i>
								</a>
								<ul class="treeview-menu">
									<li><a href="vendor_referal.php"><i class="fa fa-angle-right"></i> View All Referals </a></li>
								</ul>
							</li>
							<li class="treeview">
								<a href="#">
								<i class="fa fa-folder"></i> <span>Notifications</span>
								<i class="fa fa-angle-left pull-right"></i>
								</a>
								<ul class="treeview-menu">
									<li><a href="send_all_notification.php"><i class="fa fa-angle-right"></i>Send to All</a></li>
									<li><a href="view_vendor_notification.php"><i class="fa fa-angle-right"></i>View All</a></li>
								</ul>
							</li>
							<li class="treeview">
								<a href="#">
								<i class="fa fa-folder"></i> <span>Banners</span>
								<i class="fa fa-angle-left pull-right"></i>
								</a>
								<ul class="treeview-menu">
									<li><a href="update_vendor_banner.php"><i class="fa fa-angle-right"></i>Update Banners</a></li>
								</ul>
							</li>
							<li class="treeview">
								<a href="#">
								<i class="fa fa-edit"></i> <span>Vendor APP Data</span>
								<i class="fa fa-angle-left pull-right"></i>
								</a>
								<ul class="treeview-menu">
									<li><a href="update_training_center.php"><i class="fa fa-angle-right"></i> Training Center</a></li>
									<li><a href="update_privacy_policy.php"><i class="fa fa-angle-right"></i>Privacy Policy</a></li>
									<li><a href="update_how_it_works.php"><i class="fa fa-angle-right"></i>How it works</a></li>
									<li><a href="update_terms_of_use.php"><i class="fa fa-angle-right"></i>Terms of Use</a></li>
									<li><a href="update_tnc.php"><i class="fa fa-angle-right"></i>Terms & Conditions</a></li>
								</ul>
							</li>
							<span style="color:white">Customer Dashboard</span></li>
							<li class="treeview">
								<a href="#">
								<i class="fa fa-users"></i>
								<span>Customer</span>
								<i class="fa fa-angle-left pull-right"></i>
								</a>
								<ul class="treeview-menu">
									<li><a href="view_all_customer.php"><i class="fa fa-angle-right"></i>All Customers</a></li>
								</ul>
							</li>
							<li class="treeview">
								<a href="#">
								<i class="fa fa-users"></i>
								<span>Time Slot</span>
								<i class="fa fa-angle-left pull-right"></i>
								</a>
								<ul class="treeview-menu">
									<li><a href="time_slot.php"><i class="fa fa-angle-right"></i>View/Add</a></li>
								</ul>
							</li>
							<li class="treeview">
								<a href="#">
								<i class="fa fa-envelope"></i> <span>Refer And Earn</span>
								<i class="fa fa-angle-left pull-right"></i>
								</a>
								<ul class="treeview-menu">
									<li><a href="customer_referal.php"><i class="fa fa-angle-right"></i>View All Referals </a></li>
								</ul>
							</li>
							<li class="treeview">
								<a href="#">
								<i class="fa fa-folder"></i> <span>Notifications</span>
								<i class="fa fa-angle-left pull-right"></i>
								</a>
								<ul class="treeview-menu">
									<li><a href="send_all_notification_customer.php"><i class="fa fa-angle-right"></i>Send to All</a></li>
									<li><a href="view_customer_notification.php"><i class="fa fa-angle-right"></i>View All</a></li>
								</ul>
							</li>
							<li class="treeview">
								<a href="#">
								<i class="fa fa-folder"></i> <span>Coupon Code</span>
								<i class="fa fa-angle-left pull-right"></i>
								</a>
								<ul class="treeview-menu">
									<li><a href="add_coupon.php"><i class="fa fa-angle-right"></i>Add Coupon Code</a></li>
									<li><a href="view_coupon.php"><i class="fa fa-angle-right"></i>All Coupon Code</a></li>
								</ul>
							</li>
							<li class="treeview">
								<a href="#">
								<i class="fa fa-users"></i>
								<span>Report Problem</span>
								<i class="fa fa-angle-left pull-right"></i>
								</a>
								<ul class="treeview-menu">
									<li><a href="view_report_problem.php"><i class="fa fa-angle-right"></i>View Report Problem</a></li>
								</ul>
							</li>
							<li class="treeview">
								<a href="#">
								<i class="fa fa-users"></i>
								<span>Customer App Data</span>
								<i class="fa fa-angle-left pull-right"></i>
								</a>
								<ul class="treeview-menu">
									<li><a href="view_category_page_top_banner.php"><i class="fa fa-angle-right"></i>Top Banners Home Page</a></li>
									<li><a href="view_category_page_middle_banner.php"><i class="fa fa-angle-right"></i>Middle Banners Home Page</a></li>
									<li><a href="view_category_page_lower_banner.php"><i class="fa fa-angle-right"></i>Lower Banners Home Page</a></li>
									<li><a href="update_note_homePage.php"><i class="fa fa-angle-right"></i>Note: Home Page</a></li>
								</ul>
							</li>
						</ul>
					</div>
					<!-- /.navbar-collapse -->
				</nav>
			</aside>
		</div>
		<!--left-fixed -navigation-->
		<!-- header-starts -->
		<div class="sticky-header header-section ">
			<div class="header-left">
				<!--toggle button start-->
				<button id="showLeftPush"><i class="fa fa-bars"></i></button>
				<!--toggle button end-->
				<div class="profile_details_left">
					<!--notifications of menu start -->
					<ul class="nofitications-dropdown">
						<li class="dropdown head-dpdn">
						</li>
					</ul>
					<div class="clearfix"> </div>
				</div>
				<!--notification menu end -->
				<div class="clearfix"> </div>
			</div>
			<div class="header-right">
				<!--search-box-->
				<div class="search-box">
					<form class="input">
						<input class="sb-search-input input__field--madoka" placeholder="Search..." type="search" id="input-31" />
						<label class="input__label" for="input-31">
							<svg class="graphic" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
								<path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
							</svg>
						</label>
					</form>
				</div>
				<!--//end-search-box-->
				<div class="profile_details">
					<ul>
						<li class="dropdown profile_details_drop">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
								<div class="profile_img">
									<span class="prfil-img"><img src="assets/images/2.jpg" alt=""> </span> 
									<div class="user-name">
										<p>Townz</p>
										<span>Admin</span>
									</div>
									<i class="fa fa-angle-down lnr"></i>
									<i class="fa fa-angle-up lnr"></i>
									<div class="clearfix"></div>
								</div>
							</a>
							<ul class="dropdown-menu drp-mnu">
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
		<!--//footer-->
		<!-- side nav js -->
		<script src='assets/js/SidebarNav.min.js' type='text/javascript'></script>
		<script>
			$('.sidebar-menu').SidebarNav()
		</script>
		<!-- //side nav js -->
		<!-- Classie --><!-- for toggle left push menu script -->
		<script src="assets/js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
			  showLeftPush = document.getElementById( 'showLeftPush' ),
			  body = document.body;
			  
			showLeftPush.onclick = function() {
			  classie.toggle( this, 'active' );
			  classie.toggle( body, 'cbp-spmenu-push-toright' );
			  classie.toggle( menuLeft, 'cbp-spmenu-open' );
			  disableOther( 'showLeftPush' );
			};
			
			function disableOther( button ) {
			  if( button !== 'showLeftPush' ) {
			    classie.toggle( showLeftPush, 'disabled' );
			  }
			}
			                function y()
			{
			
			document.getElementById('b').style.display="none";
			document.getElementById('b2').style.display="block";
			}
			function n()
			{
			
			document.getElementById('b2').style.display="none";
			document.getElementById('b').style.display="block";
			   
			}
			function yess()
			{
			
			document.getElementById('b').style.backgroundColor="green";
			       document.getElementById('b2').style.backgroundColor="blue";
			       document.getElementById('na').innerHTML="Top";
			document.getElementById('cus_table').style.display="block";
			       document.getElementById('ven_table').style.display="none";
			}
			function noo()
			{
			
			document.getElementById('b2').style.backgroundColor="green";
			document.getElementById('na').innerHTML="Bottom";
			document.getElementById('b').style.backgroundColor="blue";
			document.getElementById('ven_table').style.display="block";
			document.getElementById('cus_table').style.display="none"; }
			 
		</script>
		<!-- //Classie --><!-- //for toggle left push menu script -->
		<!--scrolling js-->
		<!--//scrolling js-->
		<!-- Bootstrap Core JavaScript -->
		<script src="assets/js/bootstrap.js"> </script>
		<style>
			.logos{
			width:60px;
			height:60px;
			float:left;
			top:0;
			margin-top:-10px;
			margin-left:-40px;
			border:1px solid white;
			}
			#page-wrapper{
			max-width:100%;
			overflow:scroll;
			}
			.responstable {
			margin: 2em 0;
			width: 100%;
			overflow: scroll;
			display: block;
			background: white;
			color: #024457;
			border-radius: 10px;
			}
			.responstable th {
			display: none;
			border: 1px solid black;
			background-color: #167F92;
			color: #FFF;
			width: 100%;
			padding: 1em;
			}
			.responstable th, .responstable td {
			display: table-cell;
			padding: 1em;
			}
			.star
			{
			color:red;
			}
			#page-wrapper
			{
			overflow-x: hidden;
			}
		</style>
</html>