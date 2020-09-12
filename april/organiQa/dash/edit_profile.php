<!DOCTYPE html>
<html>
<head>
  <title>OrganiQa</title>
  <?php include "include/header.php";?>
</head>
<body>
  <br><br><br>
  <?php
    $name=$_SESSION['Name'];
    $sql = "SELECT * from admin WHERE id='".$_SESSION['id']."'";
    $result = mysqli_query($con, $sql);
    $num = mysqli_num_rows($result);
    $results = mysqli_fetch_assoc($result);
    $uname = $results['first_name'];
    $email = $results['email'];
    $pass = $results['password'];
  ?>
<h2 style="color: black"> Welcome Admin!</h2>
<div class="cont" id="ok" style="height: 180px;padding: 20px;">
  
  <div class="form" style="display: inline-block;float: left">
      <input type="password" class="pass" placeholder="Enter old Password" name="password" id="password" required />
      <input type="checkbox" onclick="myFunction()">Show Password

      <button class="login" type="submit" style="margin: 1px;" onclick="check()">Check</button> 
  </div>
  
</div>

<div class="cont" id="pass" style="display: none">
  
  <div class="form">
    <form action="update_profile.php" method="post">
      <h1>Change Details</h1>
      <input type="email" class="user" placeholder="email" name="email" value="<?php echo $email?>" rquired>
      <input type="password" class="pass" placeholder="Password" name="pass" id="newpassword" value="<?php echo $pass?>" required>
       <input type="checkbox" onclick="myFunctions()">Show Password
      <button class="login" type="submit" >Update</button>
    </form>
  </div>
  
</div>
</body>
<script type="text/javascript">
  function check()
  {
    var pass=document.getElementById('password').value;
    if(pass=="<?php echo $pass ?>")
    {
      document.getElementById('pass').style.display='block';
      document.getElementById('ok').style.display='none';

    }
    else
    {
      alert('sorry check your password');
    }
  }
  function myFunction() {
    var x = document.getElementById("password");
    if (x.type === "password") {
      x.type = "text";
    } 
    else {
      x.type = "password";
    }
  }
  function myFunctions() {
    var x = document.getElementById("newpassword");
    if (x.type === "password") {
      x.type = "text";
    } 
    else {
      x.type = "password";
    }
  }
</script>
<style type="text/css">
  @import url('https://fonts.googleapis.com/css?family=Raleway:300,400,700');

*{
  margin: 0;
  padding: 0;
  outline: none;
  box-sizing: border-box;
  font-family: 'Raleway', sans-serif;
}

body{ color:black; }

.cont{
  position: relative;
  width: 25%;
  height: 400px;
  padding: 10px 25px;
  margin: 10vh auto;
  background: yellowgreen;
  border-radius: 8px;
}

.form{ width: 100%; height: 100%; }

h1, h2, .user, .pass{ 
  text-align: center;
  display: block;
  color: black
}

h1{ 
  color: black;
  font-weight: bold;
  font-size: 40px;
  margin: 30px auto;
}

.user, .pass, .login{
  width: 100%;
  height: 45px;
  border: none;
  border-radius: 5px;
  font-size: 20px;
  font-weight: lighter;
  margin-bottom: 10px;
}

.user, .pass{ background: #ecf0f1; }

.login{
  color: #fff;
  cursor: pointer;
  margin-top: 20px;
  background: #3598dc;
  transition: background 0.4s ease;
}

.login:hover{ background: #3570dc; }

@media only screen and (min-width : 280px) {
  .cont{ width: 90% }
}

@media only screen and (min-width : 480px) {
  .cont{ width: 60% }
}

@media only screen and (min-width : 768px) {
  .cont{ width: 40% }
}

@media only screen and (min-width : 992px) {
  .cont{ width: 30% }
}

h2{ color: #fff; margin-top: 25px; }

</style>
</html>