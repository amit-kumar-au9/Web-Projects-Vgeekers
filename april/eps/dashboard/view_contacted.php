<?php include "include/header.php";?>
<div id="page-wrapper">
  <div class="main-page">
   <center><h2 class="title1" style="color: red;">VIEW CONTACTED MESSAGES</h2></center>
    <div class="tables">
      <div class="table-responsive bs-example widget-shadow">
        <table class="table table-bordered"> 
          <thead> 
            <tr> 
              <th>#</th> 
              <th>Name</th> 
              <th>Email</th> 
              <th>Message</th>
              <th>Time</th>
            </tr> 
          </thead> 
          <?php 
            include 'include/connection.php';
            $checkQuery = "SELECT * FROM contacted order by id desc";
            $checkResult = mysqli_query($conn, $checkQuery);
          ?>
          <tbody>
            <?php 
              $sno = 1;
              while($row = $checkResult -> fetch_assoc()){
            ?>
            <tr>
              <td><?php echo $sno; ?></td>
              <td><?php echo $row['name']; ?></td>
              <td><?php echo $row['email']; ?></td>
              <td><?php echo $row['message']; ?></td>
              <td><?php echo $row['date']; ?></td>
            </tr>
            <?php 
              $sno++;
              }
            ?>
          </tbody>
        </table> 
      </div>

    </div>
  </div>
</div>

<?php include "include/footer.php";?>
