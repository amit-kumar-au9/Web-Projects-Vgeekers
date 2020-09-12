<!DOCTYPE html>
<html>
<head>
  <title>OrganiQa</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <br>
<h2 style="color: black">Welcome Admin!</h2>
<br>
<center>
  <img src="asset/images/logo.png" style="width: 200px;margin: 10px;">
</center>

<div class="cont" style="margin-top: 10px;">
  
  <div class="form">
    <form action="login.php" method="post">
      <h1>Login</h1>
      <input type="email" class="user" placeholder="email" name="email" required />
      <input type="password" class="pass" placeholder="Password" name="password" required />
      <button class="login" type="submit">Login</button>
    </form>
  </div>
  
</div>
</body>
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
  margin-bottom: 30px;
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