<?php include "include/header.php";?>
<div id="page-wrapper" style="background: white">
  <div class="main-page" style="background: white">
    <center><h2 class="title1" style="color: red;">All Products</h2></center>
    <center>
      <table class="table" style="border:1px solid black">
        <thead class="thead-dark">
          <tr>
            <th scope="col">S.No</th>
            <th scope="col">Student Name</th>
            <th scope="col">Student Phone</th>
          </tr>
        <?php
            include 'include/connection.php';
            $sql="SELECT * FROM student_reg WHERE phase_flag = 1";
            $result=$conn->query($sql);
            if($result->num_rows > 0){
                $no = 0;
                while($row=$result->fetch_assoc()){ 
                    $no++;  
        ?> 
                <tr>
                    <form method="post" enctype="multipart/form-data">
                        <td><?php echo $no; ?></td>
                        <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                        <td><?php echo $row["student_name"]; ?></td>
                        <td><?php echo $row["student_phone"]; ?></td>
                    </form>
                </tr>
        <?php   
                }
                            
            }
        ?>
      </table>
    </center>
  </div>
</div>
<?php include "include/footer.php";?>