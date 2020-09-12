<!DOCTYPE html>
<html>
<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>

</body>
</html>
<?php 
    session_start();
    include 'include/conn.php';
    $first_name=$_POST['name'];
    $last_name=$_POST['Lname'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    
    $sql_u = "SELECT * FROM signup WHERE email='$email'";
    $sql_e = "SELECT * FROM signup WHERE phone='$phone'";
    $res_u = mysqli_query($con, $sql_u);
    $res_e = mysqli_query($con, $sql_e);
    if (mysqli_num_rows($res_u) > 0) 
    {
    	echo "<script>
              swal('Sorry!', 'Email already exsit!Kidnly use a new email or login', 'error');
                setTimeout(function() {
                   window.location.href = 'form.php';;
                }, 2000);
            </script>";	
    }
    else if(mysqli_num_rows($res_e) > 0)
    {
     echo "<script>
          swal('Sorry!', 'Phone number already exist!', 'error');
            setTimeout(function() {
               window.location.href = 'form.php';;
            }, 2000);
        </script>"; 	
    }
    
    else
    {
        $sql="insert into signup(first_name,last_name,phone,email,password) values('$first_name','$last_name','$phone','$email','$password')"; 
        $result=$con->query($sql);
        $last_id = mysqli_insert_id($con);
        $_SESSION['id']=$last_id;
        echo mysqli_error($con);
        header('Location:index.php');
      
    }
      	

?>