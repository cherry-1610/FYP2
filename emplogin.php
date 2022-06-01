<?php
  session_start();
  include('connection.php');
  error_reporting(0);

  

  if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $pass = $_POST['password'];

    $sql = "SELECT * FROM employee where E_ID='$username' AND E_pass='$pass'";
    $result = mysqli_query($conn,$sql);
    if ($result->num_rows > 0){
      $row = mysqli_fetch_assoc($result);
      $_SESSION['username'] = $row['E_name'];
      $_SESSION['ID'] = $row['E_ID'];
      echo "<script>window.location.href='empmainPage.php';</script>";
      echo "<script>alert('sucess!');</script>";
    } else {
      echo "<script>alert('Wrong username/password!');</script>";
      
    }
  }
  
?>
<!DOCTYPE html>

<html>

<head>

  <link rel="stylesheet" href="css/styles.css">
  <title>Employee Login</title>
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
              <h2>Employee Login</h2>
            </div>
            <form action="" method="POST">
              <div class="input_text"> <input type="text" placeholder="Employee ID" name="username"> <i class="fa fa-user"></i> </div>
              <div class="input_text"> <input class="signin_pass" type="password" name="password" placeholder="Password">
                <i class="fa fa-lock"></i> <i class="fa fa-eye-slash"></i>
              </div>
              <div class="login_btn"> <button class="login_button" name="submit">LOGIN</button> </div>
              <div class="forgot">
                <p style="color:black">Forgot Username and Password? Please contact your company.</p>
              
          </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>

</html>