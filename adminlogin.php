<?php
  session_start();
  include('connection.php');
  error_reporting(0);

  if(isset($_SESSION['username'])){
    echo "<script>window.location.href='adminmainPage.php'</script>";
  }

  if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $pass = $_POST['password'];

    $sql = "SELECT * FROM admin where A_username='$username' AND A_password='$pass'";
    $result = mysqli_query($conn,$sql);
    if ($result->num_rows > 0){
      $row = mysqli_fetch_assoc($result);
      $_SESSION['username'] = $row['A_username'];
      $_SESSION['ID'] = $row['A_ID'];
      echo "<script>window.location.href='adminmainPage.php';</script>";
    } else {
      echo "<script>alert('Wrong username/password!');</script>";
      
    }
  }
  
?>
<!DOCTYPE html>

<html>

<head>
  <title>Admin Login</title>
  <link rel="stylesheet" href="css/styles.css">

</head>

<body>
  <div class="containerN">
    <div class="card">
      <div class="form">
        <div class="left-side">
          <img src="img/logo PISAH.png" alt="logoPISAH" class="centerPisah">
        </div>
        <div class="right-side">
          <div class="signin_form s_form ">
            <div class="login">
              <h2>Admin Login</h2>
            </div>
            <form action="" method="POST">
              <div class="input_text"> <input type="text" placeholder="Username" name="username"> <i class="fa fa-user"></i> </div>
              <div class="input_text"> <input class="signin_pass" type="password" name="password" placeholder="Password">
                <i class="fa fa-lock"></i> <i class="fa fa-eye-slash"></i>
              </div>
              <div class="login_btn"> <button class="login_button" name="submit">LOGIN</button> </div>
              <div class="forgot">
                <p>Forgot <a href="#">Username</a> <a href="#">Password</a> ?</p>
              </div>
              <div class="createAdminLogin "> <a href='adminsup.php' class="create_acc">Create your Account <i class="fa fa-long-arrow-right"></i></a> </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>

</html>