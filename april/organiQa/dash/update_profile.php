<?php
  include 'conn.php';
  session_start();
  $name=$_SESSION['Name'];
  $email=$_POST['email'];
  $password=$_POST['pass'];
  $query="UPDATE signup SET email='$email', password='$password' WHERE first_name='$name'";
  $data= mysqli_query($con,$query);
  if($data)
  {
    echo "<script>
    alert('Updated!');
    window.location.href = 'index.php';
    </script>";
  }
  else
  {
    echo "Not updated";
  }
?>