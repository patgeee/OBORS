<?php
include("db.php");
$error="";
if(isset($_SESSION['login_user'])){
header("location: home.php");
}

session_start();
if($_SERVER["REQUEST_METHOD"] == "POST")
{
$username=$_POST['username'];
$password=$_POST['password'];
$password=md5($password); // Encrypted Password
// Establishing Connection with Server by passing server_name, user_id and password as a parameter


$connection = mysqli_connect("localhost", "root", "");
// To protect MySQL injection for Security purpose
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);


$sql="SELECT id FROM login WHERE username='$username' and password='$password'";
$result=mysqli_query($db,$sql);
$count=mysqli_num_rows($result);


// If result matched $username and $password, table row must be 1 row
if($count==1)
{
$_SESSION['login_user']=$username; // Initializing Session
header("location: home.php");
}
else
{
  $error="Access Denied";
}

mysqli_close($connection); // Closing Connection
}
?>
<!DOCTYPE html>
<html>
  <head>
   <title>OBO Record System</title>
    <link href="assets/css/login.css" rel="stylesheet"></link>
    <link rel="icon" type="image/png" href="assets/img/logo.ico">
  </head>

  <body>
    <center>
        <img src="assets/img/logo.png" alt="logo" style="width:276px; top: 111px">
      </center>

    <div id="main" class="form">
      <div id="login">
        <form action="" method="post">
          <input id="name" name="username" placeholder="username" type="text" required oninvalid="this.setCustomValidity('Enter your username.')" oninput="setCustomValidity('')">
          
          <input id="password" name="password" placeholder="password" type="password" required oninvalid="this.setCustomValidity('Enter your password.')" oninput="setCustomValidity('')">
          <br>
          <div class="places-buttons">
              <div class="row">
                  <div class="col-md-2 col-md-offset-5">
                        <button type="submit" name="submit" value="Login" class="btn btn-info btn-block">LOGIN</button>
                  </div>
              </div>
          </div>
          <br>
          <?php echo $error; ?>
        </form>
      </div>
    </div>
  </body>
</html>