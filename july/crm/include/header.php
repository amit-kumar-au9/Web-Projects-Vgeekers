<?php  
    session_start();
    if(!isset($_SESSION['id'])){
        echo "<script>window.location.href='index.php';</script>";
    }
    $login_id = $_SESSION['id'];
    $login_type = $_SESSION['type'];
    $site_id = $_SESSION['site_id'];
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>PR Construction</title>

  <!-- Custom fonts for this template-->
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css">

  <!-- Custom styles for this template-->
  <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">
  <script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
    <style>
        .pashu_header{
            color: #4E73DF;
            font-weight: 700;
            font-size: 40px;
            margin:auto;
        }
        @media only screen and (max-width: 900px) {
            .pashu_header {
                font-size: 20px;
            }
        }
    </style>
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard.php">
        <?php
          if($login_type == 'admin') {
        ?>
            <div class="sidebar-brand-text mx-3"><?php echo $_SESSION['username']; ?><sup style="color: greenyellow">(Admin)</sup></div>
        <?php 
          }
        ?>
        <?php
          if($login_type == 'super_admin') {
        ?>
            <div class="sidebar-brand-text mx-3">Super Admin</div>
        <?php 
          }
        ?>
        <?php
          if($login_type == 'sub_admin') {
        ?>
            <div class="sidebar-brand-text mx-3"><?php echo $_SESSION['username']; ?><sup style="color: greenyellow">(Sub Admin)</sup></div>
        <?php 
          }
        ?>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="dashboard.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <!--<div class="sidebar-heading">-->
      <!--  Interface-->
      <!--</div>-->

      <!-- Nav Item - Pages Collapse Menu -->
      <?php
        if($login_type == 'super_admin') {
      ?>
          <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse" aria-expanded="true" aria-controls="collapse">
              <i class="fas fa-user fa-user"></i>
              <span>Admin</span>
            </a>
            <div id="collapse" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="add_admin.php">Add Admin</a>
                <a class="collapse-item" href="view_admin.php">Edit/Remove Admin</a>
              </div>
            </div>
          </li>
      <?php 
        }
      ?>
      <?php
        if($login_type != 'sub_admin') {
      ?>
          <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSubAdmin" aria-expanded="true" aria-controls="collapseSubAdmin">
              <i class="fas fa-user fa-user"></i>
              <span>Sub Admin</span>
            </a>
            <div id="collapseSubAdmin" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="add_sub_admin.php">Add Sub Admin</a>
                <a class="collapse-item" href="view_sub_admin.php">Edit/Remove Sub Admin</a>
              </div>
            </div>
          </li>
      <?php 
        }
      ?>
      <?php
        if($login_type == 'sub_admin') {
      ?>
          <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBill" aria-expanded="true" aria-controls="collapseBill">
              <i class="fa fa-edit fa-edit"></i>
              <span>Bills</span>
            </a>
            <div id="collapseBill" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
                
                    <a class="collapse-item" href="add_created_bill.php">Create Bill</a>
                    <a class="collapse-item" href="add_uploaded_bill.php">Uploaded Bill</a>
                
              </div>
            </div>
          </li>
        <?php 
          }
        ?>
          <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSites" aria-expanded="true" aria-controls="collapseSites">
              <i class="fas fa-building fa-building"></i>
              <span>Sites</span>
            </a>
            <div id="collapseSites" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
                <?php
                  if($login_type != 'sub_admin') {
                ?>
                    <a class="collapse-item" href="add_site.php">Add Site</a>
                    <a class="collapse-item" href="view_site.php">View/Edit Sites Data</a>
                <?php 
                  }
                ?>
                <?php
                  if($login_type == 'sub_admin') {
                ?>
                    <a class="collapse-item" href="add_attendance.php">Add Attendance</a>
                <?php 
                  }
                ?>
              </div>
            </div>
          </li>
          <?php
            if($login_type != 'sub_admin') {
          ?>
          <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseMaterial" aria-expanded="true" aria-controls="collapseMaterial">
              <i class="fas fa-fw fa-cog"></i>
              <span>Material Category</span>
            </a>
            <div id="collapseMaterial" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="material_category.php">Add / View</a>
              </div>
            </div>
          </li>
          <?php 
            }
          ?>
          <?php
            if($login_type != 'sub_admin') {
          ?>
            <li class="nav-item">
              <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseMoney" aria-expanded="true" aria-controls="collapseMoney">
                <i class="fas fa-fw fa-cog"></i>
                <span>Money Transfer</span>
              </a>
              <div id="collapseMoney" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                  <?php
                    if($login_type == 'admin') {
                  ?>
                      <a class="collapse-item" href="money_transfer.php">Add/View</a>
                  <?php 
                    }
                  ?>
                  <?php
                    if($login_type == 'super_admin') {
                  ?>
                      <a class="collapse-item" href="money_transfer_all.php">View</a>
                  <?php 
                    }
                  ?>
                </div>
              </div>
            </li>
          <?php 
            }
          ?>
          <?php
            if($login_type != 'sub_admin') {
          ?>
            <!--<li class="nav-item">-->
            <!--  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseReport" aria-expanded="true" aria-controls="collapseReport">-->
            <!--    <i class="fas fa-fw fa-cog"></i>-->
            <!--    <span>Report</span>-->
            <!--  </a>-->
            <!--  <div id="collapseReport" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">-->
            <!--    <div class="bg-white py-2 collapse-inner rounded">-->
            <!--      <a class="collapse-item" href="add_report.php">Create Report</a>-->
            <!--      <a class="collapse-item" href="view_report.php">View Report</a>-->
            <!--    </div>-->
            <!--  </div>-->
            <!--</li>-->
          <?php 
            }
          ?>
          <?php
            if($login_type == 'sub_admin') {
          ?>
          <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCashFlow" aria-expanded="true" aria-controls="collapseCashFlow">
              <i class="fas fa-fw fa-cog"></i>
              <span>Cash Flow</span>
            </a>
            <div id="collapseCashFlow" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="add_cash_flow.php">Update Cash Flow</a>
              </div>
            </div>
          </li>
          <?php 
            }
          ?>
          <?php
            if($login_type == 'sub_admin') {
          ?>
          <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseInventory" aria-expanded="true" aria-controls="collapseInventory">
              <i class="fas fa-fw fa-cog"></i>
              <span>Inventory on Site</span>
            </a>
            <div id="collapseInventory" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="inventory.php#add_inventory">Add Stock Category Wise</a>
              </div>
            </div>
          </li>
          <?php 
            }
          ?>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          
        <p class="pashu_header">PR Construction</p>


          <!-- Topbar Navbar -->
          <ul class="navbar-nav">
            <a class="dropdown-item" data-toggle="modal" data-target="#logoutModal">
              <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>Logout</a>
          </ul>

        </nav>
        <!-- End of Topbar -->