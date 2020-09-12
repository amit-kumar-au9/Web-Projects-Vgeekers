<?php  
    session_start();
    if(isset($_SESSION['id']) && isset($_SESSION['islogin'])){
        if($_SESSION['type']=="student"){
            echo "<script>window.alert('Already Logged in');window.location.href='dashboard/studentDashboard.php';</script>";
        }
        elseif($_SESSION['type']=="teacher"){
            echo "<script>window.alert('Already Logged in');window.location.href='dashboard/teacherDashboard.php';</script>";
        }
        elseif($_SESSION['type']=="admin"){
            echo "<script>window.alert('Already Logged in');window.location.href='dashboard/admin.php';</script>";
        }
    }
?>
<?php require 'include/header.php'; ?>

<br><br><br>
    <section class="site-section bg-light" id="contact-section" data-aos="fade">
      <div class="container">
        <div class="row">
      
          <div class="col-md-6 text-center">
            <!-- <h2>Log In</h2> -->
            <form action="loginPage.php" method="post" class="p-5 bg-white">
              
              <h2 class="h4 text-black mb-5">Login Form</h2> 

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="email">Email</label> 
                  <input type="email" id="email" name="email" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="password">Password</label> 
                  <input type="password" id="password" name="password" class="form-control">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Login" name="submit" class="btn btn-primary btn-md text-white">
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

<?php require 'include/footer.php'; ?>

