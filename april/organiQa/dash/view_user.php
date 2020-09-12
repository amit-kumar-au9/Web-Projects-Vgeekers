<?php include "include/header.php";?>
<div id="page-wrapper"style="background: white;" >
  <div class="main-page" style="background: white;">
    <center><h2 class="title1" style="color: red;">All Users</h2></center>
    <center>
      <table class="table" style="border:1px solid black;">
        <thead class="thead-dark">
          <tr>
            <th scope="col">S.No</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Address</th>
            <th scope="col">State</th>
            <th scope="col">City</th>
            <th scope="col">Pin</th>
            <th scope="col">Block</th>
          </tr>
        </thead>
        <tbody>
          <?php 
            include 'conn.php';
            $checkUsers = "SELECT * FROM signup";
            if(mysqli_num_rows($resultUsers = mysqli_query($con, $checkUsers))>0){
              $no = 0;
              while($row = $resultUsers -> fetch_assoc()){
                $no++;
          ?>
                <tr>
                  <th scope="row"><?php echo $no; ?></th>
                  <td><?php echo $row['first_name'].$row['last_name']; ?></td>
                  <td><?php echo $row['email']; ?></td>
                  <td><?php echo $row['phone']; ?></td>
                  <td><?php echo $row['address']; ?></td>
                  <td><?php echo $row['state']; ?></td>
                  <td><?php echo $row['city']; ?></td>
                  <td><?php echo $row['pin']; ?></td>
                  
                  <td>
                    <!-- <button class="btn btn-success" style="margin: 10px">EDIT</button> -->
                    <form method="post">
                      <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                      <?php 
                        if($row['isactive'] == '1'){
                      ?>
                      <button class="btn btn-danger" style="margin: 10px" type="submit" name="block">BLOCK</button>
                      <?php 
                        }
                        else{
                      ?>
                      <button class="btn btn-danger" style="margin: 10px" type="submit" name="unblock">UNBLOCK</button>
                      <?php 
                        }
                      ?>
                    </form>
                  </td>
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
<?php 
  if(isset($_POST['block'])){ //check if form was submitted
    $id = $_POST['id'];
    $blockUser = "UPDATE signup SET isactive = '0' WHERE id = '".$id."'";
    mysqli_query($con, $blockUser);
    echo "<script>window.alert('User Blocked');window.location.href='view_user.php';</script>";


  }
  if(isset($_POST['unblock'])){ //check if form was submitted
    $id = $_POST['id'];
    $blockUser = "UPDATE signup SET isactive = '1' WHERE id = '".$id."'";
    mysqli_query($con, $blockUser);
    echo "<script>window.alert('User UnBlocked');window.location.href='view_user.php';</script>";


  }  

?>