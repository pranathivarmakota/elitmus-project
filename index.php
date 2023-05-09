<!DOCTYPE html>
<html>
  <head>
    <title>LoginPage</title>
    <style>
      body {
        background-image: url("https://res.cloudinary.com/dmlxy9cf8/image/upload/v1683435955/im1_hqlhxo.jpg");
        background-size: cover;
        background-repeat: no-repeat;
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
      }
      .login-container {
        background-color: rgba(255, 255, 255, 0.9);
        border-radius: 5px;
        box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.5);
        margin: 50px auto;
        max-width: 400px;
        padding: 20px;
        text-align: center;
      }
      input[type="text"], input[type="password"] {
        border-radius: 5px;
        border: none;
        font-size: 16px;
        margin: 10px 0;
        padding: 10px;
        width: 100%;
      }
      input[type="submit"] {
        background-color: #4CAF50;
        border: none;
        border-radius: 5px;
        color: #fff;
        cursor: pointer;
        font-size: 16px;
        margin-top: 20px;
        padding: 10px;
        width: 100%;
      }
    </style>
  </head>
  <?php
  $con= mysqli_connect("localhost","prathyusha","prathyusha","database");
   $n1=$_GET['username'];
   $p1=$_GET['password'];
   $dt="insert into table2(username1,password1) values('$n1','$p1')";
   mysqli_query($con,$dt);
?>
  <body>
    <div class="login-container">
      <h1>Login</h1>
      <form action="index.php" method="GET" onsubmit="return redirectToPuzzle();">
  <label for="username">Username:</label>
  <input type="text" id="username" name="username" required>
  <label for="password">Password:</label>
  <input type="password" id="password" name="password" required>
      <input type="submit" value="Login">
</form>
<script>
function redirectToPuzzle() {
  window.location.href = "puzzle.html";
  return false; // prevent the form from submitting
}
</script>
    </div>


  </body>
  
</html>
