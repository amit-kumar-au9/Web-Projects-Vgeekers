<?php include "include/header.php";?>
<div id="page-wrapper" style="background: white;">
  <div class="main-page" style="background: white;">
    <center><h2 class="title1" style="color: red;">VIEW QUERY</h2></center>
    <center>
      <table class="table" style="border:1px solid black">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email Address</th>
            <th scope="col">Phone</th>
            <th scope="col">Query Description</th>
          </tr>
        </thead>
        <tbody>
          <?php 
            include 'conn.php';
            $checkUsers = "SELECT * FROM query";
            if(mysqli_num_rows($resultUsers = mysqli_query($con, $checkUsers))>0){
              $no = 0;
              while($row = $resultUsers -> fetch_assoc()){
                $no++;
          ?>
          <tr>
            <th scope="row"><?php echo $no; ?></th>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['phone']; ?></td>
            <td><?php echo $row['detail']; ?></td>
          </tr>
          <?php 
              }
            }
          ?>
        </tbody>
      </table>
    </center>
  </div>
</div>
<?php include "include/footer.php";?>