<?php include "include/header.php";?>
<div id="page-wrapper">
  <div class="main-page">
  <br>
  <h2 class="title1" align="center" style="color: red;">Login Credentials</h2>
  <br>
  
    <div class="row">
      <div class="col-md-6">
        <form method="post">
          <h3 align="center">Change Username</h3>
          <br>
          <div class="form-group">
            <label for="exampleFormControlInput1">Enter Current Username</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="currUsername" required>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">New Username</label>
            <input type="text" class="form-control" id="username" name="newUsername" required>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Re-enter Username</label>
            <input type="text" class="form-control" id="confirm_username" name="newUsername2" required>
            <span id='message'></span>
          </div>
          <button class="btn btn-success" type="submit" id="btnSubmit" name="updateUsername">Update Username</button>
        </form>
      </div>
      <div class="col-md-6">
        <form method="post">
          <h3 align="center">Change Password</h3>
          <br>
          <div class="form-group">
            <label for="exampleFormControlInput1">Enter Current Password</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="currPassword" required>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">New Password</label>
            <input type="text" class="form-control" name="newPassword"  id = "password" required>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Re-enter Password</label>
            <input type="text" class="form-control" name="newPassword2"  id = "confirm_password" required>
            <span id='message'></span>
          </div>
          <button class="btn btn-success" type="submit" id="btnSubmit1" name="updatePassword">Update Password</button>
        </form>
      </div>
    </div>
  </div>
</div>    
<?php include "include/footer.php";?>
<script> 
  $('#password, #confirm_password').on('keyup', function () {

    if ($('#password').val() == $('#confirm_password').val()) {
      
      $('#message').html('Matching').css('color', 'green');
      $("#btnSubmit1").attr("disabled", false);
    
    } 
    else {
      $("#btnSubmit1").attr("disabled", true);
      $('#message').html('Not Matching').css('color', 'red');
    }
  });
  
  $('#username, #confirm_username').on('keyup', function () {

    if ($('#username').val() == $('#confirm_username').val()) {

      $("#btnSubmit").attr("disabled", false);
      $('#message').html('Matching').css('color', 'green');
    
    } 
    else {
      $("#btnSubmit").attr("disabled", true);
      $('#message').html('Not Matching').css('color', 'red');
    }

  });
</script> 
<?php 
// Update Contact Details
include 'include/connection.php';
if (isset($_POST['updateUsername'])) {

  $currUsername = $_POST['currUsername'];
  $newUsername = $_POST['newUsername'];
  $newUsername2 = $_POST['newUsername2'];

  if($currUsername!="" && $newUsername!="" && $newUsername2!=""){

    if($newUsername == $newUsername2){

      $checkQuery = "SELECT email FROM admin WHERE email = '".$currUsername."' AND id = 2 ";

      if(mysqli_num_rows(mysqli_query($conn, $checkQuery))==1){

        $checkQuery = "UPDATE admin SET email = '".$newUsername."' WHERE id = 2 ";  

        if (mysqli_query($conn, $checkQuery)) {
          echo "<script>window.alert('Username Updated');window.location.href='update_login.php';</script>";
        }
        else{
          echo "<script>window.alert('Please Retry');window.location.href='update_login.php';</script>";
        }

      }
      else{
        echo "<script>window.alert('Enter Correct Current Username');window.location.href='update_login.php';</script>";
      }

    }
    else{
      echo "<script>window.alert('New username and re-enter username doesnot match');window.location.href='update_login.php';</script>";
    }

  }
  else{
        echo "<script>window.alert('Cannot be empty');window.location.href='update_login.php';</script>";
  }

}


if (isset($_POST['updatePassword'])) {

  $currPassword = md5($_POST['currPassword']);
  $newPassword = $_POST['newPassword'];
  $newPassword2 = $_POST['newPassword2'];

  if($currPassword!="" && $newPassword!="" && $newPassword2!=""){

    if($newPassword == $newPassword2){

      $checkQuery = "SELECT password FROM admin WHERE password = '".$currPassword."' AND id = 2 ";

      if(mysqli_num_rows(mysqli_query($conn, $checkQuery))==1){

        $newPassword = md5($newPassword);

        $checkQuery = "UPDATE admin SET password = '".$newPassword."' WHERE id = 2 ";  

        if (mysqli_query($conn, $checkQuery)) {
          echo "<script>window.alert('Password Updated');window.location.href='update_login.php';</script>";
        }
        else{
          echo "<script>window.alert('Please Retry');window.location.href='update_login.php';</script>";
        }

      }
      else{
        echo "<script>window.alert('Enter Correct Current Password');window.location.href='update_login.php';</script>";
      }

    }
    else{
      echo "<script>window.alert('New Password and re-enter Password doesnot match');window.location.href='update_login.php';</script>";
    }

  }
  else{
        echo "<script>window.alert('Cannot be empty');window.location.href='update_login.php';</script>";
  }

}
?>





