<?php include 'include/header.php'; ?>
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Content Row -->
          <div class="row">
            <?php 
                include 'include/connection.php';
                $selectAdmin = "SELECT * FROM user_details WHERE type = 'admin'";
                $admin_no = mysqli_num_rows(mysqli_query($conn, $selectAdmin));
                
                $selectAdmin = "SELECT * FROM user_details WHERE type = 'sub_admin'";
                $sub_admin_no = mysqli_num_rows(mysqli_query($conn, $selectAdmin));
                
                $selectAdmin = "SELECT * FROM site";
                $site_no = mysqli_num_rows(mysqli_query($conn, $selectAdmin));
                
                $selectAdmin = "SELECT * FROM material_category_list";
                $material_no = mysqli_num_rows(mysqli_query($conn, $selectAdmin));
                
                $selectAdmin = "SELECT * FROM user_details WHERE type = 'admin'";
                $no = mysqli_num_rows(mysqli_query($conn, $selectAdmin));
                
                $selectAdmin = "SELECT * FROM user_details WHERE type = 'admin'";
                $no = mysqli_num_rows(mysqli_query($conn, $selectAdmin));
                
                
            ?>
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-6 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">No. of Admin</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $admin_no; ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-6 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">No. of Sub Admin</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $sub_admin_no; ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-6 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">No. of Site</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $site_no; ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-building fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-6 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Types of Material</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $material_no; ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-cubes fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Content Row -->

        </div>
        <!-- /.container-fluid -->
<?php include 'include/footer.php'; ?>