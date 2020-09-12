<?php
  include 'include/conn.php';
  session_start();
  $a=$_POST['fname'];
  $b=$_POST['lname'];
  $c=$_POST['email'];
  $d=$_POST['phone'];
  $e=$_POST['pass']; 
  $query="UPDATE signup SET first_name='$a', last_name='$b', email='$c' ,phone='$d', password='$e' WHERE id = '".$_SESSION['id']."'";
  $data= mysqli_query($con,$query);
  if($data)
  {
    echo "<script>
    alert('Profile Updated!');
    window.location.href = 'edit_profile.php';
    </script>";
  }
  else
  {
    echo "Not updated";
  }
?>