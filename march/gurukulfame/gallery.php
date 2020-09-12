    <section class="site-section" id="gallery-section">
      

      <div class="container">

        <div class="row mb-3">
          <div class="col-12 text-center" data-aos="fade">
            <h2 class="section-title mb-3">Gallery</h2>
          </div>
        </div> 
        
        <div id="posts" class="row no-gutter">
          <?php 
          include 'dashboard/include/connection.php'; 
          $checkQuery = "SELECT * FROM `gallery`";
          $checkResult = mysqli_query($conn, $checkQuery);
          $no_rows=mysqli_num_rows($checkResult);
          for($sno=1;$sno<=$no_rows;$sno++){
          $row = $checkResult->fetch_assoc();
          ?>
          <div class="item col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
            <a href="<?php echo $row['link']; ?>" class="item-wrap fancybox" data-fancybox="gallery2">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="<?php echo $row['link']; ?>">
            </a>
          </div>
          <?php 
          } 
          ?>

        </div>
      </div>

    </section>