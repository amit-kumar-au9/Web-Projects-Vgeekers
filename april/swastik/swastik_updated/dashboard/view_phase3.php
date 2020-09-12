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
            <th scope="col">Student Email</th>
            <th scope="col">Student Phone</th>
            <th scope="col">Student DOB</th>
            <th scope="col">Student Gender</th>
            <th scope="col">Student Class</th>
            <th scope="col">Address 1</th>
            <th scope="col">Address 2</th>
            <th scope="col">Country</th>
            <th scope="col">State</th>
            <th scope="col">District</th>
            <th scope="col">City</th>
            <th scope="col">Pincode</th>
            <th scope="col">Test Date</th>
            <th scope="col">Test Type</th>
            <th scope="col">School Name</th>
            <th scope="col">School Address</th>
            <th scope="col">Father Phone No.</th>
            <th scope="col">Mother Phone No.</th>
            <th scope="col">Father Email</th>
            <th scope="col">Where did You...</th>

          </tr>
        <?php
            include 'include/connection.php';
            $sql="SELECT * FROM student_reg WHERE phase_flag = 3";
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
                        <td><?php echo $row["student_email"]; ?></td>
                        <td><?php echo $row["student_phone"]; ?></td>
                        <td><?php echo $row["student_dob"]; ?></td>
                        <td><?php echo $row["student_gender"]; ?></td>
                        <td><?php echo $row["student_class"]; ?></td>
                        <td><?php echo $row["address1"]; ?></td>
                        <td><?php echo $row["address2"]; ?></td>
                        <td><?php echo $row["country"]; ?></td>
                        <td><?php echo $row["state"]; ?></td>
                        <td><?php echo $row["district"]; ?></td>
                        <td><?php echo $row["city"]; ?></td>
                        <td><?php echo $row["pincode"]; ?></td>
                        <td><?php echo $row["test_date"]; ?></td>
                        <td><?php echo $row["test_type"]; ?></td>
                        <td><?php echo $row["school_name"]; ?></td>
                        <td><?php echo $row["school_address"]; ?></td>
                        <td><?php echo $row["father_phone_no"]; ?></td>
                        <td><?php echo $row["mother_phone_no"]; ?></td>
                        <td><?php echo $row["father_email"]; ?></td>
                        <td><?php echo $row["where_did_you"]; ?></td>

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